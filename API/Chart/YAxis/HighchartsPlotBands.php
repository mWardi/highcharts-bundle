<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\YAxis;

use JsonSerializable;
use WBW\HighchartsBundle\API\Chart\YAxis\PlotBands\HighchartsLabel;

/**
 * Highcharts plot bands.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\API\Chart\YAxis
 * @version 5.0.14
 * @final
 */
final class HighchartsPlotBands implements JsonSerializable {

	/**
	 * Border color.
	 *
	 * @var string
	 */
	private $borderColor;

	/**
	 * Border width.
	 *
	 * @var integer
	 */
	private $borderWidth = 0;

	/**
	 * Class name.
	 *
	 * @var string
	 * @since 5.0.0
	 */
	private $className;

	/**
	 * Color.
	 *
	 * @var string
	 */
	private $color;

	/**
	 * Events.
	 *
	 * @var Object
	 * @since 1.2
	 */
	private $events;

	/**
	 * From.
	 *
	 * @var integer
	 */
	private $from;

	/**
	 * Id.
	 *
	 * @var string
	 */
	private $id;

	/**
	 * Inner radius.
	 *
	 * @var integer|string
	 * @since 2.3
	 */
	private $innerRadius;

	/**
	 * Label.
	 *
	 * @var HighchartsLabel
	 */
	private $label;

	/**
	 * Outer radius.
	 *
	 * @var integer|string
	 * @since 2.3
	 */
	private $outerRadius = "100%";

	/**
	 * Thickness.
	 *
	 * @var integer|string
	 * @since 2.3
	 */
	private $thickness = "10";

	/**
	 * To.
	 *
	 * @var integer
	 */
	private $to;

	/**
	 * Z index.
	 *
	 * @var integer
	 * @since 1.2
	 */
	private $zIndex;

	/**
	 * Constructor.
	 *
	 * @param boolean $ignoreDefaultValues Ignore the default values.
	 */
	public function __construct($ignoreDefaultValues = true) {
		if ($ignoreDefaultValues === true) {
			$this->clear();
		}
	}

	/**
	 * Clear.
	 */
	public function clear() {

		// Check the border color.
		if (!is_null($this->borderColor)) {
			$this->borderColor = null;
		}

		// Check the border width.
		if (!is_null($this->borderWidth)) {
			$this->borderWidth = null;
		}

		// Check the class name.
		if (!is_null($this->className)) {
			$this->className = null;
		}

		// Check the color.
		if (!is_null($this->color)) {
			$this->color = null;
		}

		// Check the events.
		if (!is_null($this->events)) {
			$this->events = null;
		}

		// Check the from.
		if (!is_null($this->from)) {
			$this->from = null;
		}

		// Check the id.
		if (!is_null($this->id)) {
			$this->id = null;
		}

		// Check the inner radius.
		if (!is_null($this->innerRadius)) {
			$this->innerRadius = null;
		}

		// Check the label.
		if (!is_null($this->label)) {
			$this->label->clear();
		}

		// Check the outer radius.
		if (!is_null($this->outerRadius)) {
			$this->outerRadius = null;
		}

		// Check the thickness.
		if (!is_null($this->thickness)) {
			$this->thickness = null;
		}

		// Check the to.
		if (!is_null($this->to)) {
			$this->to = null;
		}

		// Check the z index.
		if (!is_null($this->zIndex)) {
			$this->zIndex = null;
		}
	}

	/**
	 * Get the border color.
	 *
	 * @return string Returns the border color.
	 */
	public function getBorderColor() {
		return $this->borderColor;
	}

	/**
	 * Get the border width.
	 *
	 * @return integer Returns the border width.
	 */
	public function getBorderWidth() {
		return $this->borderWidth;
	}

	/**
	 * Get the class name.
	 *
	 * @return string Returns the class name.
	 */
	public function getClassName() {
		return $this->className;
	}

	/**
	 * Get the color.
	 *
	 * @return string Returns the color.
	 */
	public function getColor() {
		return $this->color;
	}

	/**
	 * Get the events.
	 *
	 * @return Object Returns the events.
	 */
	public function getEvents() {
		return $this->events;
	}

	/**
	 * Get the from.
	 *
	 * @return integer Returns the from.
	 */
	public function getFrom() {
		return $this->from;
	}

	/**
	 * Get the id.
	 *
	 * @return string Returns the id.
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get the inner radius.
	 *
	 * @return integer|string Returns the inner radius.
	 */
	public function getInnerRadius() {
		return $this->innerRadius;
	}

	/**
	 * Get the label.
	 *
	 * @return HighchartsLabel Returns the label.
	 */
	public function getLabel() {
		return $this->label;
	}

	/**
	 * Get the outer radius.
	 *
	 * @return integer|string Returns the outer radius.
	 */
	public function getOuterRadius() {
		return $this->outerRadius;
	}

	/**
	 * Get the thickness.
	 *
	 * @return integer|string Returns the thickness.
	 */
	public function getThickness() {
		return $this->thickness;
	}

	/**
	 * Get the to.
	 *
	 * @return integer Returns the to.
	 */
	public function getTo() {
		return $this->to;
	}

	/**
	 * Get the z index.
	 *
	 * @return integer Returns the z index.
	 */
	public function getZIndex() {
		return $this->zIndex;
	}

