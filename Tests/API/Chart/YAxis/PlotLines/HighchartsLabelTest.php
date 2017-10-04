<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\YAxis\PlotLines;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\YAxis\PlotLines\HighchartsLabel;

/**
 * Highcharts label test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\YAxis\PlotLines
 * @version 5.0.14
 */
final class HighchartsLabelTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsLabel(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsLabel(false);

		$res = ["align" => "left", "useHTML" => false, "verticalAlign" => "top"];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setRotation(9);

		$res1 = ["align" => "left", "useHTML" => false, "verticalAlign" => "top", "rotation" => 9];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with rotation");

		$obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

		$res2 = ["align" => "left", "useHTML" => false, "verticalAlign" => "top", "rotation" => 9, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with style");

		$obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

		$res3 = ["align" => "left", "useHTML" => false, "verticalAlign" => "top", "rotation" => 9, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with text");

		$obj->setTextAlign("6e1fcbf7c065b2e7fef4cdc9bae3fe53");

		$res4 = ["align" => "left", "useHTML" => false, "verticalAlign" => "top", "rotation" => 9, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with text align");

		$obj->setX(69);

		$res5 = ["align" => "left", "useHTML" => false, "verticalAlign" => "top", "rotation" => 9, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53", "x" => 69];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with x");

		$obj->setY(87);

		$res6 = ["align" => "left", "useHTML" => false, "verticalAlign" => "top", "rotation" => 9, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53", "x" => 69, "y" => 87];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with y");
	}

}
