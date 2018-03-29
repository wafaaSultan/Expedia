<?php
/**
 * Created by PhpStorm.
 * User: AbdullahFaqeir
 * Date: 3/13/18
 * Time: 6:52 PM
 */


class Hotel {


	/**
	 * @var OfferDateRange
	 */
	private $offerDateRange;

	/**
	 * @var Destination
	 */
	private $destination;

	/**
	 * @var HotelInfo
	 */
	private $hotelInfo;

	/**
	 * @var HotelPricingInfo
	 */
	private $hotelPricingInfo;

	/**
	 * @var
	 */
	private $hotelUrls;

	/**
	 * @return OfferDateRange
	 */
	public function getOfferDateRange() {
		return $this->offerDateRange;
	}

	/**
	 * @param OfferDateRange $offerDateRange
	 */
	public function setOfferDateRange( $offerDateRange ) {
		$this->offerDateRange = $offerDateRange;
	}

	/**
	 * @return Destination
	 */
	public function getDestination() {
		return $this->destination;
	}

	/**
	 * @param Destination $destination
	 */
	public function setDestination( $destination ) {
		$this->destination = $destination;
	}

	/**
	 * @return HotelInfo
	 */
	public function getHotelInfo() {
		return $this->hotelInfo;
	}

	/**
	 * @param HotelInfo $hotelInfo
	 */
	public function setHotelInfo( $hotelInfo ) {
		$this->hotelInfo = $hotelInfo;
	}

	/**
	 * @return HotelPricingInfo
	 */
	public function getHotelPricingInfo() {
		return $this->hotelPricingInfo;
	}

	/**
	 * @param HotelPricingInfo $hotelPricingInfo
	 */
	public function setHotelPricingInfo( $hotelPricingInfo ) {
		$this->hotelPricingInfo = $hotelPricingInfo;
	}

	/**
	 * @return mixed
	 */
	public function getHotelUrls() {
		return $this->hotelUrls;
	}

	/**
	 * @param mixed $hotelUrls
	 */
	public function setHotelUrls( $hotelUrls ) {
		$this->hotelUrls = $hotelUrls;
	}


}