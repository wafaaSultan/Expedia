<?php
/**
 * Created by PhpStorm.
 * User: AbdullahFaqeir
 * Date: 3/13/18
 * Time: 7:05 PM
 */

require_once 'Classes/Curl.php';
require_once 'Models/Hotel.php';
require_once 'Models/OfferDateRange.php';
require_once 'Models/Destination.php';
require_once 'Models/HotelInfo.php';
require_once 'Models/HotelPricingInfo.php';
require_once 'Models/HotelUrls.php';


define( 'API_URL', 'https://offersvc.expedia.com/offers/v2/getOffers' );


/**
 * @return arrays
 */
function loadHotels( $query ) {

	/**
	 * Fetch hotels from API's
	 */
	$response = fetchFromAPI( $query );

	$Hotels = parseResponse( $response );

	return $Hotels;
}


/**
 * @param $response
 *
 * @return arrays
 */
function parseResponse( $response ) {
	if ( $response = @json_decode( $response, true ) ) {
		if ( isset( $response['offers'] ) && isset( $response['offers']['Hotel'] ) ) {
			$HotelsRes = $response['offers']['Hotel'];
			$Hotels    = [];
			foreach ( $HotelsRes as $hotel ) {
				$Hotel = new Hotel();
				$Hotel->setOfferDateRange( new OfferDateRange( $hotel['offerDateRange'] ) );
				$Hotel->setDestination( new Destination( $hotel['destination'] ) );
				$Hotel->setHotelInfo( new HotelInfo( $hotel['hotelInfo'] ) );
				$Hotel->setHotelPricingInfo( new HotelPricingInfo( $hotel['hotelPricingInfo'] ) );
				$Hotel->setHotelUrls( new HotelUrls( $hotel['hotelUrls'] ) );
				$Hotels[] = $Hotel;
			}

			return $Hotels;
		} else {
			return [];
		}
	} else {
		return [];
	}
}

/**
 * @param array $query
 *
 * @return string
 */
function fetchFromAPI( $query = [] ) {

	if ( empty( $query ) ) {
		//scenario=deal-finder&page=foo&uid=foo&productType=Hotel
		$query = [
			'scenario'    => 'deal-finder',
			'page'        => 'foo',
			'uid'         => 'foo',
			'productType' => 'Hotel'
		];
	}

	$queryStr = http_build_query( $query );

	$curl = new Curl( API_URL . '?' . $queryStr );

	return $curl->getResponse();
}

