<?php
/**
 * Created by PhpStorm.
 * User: AbdullahFaqeir
 * Date: 3/13/18
 * Time: 6:55 PM
 */

class HotelUrls {

	/**
	 * @var string
	 */
	private $hotelInfositeUrl;

	/**
	 * @var string
	 */
	private $hotelSearchResultUrl;

	/**
	 * HotelUrls constructor.
	 *
	 * @param $dataArr
	 */
	public function __construct( $dataArr ) {
		foreach ( $dataArr as $key => $value ) {
			$this->{$key} = $value;
		}
	}

	/**
	 * @return string
	 */
	public function getHotelInfositeUrl() {
		return $this->hotelInfositeUrl;
	}

	/**
	 * @param string $hotelInfositeUrl
	 */
	public function setHotelInfositeUrl( $hotelInfositeUrl ) {
		$this->hotelInfositeUrl = $hotelInfositeUrl;
	}

	/**
	 * @return string
	 */
	public function getHotelSearchResultUrl() {
		return $this->hotelSearchResultUrl;
	}

	/**
	 * @param string $hotelSearchResultUrl
	 */
	public function setHotelSearchResultUrl( $hotelSearchResultUrl ) {
		$this->hotelSearchResultUrl = $hotelSearchResultUrl;
	}


}