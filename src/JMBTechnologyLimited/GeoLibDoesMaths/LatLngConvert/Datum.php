<?php

namespace JMBTechnologyLimited\GeoLibDoesMaths\LatLngConvert;

/**
 *
 * @link https://github.com/JMB-Technology-Limited/GeoLibDoesMaths
 * @license https://raw.github.com/JMB-Technology-Limited/GeoLibDoesMaths/master/LICENSE.md 3-clause BSD
 * @copyright (c) 2015, JMB Technology Limited, http://jmbtechnology.co.uk/
 **/

abstract class Datum {

	/** @var  Ellipsoid */
	protected $ellipsoid;

	/** @var Transform */
	protected $transform;


	/**
	 * @return Ellipsoid
	 */
	public function getEllipsoid()
	{
		return $this->ellipsoid;
	}

	/**
	 * @return Transform
	 */
	public function getTransform()
	{
		return $this->transform;
	}



}
