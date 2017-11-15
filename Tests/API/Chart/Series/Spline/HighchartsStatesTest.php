<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Spline;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts states test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Spline
 * @version 5.0.14
 */
final class HighchartsStatesTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Spline\HighchartsStates(true);

		$this->assertEquals(null, $obj1->getHover());
    }

	/**
	 * Tests the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Spline\HighchartsStates(false);

		$obj->newHover();

		$obj->clear();

		$res = ["hover" => []];
		$this->assertEquals($res, $obj->toArray());
	}

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Spline\HighchartsStates(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the newHover() method.
	 *
	 * @return void.
	 */
	public function testNewHover() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Spline\HighchartsStates(false);

		$res = $obj->newHover();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Spline\States\HighchartsHover::class, $res);
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Spline\HighchartsStates(true);

		$obj->setHover(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Spline\States\HighchartsHover());

		$res1 = ["hover" => []];
		$this->assertEquals($res1, $obj->toArray());
	}

}
