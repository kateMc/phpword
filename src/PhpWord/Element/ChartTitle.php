<?php

namespace PhpOffice\PhpWord\Element;

/**
 * ChartTitle
 */
class ChartTitle
{

    /**
     * Title Caption
     *
     * @var string
     */
    private $_caption = null;

    /**
     * Title Layout
     *
     * @var ChartLayout
     */
    private $_layout = null;

    /**
     * Create a new ChartTitle
     *
     * @param String
     * @param ChartLayout
     */
    public function __construct ($caption = null, ChartLayout $layout = null)
    {
        $this->_caption = $caption;
        $this->_layout  = $layout;
    }

    /**
     * Get caption
     *
     * @return string
     */
    public function getCaption ()
    {
        return $this->_caption;
    }

    /**
     * Set caption
     *
     * @param string $caption
     *
     * @return ChartTitle
     */
    public function setCaption ($caption = null)
    {
        $this->_caption = $caption;

        return $this;
    }

    /**
     * Get Layout
     *
     * @return ChartLayout
     */
    public function getLayout ()
    {
        return $this->_layout;
    }

}