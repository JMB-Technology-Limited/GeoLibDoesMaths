<?php


namespace JMBTechnologyLimited\GeoLibDoesMaths\LatLngConvert;

use JMBTechnologyLimited\GeoLibDoesMaths\Misc;

/**
 *
 * @link https://github.com/JMB-Technology-Limited/GeoLibDoesMaths
 * @license https://raw.github.com/JMB-Technology-Limited/GeoLibDoesMaths/master/LICENSE.md 3-clause BSD
 * @copyright (c) 2015, JMB Technology Limited, http://jmbtechnology.co.uk/
 **/

class LatLng {

	protected $lat;
	protected $lng;

	/** @var  Datum */
	protected $datum;

	function __construct($lat, $lng, $datum)
	{
		$this->datum = $datum;
		$this->lat = $lat;
		$this->lng = $lng;
	}

	/**
	 * @return Datum
	 */
	public function getDatum()
	{
		return $this->datum;
	}

	/**
	 * @return mixed
	 */
	public function getLat()
	{
		return $this->lat;
	}

	/**
	 * @return mixed
	 */
	public function getLng()
	{
		return $this->lng;
	}

	public function convert(Datum $toDatum) {


		/** @var Transform $transform */
		$transform = null;

		if (is_a($toDatum, 'JMBTechnologyLimited\GeoLibDoesMaths\LatLngConvert\DatumOSGB36')) {
			$transform = $toDatum->getTransform();
		}
		if (is_a($toDatum, 'JMBTechnologyLimited\GeoLibDoesMaths\LatLngConvert\DatumWGS84')) {
			$transform = clone $this->datum->getTransform();
			$transform->reverse();
		}

		$cartesian = $this->toCartesian();
		$cartesian = $cartesian->applyTransform($transform);
		return $cartesian->toLatLng($toDatum);

	}


	/** @return Vector */
	public function toCartesian() {

		$Glat = Misc::toRadians($this->lat);
		$Glng = Misc::toRadians($this->lng);

		$h = 0; // height above ellipsoid - not currently used
		$a = $this->datum->getEllipsoid()->getA();
		$b = $this->datum->getEllipsoid()->getB();

		$sinGlat = sin($Glat);
		$cosGlat = cos($Glat);

		$sinGlng = sin($Glng);
		$cosGlng = cos($Glng);

		$eSq = ($a*$a - $b*$b) / ($a*$a);
		$v = $a / sqrt(1 - $eSq * $sinGlat * $sinGlat);

		$x = ($v + $h) * $cosGlat * $cosGlng;
		$y = ($v + $h) * $cosGlat * $sinGlng;
		$z = ((1-$eSq)*$v + $h) * $sinGlat;

		return new Vector($x, $y, $z);
	}



}

