<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts funnel test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsFunnelTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsFunnel(true);

        $this->assertEquals(null, $obj1->getAllowPointSelect(), "The method getAllowPointSelect() does not return the expected value");
        $this->assertEquals(null, $obj1->getAnimationLimit(), "The method getAnimationLimit() does not return the expected value");
        $this->assertEquals(null, $obj1->getBorderColor(), "The method getBorderColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
        $this->assertEquals(null, $obj1->getCenter(), "The method getCenter() does not return the expected value");
        $this->assertEquals(null, $obj1->getClassName(), "The method getClassName() does not return the expected value");
        $this->assertEquals(null, $obj1->getColorIndex(), "The method getColorIndex() does not return the expected value");
        $this->assertEquals(null, $obj1->getColors(), "The method getColors() does not return the expected value");
        $this->assertEquals(null, $obj1->getCursor(), "The method getCursor() does not return the expected value");
        $this->assertEquals(null, $obj1->getData(), "The method getData() does not return the expected value");
        $this->assertEquals(null, $obj1->getDataLabels(), "The method getDataLabels() does not return the expected value");
        $this->assertEquals(null, $obj1->getDepth(), "The method getDepth() does not return the expected value");
        $this->assertEquals(null, $obj1->getDescription(), "The method getDescription() does not return the expected value");
        $this->assertEquals(null, $obj1->getEnableMouseTracking(), "The method getEnableMouseTracking() does not return the expected value");
        $this->assertEquals(null, $obj1->getEvents(), "The method getEvents() does not return the expected value");
        $this->assertEquals(null, $obj1->getExposeElementToA11y(), "The method getExposeElementToA11y() does not return the expected value");
        $this->assertEquals(null, $obj1->getFindNearestPointBy(), "The method getFindNearestPointBy() does not return the expected value");
        $this->assertEquals(null, $obj1->getGetExtremesFromAll(), "The method getGetExtremesFromAll() does not return the expected value");
        $this->assertEquals(null, $obj1->getHeight(), "The method getHeight() does not return the expected value");
        $this->assertEquals(null, $obj1->getId(), "The method getId() does not return the expected value");
        $this->assertEquals(null, $obj1->getIndex(), "The method getIndex() does not return the expected value");
        $this->assertEquals(null, $obj1->getKeys(), "The method getKeys() does not return the expected value");
        $this->assertEquals(null, $obj1->getLegendIndex(), "The method getLegendIndex() does not return the expected value");
        $this->assertEquals(null, $obj1->getLinkedTo(), "The method getLinkedTo() does not return the expected value");
        $this->assertEquals(null, $obj1->getMinSize(), "The method getMinSize() does not return the expected value");
        $this->assertEquals(null, $obj1->getName(), "The method getName() does not return the expected value");
        $this->assertEquals(null, $obj1->getNeckHeight(), "The method getNeckHeight() does not return the expected value");
        $this->assertEquals(null, $obj1->getNeckWidth(), "The method getNeckWidth() does not return the expected value");
        $this->assertEquals(null, $obj1->getPoint(), "The method getPoint() does not return the expected value");
        $this->assertEquals(null, $obj1->getPointDescriptionFormatter(), "The method getPointDescriptionFormatter() does not return the expected value");
        $this->assertEquals(null, $obj1->getReversed(), "The method getReversed() does not return the expected value");
        $this->assertEquals(null, $obj1->getSelected(), "The method getSelected() does not return the expected value");
        $this->assertEquals(null, $obj1->getShadow(), "The method getShadow() does not return the expected value");
        $this->assertEquals(null, $obj1->getShowInLegend(), "The method getShowInLegend() does not return the expected value");
        $this->assertEquals(null, $obj1->getSkipKeyboardNavigation(), "The method getSkipKeyboardNavigation() does not return the expected value");
        $this->assertEquals(null, $obj1->getSlicedOffset(), "The method getSlicedOffset() does not return the expected value");
        $this->assertEquals(null, $obj1->getStates(), "The method getStates() does not return the expected value");
        $this->assertEquals(null, $obj1->getStickyTracking(), "The method getStickyTracking() does not return the expected value");
        $this->assertEquals(null, $obj1->getTooltip(), "The method getTooltip() does not return the expected value");
        $this->assertEquals(null, $obj1->getType(), "The method getType() does not return the expected value");
        $this->assertEquals(null, $obj1->getVisible(), "The method getVisible() does not return the expected value");
        $this->assertEquals(null, $obj1->getWidth(), "The method getWidth() does not return the expected value");
        $this->assertEquals(null, $obj1->getZIndex(), "The method getZIndex() does not return the expected value");
        $this->assertEquals(null, $obj1->getZoneAxis(), "The method getZoneAxis() does not return the expected value");
        $this->assertEquals(null, $obj1->getZones(), "The method getZones() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsFunnel(false);

        $this->assertEquals(false, $obj0->getAllowPointSelect(), "The method getAllowPointSelect() does not return the expected value");
        $this->assertEquals(null, $obj0->getAnimationLimit(), "The method getAnimationLimit() does not return the expected value");
        $this->assertEquals("#ffffff", $obj0->getBorderColor(), "The method getBorderColor() does not return the expected value");
        $this->assertEquals(1, $obj0->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
        $this->assertEquals(["50%", "50%"], $obj0->getCenter(), "The method getCenter() does not return the expected value");
        $this->assertEquals(null, $obj0->getClassName(), "The method getClassName() does not return the expected value");
        $this->assertEquals(null, $obj0->getColorIndex(), "The method getColorIndex() does not return the expected value");
        $this->assertEquals(null, $obj0->getColors(), "The method getColors() does not return the expected value");
        $this->assertEquals(null, $obj0->getCursor(), "The method getCursor() does not return the expected value");
        $this->assertEquals(null, $obj0->getData(), "The method getData() does not return the expected value");
        $this->assertEquals(null, $obj0->getDataLabels(), "The method getDataLabels() does not return the expected value");
        $this->assertEquals(0, $obj0->getDepth(), "The method getDepth() does not return the expected value");
        $this->assertEquals(null, $obj0->getDescription(), "The method getDescription() does not return the expected value");
        $this->assertEquals(true, $obj0->getEnableMouseTracking(), "The method getEnableMouseTracking() does not return the expected value");
        $this->assertEquals(null, $obj0->getEvents(), "The method getEvents() does not return the expected value");
        $this->assertEquals(null, $obj0->getExposeElementToA11y(), "The method getExposeElementToA11y() does not return the expected value");
        $this->assertEquals(null, $obj0->getFindNearestPointBy(), "The method getFindNearestPointBy() does not return the expected value");
        $this->assertEquals(false, $obj0->getGetExtremesFromAll(), "The method getGetExtremesFromAll() does not return the expected value");
        $this->assertEquals(null, $obj0->getHeight(), "The method getHeight() does not return the expected value");
        $this->assertEquals(null, $obj0->getId(), "The method getId() does not return the expected value");
        $this->assertEquals(null, $obj0->getIndex(), "The method getIndex() does not return the expected value");
        $this->assertEquals(null, $obj0->getKeys(), "The method getKeys() does not return the expected value");
        $this->assertEquals(null, $obj0->getLegendIndex(), "The method getLegendIndex() does not return the expected value");
        $this->assertEquals(null, $obj0->getLinkedTo(), "The method getLinkedTo() does not return the expected value");
        $this->assertEquals(80, $obj0->getMinSize(), "The method getMinSize() does not return the expected value");
        $this->assertEquals(null, $obj0->getName(), "The method getName() does not return the expected value");
        $this->assertEquals("25%", $obj0->getNeckHeight(), "The method getNeckHeight() does not return the expected value");
        $this->assertEquals("30%", $obj0->getNeckWidth(), "The method getNeckWidth() does not return the expected value");
        $this->assertEquals(null, $obj0->getPoint(), "The method getPoint() does not return the expected value");
        $this->assertEquals(null, $obj0->getPointDescriptionFormatter(), "The method getPointDescriptionFormatter() does not return the expected value");
        $this->assertEquals(false, $obj0->getReversed(), "The method getReversed() does not return the expected value");
        $this->assertEquals(false, $obj0->getSelected(), "The method getSelected() does not return the expected value");
        $this->assertEquals(false, $obj0->getShadow(), "The method getShadow() does not return the expected value");
        $this->assertEquals(false, $obj0->getShowInLegend(), "The method getShowInLegend() does not return the expected value");
        $this->assertEquals(null, $obj0->getSkipKeyboardNavigation(), "The method getSkipKeyboardNavigation() does not return the expected value");
        $this->assertEquals(10, $obj0->getSlicedOffset(), "The method getSlicedOffset() does not return the expected value");
        $this->assertEquals(null, $obj0->getStates(), "The method getStates() does not return the expected value");
        $this->assertEquals(false, $obj0->getStickyTracking(), "The method getStickyTracking() does not return the expected value");
        $this->assertEquals(null, $obj0->getTooltip(), "The method getTooltip() does not return the expected value");
        $this->assertEquals(null, $obj0->getType(), "The method getType() does not return the expected value");
        $this->assertEquals(true, $obj0->getVisible(), "The method getVisible() does not return the expected value");
        $this->assertEquals("90%", $obj0->getWidth(), "The method getWidth() does not return the expected value");
        $this->assertEquals(null, $obj0->getZIndex(), "The method getZIndex() does not return the expected value");
        $this->assertEquals("y", $obj0->getZoneAxis(), "The method getZoneAxis() does not return the expected value");
        $this->assertEquals(null, $obj0->getZones(), "The method getZones() does not return the expected value");
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsFunnel(false);

        $obj->newDataLabels();
        $obj->newEvents();
        $obj->newPoint();
        $obj->newStates();

        $obj->clear();

        $res = ["dataLabels" => [], "events" => [], "point" => [], "states" => []];
        $this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsFunnel(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Tests the newDataLabels() method.
     *
     * @return void.
     */
    public function testNewDataLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsFunnel(false);

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Funnel\HighchartsDataLabels::class, $res, "The method newDataLabels() does not return the expected object");
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsFunnel(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Funnel\HighchartsEvents::class, $res, "The method newEvents() does not return the expected object");
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsFunnel(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Funnel\HighchartsPoint::class, $res, "The method newPoint() does not return the expected object");
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsFunnel(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Funnel\HighchartsStates::class, $res, "The method newStates() does not return the expected object");
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsFunnel(true);

        $obj->setAllowPointSelect(0);

        $res1 = ["allowPointSelect" => 0];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with allow point select");

        $obj->setAnimationLimit(19);

        $res2 = ["allowPointSelect" => 0, "animationLimit" => 19];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with animation limit");

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res3 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with border color");

        $obj->setBorderWidth(71);

        $res4 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with border width");

        $obj->setCenter(["center" => "adb115059e28d960fa8badfac5516667"]);

        $res5 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"]];
        $this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with center");

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res6 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with class name");

        $obj->setColorIndex(36);

        $res7 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36];
        $this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with color index");

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

        $res8 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
        $this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with colors");

        $obj->setCursor("crosshair");

        $res9 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair"];
        $this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with cursor");

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

        $res10 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
        $this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with data");

        $obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Funnel\HighchartsDataLabels());

        $res11 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => []];
        $this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

        $obj->setDepth(72);

        $res12 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72];
        $this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with depth");

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res13 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with description");

        $obj->setEnableMouseTracking(1);

        $res14 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1];
        $this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with enable mouse tracking");

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Funnel\HighchartsEvents());

        $res15 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => []];
        $this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with events");

        $obj->setExposeElementToA11y(1);

        $res16 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1];
        $this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with expose element to a11y");

        $obj->setFindNearestPointBy("xy");

        $res17 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy"];
        $this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with find nearest point by");

        $obj->setGetExtremesFromAll(0);

        $res18 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
        $this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with get extremes from all");

        $obj->setHeight(36);

        $res19 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36];
        $this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with height");

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res20 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with id");

        $obj->setIndex(77);

        $res21 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77];
        $this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with index");

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res22 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with keys");

        $obj->setLegendIndex(28);

        $res23 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28];
        $this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with legend index");

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res24 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with linked to");

        $obj->setMinSize(32);

        $res25 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32];
        $this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with min size");

        $obj->setName("b068931cc450442b63f5b3d276ea4297");

        $res26 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297"];
        $this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with name");

        $obj->setNeckHeight(14);

        $res27 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => 14];
        $this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with neck height");

        $obj->setNeckWidth(89);

        $res28 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => 14, "neckWidth" => 89];
        $this->assertEquals($res28, $obj->toArray(), "The method toArray() does not return the expected array with neck width");

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Funnel\HighchartsPoint());

        $res29 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => 14, "neckWidth" => 89, "point" => []];
        $this->assertEquals($res29, $obj->toArray(), "The method toArray() does not return the expected array with point");

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res30 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => 14, "neckWidth" => 89, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res30, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

        $obj->setReversed(1);

        $res31 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => 14, "neckWidth" => 89, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1];
        $this->assertEquals($res31, $obj->toArray(), "The method toArray() does not return the expected array with reversed");

        $obj->setSelected(0);

        $res32 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => 14, "neckWidth" => 89, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 0];
        $this->assertEquals($res32, $obj->toArray(), "The method toArray() does not return the expected array with selected");

        $obj->setShadow(1);

        $res33 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => 14, "neckWidth" => 89, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 0, "shadow" => 1];
        $this->assertEquals($res33, $obj->toArray(), "The method toArray() does not return the expected array with shadow");

        $obj->setShowInLegend(1);

        $res34 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => 14, "neckWidth" => 89, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 0, "shadow" => 1, "showInLegend" => 1];
        $this->assertEquals($res34, $obj->toArray(), "The method toArray() does not return the expected array with show in legend");

        $obj->setSkipKeyboardNavigation(0);

        $res35 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => 14, "neckWidth" => 89, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 0, "shadow" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0];
        $this->assertEquals($res35, $obj->toArray(), "The method toArray() does not return the expected array with skip keyboard navigation");

        $obj->setSlicedOffset(84);

        $res36 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => 14, "neckWidth" => 89, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 0, "shadow" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 84];
        $this->assertEquals($res36, $obj->toArray(), "The method toArray() does not return the expected array with sliced offset");

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Funnel\HighchartsStates());

        $res37 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => 14, "neckWidth" => 89, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 0, "shadow" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 84, "states" => []];
        $this->assertEquals($res37, $obj->toArray(), "The method toArray() does not return the expected array with states");

        $obj->setStickyTracking(0);

        $res38 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => 14, "neckWidth" => 89, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 0, "shadow" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 84, "states" => [], "stickyTracking" => 0];
        $this->assertEquals($res38, $obj->toArray(), "The method toArray() does not return the expected array with sticky tracking");

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res39 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => 14, "neckWidth" => 89, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 0, "shadow" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 84, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res39, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

        $obj->setType("waterfall");

        $res40 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => 14, "neckWidth" => 89, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 0, "shadow" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 84, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall"];
        $this->assertEquals($res40, $obj->toArray(), "The method toArray() does not return the expected array with type");

        $obj->setVisible(0);

        $res41 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => 14, "neckWidth" => 89, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 0, "shadow" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 84, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 0];
        $this->assertEquals($res41, $obj->toArray(), "The method toArray() does not return the expected array with visible");

        $obj->setWidth(55);

        $res42 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => 14, "neckWidth" => 89, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 0, "shadow" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 84, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 0, "width" => 55];
        $this->assertEquals($res42, $obj->toArray(), "The method toArray() does not return the expected array with width");

        $obj->setZIndex(50);

        $res43 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => 14, "neckWidth" => 89, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 0, "shadow" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 84, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 0, "width" => 55, "zIndex" => 50];
        $this->assertEquals($res43, $obj->toArray(), "The method toArray() does not return the expected array with z index");

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res44 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => 14, "neckWidth" => 89, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 0, "shadow" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 84, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 0, "width" => 55, "zIndex" => 50, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res44, $obj->toArray(), "The method toArray() does not return the expected array with zone axis");

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res45 = ["allowPointSelect" => 0, "animationLimit" => 19, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 71, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 36, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 72, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "height" => 36, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 77, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 28, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 32, "name" => "b068931cc450442b63f5b3d276ea4297", "neckHeight" => 14, "neckWidth" => 89, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 0, "shadow" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 84, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 0, "width" => 55, "zIndex" => 50, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res45, $obj->toArray(), "The method toArray() does not return the expected array with zones");
    }

}
