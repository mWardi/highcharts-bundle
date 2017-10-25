<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Treemap\States;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts hover test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Treemap\States
 * @version 5.0.14
 */
final class HighchartsHoverTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\States\HighchartsHover(true);

        $this->assertEquals(null, $obj1->getAnimation(), "The method getAnimation() does not return the expected value");
        $this->assertEquals(null, $obj1->getBorderColor(), "The method getBorderColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getBrightness(), "The method getBrightness() does not return the expected value");
        $this->assertEquals(null, $obj1->getColor(), "The method getColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
        $this->assertEquals(null, $obj1->getOpacity(), "The method getOpacity() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\States\HighchartsHover(false);

        $this->assertEquals(["duration" => 50], $obj0->getAnimation(), "The method getAnimation() does not return the expected value");
        $this->assertEquals(null, $obj0->getBorderColor(), "The method getBorderColor() does not return the expected value");
        $this->assertEquals(0.1, $obj0->getBrightness(), "The method getBrightness() does not return the expected value");
        $this->assertEquals(null, $obj0->getColor(), "The method getColor() does not return the expected value");
        $this->assertEquals(true, $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
        $this->assertEquals(0.75, $obj0->getOpacity(), "The method getOpacity() does not return the expected value");
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\States\HighchartsHover(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\States\HighchartsHover(true);

        $obj->setAnimation(1);

        $res1 = ["animation" => 1];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with animation");

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res2 = ["animation" => 1, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with border color");

        $obj->setBrightness(40);

        $res3 = ["animation" => 1, "borderColor" => "97da935a74593c55d78be9d1295aa994", "brightness" => 40];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with brightness");

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res4 = ["animation" => 1, "borderColor" => "97da935a74593c55d78be9d1295aa994", "brightness" => 40, "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with color");

        $obj->setEnabled(1);

        $res5 = ["animation" => 1, "borderColor" => "97da935a74593c55d78be9d1295aa994", "brightness" => 40, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "enabled" => 1];
        $this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

        $obj->setOpacity(29);

        $res6 = ["animation" => 1, "borderColor" => "97da935a74593c55d78be9d1295aa994", "brightness" => 40, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "enabled" => 1, "opacity" => 29];
        $this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with opacity");
    }

}
