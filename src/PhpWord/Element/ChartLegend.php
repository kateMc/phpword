<?php
/**
 * This file is part of PHPWord - A pure PHP library for reading and writing
 * word processing documents.
 *
 * PHPWord is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPWord/contributors.
 *
 * @link        https://github.com/PHPOffice/PHPWord
 * @copyright   2010-2014 PHPWord contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

namespace PhpOffice\PhpWord\Element;

/**
 * ChartLegend element
 *
 */
class ChartLegend extends AbstractElement
{
    /**
     * Legend position
     * Options are are r,l,b,t,tr (right,left,bottom,top,top-right)
     *
     * @var    string
     */
    private $position = 'r';

    /**
     * Create new instance
     *
     * @param string
     */
    public function __construct ($position = 'r')
    {
        $this->position = $position;
    }

    /**
     * Set legend position
     *
     * @param string $position
     */
    public function setChartLegendPosition ($position = 'r')
    {
        $this->position = $position;
    }

    /**
     * Get legend position
     *
     * @return    string
     */
    public function getChartLegendPosition ()
    {
        return $this->position;
    }
}
