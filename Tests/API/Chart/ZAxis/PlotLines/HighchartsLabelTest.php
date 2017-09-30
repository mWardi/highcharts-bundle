<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\ZAxis\PlotLines;

use WBW\HighchartsBundle\API\Chart\ZAxis\PlotLines\HighchartsLabel;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts label test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\ZAxis\PlotLines
 * @version 5.0.14
 */
final class HighchartsLabelTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsLabel(false);

		$res = ["align" => "left", "useHTML" => false, "verticalAlign" => "top"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setRotation(69);

		$res1 = ["align" => "left", "useHTML" => false, "verticalAlign" => "top", "rotation" => 69];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with rotation');

		$obj->setStyle("a1b01e734b573fca08eb1a65e6df9a38");

		$res2 = ["align" => "left", "useHTML" => false, "verticalAlign" => "top", "rotation" => 69, "style" => "a1b01e734b573fca08eb1a65e6df9a38"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with style');

		$obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

		$res3 = ["align" => "left", "useHTML" => false, "verticalAlign" => "top", "rotation" => 69, "style" => "a1b01e734b573fca08eb1a65e6df9a38", "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with text');

		$obj->setTextAlign("6e1fcbf7c065b2e7fef4cdc9bae3fe53");

		$res4 = ["align" => "left", "useHTML" => false, "verticalAlign" => "top", "rotation" => 69, "style" => "a1b01e734b573fca08eb1a65e6df9a38", "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with text align');

		$obj->setX(72);

		$res5 = ["align" => "left", "useHTML" => false, "verticalAlign" => "top", "rotation" => 69, "style" => "a1b01e734b573fca08eb1a65e6df9a38", "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53", "x" => 72];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with x');

		$obj->setY(27);

		$res6 = ["align" => "left", "useHTML" => false, "verticalAlign" => "top", "rotation" => 69, "style" => "a1b01e734b573fca08eb1a65e6df9a38", "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53", "x" => 72, "y" => 27];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with y');
	}
}

