<?php

namespace PhpOffice\PhpWord\Element;

/**
 * PHPWord_Chart_Layout
 *
 */
class ChartLayout
{
    /**
     * layoutTarget
     *
     * @var string
     */
    private $_layoutTarget = null;

    /**
     * X Mode
     *
     * @var string
     */
    private $_xMode = null;

    /**
     * Y Mode
     *
     * @var string
     */
    private $_yMode = null;

    /**
     * X-Position
     *
     * @var float
     */
    private $_xPos = null;

    /**
     * Y-Position
     *
     * @var float
     */
    private $_yPos = null;

    /**
     * width
     *
     * @var float
     */
    private $_width = null;

    /**
     * height
     *
     * @var float
     */
    private $_height = null;

    /**
     * show legend key
     * Specifies that legend keys should be shown in data labels
     *
     * @var boolean
     */
    private $_showLegendKey = null;

    /**
     * show value
     * Specifies that the value should be shown in a data label.
     *
     * @var boolean
     */
    private $_showVal = null;

    /**
     * show category name
     * Specifies that the category name should be shown in the data label.
     *
     * @var boolean
     */
    private $_showCatName = null;

    /**
     * show data series name
     * Specifies that the series name should be shown in the data label.
     *
     * @var boolean
     */
    private $_showSerName = null;

    /**
     * show percentage
     * Specifies that the percentage should be shown in the data label.
     *
     * @var boolean
     */
    private $_showPercent = null;

    /**
     * show bubble size
     *
     * @var boolean
     */
    private $_showBubbleSize = null;

    /**
     * show leader lines
     * Specifies that leader lines should be shown for the data label.
     *
     * @var boolean
     */
    private $_showLeaderLines = null;


    /**
     * Create a new ChartLayout
     */
    public function __construct ($layout = array())
    {
        if (isset($layout['layoutTarget']))
        {
            $this->_layoutTarget = $layout['layoutTarget'];
        }
        if (isset($layout['xMode']))
        {
            $this->_xMode = $layout['xMode'];
        }
        if (isset($layout['yMode']))
        {
            $this->_yMode = $layout['yMode'];
        }
        if (isset($layout['x']))
        {
            $this->_xPos = (float)$layout['x'];
        }
        if (isset($layout['y']))
        {
            $this->_yPos = (float)$layout['y'];
        }
        if (isset($layout['w']))
        {
            $this->_width = (float)$layout['w'];
        }
        if (isset($layout['h']))
        {
            $this->_height = (float)$layout['h'];
        }
    }

    /**
     * Get Layout Target
     *
     * @return string
     */
    public function getLayoutTarget ()
    {
        return $this->_layoutTarget;
    }

    /**
     * Set Layout Target
     *
     * @param Layout Target $value
     *
     * @return ChartLayout
     */
    public function setLayoutTarget ($value)
    {
        $this->_layoutTarget = $value;

        return $this;
    }

    /**
     * Get X-Mode
     *
     * @return string
     */
    public function getXMode ()
    {
        return $this->_xMode;
    }

    /**
     * Set X-Mode
     *
     * @param X -Mode $value
     *
     * @return ChartLayout
     */
    public function setXMode ($value)
    {
        $this->_xMode = $value;

        return $this;
    }

    /**
     * Get Y-Mode
     *
     * @return string
     */
    public function getYMode ()
    {
        return $this->_yMode;
    }

    /**
     * Set Y-Mode
     *
     * @param Y -Mode $value
     *
     * @return ChartLayout
     */
    public function setYMode ($value)
    {
        $this->_yMode = $value;

        return $this;
    }

    /**
     * Get X-Position
     *
     * @return number
     */
    public function getXPosition ()
    {
        return $this->_xPos;
    }

    /**
     * Set X-Position
     *
     * @param X -Position $value
     *
     * @return ChartLayout
     */
    public function setXPosition ($value)
    {
        $this->_xPos = $value;

        return $this;
    }

