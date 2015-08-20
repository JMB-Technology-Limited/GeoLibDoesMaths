<?php


namespace JMBTechnologyLimited\GeoLibDoesMaths\LatLngConvert;


/**
 *
 * @link https://github.com/JMB-Technology-Limited/GeoLibDoesMaths
 * @license https://raw.github.com/JMB-Technology-Limited/GeoLibDoesMaths/master/LICENSE.md 3-clause BSD
 * @copyright (c) 2015, JMB Technology Limited, http://jmbtechnology.co.uk/
 **/

class Transform {


	// m
	protected $tx;
	protected $ty;
	protected $tz;

	//s
	protected $rx;
	protected $ry;
	protected $rz;

	// ppm
	protected $s;

	function __construct($tx, $ty, $tz, $rx, $ry, $rz, $s)
	{
		$this->rx = $rx;
		$this->ry = $ry;
		$this->rz = $rz;
		$this->s = $s;
		$this->tx = $tx;
		$this->ty = $ty;
		$this->tz = $tz;
	}

	/**
	 * @return mixed
	 */
	public function getRx()
	{
		return $this->rx;
	}

	/**
	 * @return mixed
	 */
	public function getRy()
	{
		return $this->ry;
	}

	/**
	 * @return mixed
	 */
	public function getRz()
	{
		return $this->rz;
	}

	/**
	 * @return mixed
	 */
	public function getS()
	{
		return $this->s;
	}

	/**
	 * @return mixed
	 */
	public function getTx()
	{
		return $this->tx;
	}

	/**
	 * @return mixed
	 */
	public function getTy()
	{
		return $this->ty;
	}

	/**
	 * @return mixed
	 */
	public function getTz()
	{
		return $this->tz;
	}

	public function reverse() {
		$this->rx = -1 * $this->rx;
		$this->ry = -1 * $this->ry;
		$this->rz = -1 * $this->rz;
		$this->s = -1 * $this->s;
		$this->tx = -1 * $this->tx;
		$this->ty = -1 * $this->ty;
		$this->tz = -1 * $this->tz;
	}

}