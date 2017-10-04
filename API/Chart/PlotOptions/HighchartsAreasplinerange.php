<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\PlotOptions;

use JsonSerializable;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Areasplinerange\HighchartsEvents;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Areasplinerange\HighchartsPoint;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Areasplinerange\HighchartsStates;

/**
 * Highcharts areasplinerange.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\PlotOptions
 * @version 5.0.14
 * @final
 */
final class HighchartsAreasplinerange implements JsonSerializable {

	/**
	 * Allow point select.
	 *
	 * @var boolean
	 * @since 1.2.0
	 */
	private $allowPointSelect = false;

	/**
	 * Animation.
	 *
	 * @var boolean
	 */
	private $animation = true;

	/**
	 * Animation limit.
	 *
	 * @var integer
	 */
	private $animationLimit;

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
	 * Color index.
	 *
	 * @var integer
	 * @since 5.0.0
	 */
	private $colorIndex;

	/**
	 * Connect nulls.
	 *
	 * @var boolean
	 */
	private $connectNulls = false;

	/**
	 * Crop threshold.
	 *
	 * @var integer
	 * @since 2.2
	 */
	private $cropThreshold = 300;

	/**
	 * Cursor.
	 *
	 * @var string
	 */
	private $cursor;

	/**
	 * Dash style.
	 *
	 * @var string
	 * @since 2.1
	 */
	private $dashStyle = "Solid";

	/**
	 * Data labels.
	 *
	 * @var array
	 * @since 2.3.0
	 */
	private $dataLabels;

	/**
	 * Description.
	 *
	 * @var string
	 * @since 5.0.0
	 */
	private $description;

	/**
	 * Enable mouse tracking.
	 *
	 * @var boolean
	 */
	private $enableMouseTracking = true;

	/**
	 * Events.
	 *
	 * @var HighchartsEvents
	 */
	private $events;

	/**
	 * Expose element to a11y.
	 *
	 * @var boolean
	 * @since 5.0.12
	 */
	private $exposeElementToA11y;

	/**
	 * Fill color.
	 *
	 * @var string
	 */
	private $fillColor;

	/**
	 * Fill opacity.
	 *
	 * @var integer
	 */
	private $fillOpacity = 0.75;

	/**
	 * Find nearest point by.
	 *
	 * @var string
	 * @since 5.0.10
	 */
	private $findNearestPointBy;

	/**
	 * Get extremes from all.
	 *
	 * @var boolean
	 * @since 4.1.6
	 */
	private $getExtremesFromAll = false;

	/**
	 * Keys.
	 *
	 * @var array
	 * @since 4.1.6
	 */
	private $keys;

	/**
	 * Line color.
	 *
	 * @var string
	 */
	private $lineColor;

	/**
	 * Line width.
	 *
	 * @var integer
	 * @since 2.3.0
	 */
	private $lineWidth = 1;

	/**
	 * Linecap.
	 *
	 * @var string
	 */
	private $linecap = "round";

	/**
	 * Linked to.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $linkedTo;

	/**
	 * Negative color.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $negativeColor;

	/**
	 * Negative fill color.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $negativeFillColor;

	/**
	 * Point.
	 *
	 * @var HighchartsPoint
	 */
	private $point;

	/**
	 * Point description formatter.
	 *
	 * @var string
	 * @since 5.0.12
	 */
	private $pointDescriptionFormatter;

	/**
	 * Point interval.
	 *
	 * @var integer
	 */
	private $pointInterval = 1;

	/**
	 * Point interval unit.
	 *
	 * @var string
	 * @since 4.1.0
	 */
	private $pointIntervalUnit;

	/**
	 * Point placement.
	 *
	 * @var string|integer
	 * @since 2.3.0
	 */
	private $pointPlacement;

	/**
	 * Point start.
	 *
	 * @var integer
	 */
	private $pointStart = 0;

	/**
	 * Selected.
	 *
	 * @var boolean
	 * @since 1.2.0
	 */
	private $selected = false;

	/**
	 * Shadow.
	 *
	 * @var boolean|array
	 */
	private $shadow = false;

	/**
	 * Show checkbox.
	 *
	 * @var boolean
	 * @since 1.2.0
	 */
	private $showCheckbox = false;

	/**
	 * Show in legend.
	 *
	 * @var boolean
	 */
	private $showInLegend = true;

