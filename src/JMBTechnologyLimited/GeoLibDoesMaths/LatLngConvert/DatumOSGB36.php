<?php

namespace JMBTechnologyLimited\GeoLibDoesMaths\LatLngConvert;

/**
 *
 * @link https://github.com/JMB-Technology-Limited/GeoLibDoesMaths
 * @license https://raw.github.com/JMB-Technology-Limited/GeoLibDoesMaths/master/LICENSE.md 3-clause BSD
 * @copyright (c) 2015, JMB Technology Limited, http://jmbtechnology.co.uk/
 **/

class DatumOSGB36 extends Datum {


	function __construct()
	{
		$this->ellipsoid = new Ellipsoid(6377563.396, 6356256.909, 1/299.3249646);
		$this->transform = new Transform(  -446.448,    125.157,    -542.060,  // m
                        -0.1502,    -0.2470,     -0.8421, // sec
                         20.4894);
	}


}
