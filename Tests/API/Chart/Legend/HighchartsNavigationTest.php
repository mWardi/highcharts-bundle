<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Legend;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\Legend\HighchartsNavigation;

/**
 * Highcharts navigation test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Legend
 * @version 5.0.14
 */
final class HighchartsNavigationTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsNavigation(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsNavigation(false);

		$res = ["activeColor" => "#003399", "animation" => true, "arrowSize" => 12, "enabled" => true, "inactiveColor" => "#cccccc"];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

		$res1 = ["activeColor" => "#003399", "animation" => true, "arrowSize" => 12, "enabled" => true, "inactiveColor" => "#cccccc", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with style");
	}

}
