<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart;

use JsonSerializable;
use WBW\HighchartsBundle\API\Chart\Chart\HighchartsEvents;
use WBW\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d;
use WBW\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton;

/**
 * Highcharts chart.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsChart implements JsonSerializable {

	/**
	 * Align ticks.
	 *
	 * @var boolean
	 */
	private $alignTicks = true;

	/**
	 * Animation.
	 *
	 * @var boolean|array
	 */
	private $animation = true;

	/**
	 * Background color.
	 *
	 * @var string
	 */
	private $backgroundColor = "#FFFFFF";

	/**
	 * Border color.
	 *
	 * @var string
	 */
	private $borderColor = "#335cad";

	/**
	 * Border radius.
	 *
	 * @var integer
	 */
	private $borderRadius = 0;

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
	 */
	private $className;

	/**
	 * Color count.
	 *
	 * @var integer
	 * @since 5.0.0
	 */
	private $colorCount = 10;

	/**
	 * Default series type.
	 *
	 * @var string
	 * @deprecated
	 */
	private $defaultSeriesType = "line";

	/**
	 * Description.
	 *
	 * @var string
	 * @since 5.0.0
	 */
	private $description;

	/**
	 * Events.
	 *
	 * @var HighchartsEvents
	 */
	private $events;

	/**
	 * Height.
	 *
	 * @var integer|string
	 */
	private $height;

	/**
	 * Ignore hidden series.
	 *
	 * @var boolean
	 * @since 1.2.0
	 */
	private $ignoreHiddenSeries = true;

	/**
	 * Inverted.
	 *
	 * @var boolean
	 */
	private $inverted = false;

	/**
	 * Margin.
	 *
	 * @var array
	 */
	private $margin;

	/**
	 * Margin bottom.
	 *
	 * @var integer
	 * @since 2.0
	 */
	private $marginBottom;

	/**
	 * Margin left.
	 *
	 * @var integer
	 * @since 2.0
	 */
	private $marginLeft;

	/**
	 * Margin right.
	 *
	 * @var integer
	 * @since 2.0
	 */
	private $marginRight;

	/**
	 * Margin top.
	 *
	 * @var integer
	 * @since 2.0
	 */
	private $marginTop;

	/**
	 * Options3d.
	 *
	 * @var HighchartsOptions3d
	 * @since 4.0
	 */
	private $options3d;

	/**
	 * Pan key.
	 *
	 * @var string
	 * @since 4.0.3
	 */
	private $panKey;

	/**
	 * Panning.
	 *
	 * @var boolean
	 * @since 4.0.3
	 */
	private $panning = false;

	/**
	 * Pinch type.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $pinchType;

	/**
	 * Plot background color.
	 *
	 * @var string
	 */
	private $plotBackgroundColor;

	/**
	 * Plot background image.
	 *
	 * @var string
	 */
	private $plotBackgroundImage;

	/**
	 * Plot border color.
	 *
	 * @var string
	 */
	private $plotBorderColor = "#cccccc";

	/**
	 * Plot border width.
	 *
	 * @var integer
	 */
	private $plotBorderWidth = 0;

	/**
	 * Plot shadow.
	 *
	 * @var boolean|array
	 */
	private $plotShadow = false;

	/**
	 * Polar.
	 *
	 * @var boolean
	 * @since 2.3.0
	 */
	private $polar = false;

	/**
	 * Reflow.
	 *
	 * @var boolean
	 * @since 2.1
	 */
	private $reflow = true;

	/**
	 * Render to.
	 *
	 * @var string
	 */
	private $renderTo;

	/**
	 * Reset zoom button.
	 *
	 * @var HighchartsResetZoomButton
	 */
	private $resetZoomButton;

	/**
	 * Selection marker fill.
	 *
	 * @var string
	 * @since 2.1.7
	 */
	private $selectionMarkerFill = "rgba(51,92,173,0.25)";

	/**
	 * Shadow.
	 *
	 * @var boolean|array
	 */
	private $shadow = false;

	/**
	 * Show axes.
	 *
	 * @var boolean
	 * @since 1.2.5
	 */
	private $showAxes = false;

	/**
	 * Spacing.
	 *
	 * @var array
	 * @since 3.0.6
	 */
	private $spacing = [10, 10, 15, 10];

	/**
	 * Spacing bottom.
	 *
	 * @var integer
	 * @since 2.1
	 */
	private $spacingBottom = 15;

	/**
	 * Spacing left.
	 *
	 * @var integer
	 * @since 2.1
	 */
	private $spacingLeft = 10;

	/**
	 * Spacing right.
	 *
	 * @var integer
	 * @since 2.1
	 */
	private $spacingRight = 10;

	/**
	 * Spacing top.
	 *
	 * @var integer
	 * @since 2.1
	 */
	private $spacingTop = 10;

	/**
	 * Style.
	 *
	 * @var array
	 */
	private $style = ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif","fontSize" => "12px"];

	/**
	 * Type.
	 *
	 * @var string
	 * @since 2.1.0
	 */
	private $type = "line";

	/**
	 * Type description.
	 *
	 * @var string
	 * @since 5.0.0
	 */
	private $typeDescription;

	/**
	 * Width.
	 *
	 * @var integer
	 */
	private $width;

	/**
	 * Zoom type.
	 *
	 * @var string
	 */
	private $zoomType;

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

		// Check the align ticks.
		if (!is_null($this->alignTicks)) {
			$this->alignTicks = null;
		}

		// Check the animation.
		if (!is_null($this->animation)) {
			$this->animation = null;
		}

		// Check the background color.
		if (!is_null($this->backgroundColor)) {
			$this->backgroundColor = null;
		}

		// Check the border color.
		if (!is_null($this->borderColor)) {
			$this->borderColor = null;
		}

		// Check the border radius.
		if (!is_null($this->borderRadius)) {
			$this->borderRadius = null;
		}

		// Check the border width.
		if (!is_null($this->borderWidth)) {
			$this->borderWidth = null;
		}

		// Check the class name.
		if (!is_null($this->className)) {
			$this->className = null;
		}

		// Check the color count.
		if (!is_null($this->colorCount)) {
			$this->colorCount = null;
		}

		// Check the default series type.
		if (!is_null($this->defaultSeriesType)) {
			$this->defaultSeriesType = null;
		}

		// Check the description.
		if (!is_null($this->description)) {
			$this->description = null;
		}

		// Check the events.
		if (!is_null($this->events)) {
			$this->events->clear();
		}

		// Check the height.
		if (!is_null($this->height)) {
			$this->height = null;
		}

		// Check the ignore hidden series.
		if (!is_null($this->ignoreHiddenSeries)) {
			$this->ignoreHiddenSeries = null;
		}

		// Check the inverted.
		if (!is_null($this->inverted)) {
			$this->inverted = null;
		}

		// Check the margin.
		if (!is_null($this->margin)) {
			$this->margin = null;
		}

		// Check the margin bottom.
		if (!is_null($this->marginBottom)) {
			$this->marginBottom = null;
		}

		// Check the margin left.
		if (!is_null($this->marginLeft)) {
			$this->marginLeft = null;
		}

		// Check the margin right.
		if (!is_null($this->marginRight)) {
			$this->marginRight = null;
		}

		// Check the margin top.
		if (!is_null($this->marginTop)) {
			$this->marginTop = null;
		}

		// Check the options3d.
		if (!is_null($this->options3d)) {
			$this->options3d->clear();
		}

		// Check the pan key.
		if (!is_null($this->panKey)) {
			$this->panKey = null;
		}

		// Check the panning.
		if (!is_null($this->panning)) {
			$this->panning = null;
		}

		// Check the pinch type.
		if (!is_null($this->pinchType)) {
			$this->pinchType = null;
		}

		// Check the plot background color.
		if (!is_null($this->plotBackgroundColor)) {
			$this->plotBackgroundColor = null;
		}

		// Check the plot background image.
		if (!is_null($this->plotBackgroundImage)) {
			$this->plotBackgroundImage = null;
		}

		// Check the plot border color.
		if (!is_null($this->plotBorderColor)) {
			$this->plotBorderColor = null;
		}

		// Check the plot border width.
		if (!is_null($this->plotBorderWidth)) {
			$this->plotBorderWidth = null;
		}

		// Check the plot shadow.
		if (!is_null($this->plotShadow)) {
			$this->plotShadow = null;
		}

		// Check the polar.
		if (!is_null($this->polar)) {
			$this->polar = null;
		}

		// Check the reflow.
		if (!is_null($this->reflow)) {
			$this->reflow = null;
		}

		// Check the render to.
		if (!is_null($this->renderTo)) {
			$this->renderTo = null;
		}

		// Check the reset zoom button.
		if (!is_null($this->resetZoomButton)) {
			$this->resetZoomButton->clear();
		}

		// Check the selection marker fill.
		if (!is_null($this->selectionMarkerFill)) {
			$this->selectionMarkerFill = null;
		}

		// Check the shadow.
		if (!is_null($this->shadow)) {
			$this->shadow = null;
		}

		// Check the show axes.
		if (!is_null($this->showAxes)) {
			$this->showAxes = null;
		}

		// Check the spacing.
		if (!is_null($this->spacing)) {
			$this->spacing = null;
		}

		// Check the spacing bottom.
		if (!is_null($this->spacingBottom)) {
			$this->spacingBottom = null;
		}

		// Check the spacing left.
		if (!is_null($this->spacingLeft)) {
			$this->spacingLeft = null;
		}

		// Check the spacing right.
		if (!is_null($this->spacingRight)) {
			$this->spacingRight = null;
		}

		// Check the spacing top.
		if (!is_null($this->spacingTop)) {
			$this->spacingTop = null;
		}

		// Check the style.
		if (!is_null($this->style)) {
			$this->style = null;
		}

		// Check the type.
		if (!is_null($this->type)) {
			$this->type = null;
		}

		// Check the type description.
		if (!is_null($this->typeDescription)) {
			$this->typeDescription = null;
		}

		// Check the width.
		if (!is_null($this->width)) {
			$this->width = null;
		}

		// Check the zoom type.
		if (!is_null($this->zoomType)) {
			$this->zoomType = null;
		}
	}

	/**
	 * Get the align ticks.
	 *
	 * @return boolean Returns the align ticks.
	 */
	public function getAlignTicks() {
		return $this->alignTicks;
	}

	/**
	 * Get the animation.
	 *
	 * @return boolean|array Returns the animation.
	 */
	public function getAnimation() {
		return $this->animation;
	}

	/**
	 * Get the background color.
	 *
	 * @return string Returns the background color.
	 */
	public function getBackgroundColor() {
		return $this->backgroundColor;
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
	 * Get the border radius.
	 *
	 * @return integer Returns the border radius.
	 */
	public function getBorderRadius() {
		return $this->borderRadius;
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
	 * Get the color count.
	 *
	 * @return integer Returns the color count.
	 */
	public function getColorCount() {
		return $this->colorCount;
	}

	/**
	 * Get the default series type.
	 *
	 * @return string Returns the default series type.
	 * @deprecated
	 */
	public function getDefaultSeriesType() {
		return $this->defaultSeriesType;
	}

	/**
	 * Get the description.
	 *
	 * @return string Returns the description.
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Get the events.
	 *
	 * @return HighchartsEvents Returns the events.
	 */
	public function getEvents() {
		return $this->events;
	}

	/**
	 * Get the height.
	 *
	 * @return integer|string Returns the height.
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * Get the ignore hidden series.
	 *
	 * @return boolean Returns the ignore hidden series.
	 */
	public function getIgnoreHiddenSeries() {
		return $this->ignoreHiddenSeries;
	}

	/**
	 * Get the inverted.
	 *
	 * @return boolean Returns the inverted.
	 */
	public function getInverted() {
		return $this->inverted;
	}

	/**
	 * Get the margin.
	 *
	 * @return array Returns the margin.
	 */
	public function getMargin() {
		return $this->margin;
	}

	/**
	 * Get the margin bottom.
	 *
	 * @return integer Returns the margin bottom.
	 */
	public function getMarginBottom() {
		return $this->marginBottom;
	}

	/**
	 * Get the margin left.
	 *
	 * @return integer Returns the margin left.
	 */
	public function getMarginLeft() {
		return $this->marginLeft;
	}

	/**
	 * Get the margin right.
	 *
	 * @return integer Returns the margin right.
	 */
	public function getMarginRight() {
		return $this->marginRight;
	}

	/**
	 * Get the margin top.
	 *
	 * @return integer Returns the margin top.
	 */
	public function getMarginTop() {
		return $this->marginTop;
	}

	/**
	 * Get the options3d.
	 *
	 * @return HighchartsOptions3d Returns the options3d.
	 */
	public function getOptions3d() {
		return $this->options3d;
	}

	/**
	 * Get the pan key.
	 *
	 * @return string Returns the pan key.
	 */
	public function getPanKey() {
		return $this->panKey;
	}

	/**
	 * Get the panning.
	 *
	 * @return boolean Returns the panning.
	 */
	public function getPanning() {
		return $this->panning;
	}

	/**
	 * Get the pinch type.
	 *
	 * @return string Returns the pinch type.
	 */
	public function getPinchType() {
		return $this->pinchType;
	}

	/**
	 * Get the plot background color.
	 *
	 * @return string Returns the plot background color.
	 */
	public function getPlotBackgroundColor() {
		return $this->plotBackgroundColor;
	}

	/**
	 * Get the plot background image.
	 *
	 * @return string Returns the plot background image.
	 */
	public function getPlotBackgroundImage() {
		return $this->plotBackgroundImage;
	}

	/**
	 * Get the plot border color.
	 *
	 * @return string Returns the plot border color.
	 */
	public function getPlotBorderColor() {
		return $this->plotBorderColor;
	}

	/**
	 * Get the plot border width.
	 *
	 * @return integer Returns the plot border width.
	 */
	public function getPlotBorderWidth() {
		return $this->plotBorderWidth;
	}

	/**
	 * Get the plot shadow.
	 *
	 * @return boolean|array Returns the plot shadow.
	 */
	public function getPlotShadow() {
		return $this->plotShadow;
	}

	/**
	 * Get the polar.
	 *
	 * @return boolean Returns the polar.
	 */
	public function getPolar() {
		return $this->polar;
	}

	/**
	 * Get the reflow.
	 *
	 * @return boolean Returns the reflow.
	 */
	public function getReflow() {
		return $this->reflow;
	}

	/**
	 * Get the render to.
	 *
	 * @return string Returns the render to.
	 */
	public function getRenderTo() {
		return $this->renderTo;
	}

	/**
	 * Get the reset zoom button.
	 *
	 * @return HighchartsResetZoomButton Returns the reset zoom button.
	 */
	public function getResetZoomButton() {
		return $this->resetZoomButton;
	}

	/**
	 * Get the selection marker fill.
	 *
	 * @return string Returns the selection marker fill.
	 */
	public function getSelectionMarkerFill() {
		return $this->selectionMarkerFill;
	}

	/**
	 * Get the shadow.
	 *
	 * @return boolean|array Returns the shadow.
	 */
	public function getShadow() {
		return $this->shadow;
	}

	/**
	 * Get the show axes.
	 *
	 * @return boolean Returns the show axes.
	 */
	public function getShowAxes() {
		return $this->showAxes;
	}

	/**
	 * Get the spacing.
	 *
	 * @return array Returns the spacing.
	 */
	public function getSpacing() {
		return $this->spacing;
	}

	/**
	 * Get the spacing bottom.
	 *
	 * @return integer Returns the spacing bottom.
	 */
	public function getSpacingBottom() {
		return $this->spacingBottom;
	}

	/**
	 * Get the spacing left.
	 *
	 * @return integer Returns the spacing left.
	 */
	public function getSpacingLeft() {
		return $this->spacingLeft;
	}

	/**
	 * Get the spacing right.
	 *
	 * @return integer Returns the spacing right.
	 */
	public function getSpacingRight() {
		return $this->spacingRight;
	}

	/**
	 * Get the spacing top.
	 *
	 * @return integer Returns the spacing top.
	 */
	public function getSpacingTop() {
		return $this->spacingTop;
	}

	/**
	 * Get the style.
	 *
	 * @return array Returns the style.
	 */
	public function getStyle() {
		return $this->style;
	}

	/**
	 * Get the type.
	 *
	 * @return string Returns the type.
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Get the type description.
	 *
	 * @return string Returns the type description.
	 */
	public function getTypeDescription() {
		return $this->typeDescription;
	}

	/**
	 * Get the width.
	 *
	 * @return integer Returns the width.
	 */
	public function getWidth() {
		return $this->width;
	}

	/**
	 * Get the zoom type.
	 *
	 * @return string Returns the zoom type.
	 */
	public function getZoomType() {
		return $this->zoomType;
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
	 * Create a new events.
	 *
	 * @return HighchartsEvents Returns the events.
	 */
	public function newEvents() {
		$this->events = new HighchartsEvents();
		return $this->events;
	}

	/**
	 * Create a new options3d.
	 *
	 * @return HighchartsOptions3d Returns the options3d.
	 */
	public function newOptions3d() {
		$this->options3d = new HighchartsOptions3d();
		return $this->options3d;
	}

	/**
	 * Create a new reset zoom button.
	 *
	 * @return HighchartsResetZoomButton Returns the reset zoom button.
	 */
	public function newResetZoomButton() {
		$this->resetZoomButton = new HighchartsResetZoomButton();
		return $this->resetZoomButton;
	}

	/**
	 * Set the align ticks.
	 *
	 * @param boolean $alignTicks The align ticks.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setAlignTicks($alignTicks) {
		$this->alignTicks = $alignTicks;
		return $this;
	}

	/**
	 * Set the animation.
	 *
	 * @param boolean|array $animation The animation.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setAnimation($animation) {
		$this->animation = $animation;
		return $this;
	}

	/**
	 * Set the background color.
	 *
	 * @param string $backgroundColor The background color.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setBackgroundColor($backgroundColor) {
		$this->backgroundColor = $backgroundColor;
		return $this;
	}

	/**
	 * Set the border color.
	 *
	 * @param string $borderColor The border color.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setBorderColor($borderColor) {
		$this->borderColor = $borderColor;
		return $this;
	}

	/**
	 * Set the border radius.
	 *
	 * @param integer $borderRadius The border radius.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setBorderRadius($borderRadius) {
		$this->borderRadius = $borderRadius;
		return $this;
	}

	/**
	 * Set the border width.
	 *
	 * @param integer $borderWidth The border width.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setBorderWidth($borderWidth) {
		$this->borderWidth = $borderWidth;
		return $this;
	}

	/**
	 * Set the class name.
	 *
	 * @param string $className The class name.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setClassName($className) {
		$this->className = $className;
		return $this;
	}

	/**
	 * Set the color count.
	 *
	 * @param integer $colorCount The color count.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setColorCount($colorCount) {
		$this->colorCount = $colorCount;
		return $this;
	}

	/**
	 * Set the default series type.
	 *
	 * @param string $defaultSeriesType The default series type.
	 * @return HighchartsChart Returns the highcharts chart.
	 * @deprecated
	 */
	public function setDefaultSeriesType($defaultSeriesType) {
		$this->defaultSeriesType = $defaultSeriesType;
		return $this;
	}

	/**
	 * Set the description.
	 *
	 * @param string $description The description.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Set the events.
	 *
	 * @param HighchartsEvents $events The events.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setEvents(HighchartsEvents $events = null) {
		$this->events = $events;
		return $this;
	}

	/**
	 * Set the height.
	 *
	 * @param integer|string $height The height.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setHeight($height) {
		$this->height = $height;
		return $this;
	}

	/**
	 * Set the ignore hidden series.
	 *
	 * @param boolean $ignoreHiddenSeries The ignore hidden series.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setIgnoreHiddenSeries($ignoreHiddenSeries) {
		$this->ignoreHiddenSeries = $ignoreHiddenSeries;
		return $this;
	}

	/**
	 * Set the inverted.
	 *
	 * @param boolean $inverted The inverted.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setInverted($inverted) {
		$this->inverted = $inverted;
		return $this;
	}

	/**
	 * Set the margin.
	 *
	 * @param array $margin The margin.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setMargin(array $margin = null) {
		$this->margin = $margin;
		return $this;
	}

	/**
	 * Set the margin bottom.
	 *
	 * @param integer $marginBottom The margin bottom.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setMarginBottom($marginBottom) {
		$this->marginBottom = $marginBottom;
		return $this;
	}

	/**
	 * Set the margin left.
	 *
	 * @param integer $marginLeft The margin left.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setMarginLeft($marginLeft) {
		$this->marginLeft = $marginLeft;
		return $this;
	}

	/**
	 * Set the margin right.
	 *
	 * @param integer $marginRight The margin right.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setMarginRight($marginRight) {
		$this->marginRight = $marginRight;
		return $this;
	}

	/**
	 * Set the margin top.
	 *
	 * @param integer $marginTop The margin top.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setMarginTop($marginTop) {
		$this->marginTop = $marginTop;
		return $this;
	}

	/**
	 * Set the options3d.
	 *
	 * @param HighchartsOptions3d $options3d The options3d.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setOptions3d(HighchartsOptions3d $options3d = null) {
		$this->options3d = $options3d;
		return $this;
	}

	/**
	 * Set the pan key.
	 *
	 * @param string $panKey The pan key.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setPanKey($panKey) {
		$this->panKey = $panKey;
		return $this;
	}

	/**
	 * Set the panning.
	 *
	 * @param boolean $panning The panning.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setPanning($panning) {
		$this->panning = $panning;
		return $this;
	}

	/**
	 * Set the pinch type.
	 *
	 * @param string $pinchType The pinch type.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setPinchType($pinchType) {
		$this->pinchType = $pinchType;
		return $this;
	}

	/**
	 * Set the plot background color.
	 *
	 * @param string $plotBackgroundColor The plot background color.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setPlotBackgroundColor($plotBackgroundColor) {
		$this->plotBackgroundColor = $plotBackgroundColor;
		return $this;
	}

	/**
	 * Set the plot background image.
	 *
	 * @param string $plotBackgroundImage The plot background image.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setPlotBackgroundImage($plotBackgroundImage) {
		$this->plotBackgroundImage = $plotBackgroundImage;
		return $this;
	}

	/**
	 * Set the plot border color.
	 *
	 * @param string $plotBorderColor The plot border color.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setPlotBorderColor($plotBorderColor) {
		$this->plotBorderColor = $plotBorderColor;
		return $this;
	}

	/**
	 * Set the plot border width.
	 *
	 * @param integer $plotBorderWidth The plot border width.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setPlotBorderWidth($plotBorderWidth) {
		$this->plotBorderWidth = $plotBorderWidth;
		return $this;
	}

	/**
	 * Set the plot shadow.
	 *
	 * @param boolean|array $plotShadow The plot shadow.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setPlotShadow($plotShadow) {
		$this->plotShadow = $plotShadow;
		return $this;
	}

	/**
	 * Set the polar.
	 *
	 * @param boolean $polar The polar.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setPolar($polar) {
		$this->polar = $polar;
		return $this;
	}

	/**
	 * Set the reflow.
	 *
	 * @param boolean $reflow The reflow.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setReflow($reflow) {
		$this->reflow = $reflow;
		return $this;
	}

	/**
	 * Set the render to.
	 *
	 * @param string $renderTo The render to.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setRenderTo($renderTo) {
		$this->renderTo = $renderTo;
		return $this;
	}

	/**
	 * Set the reset zoom button.
	 *
	 * @param HighchartsResetZoomButton $resetZoomButton The reset zoom button.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setResetZoomButton(HighchartsResetZoomButton $resetZoomButton = null) {
		$this->resetZoomButton = $resetZoomButton;
		return $this;
	}

	/**
	 * Set the selection marker fill.
	 *
	 * @param string $selectionMarkerFill The selection marker fill.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setSelectionMarkerFill($selectionMarkerFill) {
		$this->selectionMarkerFill = $selectionMarkerFill;
		return $this;
	}

	/**
	 * Set the shadow.
	 *
	 * @param boolean|array $shadow The shadow.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setShadow($shadow) {
		$this->shadow = $shadow;
		return $this;
	}

	/**
	 * Set the show axes.
	 *
	 * @param boolean $showAxes The show axes.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setShowAxes($showAxes) {
		$this->showAxes = $showAxes;
		return $this;
	}

	/**
	 * Set the spacing.
	 *
	 * @param array $spacing The spacing.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setSpacing(array $spacing = null) {
		$this->spacing = $spacing;
		return $this;
	}

	/**
	 * Set the spacing bottom.
	 *
	 * @param integer $spacingBottom The spacing bottom.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setSpacingBottom($spacingBottom) {
		$this->spacingBottom = $spacingBottom;
		return $this;
	}

	/**
	 * Set the spacing left.
	 *
	 * @param integer $spacingLeft The spacing left.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setSpacingLeft($spacingLeft) {
		$this->spacingLeft = $spacingLeft;
		return $this;
	}

	/**
	 * Set the spacing right.
	 *
	 * @param integer $spacingRight The spacing right.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setSpacingRight($spacingRight) {
		$this->spacingRight = $spacingRight;
		return $this;
	}

	/**
	 * Set the spacing top.
	 *
	 * @param integer $spacingTop The spacing top.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setSpacingTop($spacingTop) {
		$this->spacingTop = $spacingTop;
		return $this;
	}

	/**
	 * Set the style.
	 *
	 * @param array $style The style.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setStyle(array $style = null) {
		$this->style = $style;
		return $this;
	}

	/**
	 * Set the type.
	 *
	 * @param string $type The type.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setType($type) {
		$this->type = $type;
		return $this;
	}

	/**
	 * Set the type description.
	 *
	 * @param string $typeDescription The type description.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setTypeDescription($typeDescription) {
		$this->typeDescription = $typeDescription;
		return $this;
	}

	/**
	 * Set the width.
	 *
	 * @param integer $width The width.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setWidth($width) {
		$this->width = $width;
		return $this;
	}

	/**
	 * Set the zoom type.
	 *
	 * @param string $zoomType The zoom type.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setZoomType($zoomType) {
		$this->zoomType = $zoomType;
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

		// Check the align ticks.
		if (!is_null($this->alignTicks)) {
			$output["alignTicks"] = $this->alignTicks;
		}

		// Check the animation.
		if (!is_null($this->animation)) {
			$output["animation"] = $this->animation;
		}

		// Check the background color.
		if (!is_null($this->backgroundColor)) {
			$output["backgroundColor"] = $this->backgroundColor;
		}

		// Check the border color.
		if (!is_null($this->borderColor)) {
			$output["borderColor"] = $this->borderColor;
		}

		// Check the border radius.
		if (!is_null($this->borderRadius)) {
			$output["borderRadius"] = $this->borderRadius;
		}

		// Check the border width.
		if (!is_null($this->borderWidth)) {
			$output["borderWidth"] = $this->borderWidth;
		}

		// Check the class name.
		if (!is_null($this->className)) {
			$output["className"] = $this->className;
		}

		// Check the color count.
		if (!is_null($this->colorCount)) {
			$output["colorCount"] = $this->colorCount;
		}

		// Check the description.
		if (!is_null($this->description)) {
			$output["description"] = $this->description;
		}

		// Check the events.
		if (!is_null($this->events)) {
			$output["events"] = $this->events->toArray();
		}

		// Check the height.
		if (!is_null($this->height)) {
			$output["height"] = $this->height;
		}

		// Check the ignore hidden series.
		if (!is_null($this->ignoreHiddenSeries)) {
			$output["ignoreHiddenSeries"] = $this->ignoreHiddenSeries;
		}

		// Check the inverted.
		if (!is_null($this->inverted)) {
			$output["inverted"] = $this->inverted;
		}

		// Check the margin.
		if (!is_null($this->margin)) {
			$output["margin"] = $this->margin;
		}

		// Check the margin bottom.
		if (!is_null($this->marginBottom)) {
			$output["marginBottom"] = $this->marginBottom;
		}

		// Check the margin left.
		if (!is_null($this->marginLeft)) {
			$output["marginLeft"] = $this->marginLeft;
		}

		// Check the margin right.
		if (!is_null($this->marginRight)) {
			$output["marginRight"] = $this->marginRight;
		}

		// Check the margin top.
		if (!is_null($this->marginTop)) {
			$output["marginTop"] = $this->marginTop;
		}

		// Check the options3d.
		if (!is_null($this->options3d)) {
			$output["options3d"] = $this->options3d->toArray();
		}

		// Check the pan key.
		if (!is_null($this->panKey)) {
			$output["panKey"] = $this->panKey;
		}

		// Check the panning.
		if (!is_null($this->panning)) {
			$output["panning"] = $this->panning;
		}

		// Check the pinch type.
		if (!is_null($this->pinchType)) {
			$output["pinchType"] = $this->pinchType;
		}

		// Check the plot background color.
		if (!is_null($this->plotBackgroundColor)) {
			$output["plotBackgroundColor"] = $this->plotBackgroundColor;
		}

		// Check the plot background image.
		if (!is_null($this->plotBackgroundImage)) {
			$output["plotBackgroundImage"] = $this->plotBackgroundImage;
		}

		// Check the plot border color.
		if (!is_null($this->plotBorderColor)) {
			$output["plotBorderColor"] = $this->plotBorderColor;
		}

		// Check the plot border width.
		if (!is_null($this->plotBorderWidth)) {
			$output["plotBorderWidth"] = $this->plotBorderWidth;
		}

		// Check the plot shadow.
		if (!is_null($this->plotShadow)) {
			$output["plotShadow"] = $this->plotShadow;
		}

		// Check the polar.
		if (!is_null($this->polar)) {
			$output["polar"] = $this->polar;
		}

		// Check the reflow.
		if (!is_null($this->reflow)) {
			$output["reflow"] = $this->reflow;
		}

		// Check the render to.
		if (!is_null($this->renderTo)) {
			$output["renderTo"] = $this->renderTo;
		}

		// Check the reset zoom button.
		if (!is_null($this->resetZoomButton)) {
			$output["resetZoomButton"] = $this->resetZoomButton->toArray();
		}

		// Check the selection marker fill.
		if (!is_null($this->selectionMarkerFill)) {
			$output["selectionMarkerFill"] = $this->selectionMarkerFill;
		}

		// Check the shadow.
		if (!is_null($this->shadow)) {
			$output["shadow"] = $this->shadow;
		}

		// Check the show axes.
		if (!is_null($this->showAxes)) {
			$output["showAxes"] = $this->showAxes;
		}

		// Check the spacing.
		if (!is_null($this->spacing)) {
			$output["spacing"] = $this->spacing;
		}

		// Check the spacing bottom.
		if (!is_null($this->spacingBottom)) {
			$output["spacingBottom"] = $this->spacingBottom;
		}

		// Check the spacing left.
		if (!is_null($this->spacingLeft)) {
			$output["spacingLeft"] = $this->spacingLeft;
		}

		// Check the spacing right.
		if (!is_null($this->spacingRight)) {
			$output["spacingRight"] = $this->spacingRight;
		}

		// Check the spacing top.
		if (!is_null($this->spacingTop)) {
			$output["spacingTop"] = $this->spacingTop;
		}

		// Check the style.
		if (!is_null($this->style)) {
			$output["style"] = $this->style;
		}

		// Check the type.
		if (!is_null($this->type)) {
			$output["type"] = $this->type;
		}

		// Check the type description.
		if (!is_null($this->typeDescription)) {
			$output["typeDescription"] = $this->typeDescription;
		}

		// Check the width.
		if (!is_null($this->width)) {
			$output["width"] = $this->width;
		}

		// Check the zoom type.
		if (!is_null($this->zoomType)) {
			$output["zoomType"] = $this->zoomType;
		}

		// Return the output.
		return $output;
	}
}

