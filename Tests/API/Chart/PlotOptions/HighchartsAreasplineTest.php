<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\PlotOptions;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Areaspline\HighchartsDataLabels;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Areaspline\HighchartsEvents;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Areaspline\HighchartsMarker;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Areaspline\HighchartsPoint;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Areaspline\HighchartsStates;

/**
 * Highcharts areaspline test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsAreasplineTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsAreaspline(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newDataLabels() method.
	 *
	 * @return void.
	 */
	public function testNewDataLabels() {

		$obj = new HighchartsAreaspline(false);

		$res = $obj->newDataLabels();
		$this->assertInstanceOf(HighchartsDataLabels::class, $res, "The method newDataLabels() does not return the expected class");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new HighchartsAreaspline(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(HighchartsEvents::class, $res, "The method newEvents() does not return the expected class");
	}

	/**
	 * Tests the newMarker() method.
	 *
	 * @return void.
	 */
	public function testNewMarker() {

		$obj = new HighchartsAreaspline(false);

		$res = $obj->newMarker();
		$this->assertInstanceOf(HighchartsMarker::class, $res, "The method newMarker() does not return the expected class");
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new HighchartsAreaspline(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(HighchartsPoint::class, $res, "The method newPoint() does not return the expected class");
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new HighchartsAreaspline(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(HighchartsStates::class, $res, "The method newStates() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsAreaspline(false);

		$res = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y"];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setAnimationLimit(16);

		$res1 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with animation limit");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res3 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setColorIndex(61);

		$res4 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with color index");

		$obj->setCursor("crosshair");

		$res5 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with cursor");

		$obj->newDataLabels();

		$res6 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => []];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res7 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->newEvents();

		$res8 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => []];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setExposeElementToA11y(1);

		$res9 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with expose element to a11y");

		$obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

		$res10 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with fill color");

		$obj->setFindNearestPointBy("xy");

		$res11 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy"];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with find nearest point by");

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res12 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with keys");

		$obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

		$res13 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with line color");

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res14 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with linked to");

		$obj->newMarker();

		$res15 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => []];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with marker");

		$obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

		$res16 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with negative color");

		$obj->setNegativeFillColor("a966442d64e00bf8663e7c5d9708074a");

		$res17 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a"];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with negative fill color");

		$obj->newPoint();

		$res18 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => []];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with point");

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res19 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

		$obj->setPointIntervalUnit("year");

		$res20 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year"];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with point interval unit");

		$obj->setPointPlacement("between");

		$res21 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between"];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with point placement");

		$obj->setSkipKeyboardNavigation(1);

		$res22 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "skipKeyboardNavigation" => 1];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with skip keyboard navigation");

		$obj->setStacking("percent");

		$res23 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "skipKeyboardNavigation" => 1, "stacking" => "percent"];
		$this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with stacking");

		$obj->newStates();

		$res24 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "skipKeyboardNavigation" => 1, "stacking" => "percent", "states" => []];
		$this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with states");

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res25 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "skipKeyboardNavigation" => 1, "stacking" => "percent", "states" => [], "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res26 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 61, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "skipKeyboardNavigation" => 1, "stacking" => "percent", "states" => [], "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with zones");
	}

}
