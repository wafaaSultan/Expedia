<?php
/**
 * Created by PhpStorm.
 * User: AbdullahFaqeir
 * Date: 3/13/18
 * Time: 6:54 PM
 */

class OfferDateRange {

	/**
	 * @var TravelDate
	 */
	private $travelStartDate;

	/**
	 * @var TravelDate
	 */
	private $travelEndDate;

	/**
	 * @var int
	 */
	private $lengthOfStay;


	/**
	 * OfferDateRange constructor.
	 *
	 * @param $dataArr array
	 */
	public function __construct( $dataArr ) {
		$this->setLengthOfStay( $dataArr['lengthOfStay'] );
		$this->setTravelStartDate( new TravelDate( $dataArr['travelStartDate'] ) );
		$this->setTravelEndDate( new TravelDate( $dataArr['travelEndDate'] ) );
	}


	/**
	 * @return TravelDate
	 */
	public function getTravelStartDate() {
		return $this->travelStartDate;
	}

	/**
	 * @param TravelDate $travelStartDate
	 */
	public function setTravelStartDate( $travelStartDate ) {
		$this->travelStartDate = $travelStartDate;
	}

	/**
	 * @return TravelDate
	 */
	public function getTravelEndDate() {
		return $this->travelEndDate;
	}

	/**
	 * @param TravelDate $travelEndDate
	 */
	public function setTravelEndDate( $travelEndDate ) {
		$this->travelEndDate = $travelEndDate;
	}

	/**
	 * @return int
	 */
	public function getLengthOfStay() {
		return $this->lengthOfStay;
	}

	/**
	 * @param int $lengthOfStay
	 */
	public function setLengthOfStay( $lengthOfStay ) {
		$this->lengthOfStay = $lengthOfStay;
	}


}

class TravelDate {

	private $year;

	private $month;

	private $day;

	/**
	 * TravelDate constructor.
	 *
	 */
	public function __construct( $date ) {
		$this->setYear( $date[0] );
		$this->setMonth( $date[1] );
		$this->setDay( $date[2] );
	}


	/**
	 * @return mixed
	 */
	public function getYear() {
		return $this->year;
	}

	/**
	 * @param mixed $year
	 */
	public function setYear( $year ) {
		$this->year = $year;
	}

	/**
	 * @return mixed
	 */
	public function getMonth() {
		return $this->month;
	}

	/**
	 * @param mixed $month
	 */
	public function setMonth( $month ) {
		$this->month = $month;
	}

	/**
	 * @return mixed
	 */
	public function getDay() {
		return $this->day;
	}

	/**
	 * @param mixed $day
	 */
	public function setDay( $day ) {
		$this->day = $day;
	}


}