    /**
     * Get Y-Position
     *
     * @return number
     */
    public function getYPosition ()
    {
        return $this->_yPos;
    }

    /**
     * Set Y-Position
     *
     * @param Y -Position $value
     *
     * @return ChartLayout
     */
    public function setYPosition ($value)
    {
        $this->_yPos = $value;

        return $this;
    }

    /**
     * Get Width
     *
     * @return number
     */
    public function getWidth ()
    {
        return $this->_width;
    }

    /**
     * Set Width
     *
     * @param Width $value
     *
     * @return ChartLayout
     */
    public function setWidth ($value)
    {
        $this->_width = $value;

        return $this;
    }

    /**
     * Get Height
     *
     * @return number
     */
    public function getHeight ()
    {
        return $this->_height;
    }

    /**
     * Set Height
     *
     * @param Height $value
     *
     * @return ChartLayout
     */
    public function setHeight ($value)
    {
        $this->_height = $value;

        return $this;
    }


    /**
     * Get show legend key
     *
     * @return boolean
     */
    public function getShowLegendKey ()
    {
        return $this->_showLegendKey;
    }

    /**
     * Set show legend key
     * Specifies that legend keys should be shown in data labels.
     *
     * @param boolean $value Show legend key
     *
     * @return ChartLayout
     */
    public function setShowLegendKey ($value)
    {
        $this->_showLegendKey = $value;

        return $this;
    }

    /**
     * Get show value
     *
     * @return boolean
     */
    public function getShowVal ()
    {
        return $this->_showVal;
    }

    /**
     * Set show val
     * Specifies that the value should be shown in data labels.
     *
     * @param boolean $value Show val
     *
     * @return ChartLayout
     */
    public function setShowVal ($value)
    {
        $this->_showVal = $value;

        return $this;
    }

    /**
     * Get show category name
     *
     * @return boolean
     */
    public function getShowCatName ()
    {
        return $this->_showCatName;
    }

    /**
     * Set show cat name
     * Specifies that the category name should be shown in data labels.
     *
     * @param boolean $value Show cat name
     *
     * @return ChartLayout
     */
    public function setShowCatName ($value)
    {
        $this->_showCatName = $value;

        return $this;
    }

    /**
     * Get show data series name
     *
     * @return boolean
     */
    public function getShowSerName ()
    {
        return $this->_showSerName;
    }

    /**
     * Set show ser name
     * Specifies that the series name should be shown in data labels.
     *
     * @param boolean $value Show series name
     *
     * @return ChartLayout
     */
    public function setShowSerName ($value)
    {
        $this->_showSerName = $value;

        return $this;
    }

    /**
     * Get show percentage
     *
     * @return boolean
     */
    public function getShowPercent ()
    {
        return $this->_showPercent;
    }

    /**
     * Set show percentage
     * Specifies that the percentage should be shown in data labels.
     *
     * @param boolean $value Show percentage
     *
     * @return ChartLayout
     */
    public function setShowPercent ($value)
    {
        $this->_showPercent = $value;

        return $this;
    }

    /**
     * Get show bubble size
     *
     * @return boolean
     */
    public function getShowBubbleSize ()
    {
        return $this->_showBubbleSize;
    }

    /**
     * Set show bubble size
     * Specifies that the bubble size should be shown in data labels.
     *
     * @param boolean $value Show bubble size
     *
     * @return ChartLayout
     */
    public function setShowBubbleSize ($value)
    {
        $this->_showBubbleSize = $value;

        return $this;
    }

    /**
     * Get show leader lines
     *
     * @return boolean
     */
    public function getShowLeaderLines ()
    {
        return $this->_showLeaderLines;
    }

    /**
     * Set show leader lines
     * Specifies that leader lines should be shown in data labels.
     *
     * @param boolean $value Show leader lines
     *
     * @return ChartLayout
     */
    public function setShowLeaderLines ($value)
    {
        $this->_showLeaderLines = $value;

        return $this;
    }

}