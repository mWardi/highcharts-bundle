<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Pane;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts background test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Pane
 * @version 5.0.14
 */
final class HighchartsBackgroundTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Pane\HighchartsBackground(true);

		$this->assertEquals(null, $obj1->getBackgroundColor());
		$this->assertEquals(null, $obj1->getBorderColor());
		$this->assertEquals(null, $obj1->getBorderWidth());
		$this->assertEquals(null, $obj1->getClassName());
		$this->assertEquals(null, $obj1->getInnerRadius());
		$this->assertEquals(null, $obj1->getOuterRadius());
		$this->assertEquals(null, $obj1->getShape());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Pane\HighchartsBackground(false);

		$this->assertEquals(null, $obj0->getBackgroundColor());
		$this->assertEquals("#cccccc", $obj0->getBorderColor());
		$this->assertEquals(1, $obj0->getBorderWidth());
		$this->assertEquals("highcharts-pane", $obj0->getClassName());
		$this->assertEquals("0", $obj0->getInnerRadius());
		$this->assertEquals("105%", $obj0->getOuterRadius());
		$this->assertEquals("solid", $obj0->getShape());
    }

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Pane\HighchartsBackground(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Pane\HighchartsBackground(true);

		$obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

		$res1 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

		$res2 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994"];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setBorderWidth(0);

		$res3 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 0];
		$this->assertEquals($res3, $obj->toArray());

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res4 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 0, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res4, $obj->toArray());

		$obj->setInnerRadius(61);

		$res5 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 0, "className" => "6f66e878c62db60568a3487869695820", "innerRadius" => 61];
		$this->assertEquals($res5, $obj->toArray());

		$obj->setOuterRadius(89);

		$res6 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 0, "className" => "6f66e878c62db60568a3487869695820", "innerRadius" => 61, "outerRadius" => 89];
		$this->assertEquals($res6, $obj->toArray());

		$obj->setShape("arc");

		$res7 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 0, "className" => "6f66e878c62db60568a3487869695820", "innerRadius" => 61, "outerRadius" => 89, "shape" => "arc"];
		$this->assertEquals($res7, $obj->toArray());
	}

}
