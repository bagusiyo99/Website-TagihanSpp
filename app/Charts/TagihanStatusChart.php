<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class TagihanStatusChart
{
    protected $chart;
    protected array $data = [];
    protected array $labels= [];

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(array  $label , array $data): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Grafik Status Tagihan')
            ->setSubtitle(date('F Y'))
            ->addData($data)
            ->setLabels( $label);
    }
}
