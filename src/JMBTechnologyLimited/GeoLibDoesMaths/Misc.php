<?php


namespace JMBTechnologyLimited\GeoLibDoesMaths;

/**
 *
 * @link https://github.com/JMB-Technology-Limited/GeoLibDoesMaths
 * @license https://raw.github.com/JMB-Technology-Limited/GeoLibDoesMaths/master/LICENSE.md 3-clause BSD
 * @copyright (c) 2015, JMB Technology Limited, http://jmbtechnology.co.uk/
 **/

class Misc
{

	public static function toRadians($in) {
		return $in * pi() / 180;
	}

	public static function toDegrees($in) {
		return $in * 180 / pi();
	}

}

