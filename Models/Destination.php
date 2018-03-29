<?php
/**
 * Created by PhpStorm.
 * User: AbdullahFaqeir
 * Date: 3/13/18
 * Time: 6:54 PM
 */

class Destination {

	/**
	 * @var string
	 */
	private $regionID;

	/**
	 * @var string
	 */
	private $associatedMultiCityRegionId;

	/**
	 * @var string
	 */
	private $longName;

	/**
	 * @var string
	 */
	private $shortName;

	/**
	 * @var string
	 */
	private $country;

	/**
	 * @var string
	 */
	private $province;

	/**
	 * @var string
	 */
	private $city;

	/**
	 * @var string
	 */
	private $tla;

	/**
	 * @var string
	 */
	private $nonLocalizedCity;

	/**
	 * Destination constructor.
	 *
	 */
	public function __construct( $dataArry ) {
		foreach ( $dataArry as $key => $value ) {
			$this->{$key} = $value;
		}
	}


	/**
	 * @return string
	 */
	public function getRegionID() {
		return $this->regionID;
	}

	/**
	 * @param string $regionID
	 */
	public function setRegionID( $regionID ) {
		$this->regionID = $regionID;
	}

	/**
	 * @return string
	 */
	public function getAssociatedMultiCityRegionId() {
		return $this->associatedMultiCityRegionId;
	}

	/**
	 * @param string $associatedMultiCityRegionId
	 */
	public function setAssociatedMultiCityRegionId( $associatedMultiCityRegionId ) {
		$this->associatedMultiCityRegionId = $associatedMultiCityRegionId;
	}

	/**
	 * @return string
	 */
	public function getLongName() {
		return $this->longName;
	}

	/**
	 * @param string $longName
	 */
	public function setLongName( $longName ) {
		$this->longName = $longName;
	}

	/**
	 * @return string
	 */
	public function getShortName() {
		return $this->shortName;
	}

	/**
	 * @param string $shortName
	 */
	public function setShortName( $shortName ) {
		$this->shortName = $shortName;
	}

	/**
	 * @return string
	 */
	public function getCountry() {
		return $this->country;
	}

	/**
	 * @param string $country
	 */
	public function setCountry( $country ) {
		$this->country = $country;
	}

	/**
	 * @return string
	 */
	public function getProvince() {
		return $this->province;
	}

	/**
	 * @param string $province
	 */
	public function setProvince( $province ) {
		$this->province = $province;
	}

	/**
	 * @return string
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * @param string $city
	 */
	public function setCity( $city ) {
		$this->city = $city;
	}

	/**
	 * @return string
	 */
	public function getTla() {
		return $this->tla;
	}

	/**
	 * @param string $tla
	 */
	public function setTla( $tla ) {
		$this->tla = $tla;
	}

	/**
	 * @return string
	 */
	public function getNonLocalizedCity() {
		return $this->nonLocalizedCity;
	}

	/**
	 * @param string $nonLocalizedCity
	 */
	public function setNonLocalizedCity( $nonLocalizedCity ) {
		$this->nonLocalizedCity = $nonLocalizedCity;
	}


}