	/**
	 * Serialize this instance.
	 *
	 * @return array Returns an array representing this instance.
	 */
	public function jsonSerialize() {
		return $this->toArray();
	}

	/**
	 * Create a new label.
	 *
	 * @return HighchartsLabel Returns the label.
	 */
	public function newLabel() {
		$this->label = new HighchartsLabel();
		return $this->label;
	}

	/**
	 * Set the border color.
	 *
	 * @param string $borderColor The border color.
	 * @return HighchartsPlotBands Returns the highcharts plot bands.
	 */
	public function setBorderColor($borderColor) {
		$this->borderColor = $borderColor;
		return $this;
	}

	/**
	 * Set the border width.
	 *
	 * @param integer $borderWidth The border width.
	 * @return HighchartsPlotBands Returns the highcharts plot bands.
	 */
	public function setBorderWidth($borderWidth) {
		$this->borderWidth = $borderWidth;
		return $this;
	}

	/**
	 * Set the class name.
	 *
	 * @param string $className The class name.
	 * @return HighchartsPlotBands Returns the highcharts plot bands.
	 */
	public function setClassName($className) {
		$this->className = $className;
		return $this;
	}

	/**
	 * Set the color.
	 *
	 * @param string $color The color.
	 * @return HighchartsPlotBands Returns the highcharts plot bands.
	 */
	public function setColor($color) {
		$this->color = $color;
		return $this;
	}

	/**
	 * Set the events.
	 *
	 * @param Object $events The events.
	 * @return HighchartsPlotBands Returns the highcharts plot bands.
	 */
	public function setEvents($events) {
		$this->events = $events;
		return $this;
	}

	/**
	 * Set the from.
	 *
	 * @param integer $from The from.
	 * @return HighchartsPlotBands Returns the highcharts plot bands.
	 */
	public function setFrom($from) {
		$this->from = $from;
		return $this;
	}

	/**
	 * Set the id.
	 *
	 * @param string $id The id.
	 * @return HighchartsPlotBands Returns the highcharts plot bands.
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Set the inner radius.
	 *
	 * @param integer|string $innerRadius The inner radius.
	 * @return HighchartsPlotBands Returns the highcharts plot bands.
	 */
	public function setInnerRadius($innerRadius) {
		$this->innerRadius = $innerRadius;
		return $this;
	}

	/**
	 * Set the label.
	 *
	 * @param HighchartsLabel $label The label.
	 * @return HighchartsPlotBands Returns the highcharts plot bands.
	 */
	public function setLabel(HighchartsLabel $label = null) {
		$this->label = $label;
		return $this;
	}

	/**
	 * Set the outer radius.
	 *
	 * @param integer|string $outerRadius The outer radius.
	 * @return HighchartsPlotBands Returns the highcharts plot bands.
	 */
	public function setOuterRadius($outerRadius) {
		$this->outerRadius = $outerRadius;
		return $this;
	}

	/**
	 * Set the thickness.
	 *
	 * @param integer|string $thickness The thickness.
	 * @return HighchartsPlotBands Returns the highcharts plot bands.
	 */
	public function setThickness($thickness) {
		$this->thickness = $thickness;
		return $this;
	}

	/**
	 * Set the to.
	 *
	 * @param integer $to The to.
	 * @return HighchartsPlotBands Returns the highcharts plot bands.
	 */
	public function setTo($to) {
		$this->to = $to;
		return $this;
	}

	/**
	 * Set the z index.
	 *
	 * @param integer $zIndex The z index.
	 * @return HighchartsPlotBands Returns the highcharts plot bands.
	 */
	public function setZIndex($zIndex) {
		$this->zIndex = $zIndex;
		return $this;
	}

	/**
	 * Convert into an array representing this instance.
	 *
	 * @return array Returns an array representing this instance.
	 */
	public function toArray() {

		// Initialize the output.
		$output = [];

		// Check the border color.
		if (!is_null($this->borderColor)) {
			$output["borderColor"] = $this->borderColor;
		}

		// Check the border width.
		if (!is_null($this->borderWidth)) {
			$output["borderWidth"] = $this->borderWidth;
		}

		// Check the class name.
		if (!is_null($this->className)) {
			$output["className"] = $this->className;
		}

		// Check the color.
		if (!is_null($this->color)) {
			$output["color"] = $this->color;
		}

		// Check the events.
		if (!is_null($this->events)) {
			$output["events"] = $this->events;
		}

		// Check the from.
		if (!is_null($this->from)) {
			$output["from"] = $this->from;
		}

		// Check the id.
		if (!is_null($this->id)) {
			$output["id"] = $this->id;
		}

		// Check the inner radius.
		if (!is_null($this->innerRadius)) {
			$output["innerRadius"] = $this->innerRadius;
		}

		// Check the label.
		if (!is_null($this->label)) {
			$output["label"] = $this->label->toArray();
		}

		// Check the outer radius.
		if (!is_null($this->outerRadius)) {
			$output["outerRadius"] = $this->outerRadius;
		}

		// Check the thickness.
		if (!is_null($this->thickness)) {
			$output["thickness"] = $this->thickness;
		}

		// Check the to.
		if (!is_null($this->to)) {
			$output["to"] = $this->to;
		}

		// Check the z index.
		if (!is_null($this->zIndex)) {
			$output["zIndex"] = $this->zIndex;
		}

		// Return the output.
		return $output;
	}
}

