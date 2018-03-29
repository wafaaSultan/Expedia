<?php
/**
 * Created by PhpStorm.
 * User: AbdullahFaqeir
 * Date: 3/13/18
 * Time: 6:55 PM
 */

class HotelInfo {

	/**
	 * @var string
	 */
	private $hotelId;

	/**
	 * @var string
	 */
	private $hotelName;

	/**
	 * @var string
	 */
	private $localizedHotelName;

	/**
	 * @var string
	 */
	private $hotelDestination;

	/**
	 * @var string
	 */
	private $hotelDestinationRegionID;

	/**
	 * @var string
	 */
	private $hotelLongDestination;

	/**
	 * @var string
	 */
	private $hotelStreetAddress;

	/**
	 * @var string
	 */
	private $hotelCity;

	/**
	 * @var string
	 */
	private $hotelProvince;

	/**
	 * @var string
	 */
	private $hotelCountryCode;

	/**
	 * @var double
	 */
	private $hotelLatitude;

	/**
	 * @var double
	 */
	private $hotelLongitude;

	/**
	 * @var string
	 */
	private $hotelStarRating;

	/**
	 * @var double
	 */
	private $hotelGuestReviewRating;

	/**
	 * @var int
	 */
	private $hotelReviewTotal;

	/**
	 * @var string
	 */
	private $hotelImageUrl;

	/**
	 * @var boolean
	 */
	private $vipAccess;

	/**
	 * @var boolean
	 */
	private $isOfficialRating;

	/**
	 * HotelInfo constructor.
	 */
	public function __construct( $dataArr ) {
		foreach ( $dataArr as $key => $value ) {
			$this->{$key} = $value;
		}
	}


	/**
	 * @return string
	 */
	public function getHotelId() {
		return $this->hotelId;
	}

	/**
	 * @param string $hotelId
	 */
	public function setHotelId( $hotelId ) {
		$this->hotelId = $hotelId;
	}

	/**
	 * @return string
	 */
	public function getHotelName() {
		return $this->hotelName;
	}

	/**
	 * @param string $hotelName
	 */
	public function setHotelName( $hotelName ) {
		$this->hotelName = $hotelName;
	}

	/**
	 * @return string
	 */
	public function getLocalizedHotelName() {
		return $this->localizedHotelName;
	}

	/**
	 * @param string $localizedHotelName
	 */
	public function setLocalizedHotelName( $localizedHotelName ) {
		$this->localizedHotelName = $localizedHotelName;
	}

	/**
	 * @return string
	 */
	public function getHotelDestination() {
		return $this->hotelDestination;
	}

	/**
	 * @param string $hotelDestination
	 */
	public function setHotelDestination( $hotelDestination ) {
		$this->hotelDestination = $hotelDestination;
	}

	/**
	 * @return string
	 */
	public function getHotelDestinationRegionID() {
		return $this->hotelDestinationRegionID;
	}

	/**
	 * @param string $hotelDestinationRegionID
	 */
	public function setHotelDestinationRegionID( $hotelDestinationRegionID ) {
		$this->hotelDestinationRegionID = $hotelDestinationRegionID;
	}

	/**
	 * @return string
	 */
	public function getHotelLongDestination() {
		return $this->hotelLongDestination;
	}

	/**
	 * @param string $hotelLongDestination
	 */
	public function setHotelLongDestination( $hotelLongDestination ) {
		$this->hotelLongDestination = $hotelLongDestination;
	}

	/**
	 * @return string
	 */
	public function getHotelStreetAddress() {
		return $this->hotelStreetAddress;
	}

	/**
	 * @param string $hotelStreetAddress
	 */
	public function setHotelStreetAddress( $hotelStreetAddress ) {
		$this->hotelStreetAddress = $hotelStreetAddress;
	}

	/**
	 * @return string
	 */
	public function getHotelCity() {
		return $this->hotelCity;
	}

	/**
	 * @param string $hotelCity
	 */
	public function setHotelCity( $hotelCity ) {
		$this->hotelCity = $hotelCity;
	}

	/**
	 * @return string
	 */
	public function getHotelProvince() {
		return $this->hotelProvince;
	}

	/**
	 * @param string $hotelProvince
	 */
	public function setHotelProvince( $hotelProvince ) {
		$this->hotelProvince = $hotelProvince;
	}

	/**
	 * @return string
	 */
	public function getHotelCountryCode() {
		return $this->hotelCountryCode;
	}

	/**
	 * @param string $hotelCountryCode
	 */
	public function setHotelCountryCode( $hotelCountryCode ) {
		$this->hotelCountryCode = $hotelCountryCode;
	}

	/**
	 * @return float
	 */
	public function getHotelLatitude() {
		return $this->hotelLatitude;
	}

	/**
	 * @param float $hotelLatitude
	 */
	public function setHotelLatitude( $hotelLatitude ) {
		$this->hotelLatitude = $hotelLatitude;
	}

	/**
	 * @return float
	 */
	public function getHotelLongitude() {
		return $this->hotelLongitude;
	}

	/**
	 * @param float $hotelLongitude
	 */
	public function setHotelLongitude( $hotelLongitude ) {
		$this->hotelLongitude = $hotelLongitude;
	}

	/**
	 * @return string
	 */
	public function getHotelStarRating() {
		return $this->hotelStarRating;
	}

	/**
	 * @param string $hotelStarRating
	 */
	public function setHotelStarRating( $hotelStarRating ) {
		$this->hotelStarRating = $hotelStarRating;
	}

	/**
	 * @return float
	 */
	public function getHotelGuestReviewRating() {
		return $this->hotelGuestReviewRating;
	}

	/**
	 * @param float $hotelGuestReviewRating
	 */
	public function setHotelGuestReviewRating( $hotelGuestReviewRating ) {
		$this->hotelGuestReviewRating = $hotelGuestReviewRating;
	}

	/**
	 * @return int
	 */
	public function getHotelReviewTotal() {
		return $this->hotelReviewTotal;
	}

	/**
	 * @param int $hotelReviewTotal
	 */
	public function setHotelReviewTotal( $hotelReviewTotal ) {
		$this->hotelReviewTotal = $hotelReviewTotal;
	}

	/**
	 * @return string
	 */
	public function getHotelImageUrl() {
		return $this->hotelImageUrl;
	}

	/**
	 * @param string $hotelImageUrl
	 */
	public function setHotelImageUrl( $hotelImageUrl ) {
		$this->hotelImageUrl = $hotelImageUrl;
	}

	/**
	 * @return bool
	 */
	public function isVipAccess() {
		return $this->vipAccess;
	}

	/**
	 * @param bool $vipAccess
	 */
	public function setVipAccess( $vipAccess ) {
		$this->vipAccess = $vipAccess;
	}

	/**
	 * @return bool
	 */
	public function isOfficialRating() {
		return $this->isOfficialRating;
	}

	/**
	 * @param bool $isOfficialRating
	 */
	public function setIsOfficialRating( $isOfficialRating ) {
		$this->isOfficialRating = $isOfficialRating;
	}


}