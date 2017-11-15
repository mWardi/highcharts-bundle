<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts treemap test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsTreemapTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap(true);

		$this->assertEquals(null, $obj1->getAllowDrillToNode());
		$this->assertEquals(null, $obj1->getAllowPointSelect());
		$this->assertEquals(null, $obj1->getAlternateStartingDirection());
		$this->assertEquals(null, $obj1->getAnimation());
		$this->assertEquals(null, $obj1->getAnimationLimit());
		$this->assertEquals(null, $obj1->getBorderColor());
		$this->assertEquals(null, $obj1->getBorderWidth());
		$this->assertEquals(null, $obj1->getClassName());
		$this->assertEquals(null, $obj1->getColor());
		$this->assertEquals(null, $obj1->getColorByPoint());
		$this->assertEquals(null, $obj1->getColorIndex());
		$this->assertEquals(null, $obj1->getColors());
		$this->assertEquals(null, $obj1->getCrisp());
		$this->assertEquals(null, $obj1->getCropThreshold());
		$this->assertEquals(null, $obj1->getCursor());
		$this->assertEquals(null, $obj1->getDataLabels());
		$this->assertEquals(null, $obj1->getDescription());
		$this->assertEquals(null, $obj1->getEnableMouseTracking());
		$this->assertEquals(null, $obj1->getEvents());
		$this->assertEquals(null, $obj1->getExposeElementToA11y());
		$this->assertEquals(null, $obj1->getFindNearestPointBy());
		$this->assertEquals(null, $obj1->getGetExtremesFromAll());
		$this->assertEquals(null, $obj1->getIgnoreHiddenPoint());
		$this->assertEquals(null, $obj1->getInteractByLeaf());
		$this->assertEquals(null, $obj1->getKeys());
		$this->assertEquals(null, $obj1->getLayoutAlgorithm());
		$this->assertEquals(null, $obj1->getLayoutStartingDirection());
		$this->assertEquals(null, $obj1->getLevelIsConstant());
		$this->assertEquals(null, $obj1->getLevels());
		$this->assertEquals(null, $obj1->getLinkedTo());
		$this->assertEquals(null, $obj1->getMaxPointWidth());
		$this->assertEquals(null, $obj1->getOpacity());
		$this->assertEquals(null, $obj1->getPoint());
		$this->assertEquals(null, $obj1->getPointDescriptionFormatter());
		$this->assertEquals(null, $obj1->getSelected());
		$this->assertEquals(null, $obj1->getShadow());
		$this->assertEquals(null, $obj1->getShowCheckbox());
		$this->assertEquals(null, $obj1->getShowInLegend());
		$this->assertEquals(null, $obj1->getSkipKeyboardNavigation());
		$this->assertEquals(null, $obj1->getSortIndex());
		$this->assertEquals(null, $obj1->getStates());
		$this->assertEquals(null, $obj1->getStickyTracking());
		$this->assertEquals(null, $obj1->getTooltip());
		$this->assertEquals(null, $obj1->getTurboThreshold());
		$this->assertEquals(null, $obj1->getVisible());
		$this->assertEquals(null, $obj1->getZoneAxis());
		$this->assertEquals(null, $obj1->getZones());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap(false);

		$this->assertEquals(false, $obj0->getAllowDrillToNode());
		$this->assertEquals(false, $obj0->getAllowPointSelect());
		$this->assertEquals(false, $obj0->getAlternateStartingDirection());
		$this->assertEquals(true, $obj0->getAnimation());
		$this->assertEquals(null, $obj0->getAnimationLimit());
		$this->assertEquals("#e6e6e6", $obj0->getBorderColor());
		$this->assertEquals(1, $obj0->getBorderWidth());
		$this->assertEquals(null, $obj0->getClassName());
		$this->assertEquals(null, $obj0->getColor());
		$this->assertEquals(false, $obj0->getColorByPoint());
		$this->assertEquals(null, $obj0->getColorIndex());
		$this->assertEquals(null, $obj0->getColors());
		$this->assertEquals(true, $obj0->getCrisp());
		$this->assertEquals(300, $obj0->getCropThreshold());
		$this->assertEquals(null, $obj0->getCursor());
		$this->assertEquals(null, $obj0->getDataLabels());
		$this->assertEquals(null, $obj0->getDescription());
		$this->assertEquals(true, $obj0->getEnableMouseTracking());
		$this->assertEquals(null, $obj0->getEvents());
		$this->assertEquals(null, $obj0->getExposeElementToA11y());
		$this->assertEquals(null, $obj0->getFindNearestPointBy());
		$this->assertEquals(false, $obj0->getGetExtremesFromAll());
		$this->assertEquals(true, $obj0->getIgnoreHiddenPoint());
		$this->assertEquals(null, $obj0->getInteractByLeaf());
		$this->assertEquals(null, $obj0->getKeys());
		$this->assertEquals("sliceAndDice", $obj0->getLayoutAlgorithm());
		$this->assertEquals("vertical", $obj0->getLayoutStartingDirection());
		$this->assertEquals(true, $obj0->getLevelIsConstant());
		$this->assertEquals(null, $obj0->getLevels());
		$this->assertEquals(null, $obj0->getLinkedTo());
		$this->assertEquals(null, $obj0->getMaxPointWidth());
		$this->assertEquals(0.15, $obj0->getOpacity());
		$this->assertEquals(null, $obj0->getPoint());
		$this->assertEquals(null, $obj0->getPointDescriptionFormatter());
		$this->assertEquals(false, $obj0->getSelected());
		$this->assertEquals(false, $obj0->getShadow());
		$this->assertEquals(false, $obj0->getShowCheckbox());
		$this->assertEquals(false, $obj0->getShowInLegend());
		$this->assertEquals(null, $obj0->getSkipKeyboardNavigation());
		$this->assertEquals(null, $obj0->getSortIndex());
		$this->assertEquals(null, $obj0->getStates());
		$this->assertEquals(true, $obj0->getStickyTracking());
		$this->assertEquals(null, $obj0->getTooltip());
		$this->assertEquals(1000, $obj0->getTurboThreshold());
		$this->assertEquals(true, $obj0->getVisible());
		$this->assertEquals("y", $obj0->getZoneAxis());
		$this->assertEquals(null, $obj0->getZones());
    }

	/**
	 * Tests the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap(false);

		$obj->newDataLabels();
		$obj->newEvents();
		$obj->newPoint();
		$obj->newStates();
		$obj->newTooltip();

		$obj->clear();

		$res = ["dataLabels" => [], "events" => [], "point" => [], "states" => [], "tooltip" => []];
		$this->assertEquals($res, $obj->toArray());
	}

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the newDataLabels() method.
	 *
	 * @return void.
	 */
	public function testNewDataLabels() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap(false);

		$res = $obj->newDataLabels();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsDataLabels::class, $res);
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsEvents::class, $res);
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsPoint::class, $res);
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsStates::class, $res);
	}

	/**
	 * Tests the newTooltip() method.
	 *
	 * @return void.
	 */
	public function testNewTooltip() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap(false);

		$res = $obj->newTooltip();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsTooltip::class, $res);
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap(true);

		$obj->setAllowDrillToNode("true");

		$res1 = ["allowDrillToNode" => "true"];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setAllowPointSelect(0);

		$res2 = ["allowDrillToNode" => "true", "allowPointSelect" => 0];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setAlternateStartingDirection(1);

		$res3 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1];
		$this->assertEquals($res3, $obj->toArray());

		$obj->setAnimation(1);

		$res4 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1];
		$this->assertEquals($res4, $obj->toArray());

		$obj->setAnimationLimit(75);

		$res5 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75];
		$this->assertEquals($res5, $obj->toArray());

		$obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

		$res6 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
		$this->assertEquals($res6, $obj->toArray());

		$obj->setBorderWidth(81);

		$res7 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81];
		$this->assertEquals($res7, $obj->toArray());

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res8 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res8, $obj->toArray());

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res9 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res9, $obj->toArray());

		$obj->setColorByPoint(0);

		$res10 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0];
		$this->assertEquals($res10, $obj->toArray());

		$obj->setColorIndex(66);

		$res11 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66];
		$this->assertEquals($res11, $obj->toArray());

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res12 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res12, $obj->toArray());

		$obj->setCrisp(0);

		$res13 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0];
		$this->assertEquals($res13, $obj->toArray());

		$obj->setCropThreshold(44);

		$res14 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44];
		$this->assertEquals($res14, $obj->toArray());

		$obj->setCursor("crosshair");

		$res15 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair"];
		$this->assertEquals($res15, $obj->toArray());

		$obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsDataLabels());

		$res16 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => []];
		$this->assertEquals($res16, $obj->toArray());

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res17 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res17, $obj->toArray());

		$obj->setEnableMouseTracking(1);

		$res18 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1];
		$this->assertEquals($res18, $obj->toArray());

		$obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsEvents());

		$res19 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => []];
		$this->assertEquals($res19, $obj->toArray());

		$obj->setExposeElementToA11y(0);

		$res20 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0];
		$this->assertEquals($res20, $obj->toArray());

		$obj->setFindNearestPointBy("xy");

		$res21 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
		$this->assertEquals($res21, $obj->toArray());

		$obj->setGetExtremesFromAll(1);

		$res22 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1];
		$this->assertEquals($res22, $obj->toArray());

		$obj->setIgnoreHiddenPoint(0);

		$res23 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0];
		$this->assertEquals($res23, $obj->toArray());

		$obj->setInteractByLeaf(true);

		$res24 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true];
		$this->assertEquals($res24, $obj->toArray());

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res25 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res25, $obj->toArray());

		$obj->setLayoutAlgorithm("strip");

		$res26 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip"];
		$this->assertEquals($res26, $obj->toArray());

		$obj->setLayoutStartingDirection("horizontal");

		$res27 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal"];
		$this->assertEquals($res27, $obj->toArray());

		$obj->setLevelIsConstant("false");

		$res28 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false"];
		$this->assertEquals($res28, $obj->toArray());

		$obj->setLevels(["levels" => "836eb5e382b5d9f430df48883fca918e"]);

		$res29 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"]];
		$this->assertEquals($res29, $obj->toArray());

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res30 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res30, $obj->toArray());

		$obj->setMaxPointWidth(96);

		$res31 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 96];
		$this->assertEquals($res31, $obj->toArray());

		$obj->setOpacity(65);

		$res32 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 96, "opacity" => 65];
		$this->assertEquals($res32, $obj->toArray());

		$obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsPoint());

		$res33 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 96, "opacity" => 65, "point" => []];
		$this->assertEquals($res33, $obj->toArray());

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res34 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 96, "opacity" => 65, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res34, $obj->toArray());

		$obj->setSelected(0);

		$res35 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 96, "opacity" => 65, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0];
		$this->assertEquals($res35, $obj->toArray());

		$obj->setShadow(0);

		$res36 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 96, "opacity" => 65, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 0];
		$this->assertEquals($res36, $obj->toArray());

		$obj->setShowCheckbox(1);

		$res37 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 96, "opacity" => 65, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 0, "showCheckbox" => 1];
		$this->assertEquals($res37, $obj->toArray());

		$obj->setShowInLegend(0);

		$res38 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 96, "opacity" => 65, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 0];
		$this->assertEquals($res38, $obj->toArray());

		$obj->setSkipKeyboardNavigation(0);

		$res39 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 96, "opacity" => 65, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0];
		$this->assertEquals($res39, $obj->toArray());

		$obj->setSortIndex(86);

		$res40 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 96, "opacity" => 65, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "sortIndex" => 86];
		$this->assertEquals($res40, $obj->toArray());

		$obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsStates());

		$res41 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 96, "opacity" => 65, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "sortIndex" => 86, "states" => []];
		$this->assertEquals($res41, $obj->toArray());

		$obj->setStickyTracking(1);

		$res42 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 96, "opacity" => 65, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "sortIndex" => 86, "states" => [], "stickyTracking" => 1];
		$this->assertEquals($res42, $obj->toArray());

		$obj->setTooltip(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsTooltip());

		$res43 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 96, "opacity" => 65, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "sortIndex" => 86, "states" => [], "stickyTracking" => 1, "tooltip" => []];
		$this->assertEquals($res43, $obj->toArray());

		$obj->setTurboThreshold(44);

		$res44 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 96, "opacity" => 65, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "sortIndex" => 86, "states" => [], "stickyTracking" => 1, "tooltip" => [], "turboThreshold" => 44];
		$this->assertEquals($res44, $obj->toArray());

		$obj->setVisible(1);

		$res45 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 96, "opacity" => 65, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "sortIndex" => 86, "states" => [], "stickyTracking" => 1, "tooltip" => [], "turboThreshold" => 44, "visible" => 1];
		$this->assertEquals($res45, $obj->toArray());

		$obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

		$res46 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 96, "opacity" => 65, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "sortIndex" => 86, "states" => [], "stickyTracking" => 1, "tooltip" => [], "turboThreshold" => 44, "visible" => 1, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
		$this->assertEquals($res46, $obj->toArray());

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res47 = ["allowDrillToNode" => "true", "allowPointSelect" => 0, "alternateStartingDirection" => 1, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 81, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 66, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 44, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 0, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 96, "opacity" => 65, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "sortIndex" => 86, "states" => [], "stickyTracking" => 1, "tooltip" => [], "turboThreshold" => 44, "visible" => 1, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res47, $obj->toArray());
	}

}
