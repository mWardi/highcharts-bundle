<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Series;

use JsonSerializable;
use WBW\HighchartsBundle\API\Chart\Series\Boxplot\HighchartsEvents;
use WBW\HighchartsBundle\API\Chart\Series\Boxplot\HighchartsPoint;
use WBW\HighchartsBundle\API\Chart\Series\Boxplot\HighchartsStates;

/**
 * Highcharts boxplot.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\Series
 * @version 5.0.14
 * @final
 */
final class HighchartsBoxplot implements JsonSerializable {

	/**
	 * Allow point select.
	 *
	 * @var boolean
	 * @since 1.2.0
	 */
	private $allowPointSelect = false;

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
	 * Color by point.
	 *
	 * @var boolean
	 * @since 2.0
	 */
	private $colorByPoint = false;

	/**
	 * Color index.
	 *
	 * @var integer
	 * @since 5.0.0
	 */
	private $colorIndex;

	/**
	 * Colors.
	 *
	 * @var array
	 * @since 3.0
	 */
	private $colors;

	/**
	 * Crisp.
	 *
	 * @var boolean
	 * @since 5.0.10
	 */
	private $crisp = true;

	/**
	 * Cursor.
	 *
	 * @var string
	 */
	private $cursor;

	/**
	 * Data.
	 *
	 * @var array
	 */
	private $data;

	/**
	 * Depth.
	 *
	 * @var integer
	 * @since 4.0
	 */
	private $depth = 25;

	/**
	 * Description.
	 *
	 * @var string
	 * @since 5.0.0
	 */
	private $description;

	/**
	 * Edge color.
	 *
	 * @var string
	 */
	private $edgeColor;

	/**
	 * Edge width.
	 *
	 * @var integer
	 */
	private $edgeWidth = 1;

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
	 * @since 3.0
	 */
	private $fillColor = "#ffffff";

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
	 * Group padding.
	 *
	 * @var integer
	 */
	private $groupPadding = 0.2;

	/**
	 * Group z padding.
	 *
	 * @var integer
	 * @since 4.0
	 */
	private $groupZPadding = 1;

	/**
	 * Grouping.
	 *
	 * @var boolean
	 * @since 2.3.0
	 */
	private $grouping = true;

	/**
	 * Id.
	 *
	 * @var string
	 * @since 1.2.0
	 */
	private $id;

	/**
	 * Index.
	 *
	 * @var integer
	 * @since 2.3.0
	 */
	private $index;

	/**
	 * Keys.
	 *
	 * @var array
	 * @since 4.1.6
	 */
	private $keys;

	/**
	 * Legend index.
	 *
	 * @var integer
	 */
	private $legendIndex;

	/**
	 * Line width.
	 *
	 * @var integer
	 * @since 3.0
	 */
	private $lineWidth = 1;

	/**
	 * Linked to.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $linkedTo;

	/**
	 * Max point width.
	 *
	 * @var integer
	 * @since 4.1.8
	 */
	private $maxPointWidth;

	/**
	 * Median color.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $medianColor;

	/**
	 * Median width.
	 *
	 * @var integer
	 * @since 3.0
	 */
	private $medianWidth = 2;

	/**
	 * Name.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * Negative color.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $negativeColor;

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
	 * Point padding.
	 *
	 * @var integer
	 */
	private $pointPadding = 0.1;

	/**
	 * Point placement.
	 *
	 * @var string|integer
	 * @since 2.3.0
	 */
	private $pointPlacement;

	/**
	 * Point range.
	 *
	 * @var integer
	 * @since 2.3
	 */
	private $pointRange;

	/**
	 * Point start.
	 *
	 * @var integer
	 */
	private $pointStart = 0;

	/**
	 * Point width.
	 *
	 * @var integer
	 * @since 1.2.5
	 */
	private $pointWidth;

	/**
	 * Selected.
	 *
	 * @var boolean
	 * @since 1.2.0
	 */
	private $selected = false;

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
	 * Stem color.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $stemColor;

	/**
	 * Stem dash style.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $stemDashStyle = "Solid";

	/**
	 * Stem width.
	 *
	 * @var integer
	 * @since 3.0
	 */
	private $stemWidth;

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
	 * Turbo threshold.
	 *
	 * @var integer
	 * @since 2.2
	 */
	private $turboThreshold = 1000;

