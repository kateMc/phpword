<?php

namespace PhpOffice\PhpWord\Element;

/**
 * PHPWord_Writer_Part_ChartLayout
 *
 */
class ChartLayout
{
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
     * Create a new ChartLayout
     */
    public function __construct ()
    {
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
     * @param boolean $value
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

}