	/**
	 * Skip keyboard navigation.
	 *
	 * @var boolean
	 * @since 5.0.12
	 */
	private $skipKeyboardNavigation;

	/**
	 * States.
	 *
	 * @var HighchartsStates
	 */
	private $states;

	/**
	 * Sticky tracking.
	 *
	 * @var boolean
	 * @since 2.0
	 */
	private $stickyTracking = true;

	/**
	 * Tooltip.
	 *
	 * @var array
	 * @since 2.3
	 */
	private $tooltip;

	/**
	 * Track by area.
	 *
	 * @var boolean
	 * @since 2.3.0
	 */
	private $trackByArea = true;

	/**
	 * Turbo threshold.
	 *
	 * @var integer
	 * @since 2.2
	 */
	private $turboThreshold = 1000;

	/**
	 * Visible.
	 *
	 * @var boolean
	 */
	private $visible = true;

	/**
	 * Zone axis.
	 *
	 * @var string
	 * @since 4.1.0
	 */
	private $zoneAxis = "y";

	/**
	 * Zones.
	 *
	 * @var array
	 * @since 4.1.0
	 */
	private $zones;

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
	 *
	 * @return void
	 */
	public function clear() {

		// Check the allow point select.
		if (!is_null($this->allowPointSelect)) {
			$this->allowPointSelect = null;
		}

		// Check the animation.
		if (!is_null($this->animation)) {
			$this->animation = null;
		}

		// Check the animation limit.
		if (!is_null($this->animationLimit)) {
			$this->animationLimit = null;
		}

		// Check the class name.
		if (!is_null($this->className)) {
			$this->className = null;
		}

		// Check the color.
		if (!is_null($this->color)) {
			$this->color = null;
		}

		// Check the color index.
		if (!is_null($this->colorIndex)) {
			$this->colorIndex = null;
		}

		// Check the connect nulls.
		if (!is_null($this->connectNulls)) {
			$this->connectNulls = null;
		}

		// Check the crop threshold.
		if (!is_null($this->cropThreshold)) {
			$this->cropThreshold = null;
		}

		// Check the cursor.
		if (!is_null($this->cursor)) {
			$this->cursor = null;
		}

		// Check the dash style.
		if (!is_null($this->dashStyle)) {
			$this->dashStyle = null;
		}

		// Check the data labels.
		if (!is_null($this->dataLabels)) {
			$this->dataLabels = null;
		}

		// Check the description.
		if (!is_null($this->description)) {
			$this->description = null;
		}

		// Check the enable mouse tracking.
		if (!is_null($this->enableMouseTracking)) {
			$this->enableMouseTracking = null;
		}

		// Check the events.
		if (!is_null($this->events)) {
			$this->events->clear();
		}

		// Check the expose element to a11y.
		if (!is_null($this->exposeElementToA11y)) {
			$this->exposeElementToA11y = null;
		}

		// Check the fill color.
		if (!is_null($this->fillColor)) {
			$this->fillColor = null;
		}

		// Check the fill opacity.
		if (!is_null($this->fillOpacity)) {
			$this->fillOpacity = null;
		}

		// Check the find nearest point by.
		if (!is_null($this->findNearestPointBy)) {
			$this->findNearestPointBy = null;
		}

		// Check the get extremes from all.
		if (!is_null($this->getExtremesFromAll)) {
			$this->getExtremesFromAll = null;
		}

		// Check the keys.
		if (!is_null($this->keys)) {
			$this->keys = null;
		}

		// Check the line color.
		if (!is_null($this->lineColor)) {
			$this->lineColor = null;
		}

		// Check the line width.
		if (!is_null($this->lineWidth)) {
			$this->lineWidth = null;
		}

		// Check the linecap.
		if (!is_null($this->linecap)) {
			$this->linecap = null;
		}

		// Check the linked to.
		if (!is_null($this->linkedTo)) {
			$this->linkedTo = null;
		}

		// Check the negative color.
		if (!is_null($this->negativeColor)) {
			$this->negativeColor = null;
		}

		// Check the negative fill color.
		if (!is_null($this->negativeFillColor)) {
			$this->negativeFillColor = null;
		}

		// Check the point.
		if (!is_null($this->point)) {
			$this->point->clear();
		}

		// Check the point description formatter.
		if (!is_null($this->pointDescriptionFormatter)) {
			$this->pointDescriptionFormatter = null;
		}

		// Check the point interval.
		if (!is_null($this->pointInterval)) {
			$this->pointInterval = null;
		}

		// Check the point interval unit.
		if (!is_null($this->pointIntervalUnit)) {
			$this->pointIntervalUnit = null;
		}

		// Check the point placement.
		if (!is_null($this->pointPlacement)) {
			$this->pointPlacement = null;
		}

		// Check the point start.
		if (!is_null($this->pointStart)) {
			$this->pointStart = null;
		}

		// Check the selected.
		if (!is_null($this->selected)) {
			$this->selected = null;
		}

		// Check the shadow.
		if (!is_null($this->shadow)) {
			$this->shadow = null;
		}

		// Check the show checkbox.
		if (!is_null($this->showCheckbox)) {
			$this->showCheckbox = null;
		}

		// Check the show in legend.
		if (!is_null($this->showInLegend)) {
			$this->showInLegend = null;
		}

		// Check the skip keyboard navigation.
		if (!is_null($this->skipKeyboardNavigation)) {
			$this->skipKeyboardNavigation = null;
		}

		// Check the states.
		if (!is_null($this->states)) {
			$this->states->clear();
		}

		// Check the sticky tracking.
		if (!is_null($this->stickyTracking)) {
			$this->stickyTracking = null;
		}

		// Check the tooltip.
		if (!is_null($this->tooltip)) {
			$this->tooltip = null;
		}

		// Check the track by area.
		if (!is_null($this->trackByArea)) {
			$this->trackByArea = null;
		}

		// Check the turbo threshold.
		if (!is_null($this->turboThreshold)) {
			$this->turboThreshold = null;
		}

		// Check the visible.
		if (!is_null($this->visible)) {
			$this->visible = null;
		}

		// Check the zone axis.
		if (!is_null($this->zoneAxis)) {
			$this->zoneAxis = null;
		}

		// Check the zones.
		if (!is_null($this->zones)) {
			$this->zones = null;
		}
	}