	/**
	 * Type.
	 *
	 * @var string
	 */
	private $type;

	/**
	 * Visible.
	 *
	 * @var boolean
	 */
	private $visible = true;

	/**
	 * Whisker color.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $whiskerColor;

	/**
	 * Whisker length.
	 *
	 * @var integer|string
	 * @since 3.0
	 */
	private $whiskerLength = "50%";

	/**
	 * Whisker width.
	 *
	 * @var integer
	 * @since 3.0
	 */
	private $whiskerWidth = 2;

	/**
	 * X axis.
	 *
	 * @var integer|string
	 */
	private $xAxis = "0";

	/**
	 * Y axis.
	 *
	 * @var integer|string
	 */
	private $yAxis = "0";

	/**
	 * Z index.
	 *
	 * @var integer
	 */
	private $zIndex;

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

		// Check the color by point.
		if (!is_null($this->colorByPoint)) {
			$this->colorByPoint = null;
		}

		// Check the color index.
		if (!is_null($this->colorIndex)) {
			$this->colorIndex = null;
		}

		// Check the colors.
		if (!is_null($this->colors)) {
			$this->colors = null;
		}

		// Check the crisp.
		if (!is_null($this->crisp)) {
			$this->crisp = null;
		}

		// Check the cursor.
		if (!is_null($this->cursor)) {
			$this->cursor = null;
		}

		// Check the data.
		if (!is_null($this->data)) {
			$this->data = null;
		}

		// Check the depth.
		if (!is_null($this->depth)) {
			$this->depth = null;
		}

		// Check the description.
		if (!is_null($this->description)) {
			$this->description = null;
		}

		// Check the edge color.
		if (!is_null($this->edgeColor)) {
			$this->edgeColor = null;
		}

