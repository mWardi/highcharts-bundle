<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart;

use WBW\HighchartsBundle\API\Chart\HighchartsPane;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts pane test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsPaneTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsPane(false);

		$res = ["center" => ["50%", "50%"], "size" => "85%"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setBackground(["background" => "d229bbf31eaeebc7c88897732d8b932d"]);

		$res1 = ["center" => ["50%", "50%"], "size" => "85%", "background" => ["background" => "d229bbf31eaeebc7c88897732d8b932d"]];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with background');

		$obj->setEndAngle(84);

		$res2 = ["center" => ["50%", "50%"], "size" => "85%", "background" => ["background" => "d229bbf31eaeebc7c88897732d8b932d"], "endAngle" => 84];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with end angle');

		$obj->setStartAngle(33);

		$res3 = ["center" => ["50%", "50%"], "size" => "85%", "background" => ["background" => "d229bbf31eaeebc7c88897732d8b932d"], "endAngle" => 84, "startAngle" => 33];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with start angle');
	}
}

