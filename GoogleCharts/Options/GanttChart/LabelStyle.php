<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart;

/**
 * The styles for task labels.
 *
 * @author Christophe Meneses
 */
class LabelStyle
{
    /**
     * @var string
     */
    protected $fontName;

    /**
     * @var int
     */
    protected $fontSize;

    /**
     * @var string
     */
    protected $color;

    /**
     * @param string $fontName
     *
     * @return LabelStyle
     */
    public function setFontName($fontName)
    {
        $this->fontName = $fontName;

        return $this;
    }

    /**
     * @param int $fontSize
     *
     * @return LabelStyle
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;

        return $this;
    }

    /**
     * @param string $color
     *
     * @return LabelStyle
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}
