<?php
/**
 * Created by PhpStorm.
 * User: AbdullahFaqeir
 * Date: 3/13/18
 * Time: 6:55 PM
 */

class HotelPricingInfo {

	/**
	 * @var double
	 */
	private $averagePriceValue;

	/**
	 * @var double
	 */
	private $totalPriceValue;

	/**
	 * @var double
	 */
	private $crossOutPriceValue;

	/**
	 * @var double
	 */
	private $originalPricePerNight;

	/**
	 * @var string
	 */
	private $currency;

	/**
	 * @var double
	 */
	private $percentSavings;

	/**
	 * @var boolean
	 */
	private $drr;

	/**
	 * HotelPricingInfo constructor.
	 *
	 */
	public function __construct( $dataArr ) {
		foreach ( $dataArr as $key => $value ) {
			$this->{$key} = $value;
		}
	}


	/**
	 * @return float
	 */
	public function getAveragePriceValue() {
		return $this->averagePriceValue;
	}

	/**
	 * @param float $averagePriceValue
	 */
	public function setAveragePriceValue( $averagePriceValue ) {
		$this->averagePriceValue = $averagePriceValue;
	}

	/**
	 * @return float
	 */
	public function getTotalPriceValue() {
		return $this->totalPriceValue;
	}

	/**
	 * @param float $totalPriceValue
	 */
	public function setTotalPriceValue( $totalPriceValue ) {
		$this->totalPriceValue = $totalPriceValue;
	}

	/**
	 * @return float
	 */
	public function getCrossOutPriceValue() {
		return $this->crossOutPriceValue;
	}

	/**
	 * @param float $crossOutPriceValue
	 */
	public function setCrossOutPriceValue( $crossOutPriceValue ) {
		$this->crossOutPriceValue = $crossOutPriceValue;
	}

	/**
	 * @return float
	 */
	public function getOriginalPricePerNight() {
		return $this->originalPricePerNight;
	}

	/**
	 * @param float $originalPricePerNight
	 */
	public function setOriginalPricePerNight( $originalPricePerNight ) {
		$this->originalPricePerNight = $originalPricePerNight;
	}

	/**
	 * @return string
	 */
	public function getCurrency() {
		return $this->currency;
	}

	/**
	 * @param string $currency
	 */
	public function setCurrency( $currency ) {
		$this->currency = $currency;
	}

	/**
	 * @return float
	 */
	public function getPercentSavings() {
		return $this->percentSavings;
	}

	/**
	 * @param float $percentSavings
	 */
	public function setPercentSavings( $percentSavings ) {
		$this->percentSavings = $percentSavings;
	}

	/**
	 * @return bool
	 */
	public function isDrr() {
		return $this->drr;
	}

	/**
	 * @param bool $drr
	 */
	public function setDrr( $drr ) {
		$this->drr = $drr;
	}


}