<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Accessibility;

use WBW\HighchartsBundle\API\Chart\Accessibility\HighchartsKeyboardNavigation;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts keyboard navigation test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\Accessibility
 * @version 5.0.14
 */
final class HighchartsKeyboardNavigationTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsKeyboardNavigation(false);

		$res = ["enabled" => true, "skipNullPoints" => false, "tabThroughChartElements" => true];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');
	}
}

