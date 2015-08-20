<?php


namespace JMBTechnologyLimited\GeoLibDoesMaths\LatLngConvert;

/**
 *
 * @link https://github.com/JMB-Technology-Limited/GeoLibDoesMaths
 * @license https://raw.github.com/JMB-Technology-Limited/GeoLibDoesMaths/master/LICENSE.md 3-clause BSD
 * @copyright (c) 2015, JMB Technology Limited, http://jmbtechnology.co.uk/
 **/


class Ellipsoid {


	protected $a;
	protected $b;
	protected $c;

	function __construct($a, $b, $c)
	{
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}

	/**
	 * @return mixed
	 */
	public function getA()
	{
		return $this->a;
	}

	/**
	 * @return mixed
	 */
	public function getB()
	{
		return $this->b;
	}

	/**
	 * @return mixed
	 */
	public function getC()
	{
		return $this->c;
	}



}