	/**
	 * Get the allow point select.
	 *
	 * @return boolean Returns the allow point select.
	 */
	public function getAllowPointSelect() {
		return $this->allowPointSelect;
	}

	/**
	 * Get the animation.
	 *
	 * @return boolean Returns the animation.
	 */
	public function getAnimation() {
		return $this->animation;
	}

	/**
	 * Get the animation limit.
	 *
	 * @return integer Returns the animation limit.
	 */
	public function getAnimationLimit() {
		return $this->animationLimit;
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
	 * Get the color index.
	 *
	 * @return integer Returns the color index.
	 */
	public function getColorIndex() {
		return $this->colorIndex;
	}

	/**
	 * Get the connect nulls.
	 *
	 * @return boolean Returns the connect nulls.
	 */
	public function getConnectNulls() {
		return $this->connectNulls;
	}

	/**
	 * Get the crop threshold.
	 *
	 * @return integer Returns the crop threshold.
	 */
	public function getCropThreshold() {
		return $this->cropThreshold;
	}

	/**
	 * Get the cursor.
	 *
	 * @return string Returns the cursor.
	 */
	public function getCursor() {
		return $this->cursor;
	}

	/**
	 * Get the dash style.
	 *
	 * @return string Returns the dash style.
	 */
	public function getDashStyle() {
		return $this->dashStyle;
	}

	/**
	 * Get the data labels.
	 *
	 * @return array Returns the data labels.
	 */
	public function getDataLabels() {
		return $this->dataLabels;
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
	 * Get the enable mouse tracking.
	 *
	 * @return boolean Returns the enable mouse tracking.
	 */
	public function getEnableMouseTracking() {
		return $this->enableMouseTracking;
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
	 * Get the expose element to a11y.
	 *
	 * @return boolean Returns the expose element to a11y.
	 */
	public function getExposeElementToA11y() {
		return $this->exposeElementToA11y;
	}

	/**
	 * Get the fill color.
	 *
	 * @return string Returns the fill color.
	 */
	public function getFillColor() {
		return $this->fillColor;
	}

	/**
	 * Get the fill opacity.
	 *
	 * @return integer Returns the fill opacity.
	 */
	public function getFillOpacity() {
		return $this->fillOpacity;
	}

	/**
	 * Get the find nearest point by.
	 *
	 * @return string Returns the find nearest point by.
	 */
	public function getFindNearestPointBy() {
		return $this->findNearestPointBy;
	}

	/**
	 * Get the get extremes from all.
	 *
	 * @return boolean Returns the get extremes from all.
	 */
	public function getGetExtremesFromAll() {
		return $this->getExtremesFromAll;
	}

	/**
	 * Get the keys.
	 *
	 * @return array Returns the keys.
	 */
	public function getKeys() {
		return $this->keys;
	}

	/**
	 * Get the line color.
	 *
	 * @return string Returns the line color.
	 */
	public function getLineColor() {
		return $this->lineColor;
	}

	/**
	 * Get the line width.
	 *
	 * @return integer Returns the line width.
	 */
	public function getLineWidth() {
		return $this->lineWidth;
	}

	/**
	 * Get the linecap.
	 *
	 * @return string Returns the linecap.
	 */
	public function getLinecap() {
		return $this->linecap;
	}

	/**
	 * Get the linked to.
	 *
	 * @return string Returns the linked to.
	 */
	public function getLinkedTo() {
		return $this->linkedTo;
	}

	/**
	 * Get the negative color.
	 *
	 * @return string Returns the negative color.
	 */
	public function getNegativeColor() {
		return $this->negativeColor;
	}

	/**
	 * Get the negative fill color.
	 *
	 * @return string Returns the negative fill color.
	 */
	public function getNegativeFillColor() {
		return $this->negativeFillColor;
	}

	/**
	 * Get the point.
	 *
	 * @return HighchartsPoint Returns the point.
	 */
	public function getPoint() {
		return $this->point;
	}

	/**
	 * Get the point description formatter.
	 *
	 * @return string Returns the point description formatter.
	 */
	public function getPointDescriptionFormatter() {
		return $this->pointDescriptionFormatter;
	}

	/**
	 * Get the point interval.
	 *
	 * @return integer Returns the point interval.
	 */
	public function getPointInterval() {
		return $this->pointInterval;
	}

	/**
	 * Get the point interval unit.
	 *
	 * @return string Returns the point interval unit.
	 */
	public function getPointIntervalUnit() {
		return $this->pointIntervalUnit;
	}

	/**
	 * Get the point placement.
	 *
	 * @return string|integer Returns the point placement.
	 */
	public function getPointPlacement() {
		return $this->pointPlacement;
	}

	/**
	 * Get the point start.
	 *
	 * @return integer Returns the point start.
	 */
	public function getPointStart() {
		return $this->pointStart;
	}

	/**
	 * Get the selected.
	 *
	 * @return boolean Returns the selected.
	 */
	public function getSelected() {
		return $this->selected;
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
	 * Get the show checkbox.
	 *
	 * @return boolean Returns the show checkbox.
	 */
	public function getShowCheckbox() {
		return $this->showCheckbox;
	}

	/**
	 * Get the show in legend.
	 *
	 * @return boolean Returns the show in legend.
	 */
	public function getShowInLegend() {
		return $this->showInLegend;
	}

	/**
	 * Get the skip keyboard navigation.
	 *
	 * @return boolean Returns the skip keyboard navigation.
	 */
	public function getSkipKeyboardNavigation() {
		return $this->skipKeyboardNavigation;
	}

	/**
	 * Get the states.
	 *
	 * @return HighchartsStates Returns the states.
	 */
	public function getStates() {
		return $this->states;
	}

	/**
	 * Get the sticky tracking.
	 *
	 * @return boolean Returns the sticky tracking.
	 */
	public function getStickyTracking() {
		return $this->stickyTracking;
	}

	/**
	 * Get the tooltip.
	 *
	 * @return array Returns the tooltip.
	 */
	public function getTooltip() {
		return $this->tooltip;
	}

	/**
	 * Get the track by area.
	 *
	 * @return boolean Returns the track by area.
	 */
	public function getTrackByArea() {
		return $this->trackByArea;
	}

	/**
	 * Get the turbo threshold.
	 *
	 * @return integer Returns the turbo threshold.
	 */
	public function getTurboThreshold() {
		return $this->turboThreshold;
	}

	/**
	 * Get the visible.
	 *
	 * @return boolean Returns the visible.
	 */
	public function getVisible() {
		return $this->visible;
	}

	/**
	 * Get the zone axis.
	 *
	 * @return string Returns the zone axis.
	 */
	public function getZoneAxis() {
		return $this->zoneAxis;
	}

	/**
	 * Get the zones.
	 *
	 * @return array Returns the zones.
	 */
	public function getZones() {
		return $this->zones;
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
	 * Create a new point.
	 *
	 * @return HighchartsPoint Returns the point.
	 */
	public function newPoint() {
		$this->point = new HighchartsPoint();
		return $this->point;
	}

	/**
	 * Create a new states.
	 *
	 * @return HighchartsStates Returns the states.
	 */
	public function newStates() {
		$this->states = new HighchartsStates();
		return $this->states;
	}

	/**
	 * Set the allow point select.
	 *
	 * @param boolean $allowPointSelect The allow point select.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setAllowPointSelect($allowPointSelect) {
		$this->allowPointSelect = $allowPointSelect;
		return $this;
	}

	/**
	 * Set the animation.
	 *
	 * @param boolean $animation The animation.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setAnimation($animation) {
		$this->animation = $animation;
		return $this;
	}

	/**
	 * Set the animation limit.
	 *
	 * @param integer $animationLimit The animation limit.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setAnimationLimit($animationLimit) {
		$this->animationLimit = $animationLimit;
		return $this;
	}

	/**
	 * Set the class name.
	 *
	 * @param string $className The class name.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setClassName($className) {
		$this->className = $className;
		return $this;
	}

	/**
	 * Set the color.
	 *
	 * @param string $color The color.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setColor($color) {
		$this->color = $color;
		return $this;
	}

	/**
	 * Set the color index.
	 *
	 * @param integer $colorIndex The color index.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setColorIndex($colorIndex) {
		$this->colorIndex = $colorIndex;
		return $this;
	}

	/**
	 * Set the connect nulls.
	 *
	 * @param boolean $connectNulls The connect nulls.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setConnectNulls($connectNulls) {
		$this->connectNulls = $connectNulls;
		return $this;
	}

	/**
	 * Set the crop threshold.
	 *
	 * @param integer $cropThreshold The crop threshold.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setCropThreshold($cropThreshold) {
		$this->cropThreshold = $cropThreshold;
		return $this;
	}

	/**
	 * Set the cursor.
	 *
	 * @param string $cursor The cursor.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setCursor($cursor) {
		switch ($cursor) {
			case null:
			case "crosshair":
			case "default":
			case "help":
			case "none":
			case "pointer":
				$this->cursor = $cursor;
				break;
		}
		return $this;
	}

	/**
	 * Set the dash style.
	 *
	 * @param string $dashStyle The dash style.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setDashStyle($dashStyle) {
		switch ($dashStyle) {
			case "Dash":
			case "DashDot":
			case "Dot":
			case "LongDash":
			case "LongDashDot":
			case "LongDashDotDot":
			case "ShortDash":
			case "ShortDashDot":
			case "ShortDashDotDot":
			case "ShortDot":
			case "Solid":
				$this->dashStyle = $dashStyle;
				break;
		}
		return $this;
	}

	/**
	 * Set the data labels.
	 *
	 * @param array $dataLabels The data labels.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setDataLabels(array $dataLabels = null) {
		$this->dataLabels = $dataLabels;
		return $this;
	}

	/**
	 * Set the description.
	 *
	 * @param string $description The description.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Set the enable mouse tracking.
	 *
	 * @param boolean $enableMouseTracking The enable mouse tracking.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setEnableMouseTracking($enableMouseTracking) {
		$this->enableMouseTracking = $enableMouseTracking;
		return $this;
	}

	/**
	 * Set the events.
	 *
	 * @param HighchartsEvents $events The events.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setEvents(HighchartsEvents $events = null) {
		$this->events = $events;
		return $this;
	}

	/**
	 * Set the expose element to a11y.
	 *
	 * @param boolean $exposeElementToA11y The expose element to a11y.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setExposeElementToA11y($exposeElementToA11y) {
		$this->exposeElementToA11y = $exposeElementToA11y;
		return $this;
	}

	/**
	 * Set the fill color.
	 *
	 * @param string $fillColor The fill color.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setFillColor($fillColor) {
		$this->fillColor = $fillColor;
		return $this;
	}

	/**
	 * Set the fill opacity.
	 *
	 * @param integer $fillOpacity The fill opacity.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setFillOpacity($fillOpacity) {
		$this->fillOpacity = $fillOpacity;
		return $this;
	}

	/**
	 * Set the find nearest point by.
	 *
	 * @param string $findNearestPointBy The find nearest point by.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setFindNearestPointBy($findNearestPointBy) {
		switch ($findNearestPointBy) {
			case "x":
			case "xy":
				$this->findNearestPointBy = $findNearestPointBy;
				break;
		}
		return $this;
	}

	/**
	 * Set the get extremes from all.
	 *
	 * @param boolean $getExtremesFromAll The get extremes from all.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setGetExtremesFromAll($getExtremesFromAll) {
		$this->getExtremesFromAll = $getExtremesFromAll;
		return $this;
	}

	/**
	 * Set the keys.
	 *
	 * @param array $keys The keys.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setKeys(array $keys = null) {
		$this->keys = $keys;
		return $this;
	}

	/**
	 * Set the line color.
	 *
	 * @param string $lineColor The line color.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setLineColor($lineColor) {
		$this->lineColor = $lineColor;
		return $this;
	}

	/**
	 * Set the line width.
	 *
	 * @param integer $lineWidth The line width.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setLineWidth($lineWidth) {
		$this->lineWidth = $lineWidth;
		return $this;
	}

	/**
	 * Set the linecap.
	 *
	 * @param string $linecap The linecap.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setLinecap($linecap) {
		switch ($linecap) {
			case "round":
			case "square":
				$this->linecap = $linecap;
				break;
		}
		return $this;
	}

	/**
	 * Set the linked to.
	 *
	 * @param string $linkedTo The linked to.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setLinkedTo($linkedTo) {
		$this->linkedTo = $linkedTo;
		return $this;
	}

	/**
	 * Set the negative color.
	 *
	 * @param string $negativeColor The negative color.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setNegativeColor($negativeColor) {
		$this->negativeColor = $negativeColor;
		return $this;
	}

	/**
	 * Set the negative fill color.
	 *
	 * @param string $negativeFillColor The negative fill color.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setNegativeFillColor($negativeFillColor) {
		$this->negativeFillColor = $negativeFillColor;
		return $this;
	}

	/**
	 * Set the point.
	 *
	 * @param HighchartsPoint $point The point.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setPoint(HighchartsPoint $point = null) {
		$this->point = $point;
		return $this;
	}

	/**
	 * Set the point description formatter.
	 *
	 * @param string $pointDescriptionFormatter The point description formatter.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setPointDescriptionFormatter($pointDescriptionFormatter) {
		$this->pointDescriptionFormatter = $pointDescriptionFormatter;
		return $this;
	}

	/**
	 * Set the point interval.
	 *
	 * @param integer $pointInterval The point interval.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setPointInterval($pointInterval) {
		$this->pointInterval = $pointInterval;
		return $this;
	}

	/**
	 * Set the point interval unit.
	 *
	 * @param string $pointIntervalUnit The point interval unit.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setPointIntervalUnit($pointIntervalUnit) {
		switch ($pointIntervalUnit) {
			case null:
			case "day":
			case "month":
			case "year":
				$this->pointIntervalUnit = $pointIntervalUnit;
				break;
		}
		return $this;
	}

	/**
	 * Set the point placement.
	 *
	 * @param string|integer $pointPlacement The point placement.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setPointPlacement($pointPlacement) {
		switch ($pointPlacement) {
			case null:
			case "between":
			case "on":
				$this->pointPlacement = $pointPlacement;
				break;
		}
		return $this;
	}

	/**
	 * Set the point start.
	 *
	 * @param integer $pointStart The point start.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setPointStart($pointStart) {
		$this->pointStart = $pointStart;
		return $this;
	}

	/**
	 * Set the selected.
	 *
	 * @param boolean $selected The selected.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setSelected($selected) {
		$this->selected = $selected;
		return $this;
	}

	/**
	 * Set the shadow.
	 *
	 * @param boolean|array $shadow The shadow.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setShadow($shadow) {
		$this->shadow = $shadow;
		return $this;
	}

	/**
	 * Set the show checkbox.
	 *
	 * @param boolean $showCheckbox The show checkbox.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setShowCheckbox($showCheckbox) {
		$this->showCheckbox = $showCheckbox;
		return $this;
	}

	/**
	 * Set the show in legend.
	 *
	 * @param boolean $showInLegend The show in legend.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setShowInLegend($showInLegend) {
		$this->showInLegend = $showInLegend;
		return $this;
	}

	/**
	 * Set the skip keyboard navigation.
	 *
	 * @param boolean $skipKeyboardNavigation The skip keyboard navigation.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setSkipKeyboardNavigation($skipKeyboardNavigation) {
		$this->skipKeyboardNavigation = $skipKeyboardNavigation;
		return $this;
	}

	/**
	 * Set the states.
	 *
	 * @param HighchartsStates $states The states.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setStates(HighchartsStates $states = null) {
		$this->states = $states;
		return $this;
	}

	/**
	 * Set the sticky tracking.
	 *
	 * @param boolean $stickyTracking The sticky tracking.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setStickyTracking($stickyTracking) {
		$this->stickyTracking = $stickyTracking;
		return $this;
	}

	/**
	 * Set the tooltip.
	 *
	 * @param array $tooltip The tooltip.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setTooltip(array $tooltip = null) {
		$this->tooltip = $tooltip;
		return $this;
	}

	/**
	 * Set the track by area.
	 *
	 * @param boolean $trackByArea The track by area.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setTrackByArea($trackByArea) {
		$this->trackByArea = $trackByArea;
		return $this;
	}

	/**
	 * Set the turbo threshold.
	 *
	 * @param integer $turboThreshold The turbo threshold.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setTurboThreshold($turboThreshold) {
		$this->turboThreshold = $turboThreshold;
		return $this;
	}

	/**
	 * Set the visible.
	 *
	 * @param boolean $visible The visible.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setVisible($visible) {
		$this->visible = $visible;
		return $this;
	}

	/**
	 * Set the zone axis.
	 *
	 * @param string $zoneAxis The zone axis.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setZoneAxis($zoneAxis) {
		$this->zoneAxis = $zoneAxis;
		return $this;
	}

	/**
	 * Set the zones.
	 *
	 * @param array $zones The zones.
	 * @return HighchartsAreasplinerange Returns the highcharts areasplinerange.
	 */
	public function setZones(array $zones = null) {
		$this->zones = $zones;
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

		// Check the allow point select.
		if (!is_null($this->allowPointSelect)) {
			$output["allowPointSelect"] = $this->allowPointSelect;
		}

		// Check the animation.
		if (!is_null($this->animation)) {
			$output["animation"] = $this->animation;
		}

		// Check the animation limit.
		if (!is_null($this->animationLimit)) {
			$output["animationLimit"] = $this->animationLimit;
		}

		// Check the class name.
		if (!is_null($this->className)) {
			$output["className"] = $this->className;
		}

		// Check the color.
		if (!is_null($this->color)) {
			$output["color"] = $this->color;
		}

		// Check the color index.
		if (!is_null($this->colorIndex)) {
			$output["colorIndex"] = $this->colorIndex;
		}

		// Check the connect nulls.
		if (!is_null($this->connectNulls)) {
			$output["connectNulls"] = $this->connectNulls;
		}

		// Check the crop threshold.
		if (!is_null($this->cropThreshold)) {
			$output["cropThreshold"] = $this->cropThreshold;
		}

		// Check the cursor.
		if (!is_null($this->cursor)) {
			$output["cursor"] = $this->cursor;
		}

		// Check the dash style.
		if (!is_null($this->dashStyle)) {
			$output["dashStyle"] = $this->dashStyle;
		}

		// Check the data labels.
		if (!is_null($this->dataLabels)) {
			$output["dataLabels"] = $this->dataLabels;
		}

		// Check the description.
		if (!is_null($this->description)) {
			$output["description"] = $this->description;
		}

		// Check the enable mouse tracking.
		if (!is_null($this->enableMouseTracking)) {
			$output["enableMouseTracking"] = $this->enableMouseTracking;
		}

		// Check the events.
		if (!is_null($this->events)) {
			$output["events"] = $this->events->toArray();
		}

		// Check the expose element to a11y.
		if (!is_null($this->exposeElementToA11y)) {
			$output["exposeElementToA11y"] = $this->exposeElementToA11y;
		}

		// Check the fill color.
		if (!is_null($this->fillColor)) {
			$output["fillColor"] = $this->fillColor;
		}

		// Check the fill opacity.
		if (!is_null($this->fillOpacity)) {
			$output["fillOpacity"] = $this->fillOpacity;
		}

		// Check the find nearest point by.
		if (!is_null($this->findNearestPointBy)) {
			$output["findNearestPointBy"] = $this->findNearestPointBy;
		}

		// Check the get extremes from all.
		if (!is_null($this->getExtremesFromAll)) {
			$output["getExtremesFromAll"] = $this->getExtremesFromAll;
		}

		// Check the keys.
		if (!is_null($this->keys)) {
			$output["keys"] = $this->keys;
		}

		// Check the line color.
		if (!is_null($this->lineColor)) {
			$output["lineColor"] = $this->lineColor;
		}

		// Check the line width.
		if (!is_null($this->lineWidth)) {
			$output["lineWidth"] = $this->lineWidth;
		}

		// Check the linecap.
		if (!is_null($this->linecap)) {
			$output["linecap"] = $this->linecap;
		}

		// Check the linked to.
		if (!is_null($this->linkedTo)) {
			$output["linkedTo"] = $this->linkedTo;
		}

		// Check the negative color.
		if (!is_null($this->negativeColor)) {
			$output["negativeColor"] = $this->negativeColor;
		}

		// Check the negative fill color.
		if (!is_null($this->negativeFillColor)) {
			$output["negativeFillColor"] = $this->negativeFillColor;
		}

		// Check the point.
		if (!is_null($this->point)) {
			$output["point"] = $this->point->toArray();
		}

		// Check the point description formatter.
		if (!is_null($this->pointDescriptionFormatter)) {
			$output["pointDescriptionFormatter"] = $this->pointDescriptionFormatter;
		}

		// Check the point interval.
		if (!is_null($this->pointInterval)) {
			$output["pointInterval"] = $this->pointInterval;
		}

		// Check the point interval unit.
		if (!is_null($this->pointIntervalUnit)) {
			$output["pointIntervalUnit"] = $this->pointIntervalUnit;
		}

		// Check the point placement.
		if (!is_null($this->pointPlacement)) {
			$output["pointPlacement"] = $this->pointPlacement;
		}

		// Check the point start.
		if (!is_null($this->pointStart)) {
			$output["pointStart"] = $this->pointStart;
		}

		// Check the selected.
		if (!is_null($this->selected)) {
			$output["selected"] = $this->selected;
		}

		// Check the shadow.
		if (!is_null($this->shadow)) {
			$output["shadow"] = $this->shadow;
		}

		// Check the show checkbox.
		if (!is_null($this->showCheckbox)) {
			$output["showCheckbox"] = $this->showCheckbox;
		}

		// Check the show in legend.
		if (!is_null($this->showInLegend)) {
			$output["showInLegend"] = $this->showInLegend;
		}

		// Check the skip keyboard navigation.
		if (!is_null($this->skipKeyboardNavigation)) {
			$output["skipKeyboardNavigation"] = $this->skipKeyboardNavigation;
		}

		// Check the states.
		if (!is_null($this->states)) {
			$output["states"] = $this->states->toArray();
		}

		// Check the sticky tracking.
		if (!is_null($this->stickyTracking)) {
			$output["stickyTracking"] = $this->stickyTracking;
		}

		// Check the tooltip.
		if (!is_null($this->tooltip)) {
			$output["tooltip"] = $this->tooltip;
		}

		// Check the track by area.
		if (!is_null($this->trackByArea)) {
			$output["trackByArea"] = $this->trackByArea;
		}

		// Check the turbo threshold.
		if (!is_null($this->turboThreshold)) {
			$output["turboThreshold"] = $this->turboThreshold;
		}

		// Check the visible.
		if (!is_null($this->visible)) {
			$output["visible"] = $this->visible;
		}

		// Check the zone axis.
		if (!is_null($this->zoneAxis)) {
			$output["zoneAxis"] = $this->zoneAxis;
		}

		// Check the zones.
		if (!is_null($this->zones)) {
			$output["zones"] = $this->zones;
		}

		// Return the output.
		return $output;
	}

}
