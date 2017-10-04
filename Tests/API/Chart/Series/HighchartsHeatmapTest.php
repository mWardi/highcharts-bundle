<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\Series\HighchartsHeatmap;
use WBW\HighchartsBundle\API\Chart\Series\Heatmap\HighchartsDataLabels;
use WBW\HighchartsBundle\API\Chart\Series\Heatmap\HighchartsEvents;
use WBW\HighchartsBundle\API\Chart\Series\Heatmap\HighchartsPoint;
use WBW\HighchartsBundle\API\Chart\Series\Heatmap\HighchartsStates;

/**
 * Highcharts heatmap test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsHeatmapTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsHeatmap(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), 'The method toArray() does not return the expected array');
	}

	/**
	 * Tests the newDataLabels() method.
	 *
	 * @return void.
	 */
	public function testNewDataLabels() {

		$obj = new HighchartsHeatmap(false);

		$res = $obj->newDataLabels();
		$this->assertInstanceOf(HighchartsDataLabels::class, $res, 'The method newDataLabels() does not return the expected class');
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new HighchartsHeatmap(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(HighchartsEvents::class, $res, 'The method newEvents() does not return the expected class');
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new HighchartsHeatmap(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(HighchartsPoint::class, $res, 'The method newPoint() does not return the expected class');
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new HighchartsHeatmap(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(HighchartsStates::class, $res, 'The method newStates() does not return the expected class');
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsHeatmap(false);

		$res = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAnimationLimit(34);

		$res1 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with animation limit');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res3 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with color');

		$obj->setColorIndex(1);

		$res4 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with color index');

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res5 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with colors');

		$obj->setCursor("crosshair");

		$res6 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with cursor');

		$obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

		$res7 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with data');

		$obj->newDataLabels();

		$res8 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => []];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with data labels');

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res9 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with description');

		$obj->newEvents();

		$res10 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => []];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with events');

		$obj->setExposeElementToA11y(0);

		$res11 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with expose element to a11y');

		$obj->setFindNearestPointBy("xy");

		$res12 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
		$this->assertEquals($res12, $obj->toArray(), 'The method toArray() does not return the expected array with find nearest point by');

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res13 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res13, $obj->toArray(), 'The method toArray() does not return the expected array with id');

		$obj->setIndex(73);

		$res14 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 73];
		$this->assertEquals($res14, $obj->toArray(), 'The method toArray() does not return the expected array with index');

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res15 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 73, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res15, $obj->toArray(), 'The method toArray() does not return the expected array with keys');

		$obj->setLegendIndex(88);

		$res16 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 73, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 88];
		$this->assertEquals($res16, $obj->toArray(), 'The method toArray() does not return the expected array with legend index');

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res17 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 73, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 88, "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res17, $obj->toArray(), 'The method toArray() does not return the expected array with linked to');

		$obj->setMaxPointWidth(39);

		$res18 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 73, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 88, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 39];
		$this->assertEquals($res18, $obj->toArray(), 'The method toArray() does not return the expected array with max point width');

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res19 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 73, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 88, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 39, "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res19, $obj->toArray(), 'The method toArray() does not return the expected array with name');

		$obj->newPoint();

		$res20 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 73, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 88, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 39, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => []];
		$this->assertEquals($res20, $obj->toArray(), 'The method toArray() does not return the expected array with point');

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res21 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 73, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 88, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 39, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res21, $obj->toArray(), 'The method toArray() does not return the expected array with point description formatter');

		$obj->setSkipKeyboardNavigation(1);

		$res22 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 73, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 88, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 39, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1];
		$this->assertEquals($res22, $obj->toArray(), 'The method toArray() does not return the expected array with skip keyboard navigation');

		$obj->newStates();

		$res23 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 73, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 88, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 39, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1, "states" => []];
		$this->assertEquals($res23, $obj->toArray(), 'The method toArray() does not return the expected array with states');

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res24 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 73, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 88, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 39, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1, "states" => [], "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res24, $obj->toArray(), 'The method toArray() does not return the expected array with tooltip');

		$obj->setType("waterfall");

		$res25 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 73, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 88, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 39, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1, "states" => [], "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall"];
		$this->assertEquals($res25, $obj->toArray(), 'The method toArray() does not return the expected array with type');

		$obj->setZIndex(79);

		$res26 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 73, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 88, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 39, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1, "states" => [], "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "zIndex" => 79];
		$this->assertEquals($res26, $obj->toArray(), 'The method toArray() does not return the expected array with z index');

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res27 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "colsize" => 1, "crisp" => true, "cropThreshold" => 50, "enableMouseTracking" => true, "getExtremesFromAll" => false, "rowsize" => 1, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 34, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 1, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 73, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 88, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 39, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1, "states" => [], "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "zIndex" => 79, "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res27, $obj->toArray(), 'The method toArray() does not return the expected array with zones');
	}

}
