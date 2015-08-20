<?php

namespace JMBTechnologyLimited\GeoLibDoesMaths\LatLngConvert;

/**
 *
 * @link https://github.com/JMB-Technology-Limited/GeoLibDoesMaths
 * @license https://raw.github.com/JMB-Technology-Limited/GeoLibDoesMaths/master/LICENSE.md 3-clause BSD
 * @copyright (c) 2015, JMB Technology Limited, http://jmbtechnology.co.uk/
 **/

class DatumWGS84 extends Datum {


	function __construct()
	{
		$this->ellipsoid = new Ellipsoid(6378137,6356752.31425, 1/298.257223563);
		$this->transform = new Transform( 0,0,0,0,0,0,0);
	}

}
