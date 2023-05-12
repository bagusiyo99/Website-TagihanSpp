<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class PembayaranStatusChart
{
    protected $chart;


    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(array  $label , array $data): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->chart->donutChart()
            ->setTitle('Grafik Status Pembayaran')
            ->setDataLabels(true)
            ->setSubtitle(date('F Y'))
            ->addData($data)
            ->setLabels( $label);
    }
}
