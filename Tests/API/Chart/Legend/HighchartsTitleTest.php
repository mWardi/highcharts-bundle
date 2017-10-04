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
use WBW\HighchartsBundle\API\Chart\Legend\HighchartsTitle;

/**
 * Highcharts title test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Legend
 * @version 5.0.14
 */
final class HighchartsTitleTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsTitle(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsTitle(false);

		$res = ["style" => ["fontWeight" => "bold"]];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

		$res1 = ["style" => ["fontWeight" => "bold"], "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with text");
	}

}
