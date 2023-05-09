<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class TagihanBulananChart
{
    protected $chart;
    protected array $data = [];
    protected array $labels= [];

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(array $data): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->chart->donutChart()
            ->setDataLabels(true)
            ->setWidth(155)
            ->setHeight(155)
            ->setSparkline(true)
            ->addData([20, 24, 30]);
    }
}