		// Check the edge width.
		if (!is_null($this->edgeWidth)) {
			$this->edgeWidth = null;
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

		// Check the find nearest point by.
		if (!is_null($this->findNearestPointBy)) {
			$this->findNearestPointBy = null;
		}

		// Check the get extremes from all.
		if (!is_null($this->getExtremesFromAll)) {
			$this->getExtremesFromAll = null;
		}

		// Check the group padding.
		if (!is_null($this->groupPadding)) {
			$this->groupPadding = null;
		}

		// Check the group z padding.
		if (!is_null($this->groupZPadding)) {
			$this->groupZPadding = null;
		}

		// Check the grouping.
		if (!is_null($this->grouping)) {
			$this->grouping = null;
		}

		// Check the id.
		if (!is_null($this->id)) {
			$this->id = null;
		}

		// Check the index.
		if (!is_null($this->index)) {
			$this->index = null;
		}

		// Check the keys.
		if (!is_null($this->keys)) {
			$this->keys = null;
		}

		// Check the legend index.
		if (!is_null($this->legendIndex)) {
			$this->legendIndex = null;
		}

		// Check the line width.
		if (!is_null($this->lineWidth)) {
			$this->lineWidth = null;
		}

		// Check the linked to.
		if (!is_null($this->linkedTo)) {
			$this->linkedTo = null;
		}

		// Check the max point width.
		if (!is_null($this->maxPointWidth)) {
			$this->maxPointWidth = null;
		}

		// Check the median color.
		if (!is_null($this->medianColor)) {
			$this->medianColor = null;
		}

		// Check the median width.
		if (!is_null($this->medianWidth)) {
			$this->medianWidth = null;
		}

		// Check the name.
		if (!is_null($this->name)) {
			$this->name = null;
		}

		// Check the negative color.
		if (!is_null($this->negativeColor)) {
			$this->negativeColor = null;
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

		// Check the point padding.
		if (!is_null($this->pointPadding)) {
			$this->pointPadding = null;
		}

		// Check the point placement.
		if (!is_null($this->pointPlacement)) {
			$this->pointPlacement = null;
		}

		// Check the point range.
		if (!is_null($this->pointRange)) {
			$this->pointRange = null;
		}

		// Check the point start.
		if (!is_null($this->pointStart)) {
			$this->pointStart = null;
		}

		// Check the point width.
		if (!is_null($this->pointWidth)) {
			$this->pointWidth = null;
		}

		// Check the selected.
		if (!is_null($this->selected)) {
			$this->selected = null;
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

		// Check the stem color.
		if (!is_null($this->stemColor)) {
			$this->stemColor = null;
		}

		// Check the stem dash style.
		if (!is_null($this->stemDashStyle)) {
			$this->stemDashStyle = null;
		}

		// Check the stem width.
		if (!is_null($this->stemWidth)) {
			$this->stemWidth = null;
		}

		// Check the sticky tracking.
		if (!is_null($this->stickyTracking)) {
			$this->stickyTracking = null;
		}

		// Check the tooltip.
		if (!is_null($this->tooltip)) {
			$this->tooltip = null;
		}

		// Check the turbo threshold.
		if (!is_null($this->turboThreshold)) {
			$this->turboThreshold = null;
		}

		// Check the type.
		if (!is_null($this->type)) {
			$this->type = null;
		}

		// Check the visible.
		if (!is_null($this->visible)) {
			$this->visible = null;
		}

		// Check the whisker color.
		if (!is_null($this->whiskerColor)) {
			$this->whiskerColor = null;
		}

		// Check the whisker length.
		if (!is_null($this->whiskerLength)) {
			$this->whiskerLength = null;
		}

		// Check the whisker width.
		if (!is_null($this->whiskerWidth)) {
			$this->whiskerWidth = null;
		}

		// Check the x axis.
		if (!is_null($this->xAxis)) {
			$this->xAxis = null;
		}

		// Check the y axis.
		if (!is_null($this->yAxis)) {
			$this->yAxis = null;
		}

		// Check the z index.
		if (!is_null($this->zIndex)) {
			$this->zIndex = null;
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
	 * Get the color by point.
	 *
	 * @return boolean Returns the color by point.
	 */
	public function getColorByPoint() {
		return $this->colorByPoint;
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
	 * Get the colors.
	 *
	 * @return array Returns the colors.
	 */
	public function getColors() {
		return $this->colors;
	}

	/**
	 * Get the crisp.
	 *
	 * @return boolean Returns the crisp.
	 */
	public function getCrisp() {
		return $this->crisp;
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
	 * Get the data.
	 *
	 * @return array Returns the data.
	 */
	public function getData() {
		return $this->data;
	}

	/**
	 * Get the depth.
	 *
	 * @return integer Returns the depth.
	 */
	public function getDepth() {
		return $this->depth;
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
	 * Get the edge color.
	 *
	 * @return string Returns the edge color.
	 */
	public function getEdgeColor() {
		return $this->edgeColor;
	}

	/**
	 * Get the edge width.
	 *
	 * @return integer Returns the edge width.
	 */
	public function getEdgeWidth() {
		return $this->edgeWidth;
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
	 * Get the group padding.
	 *
	 * @return integer Returns the group padding.
	 */
	public function getGroupPadding() {
		return $this->groupPadding;
	}

	/**
	 * Get the group z padding.
	 *
	 * @return integer Returns the group z padding.
	 */
	public function getGroupZPadding() {
		return $this->groupZPadding;
	}

	/**
	 * Get the grouping.
	 *
	 * @return boolean Returns the grouping.
	 */
	public function getGrouping() {
		return $this->grouping;
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
	 * Get the index.
	 *
	 * @return integer Returns the index.
	 */
	public function getIndex() {
		return $this->index;
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
	 * Get the legend index.
	 *
	 * @return integer Returns the legend index.
	 */
	public function getLegendIndex() {
		return $this->legendIndex;
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
	 * Get the linked to.
	 *
	 * @return string Returns the linked to.
	 */
	public function getLinkedTo() {
		return $this->linkedTo;
	}

	/**
	 * Get the max point width.
	 *
	 * @return integer Returns the max point width.
	 */
	public function getMaxPointWidth() {
		return $this->maxPointWidth;
	}

	/**
	 * Get the median color.
	 *
	 * @return string Returns the median color.
	 */
	public function getMedianColor() {
		return $this->medianColor;
	}

	/**
	 * Get the median width.
	 *
	 * @return integer Returns the median width.
	 */
	public function getMedianWidth() {
		return $this->medianWidth;
	}

	/**
	 * Get the name.
	 *
	 * @return string Returns the name.
	 */
	public function getName() {
		return $this->name;
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
	 * Get the point padding.
	 *
	 * @return integer Returns the point padding.
	 */
	public function getPointPadding() {
		return $this->pointPadding;
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
	 * Get the point range.
	 *
	 * @return integer Returns the point range.
	 */
	public function getPointRange() {
		return $this->pointRange;
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
	 * Get the point width.
	 *
	 * @return integer Returns the point width.
	 */
	public function getPointWidth() {
		return $this->pointWidth;
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
	 * Get the stem color.
	 *
	 * @return string Returns the stem color.
	 */
	public function getStemColor() {
		return $this->stemColor;
	}

	/**
	 * Get the stem dash style.
	 *
	 * @return string Returns the stem dash style.
	 */
	public function getStemDashStyle() {
		return $this->stemDashStyle;
	}

	/**
	 * Get the stem width.
	 *
	 * @return integer Returns the stem width.
	 */
	public function getStemWidth() {
		return $this->stemWidth;
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
	 * Get the turbo threshold.
	 *
	 * @return integer Returns the turbo threshold.
	 */
	public function getTurboThreshold() {
		return $this->turboThreshold;
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
	 * Get the visible.
	 *
	 * @return boolean Returns the visible.
	 */
	public function getVisible() {
		return $this->visible;
	}

	/**
	 * Get the whisker color.
	 *
	 * @return string Returns the whisker color.
	 */
	public function getWhiskerColor() {
		return $this->whiskerColor;
	}

	/**
	 * Get the whisker length.
	 *
	 * @return integer|string Returns the whisker length.
	 */
	public function getWhiskerLength() {
		return $this->whiskerLength;
	}

	/**
	 * Get the whisker width.
	 *
	 * @return integer Returns the whisker width.
	 */
	public function getWhiskerWidth() {
		return $this->whiskerWidth;
	}

	/**
	 * Get the x axis.
	 *
	 * @return integer|string Returns the x axis.
	 */
	public function getXAxis() {
		return $this->xAxis;
	}

	/**
	 * Get the y axis.
	 *
	 * @return integer|string Returns the y axis.
	 */
	public function getYAxis() {
		return $this->yAxis;
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
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setAllowPointSelect($allowPointSelect) {
		$this->allowPointSelect = $allowPointSelect;
		return $this;
	}

	/**
	 * Set the animation limit.
	 *
	 * @param integer $animationLimit The animation limit.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setAnimationLimit($animationLimit) {
		$this->animationLimit = $animationLimit;
		return $this;
	}

	/**
	 * Set the class name.
	 *
	 * @param string $className The class name.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setClassName($className) {
		$this->className = $className;
		return $this;
	}

	/**
	 * Set the color.
	 *
	 * @param string $color The color.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setColor($color) {
		$this->color = $color;
		return $this;
	}

	/**
	 * Set the color by point.
	 *
	 * @param boolean $colorByPoint The color by point.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setColorByPoint($colorByPoint) {
		$this->colorByPoint = $colorByPoint;
		return $this;
	}

	/**
	 * Set the color index.
	 *
	 * @param integer $colorIndex The color index.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setColorIndex($colorIndex) {
		$this->colorIndex = $colorIndex;
		return $this;
	}

	/**
	 * Set the colors.
	 *
	 * @param array $colors The colors.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setColors(array $colors = null) {
		$this->colors = $colors;
		return $this;
	}

	/**
	 * Set the crisp.
	 *
	 * @param boolean $crisp The crisp.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setCrisp($crisp) {
		$this->crisp = $crisp;
		return $this;
	}

	/**
	 * Set the cursor.
	 *
	 * @param string $cursor The cursor.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
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
	 * Set the data.
	 *
	 * @param array $data The data.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setData(array $data = null) {
		$this->data = $data;
		return $this;
	}

	/**
	 * Set the depth.
	 *
	 * @param integer $depth The depth.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setDepth($depth) {
		$this->depth = $depth;
		return $this;
	}

	/**
	 * Set the description.
	 *
	 * @param string $description The description.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Set the edge color.
	 *
	 * @param string $edgeColor The edge color.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setEdgeColor($edgeColor) {
		$this->edgeColor = $edgeColor;
		return $this;
	}

	/**
	 * Set the edge width.
	 *
	 * @param integer $edgeWidth The edge width.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setEdgeWidth($edgeWidth) {
		$this->edgeWidth = $edgeWidth;
		return $this;
	}

	/**
	 * Set the enable mouse tracking.
	 *
	 * @param boolean $enableMouseTracking The enable mouse tracking.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setEnableMouseTracking($enableMouseTracking) {
		$this->enableMouseTracking = $enableMouseTracking;
		return $this;
	}

	/**
	 * Set the events.
	 *
	 * @param HighchartsEvents $events The events.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setEvents(HighchartsEvents $events = null) {
		$this->events = $events;
		return $this;
	}

	/**
	 * Set the expose element to a11y.
	 *
	 * @param boolean $exposeElementToA11y The expose element to a11y.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setExposeElementToA11y($exposeElementToA11y) {
		$this->exposeElementToA11y = $exposeElementToA11y;
		return $this;
	}

	/**
	 * Set the fill color.
	 *
	 * @param string $fillColor The fill color.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setFillColor($fillColor) {
		$this->fillColor = $fillColor;
		return $this;
	}

	/**
	 * Set the find nearest point by.
	 *
	 * @param string $findNearestPointBy The find nearest point by.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
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
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setGetExtremesFromAll($getExtremesFromAll) {
		$this->getExtremesFromAll = $getExtremesFromAll;
		return $this;
	}

	/**
	 * Set the group padding.
	 *
	 * @param integer $groupPadding The group padding.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setGroupPadding($groupPadding) {
		$this->groupPadding = $groupPadding;
		return $this;
	}

	/**
	 * Set the group z padding.
	 *
	 * @param integer $groupZPadding The group z padding.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setGroupZPadding($groupZPadding) {
		$this->groupZPadding = $groupZPadding;
		return $this;
	}

	/**
	 * Set the grouping.
	 *
	 * @param boolean $grouping The grouping.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setGrouping($grouping) {
		$this->grouping = $grouping;
		return $this;
	}

	/**
	 * Set the id.
	 *
	 * @param string $id The id.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Set the index.
	 *
	 * @param integer $index The index.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setIndex($index) {
		$this->index = $index;
		return $this;
	}

	/**
	 * Set the keys.
	 *
	 * @param array $keys The keys.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setKeys(array $keys = null) {
		$this->keys = $keys;
		return $this;
	}

	/**
	 * Set the legend index.
	 *
	 * @param integer $legendIndex The legend index.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setLegendIndex($legendIndex) {
		$this->legendIndex = $legendIndex;
		return $this;
	}

	/**
	 * Set the line width.
	 *
	 * @param integer $lineWidth The line width.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setLineWidth($lineWidth) {
		$this->lineWidth = $lineWidth;
		return $this;
	}

	/**
	 * Set the linked to.
	 *
	 * @param string $linkedTo The linked to.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setLinkedTo($linkedTo) {
		$this->linkedTo = $linkedTo;
		return $this;
	}

	/**
	 * Set the max point width.
	 *
	 * @param integer $maxPointWidth The max point width.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setMaxPointWidth($maxPointWidth) {
		$this->maxPointWidth = $maxPointWidth;
		return $this;
	}

	/**
	 * Set the median color.
	 *
	 * @param string $medianColor The median color.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setMedianColor($medianColor) {
		$this->medianColor = $medianColor;
		return $this;
	}

	/**
	 * Set the median width.
	 *
	 * @param integer $medianWidth The median width.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setMedianWidth($medianWidth) {
		$this->medianWidth = $medianWidth;
		return $this;
	}

	/**
	 * Set the name.
	 *
	 * @param string $name The name.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * Set the negative color.
	 *
	 * @param string $negativeColor The negative color.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setNegativeColor($negativeColor) {
		$this->negativeColor = $negativeColor;
		return $this;
	}

	/**
	 * Set the point.
	 *
	 * @param HighchartsPoint $point The point.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setPoint(HighchartsPoint $point = null) {
		$this->point = $point;
		return $this;
	}

	/**
	 * Set the point description formatter.
	 *
	 * @param string $pointDescriptionFormatter The point description formatter.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setPointDescriptionFormatter($pointDescriptionFormatter) {
		$this->pointDescriptionFormatter = $pointDescriptionFormatter;
		return $this;
	}

	/**
	 * Set the point interval.
	 *
	 * @param integer $pointInterval The point interval.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setPointInterval($pointInterval) {
		$this->pointInterval = $pointInterval;
		return $this;
	}

	/**
	 * Set the point interval unit.
	 *
	 * @param string $pointIntervalUnit The point interval unit.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
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
	 * Set the point padding.
	 *
	 * @param integer $pointPadding The point padding.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setPointPadding($pointPadding) {
		$this->pointPadding = $pointPadding;
		return $this;
	}

	/**
	 * Set the point placement.
	 *
	 * @param string|integer $pointPlacement The point placement.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
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
	 * Set the point range.
	 *
	 * @param integer $pointRange The point range.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setPointRange($pointRange) {
		$this->pointRange = $pointRange;
		return $this;
	}

	/**
	 * Set the point start.
	 *
	 * @param integer $pointStart The point start.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setPointStart($pointStart) {
		$this->pointStart = $pointStart;
		return $this;
	}

	/**
	 * Set the point width.
	 *
	 * @param integer $pointWidth The point width.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setPointWidth($pointWidth) {
		$this->pointWidth = $pointWidth;
		return $this;
	}

	/**
	 * Set the selected.
	 *
	 * @param boolean $selected The selected.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setSelected($selected) {
		$this->selected = $selected;
		return $this;
	}

	/**
	 * Set the show checkbox.
	 *
	 * @param boolean $showCheckbox The show checkbox.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setShowCheckbox($showCheckbox) {
		$this->showCheckbox = $showCheckbox;
		return $this;
	}

	/**
	 * Set the show in legend.
	 *
	 * @param boolean $showInLegend The show in legend.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setShowInLegend($showInLegend) {
		$this->showInLegend = $showInLegend;
		return $this;
	}

	/**
	 * Set the skip keyboard navigation.
	 *
	 * @param boolean $skipKeyboardNavigation The skip keyboard navigation.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setSkipKeyboardNavigation($skipKeyboardNavigation) {
		$this->skipKeyboardNavigation = $skipKeyboardNavigation;
		return $this;
	}

	/**
	 * Set the states.
	 *
	 * @param HighchartsStates $states The states.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setStates(HighchartsStates $states = null) {
		$this->states = $states;
		return $this;
	}

	/**
	 * Set the stem color.
	 *
	 * @param string $stemColor The stem color.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setStemColor($stemColor) {
		$this->stemColor = $stemColor;
		return $this;
	}

	/**
	 * Set the stem dash style.
	 *
	 * @param string $stemDashStyle The stem dash style.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setStemDashStyle($stemDashStyle) {
		switch ($stemDashStyle) {
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
				$this->stemDashStyle = $stemDashStyle;
				break;
		}
		return $this;
	}

	/**
	 * Set the stem width.
	 *
	 * @param integer $stemWidth The stem width.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setStemWidth($stemWidth) {
		$this->stemWidth = $stemWidth;
		return $this;
	}

	/**
	 * Set the sticky tracking.
	 *
	 * @param boolean $stickyTracking The sticky tracking.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setStickyTracking($stickyTracking) {
		$this->stickyTracking = $stickyTracking;
		return $this;
	}

	/**
	 * Set the tooltip.
	 *
	 * @param array $tooltip The tooltip.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setTooltip(array $tooltip = null) {
		$this->tooltip = $tooltip;
		return $this;
	}

	/**
	 * Set the turbo threshold.
	 *
	 * @param integer $turboThreshold The turbo threshold.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setTurboThreshold($turboThreshold) {
		$this->turboThreshold = $turboThreshold;
		return $this;
	}

	/**
	 * Set the type.
	 *
	 * @param string $type The type.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setType($type) {
		switch ($type) {
			case null:
			case "area":
			case "arearange":
			case "areaspline":
			case "areasplinerange":
			case "boxplot":
			case "bubble":
			case "column":
			case "columnrange":
			case "errorbar":
			case "funnel":
			case "gauge":
			case "line":
			case "pie":
			case "scatter":
			case "spline":
			case "waterfall":
				$this->type = $type;
				break;
		}
		return $this;
	}

	/**
	 * Set the visible.
	 *
	 * @param boolean $visible The visible.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setVisible($visible) {
		$this->visible = $visible;
		return $this;
	}

	/**
	 * Set the whisker color.
	 *
	 * @param string $whiskerColor The whisker color.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setWhiskerColor($whiskerColor) {
		$this->whiskerColor = $whiskerColor;
		return $this;
	}

	/**
	 * Set the whisker length.
	 *
	 * @param integer|string $whiskerLength The whisker length.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setWhiskerLength($whiskerLength) {
		$this->whiskerLength = $whiskerLength;
		return $this;
	}

	/**
	 * Set the whisker width.
	 *
	 * @param integer $whiskerWidth The whisker width.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setWhiskerWidth($whiskerWidth) {
		$this->whiskerWidth = $whiskerWidth;
		return $this;
	}

	/**
	 * Set the x axis.
	 *
	 * @param integer|string $xAxis The x axis.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setXAxis($xAxis) {
		$this->xAxis = $xAxis;
		return $this;
	}

	/**
	 * Set the y axis.
	 *
	 * @param integer|string $yAxis The y axis.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setYAxis($yAxis) {
		$this->yAxis = $yAxis;
		return $this;
	}

	/**
	 * Set the z index.
	 *
	 * @param integer $zIndex The z index.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setZIndex($zIndex) {
		$this->zIndex = $zIndex;
		return $this;
	}

	/**
	 * Set the zone axis.
	 *
	 * @param string $zoneAxis The zone axis.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
	 */
	public function setZoneAxis($zoneAxis) {
		$this->zoneAxis = $zoneAxis;
		return $this;
	}

	/**
	 * Set the zones.
	 *
	 * @param array $zones The zones.
	 * @return HighchartsBoxplot Returns the highcharts boxplot.
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

		// Check the color by point.
		if (!is_null($this->colorByPoint)) {
			$output["colorByPoint"] = $this->colorByPoint;
		}

		// Check the color index.
		if (!is_null($this->colorIndex)) {
			$output["colorIndex"] = $this->colorIndex;
		}

		// Check the colors.
		if (!is_null($this->colors)) {
			$output["colors"] = $this->colors;
		}

		// Check the crisp.
		if (!is_null($this->crisp)) {
			$output["crisp"] = $this->crisp;
		}

		// Check the cursor.
		if (!is_null($this->cursor)) {
			$output["cursor"] = $this->cursor;
		}

		// Check the data.
		if (!is_null($this->data)) {
			$output["data"] = $this->data;
		}

		// Check the depth.
		if (!is_null($this->depth)) {
			$output["depth"] = $this->depth;
		}

		// Check the description.
		if (!is_null($this->description)) {
			$output["description"] = $this->description;
		}

		// Check the edge color.
		if (!is_null($this->edgeColor)) {
			$output["edgeColor"] = $this->edgeColor;
		}

		// Check the edge width.
		if (!is_null($this->edgeWidth)) {
			$output["edgeWidth"] = $this->edgeWidth;
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

		// Check the find nearest point by.
		if (!is_null($this->findNearestPointBy)) {
			$output["findNearestPointBy"] = $this->findNearestPointBy;
		}

		// Check the get extremes from all.
		if (!is_null($this->getExtremesFromAll)) {
			$output["getExtremesFromAll"] = $this->getExtremesFromAll;
		}

		// Check the group padding.
		if (!is_null($this->groupPadding)) {
			$output["groupPadding"] = $this->groupPadding;
		}

		// Check the group z padding.
		if (!is_null($this->groupZPadding)) {
			$output["groupZPadding"] = $this->groupZPadding;
		}

		// Check the grouping.
		if (!is_null($this->grouping)) {
			$output["grouping"] = $this->grouping;
		}

		// Check the id.
		if (!is_null($this->id)) {
			$output["id"] = $this->id;
		}

		// Check the index.
		if (!is_null($this->index)) {
			$output["index"] = $this->index;
		}

		// Check the keys.
		if (!is_null($this->keys)) {
			$output["keys"] = $this->keys;
		}

		// Check the legend index.
		if (!is_null($this->legendIndex)) {
			$output["legendIndex"] = $this->legendIndex;
		}

		// Check the line width.
		if (!is_null($this->lineWidth)) {
			$output["lineWidth"] = $this->lineWidth;
		}

		// Check the linked to.
		if (!is_null($this->linkedTo)) {
			$output["linkedTo"] = $this->linkedTo;
		}

		// Check the max point width.
		if (!is_null($this->maxPointWidth)) {
			$output["maxPointWidth"] = $this->maxPointWidth;
		}

		// Check the median color.
		if (!is_null($this->medianColor)) {
			$output["medianColor"] = $this->medianColor;
		}

		// Check the median width.
		if (!is_null($this->medianWidth)) {
			$output["medianWidth"] = $this->medianWidth;
		}

		// Check the name.
		if (!is_null($this->name)) {
			$output["name"] = $this->name;
		}

		// Check the negative color.
		if (!is_null($this->negativeColor)) {
			$output["negativeColor"] = $this->negativeColor;
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

		// Check the point padding.
		if (!is_null($this->pointPadding)) {
			$output["pointPadding"] = $this->pointPadding;
		}

		// Check the point placement.
		if (!is_null($this->pointPlacement)) {
			$output["pointPlacement"] = $this->pointPlacement;
		}

		// Check the point range.
		if (!is_null($this->pointRange)) {
			$output["pointRange"] = $this->pointRange;
		}

		// Check the point start.
		if (!is_null($this->pointStart)) {
			$output["pointStart"] = $this->pointStart;
		}

		// Check the point width.
		if (!is_null($this->pointWidth)) {
			$output["pointWidth"] = $this->pointWidth;
		}

		// Check the selected.
		if (!is_null($this->selected)) {
			$output["selected"] = $this->selected;
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

		// Check the stem color.
		if (!is_null($this->stemColor)) {
			$output["stemColor"] = $this->stemColor;
		}

		// Check the stem dash style.
		if (!is_null($this->stemDashStyle)) {
			$output["stemDashStyle"] = $this->stemDashStyle;
		}

		// Check the stem width.
		if (!is_null($this->stemWidth)) {
			$output["stemWidth"] = $this->stemWidth;
		}

		// Check the sticky tracking.
		if (!is_null($this->stickyTracking)) {
			$output["stickyTracking"] = $this->stickyTracking;
		}

		// Check the tooltip.
		if (!is_null($this->tooltip)) {
			$output["tooltip"] = $this->tooltip;
		}

		// Check the turbo threshold.
		if (!is_null($this->turboThreshold)) {
			$output["turboThreshold"] = $this->turboThreshold;
		}

		// Check the type.
		if (!is_null($this->type)) {
			$output["type"] = $this->type;
		}

		// Check the visible.
		if (!is_null($this->visible)) {
			$output["visible"] = $this->visible;
		}

		// Check the whisker color.
		if (!is_null($this->whiskerColor)) {
			$output["whiskerColor"] = $this->whiskerColor;
		}

		// Check the whisker length.
		if (!is_null($this->whiskerLength)) {
			$output["whiskerLength"] = $this->whiskerLength;
		}

		// Check the whisker width.
		if (!is_null($this->whiskerWidth)) {
			$output["whiskerWidth"] = $this->whiskerWidth;
		}

		// Check the x axis.
		if (!is_null($this->xAxis)) {
			$output["xAxis"] = $this->xAxis;
		}

		// Check the y axis.
		if (!is_null($this->yAxis)) {
			$output["yAxis"] = $this->yAxis;
		}

		// Check the z index.
		if (!is_null($this->zIndex)) {
			$output["zIndex"] = $this->zIndex;
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
