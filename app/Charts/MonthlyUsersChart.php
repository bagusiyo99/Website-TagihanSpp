<?php

namespace App\Charts;

use App\Models\Siswa;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $siswaKelas = Siswa::get();
        $data = [
            $siswaKelas->where('kelas', 10)->count(),
            $siswaKelas->where('kelas', 11)->count(),
            $siswaKelas->where('kelas', 12)->count(),
        ];
        $label = [
            'kelas 10',
            'kelas 11',
            'kelas 12',
        ];
        return $this->chart->pieChart()
            ->setTitle('Data Siswa Perkelas')
            ->setSubtitle(date('Y'))
            ->addData($data)
            ->setLabels($label);
    }
}
