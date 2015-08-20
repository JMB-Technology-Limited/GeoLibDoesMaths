<?php

namespace JMBTechnologyLimited\GeoLibDoesMaths\LatLngConvert;

/**
 *
 * @link https://github.com/JMB-Technology-Limited/GeoLibDoesMaths
 * @license https://raw.github.com/JMB-Technology-Limited/GeoLibDoesMaths/master/LICENSE.md 3-clause BSD
 * @copyright (c) 2015, JMB Technology Limited, http://jmbtechnology.co.uk/
 **/

class OSGB36ToWGS84Test extends \PHPUnit_Framework_TestCase {


	function dataForTest() {
		return array(
			array(55.954456721624, -3.1525104945604, 55.954400681908, -3.1539398015035967),
		);
	}


	/**
	 * @dataProvider dataForTest
	 */
	function test1($inLat, $inLng, $outLat, $outLng) {

		$in = new LatLng($inLat, $inLng, new DatumOSGB36());

		$out = $in->convert(new DatumWGS84());

		$this->assertEquals(round($outLat,5), round($out->getLat(),5));
		$this->assertEquals(round($outLng,5), round($out->getLng(),5));
		$this->assertTrue(is_a($out->getDatum(), 'JMBTechnologyLimited\GeoLibDoesMaths\LatLngConvert\DatumWGS84'));

	}

}