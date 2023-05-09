@extends('layouts.app_sneat')

@section('content')
    {{-- <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Hai, operator</h5>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}
    {{--  tutor 162 dan --}} {{--  tutor 164 --}}

    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat Datang {{ auth()->user()->name }}</h5>
                            <p class="mb-4">
                                Kamu Mendapat <span class="fw-bold">{{ auth()->user()->unreadNotifications->count() }}</span>
                                Notifikasi Yang belum kamu lihat. Klik Tomboh dibawah untuk melihat informasi Pembayaran
                            </p>

                            <a href="javascript:;" class="btn btn-sm btn-outline-primary">Informasi Pembayaran</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success"
                                        class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="{{ route('siswa.index') }}">Lihat Data Siswa</a>
                                        {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Total Siswa</span>
                            <h3 class="card-title mb-2">{{ $siswa }} Siswa</h3>
                            <small> <a href="{{ route('siswa.index') }}" class="text-success fw-semibold"> Data Siswa</a>

                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card"
                                        class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span>Total Pembayaran</span>
                            <h3 class="card-title text-nowrap mb-1">{{ $SiswaSudahBayar }} Siswa</h3>
                            <small class="text-success fw-semibold"><i
                                    class="bx bx-up-arrow-alt"></i>{{ formatRupiah($totalPembayaran) }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Total Revenue -->
        {{-- <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                        <div id="totalRevenueChart" class="px-2" style="min-height: 315px;">
                            <div id="apexcharts2pvo8d5v" class="apexcharts-canvas apexcharts2pvo8d5v apexcharts-theme-light"
                                style="width: 515px; height: 300px;"><svg id="SvgjsSvg1571" width="515" height="300"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <foreignObject x="0" y="0" width="515" height="300">
                                        <div class="apexcharts-legend apexcharts-align-left apx-legend-position-top"
                                            xmlns="http://www.w3.org/1999/xhtml"
                                            style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 150px;">
                                            <div class="apexcharts-legend-series" rel="1" seriesname="2021"
                                                data:collapsed="false" style="margin: 2px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="1"
                                                    data:collapsed="false"
                                                    style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="1" i="0"
                                                    data:default-text="2021" data:collapsed="false"
                                                    style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2021</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="2" seriesname="2020"
                                                data:collapsed="false" style="margin: 2px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="2"
                                                    data:collapsed="false"
                                                    style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="2" i="1"
                                                    data:default-text="2020" data:collapsed="false"
                                                    style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2020</span>
                                            </div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g id="SvgjsG1573" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(53.80000114440918, 52)">
                                        <defs id="SvgjsDefs1572">
                                            <linearGradient id="SvgjsLinearGradient1577" x1="0" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop1578" stop-opacity="0.4"
                                                    stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                <stop id="SvgjsStop1579" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop1580" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <clipPath id="gridRectMask2pvo8d5v">
                                                <rect id="SvgjsRect1582" width="451.1999988555908"
                                                    height="223.70079907417298" x="-5" y="-3"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMask2pvo8d5v"></clipPath>
                                            <clipPath id="nonForecastMask2pvo8d5v"></clipPath>
                                            <clipPath id="gridRectMarkerMask2pvo8d5v">
                                                <rect id="SvgjsRect1583" width="445.1999988555908"
                                                    height="221.70079907417298" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect1581" width="22.05999994277954" height="217.70079907417298"
                                            x="202.9714094230107" y="0" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke-dasharray="3"
                                            fill="url(#SvgjsLinearGradient1577)" class="apexcharts-xcrosshairs"
                                            y2="217.70079907417298" filter="none" fill-opacity="0.9"
                                            x1="202.9714094230107" x2="202.9714094230107"></rect>
                                        <g id="SvgjsG1603" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1604" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText1606"
                                                    font-family="Helvetica, Arial, sans-serif" x="31.5142856325422"
                                                    y="246.70079907417298" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1607">Jan</tspan>
                                                    <title>Jan</title>
                                                </text><text id="SvgjsText1609" font-family="Helvetica, Arial, sans-serif"
                                                    x="94.5428568976266" y="246.70079907417298" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1610">Feb</tspan>
                                                    <title>Feb</title>
                                                </text><text id="SvgjsText1612" font-family="Helvetica, Arial, sans-serif"
                                                    x="157.57142816271102" y="246.70079907417298" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1613">Mar</tspan>
                                                    <title>Mar</title>
                                                </text><text id="SvgjsText1615" font-family="Helvetica, Arial, sans-serif"
                                                    x="220.5999994277954" y="246.70079907417298" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1616">Apr</tspan>
                                                    <title>Apr</title>
                                                </text><text id="SvgjsText1618" font-family="Helvetica, Arial, sans-serif"
                                                    x="283.6285706928798" y="246.70079907417298" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1619">May</tspan>
                                                    <title>May</title>
                                                </text><text id="SvgjsText1621" font-family="Helvetica, Arial, sans-serif"
                                                    x="346.6571419579642" y="246.70079907417298" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1622">Jun</tspan>
                                                    <title>Jun</title>
                                                </text><text id="SvgjsText1624" font-family="Helvetica, Arial, sans-serif"
                                                    x="409.6857132230486" y="246.70079907417298" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1625">Jul</tspan>
                                                    <title>Jul</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1640" class="apexcharts-grid">
                                            <g id="SvgjsG1641" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1643" x1="0" y1="0"
                                                    x2="441.1999988555908" y2="0" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1644" x1="0" y1="43.540159814834595"
                                                    x2="441.1999988555908" y2="43.540159814834595" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1645" x1="0" y1="87.08031962966919"
                                                    x2="441.1999988555908" y2="87.08031962966919" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1646" x1="0" y1="130.6204794445038"
                                                    x2="441.1999988555908" y2="130.6204794445038" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1647" x1="0" y1="174.16063925933838"
                                                    x2="441.1999988555908" y2="174.16063925933838" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1648" x1="0" y1="217.70079907417298"
                                                    x2="441.1999988555908" y2="217.70079907417298" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1642" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine1650" x1="0" y1="217.70079907417298"
                                                x2="441.1999988555908" y2="217.70079907417298" stroke="transparent"
                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1649" x1="0" y1="1" x2="0"
                                                y2="217.70079907417298" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1584" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG1585" class="apexcharts-series" seriesName="2021"
                                                rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1587"
                                                    d="M 20.48428566115243 120.62047944450379L 20.48428566115243 62.24819177780151Q 20.48428566115243 52.24819177780151 30.48428566115243 52.24819177780151L 26.544285603931968 52.24819177780151Q 36.54428560393197 52.24819177780151 36.54428560393197 62.24819177780151L 36.54428560393197 62.24819177780151L 36.54428560393197 120.62047944450379Q 36.54428560393197 130.6204794445038 26.544285603931968 130.6204794445038L 30.48428566115243 130.6204794445038Q 20.48428566115243 130.6204794445038 20.48428566115243 120.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask2pvo8d5v)"
                                                    pathTo="M 20.48428566115243 120.62047944450379L 20.48428566115243 62.24819177780151Q 20.48428566115243 52.24819177780151 30.48428566115243 52.24819177780151L 26.544285603931968 52.24819177780151Q 36.54428560393197 52.24819177780151 36.54428560393197 62.24819177780151L 36.54428560393197 62.24819177780151L 36.54428560393197 120.62047944450379Q 36.54428560393197 130.6204794445038 26.544285603931968 130.6204794445038L 30.48428566115243 130.6204794445038Q 20.48428566115243 130.6204794445038 20.48428566115243 120.62047944450379z"
                                                    pathFrom="M 20.48428566115243 120.62047944450379L 20.48428566115243 120.62047944450379L 36.54428560393197 120.62047944450379L 36.54428560393197 120.62047944450379L 36.54428560393197 120.62047944450379L 36.54428560393197 120.62047944450379L 36.54428560393197 120.62047944450379L 20.48428566115243 120.62047944450379"
                                                    cy="52.24819177780151" cx="80.51285692623684" j="0"
                                                    val="18" barHeight="78.37228766670228"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1588"
                                                    d="M 83.51285692623684 120.62047944450379L 83.51285692623684 110.14236757411956Q 83.51285692623684 100.14236757411956 93.51285692623684 100.14236757411956L 89.57285686901638 100.14236757411956Q 99.57285686901638 100.14236757411956 99.57285686901638 110.14236757411956L 99.57285686901638 110.14236757411956L 99.57285686901638 120.62047944450379Q 99.57285686901638 130.6204794445038 89.57285686901638 130.6204794445038L 93.51285692623684 130.6204794445038Q 83.51285692623684 130.6204794445038 83.51285692623684 120.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask2pvo8d5v)"
                                                    pathTo="M 83.51285692623684 120.62047944450379L 83.51285692623684 110.14236757411956Q 83.51285692623684 100.14236757411956 93.51285692623684 100.14236757411956L 89.57285686901638 100.14236757411956Q 99.57285686901638 100.14236757411956 99.57285686901638 110.14236757411956L 99.57285686901638 110.14236757411956L 99.57285686901638 120.62047944450379Q 99.57285686901638 130.6204794445038 89.57285686901638 130.6204794445038L 93.51285692623684 130.6204794445038Q 83.51285692623684 130.6204794445038 83.51285692623684 120.62047944450379z"
                                                    pathFrom="M 83.51285692623684 120.62047944450379L 83.51285692623684 120.62047944450379L 99.57285686901638 120.62047944450379L 99.57285686901638 120.62047944450379L 99.57285686901638 120.62047944450379L 99.57285686901638 120.62047944450379L 99.57285686901638 120.62047944450379L 83.51285692623684 120.62047944450379"
                                                    cy="100.14236757411956" cx="143.54142819132124" j="1"
                                                    val="7" barHeight="30.478111870384218"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1589"
                                                    d="M 146.54142819132124 120.62047944450379L 146.54142819132124 75.3102397222519Q 146.54142819132124 65.3102397222519 156.54142819132124 65.3102397222519L 152.6014281341008 65.3102397222519Q 162.6014281341008 65.3102397222519 162.6014281341008 75.3102397222519L 162.6014281341008 75.3102397222519L 162.6014281341008 120.62047944450379Q 162.6014281341008 130.6204794445038 152.6014281341008 130.6204794445038L 156.54142819132124 130.6204794445038Q 146.54142819132124 130.6204794445038 146.54142819132124 120.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask2pvo8d5v)"
                                                    pathTo="M 146.54142819132124 120.62047944450379L 146.54142819132124 75.3102397222519Q 146.54142819132124 65.3102397222519 156.54142819132124 65.3102397222519L 152.6014281341008 65.3102397222519Q 162.6014281341008 65.3102397222519 162.6014281341008 75.3102397222519L 162.6014281341008 75.3102397222519L 162.6014281341008 120.62047944450379Q 162.6014281341008 130.6204794445038 152.6014281341008 130.6204794445038L 156.54142819132124 130.6204794445038Q 146.54142819132124 130.6204794445038 146.54142819132124 120.62047944450379z"
                                                    pathFrom="M 146.54142819132124 120.62047944450379L 146.54142819132124 120.62047944450379L 162.6014281341008 120.62047944450379L 162.6014281341008 120.62047944450379L 162.6014281341008 120.62047944450379L 162.6014281341008 120.62047944450379L 162.6014281341008 120.62047944450379L 146.54142819132124 120.62047944450379"
                                                    cy="65.3102397222519" cx="206.56999945640564" j="2"
                                                    val="15" barHeight="65.3102397222519"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1590"
                                                    d="M 209.56999945640564 120.62047944450379L 209.56999945640564 14.354015981483457Q 209.56999945640564 4.354015981483457 219.56999945640564 4.354015981483457L 215.62999939918518 4.354015981483457Q 225.62999939918518 4.354015981483457 225.62999939918518 14.354015981483457L 225.62999939918518 14.354015981483457L 225.62999939918518 120.62047944450379Q 225.62999939918518 130.6204794445038 215.62999939918518 130.6204794445038L 219.56999945640564 130.6204794445038Q 209.56999945640564 130.6204794445038 209.56999945640564 120.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask2pvo8d5v)"
                                                    pathTo="M 209.56999945640564 120.62047944450379L 209.56999945640564 14.354015981483457Q 209.56999945640564 4.354015981483457 219.56999945640564 4.354015981483457L 215.62999939918518 4.354015981483457Q 225.62999939918518 4.354015981483457 225.62999939918518 14.354015981483457L 225.62999939918518 14.354015981483457L 225.62999939918518 120.62047944450379Q 225.62999939918518 130.6204794445038 215.62999939918518 130.6204794445038L 219.56999945640564 130.6204794445038Q 209.56999945640564 130.6204794445038 209.56999945640564 120.62047944450379z"
                                                    pathFrom="M 209.56999945640564 120.62047944450379L 209.56999945640564 120.62047944450379L 225.62999939918518 120.62047944450379L 225.62999939918518 120.62047944450379L 225.62999939918518 120.62047944450379L 225.62999939918518 120.62047944450379L 225.62999939918518 120.62047944450379L 209.56999945640564 120.62047944450379"
                                                    cy="4.354015981483457" cx="269.59857072149003" j="3"
                                                    val="29" barHeight="126.26646346302033"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1591"
                                                    d="M 272.59857072149003 120.62047944450379L 272.59857072149003 62.24819177780151Q 272.59857072149003 52.24819177780151 282.59857072149003 52.24819177780151L 278.6585706642696 52.24819177780151Q 288.6585706642696 52.24819177780151 288.6585706642696 62.24819177780151L 288.6585706642696 62.24819177780151L 288.6585706642696 120.62047944450379Q 288.6585706642696 130.6204794445038 278.6585706642696 130.6204794445038L 282.59857072149003 130.6204794445038Q 272.59857072149003 130.6204794445038 272.59857072149003 120.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask2pvo8d5v)"
                                                    pathTo="M 272.59857072149003 120.62047944450379L 272.59857072149003 62.24819177780151Q 272.59857072149003 52.24819177780151 282.59857072149003 52.24819177780151L 278.6585706642696 52.24819177780151Q 288.6585706642696 52.24819177780151 288.6585706642696 62.24819177780151L 288.6585706642696 62.24819177780151L 288.6585706642696 120.62047944450379Q 288.6585706642696 130.6204794445038 278.6585706642696 130.6204794445038L 282.59857072149003 130.6204794445038Q 272.59857072149003 130.6204794445038 272.59857072149003 120.62047944450379z"
                                                    pathFrom="M 272.59857072149003 120.62047944450379L 272.59857072149003 120.62047944450379L 288.6585706642696 120.62047944450379L 288.6585706642696 120.62047944450379L 288.6585706642696 120.62047944450379L 288.6585706642696 120.62047944450379L 288.6585706642696 120.62047944450379L 272.59857072149003 120.62047944450379"
                                                    cy="52.24819177780151" cx="332.62714198657443" j="4"
                                                    val="18" barHeight="78.37228766670228"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1592"
                                                    d="M 335.62714198657443 120.62047944450379L 335.62714198657443 88.37228766670228Q 335.62714198657443 78.37228766670228 345.62714198657443 78.37228766670228L 341.68714192935397 78.37228766670228Q 351.68714192935397 78.37228766670228 351.68714192935397 88.37228766670228L 351.68714192935397 88.37228766670228L 351.68714192935397 120.62047944450379Q 351.68714192935397 130.6204794445038 341.68714192935397 130.6204794445038L 345.62714198657443 130.6204794445038Q 335.62714198657443 130.6204794445038 335.62714198657443 120.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask2pvo8d5v)"
                                                    pathTo="M 335.62714198657443 120.62047944450379L 335.62714198657443 88.37228766670228Q 335.62714198657443 78.37228766670228 345.62714198657443 78.37228766670228L 341.68714192935397 78.37228766670228Q 351.68714192935397 78.37228766670228 351.68714192935397 88.37228766670228L 351.68714192935397 88.37228766670228L 351.68714192935397 120.62047944450379Q 351.68714192935397 130.6204794445038 341.68714192935397 130.6204794445038L 345.62714198657443 130.6204794445038Q 335.62714198657443 130.6204794445038 335.62714198657443 120.62047944450379z"
                                                    pathFrom="M 335.62714198657443 120.62047944450379L 335.62714198657443 120.62047944450379L 351.68714192935397 120.62047944450379L 351.68714192935397 120.62047944450379L 351.68714192935397 120.62047944450379L 351.68714192935397 120.62047944450379L 351.68714192935397 120.62047944450379L 335.62714198657443 120.62047944450379"
                                                    cy="78.37228766670228" cx="395.6557132516588" j="5"
                                                    val="12" barHeight="52.248191777801516"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1593"
                                                    d="M 398.6557132516588 120.62047944450379L 398.6557132516588 101.43433561115265Q 398.6557132516588 91.43433561115265 408.6557132516588 91.43433561115265L 404.71571319443837 91.43433561115265Q 414.71571319443837 91.43433561115265 414.71571319443837 101.43433561115265L 414.71571319443837 101.43433561115265L 414.71571319443837 120.62047944450379Q 414.71571319443837 130.6204794445038 404.71571319443837 130.6204794445038L 408.6557132516588 130.6204794445038Q 398.6557132516588 130.6204794445038 398.6557132516588 120.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask2pvo8d5v)"
                                                    pathTo="M 398.6557132516588 120.62047944450379L 398.6557132516588 101.43433561115265Q 398.6557132516588 91.43433561115265 408.6557132516588 91.43433561115265L 404.71571319443837 91.43433561115265Q 414.71571319443837 91.43433561115265 414.71571319443837 101.43433561115265L 414.71571319443837 101.43433561115265L 414.71571319443837 120.62047944450379Q 414.71571319443837 130.6204794445038 404.71571319443837 130.6204794445038L 408.6557132516588 130.6204794445038Q 398.6557132516588 130.6204794445038 398.6557132516588 120.62047944450379z"
                                                    pathFrom="M 398.6557132516588 120.62047944450379L 398.6557132516588 120.62047944450379L 414.71571319443837 120.62047944450379L 414.71571319443837 120.62047944450379L 414.71571319443837 120.62047944450379L 414.71571319443837 120.62047944450379L 414.71571319443837 120.62047944450379L 398.6557132516588 120.62047944450379"
                                                    cy="91.43433561115265" cx="458.6842845167432" j="6"
                                                    val="9" barHeight="39.18614383335114"
                                                    barWidth="22.05999994277954"></path>
                                            </g>
                                            <g id="SvgjsG1594" class="apexcharts-series" seriesName="2020"
                                                rel="2" data:realIndex="1">
                                                <path id="SvgjsPath1596"
                                                    d="M 20.48428566115243 150.6204794445038L 20.48428566115243 187.22268720378878Q 20.48428566115243 197.22268720378878 30.48428566115243 197.22268720378878L 26.544285603931968 197.22268720378878Q 36.54428560393197 197.22268720378878 36.54428560393197 187.22268720378878L 36.54428560393197 187.22268720378878L 36.54428560393197 150.6204794445038Q 36.54428560393197 140.6204794445038 26.544285603931968 140.6204794445038L 30.48428566115243 140.6204794445038Q 20.48428566115243 140.6204794445038 20.48428566115243 150.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMask2pvo8d5v)"
                                                    pathTo="M 20.48428566115243 150.6204794445038L 20.48428566115243 187.22268720378878Q 20.48428566115243 197.22268720378878 30.48428566115243 197.22268720378878L 26.544285603931968 197.22268720378878Q 36.54428560393197 197.22268720378878 36.54428560393197 187.22268720378878L 36.54428560393197 187.22268720378878L 36.54428560393197 150.6204794445038Q 36.54428560393197 140.6204794445038 26.544285603931968 140.6204794445038L 30.48428566115243 140.6204794445038Q 20.48428566115243 140.6204794445038 20.48428566115243 150.6204794445038z"
                                                    pathFrom="M 20.48428566115243 150.6204794445038L 20.48428566115243 150.6204794445038L 36.54428560393197 150.6204794445038L 36.54428560393197 150.6204794445038L 36.54428560393197 150.6204794445038L 36.54428560393197 150.6204794445038L 36.54428560393197 150.6204794445038L 20.48428566115243 150.6204794445038"
                                                    cy="177.22268720378878" cx="80.51285692623684" j="0"
                                                    val="-13" barHeight="-56.60220775928498"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1597"
                                                    d="M 83.51285692623684 150.6204794445038L 83.51285692623684 208.99276711120606Q 83.51285692623684 218.99276711120606 93.51285692623684 218.99276711120606L 89.57285686901638 218.99276711120606Q 99.57285686901638 218.99276711120606 99.57285686901638 208.99276711120606L 99.57285686901638 208.99276711120606L 99.57285686901638 150.6204794445038Q 99.57285686901638 140.6204794445038 89.57285686901638 140.6204794445038L 93.51285692623684 140.6204794445038Q 83.51285692623684 140.6204794445038 83.51285692623684 150.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMask2pvo8d5v)"
                                                    pathTo="M 83.51285692623684 150.6204794445038L 83.51285692623684 208.99276711120606Q 83.51285692623684 218.99276711120606 93.51285692623684 218.99276711120606L 89.57285686901638 218.99276711120606Q 99.57285686901638 218.99276711120606 99.57285686901638 208.99276711120606L 99.57285686901638 208.99276711120606L 99.57285686901638 150.6204794445038Q 99.57285686901638 140.6204794445038 89.57285686901638 140.6204794445038L 93.51285692623684 140.6204794445038Q 83.51285692623684 140.6204794445038 83.51285692623684 150.6204794445038z"
                                                    pathFrom="M 83.51285692623684 150.6204794445038L 83.51285692623684 150.6204794445038L 99.57285686901638 150.6204794445038L 99.57285686901638 150.6204794445038L 99.57285686901638 150.6204794445038L 99.57285686901638 150.6204794445038L 99.57285686901638 150.6204794445038L 83.51285692623684 150.6204794445038"
                                                    cy="198.99276711120606" cx="143.54142819132124" j="1"
                                                    val="-18" barHeight="-78.37228766670228"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1598"
                                                    d="M 146.54142819132124 150.6204794445038L 146.54142819132124 169.80662327785492Q 146.54142819132124 179.80662327785492 156.54142819132124 179.80662327785492L 152.6014281341008 179.80662327785492Q 162.6014281341008 179.80662327785492 162.6014281341008 169.80662327785492L 162.6014281341008 169.80662327785492L 162.6014281341008 150.6204794445038Q 162.6014281341008 140.6204794445038 152.6014281341008 140.6204794445038L 156.54142819132124 140.6204794445038Q 146.54142819132124 140.6204794445038 146.54142819132124 150.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMask2pvo8d5v)"
                                                    pathTo="M 146.54142819132124 150.6204794445038L 146.54142819132124 169.80662327785492Q 146.54142819132124 179.80662327785492 156.54142819132124 179.80662327785492L 152.6014281341008 179.80662327785492Q 162.6014281341008 179.80662327785492 162.6014281341008 169.80662327785492L 162.6014281341008 169.80662327785492L 162.6014281341008 150.6204794445038Q 162.6014281341008 140.6204794445038 152.6014281341008 140.6204794445038L 156.54142819132124 140.6204794445038Q 146.54142819132124 140.6204794445038 146.54142819132124 150.6204794445038z"
                                                    pathFrom="M 146.54142819132124 150.6204794445038L 146.54142819132124 150.6204794445038L 162.6014281341008 150.6204794445038L 162.6014281341008 150.6204794445038L 162.6014281341008 150.6204794445038L 162.6014281341008 150.6204794445038L 162.6014281341008 150.6204794445038L 146.54142819132124 150.6204794445038"
                                                    cy="159.80662327785492" cx="206.56999945640564" j="2"
                                                    val="-9" barHeight="-39.18614383335114"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1599"
                                                    d="M 209.56999945640564 150.6204794445038L 209.56999945640564 191.5767031852722Q 209.56999945640564 201.5767031852722 219.56999945640564 201.5767031852722L 215.62999939918518 201.5767031852722Q 225.62999939918518 201.5767031852722 225.62999939918518 191.5767031852722L 225.62999939918518 191.5767031852722L 225.62999939918518 150.6204794445038Q 225.62999939918518 140.6204794445038 215.62999939918518 140.6204794445038L 219.56999945640564 140.6204794445038Q 209.56999945640564 140.6204794445038 209.56999945640564 150.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMask2pvo8d5v)"
                                                    pathTo="M 209.56999945640564 150.6204794445038L 209.56999945640564 191.5767031852722Q 209.56999945640564 201.5767031852722 219.56999945640564 201.5767031852722L 215.62999939918518 201.5767031852722Q 225.62999939918518 201.5767031852722 225.62999939918518 191.5767031852722L 225.62999939918518 191.5767031852722L 225.62999939918518 150.6204794445038Q 225.62999939918518 140.6204794445038 215.62999939918518 140.6204794445038L 219.56999945640564 140.6204794445038Q 209.56999945640564 140.6204794445038 209.56999945640564 150.6204794445038z"
                                                    pathFrom="M 209.56999945640564 150.6204794445038L 209.56999945640564 150.6204794445038L 225.62999939918518 150.6204794445038L 225.62999939918518 150.6204794445038L 225.62999939918518 150.6204794445038L 225.62999939918518 150.6204794445038L 225.62999939918518 150.6204794445038L 209.56999945640564 150.6204794445038"
                                                    cy="181.5767031852722" cx="269.59857072149003" j="3"
                                                    val="-14" barHeight="-60.956223740768436"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1600"
                                                    d="M 272.59857072149003 150.6204794445038L 272.59857072149003 152.39055935192107Q 272.59857072149003 162.39055935192107 282.59857072149003 162.39055935192107L 278.6585706642696 162.39055935192107Q 288.6585706642696 162.39055935192107 288.6585706642696 152.39055935192107L 288.6585706642696 152.39055935192107L 288.6585706642696 150.6204794445038Q 288.6585706642696 140.6204794445038 278.6585706642696 140.6204794445038L 282.59857072149003 140.6204794445038Q 272.59857072149003 140.6204794445038 272.59857072149003 150.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMask2pvo8d5v)"
                                                    pathTo="M 272.59857072149003 150.6204794445038L 272.59857072149003 152.39055935192107Q 272.59857072149003 162.39055935192107 282.59857072149003 162.39055935192107L 278.6585706642696 162.39055935192107Q 288.6585706642696 162.39055935192107 288.6585706642696 152.39055935192107L 288.6585706642696 152.39055935192107L 288.6585706642696 150.6204794445038Q 288.6585706642696 140.6204794445038 278.6585706642696 140.6204794445038L 282.59857072149003 140.6204794445038Q 272.59857072149003 140.6204794445038 272.59857072149003 150.6204794445038z"
                                                    pathFrom="M 272.59857072149003 150.6204794445038L 272.59857072149003 150.6204794445038L 288.6585706642696 150.6204794445038L 288.6585706642696 150.6204794445038L 288.6585706642696 150.6204794445038L 288.6585706642696 150.6204794445038L 288.6585706642696 150.6204794445038L 272.59857072149003 150.6204794445038"
                                                    cy="142.39055935192107" cx="332.62714198657443" j="4"
                                                    val="-5" barHeight="-21.770079907417298"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1601"
                                                    d="M 335.62714198657443 150.6204794445038L 335.62714198657443 204.6387511297226Q 335.62714198657443 214.6387511297226 345.62714198657443 214.6387511297226L 341.68714192935397 214.6387511297226Q 351.68714192935397 214.6387511297226 351.68714192935397 204.6387511297226L 351.68714192935397 204.6387511297226L 351.68714192935397 150.6204794445038Q 351.68714192935397 140.6204794445038 341.68714192935397 140.6204794445038L 345.62714198657443 140.6204794445038Q 335.62714198657443 140.6204794445038 335.62714198657443 150.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMask2pvo8d5v)"
                                                    pathTo="M 335.62714198657443 150.6204794445038L 335.62714198657443 204.6387511297226Q 335.62714198657443 214.6387511297226 345.62714198657443 214.6387511297226L 341.68714192935397 214.6387511297226Q 351.68714192935397 214.6387511297226 351.68714192935397 204.6387511297226L 351.68714192935397 204.6387511297226L 351.68714192935397 150.6204794445038Q 351.68714192935397 140.6204794445038 341.68714192935397 140.6204794445038L 345.62714198657443 140.6204794445038Q 335.62714198657443 140.6204794445038 335.62714198657443 150.6204794445038z"
                                                    pathFrom="M 335.62714198657443 150.6204794445038L 335.62714198657443 150.6204794445038L 351.68714192935397 150.6204794445038L 351.68714192935397 150.6204794445038L 351.68714192935397 150.6204794445038L 351.68714192935397 150.6204794445038L 351.68714192935397 150.6204794445038L 335.62714198657443 150.6204794445038"
                                                    cy="194.6387511297226" cx="395.6557132516588" j="5"
                                                    val="-17" barHeight="-74.01827168521882"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1602"
                                                    d="M 398.6557132516588 150.6204794445038L 398.6557132516588 195.9307191667557Q 398.6557132516588 205.9307191667557 408.6557132516588 205.9307191667557L 404.71571319443837 205.9307191667557Q 414.71571319443837 205.9307191667557 414.71571319443837 195.9307191667557L 414.71571319443837 195.9307191667557L 414.71571319443837 150.6204794445038Q 414.71571319443837 140.6204794445038 404.71571319443837 140.6204794445038L 408.6557132516588 140.6204794445038Q 398.6557132516588 140.6204794445038 398.6557132516588 150.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMask2pvo8d5v)"
                                                    pathTo="M 398.6557132516588 150.6204794445038L 398.6557132516588 195.9307191667557Q 398.6557132516588 205.9307191667557 408.6557132516588 205.9307191667557L 404.71571319443837 205.9307191667557Q 414.71571319443837 205.9307191667557 414.71571319443837 195.9307191667557L 414.71571319443837 195.9307191667557L 414.71571319443837 150.6204794445038Q 414.71571319443837 140.6204794445038 404.71571319443837 140.6204794445038L 408.6557132516588 140.6204794445038Q 398.6557132516588 140.6204794445038 398.6557132516588 150.6204794445038z"
                                                    pathFrom="M 398.6557132516588 150.6204794445038L 398.6557132516588 150.6204794445038L 414.71571319443837 150.6204794445038L 414.71571319443837 150.6204794445038L 414.71571319443837 150.6204794445038L 414.71571319443837 150.6204794445038L 414.71571319443837 150.6204794445038L 398.6557132516588 150.6204794445038"
                                                    cy="185.9307191667557" cx="458.6842845167432" j="6"
                                                    val="-15" barHeight="-65.3102397222519"
                                                    barWidth="22.05999994277954"></path>
                                            </g>
                                            <g id="SvgjsG1586" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG1595" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <line id="SvgjsLine1651" x1="0" y1="0" x2="441.1999988555908"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1652" x1="0" y1="0" x2="441.1999988555908"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1653" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1654" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1655" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g id="SvgjsG1626" class="apexcharts-yaxis" rel="0"
                                        transform="translate(15.80000114440918, 0)">
                                        <g id="SvgjsG1627" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1628"
                                                font-family="Helvetica, Arial, sans-serif" x="20" y="53.5"
                                                text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1629">30</tspan>
                                                <title>30</title>
                                            </text><text id="SvgjsText1630" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="97.0401598148346" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1631">20</tspan>
                                                <title>20</title>
                                            </text><text id="SvgjsText1632" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="140.5803196296692" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1633">10</tspan>
                                                <title>10</title>
                                            </text><text id="SvgjsText1634" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="184.1204794445038" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1635">0</tspan>
                                                <title>0</title>
                                            </text><text id="SvgjsText1636" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="227.66063925933838" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1637">-10</tspan>
                                                <title>-10</title>
                                            </text><text id="SvgjsText1638" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="271.200799074173" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1639">-20</tspan>
                                                <title>-20</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1574" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light"
                                    style="left: 267.801px; top: 20.95px;">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Apr</div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-active"
                                        style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgba(105, 108, 255, 0.85);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">2021: </span><span
                                                    class="apexcharts-tooltip-text-y-value">29</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2; display: none;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgba(105, 108, 255, 0.85);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">2021: </span><span
                                                    class="apexcharts-tooltip-text-y-value">29</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 532px; height: 377px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                        id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        2022
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                        <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="growthChart" style="min-height: 154.875px;">
                            <div id="apexchartsn4klkmze"
                                class="apexcharts-canvas apexchartsn4klkmze apexcharts-theme-light"
                                style="width: 265px; height: 154.875px;"><svg id="SvgjsSvg1656" width="265"
                                    height="154.875" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1658" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(25.5, -25)">
                                        <defs id="SvgjsDefs1657">
                                            <clipPath id="gridRectMaskn4klkmze">
                                                <rect id="SvgjsRect1660" width="222" height="285" x="-3"
                                                    y="-1" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                                </rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskn4klkmze"></clipPath>
                                            <clipPath id="nonForecastMaskn4klkmze"></clipPath>
                                            <clipPath id="gridRectMarkerMaskn4klkmze">
                                                <rect id="SvgjsRect1661" width="220" height="287" x="-2"
                                                    y="-2" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                                </rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient1666" x1="1" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop1667" stop-opacity="1"
                                                    stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                <stop id="SvgjsStop1668" stop-opacity="0.6"
                                                    stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                                <stop id="SvgjsStop1669" stop-opacity="0.6"
                                                    stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient id="SvgjsLinearGradient1677" x1="1" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop1678" stop-opacity="1"
                                                    stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                <stop id="SvgjsStop1679" stop-opacity="0.6"
                                                    stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop>
                                                <stop id="SvgjsStop1680" stop-opacity="0.6"
                                                    stop-color="rgba(105,108,255,0.6)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="SvgjsG1662" class="apexcharts-radialbar">
                                            <g id="SvgjsG1663">
                                                <g id="SvgjsG1664" class="apexcharts-tracks">
                                                    <g id="SvgjsG1665" class="apexcharts-radialbar-track apexcharts-track"
                                                        rel="1">
                                                        <path id="apexcharts-radialbarTrack-0"
                                                            d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"
                                                            fill="none" fill-opacity="1"
                                                            stroke="rgba(255,255,255,0.85)" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="17.357317073170734"
                                                            stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                            data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1671">
                                                    <g id="SvgjsG1676" class="apexcharts-series apexcharts-radial-series"
                                                        seriesName="Growth" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1681"
                                                            d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"
                                                            fill="none" fill-opacity="0.85"
                                                            stroke="url(#SvgjsLinearGradient1677)" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="17.357317073170734"
                                                            stroke-dasharray="5"
                                                            class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                            data:angle="234" data:value="78" index="0"
                                                            j="0"
                                                            data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481">
                                                        </path>
                                                    </g>
                                                    <circle id="SvgjsCircle1672" r="54.65121951219512" cx="108"
                                                        cy="108" class="apexcharts-radialbar-hollow"
                                                        fill="transparent"></circle>
                                                    <g id="SvgjsG1673" class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)" style="opacity: 1;"><text
                                                            id="SvgjsText1674" font-family="Public Sans" x="108"
                                                            y="123" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="15px" font-weight="500" fill="#566a7f"
                                                            class="apexcharts-text apexcharts-datalabel-label"
                                                            style="font-family: &quot;Public Sans&quot;;">Growth</text><text
                                                            id="SvgjsText1675" font-family="Public Sans" x="108"
                                                            y="99" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="22px" font-weight="500" fill="#566a7f"
                                                            class="apexcharts-text apexcharts-datalabel-value"
                                                            style="font-family: &quot;Public Sans&quot;;">78%</text></g>
                                                </g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1682" x1="0" y1="0" x2="216"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1683" x1="0" y1="0" x2="216"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG1659" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                            </div>
                        </div>
                        <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                            <div class="d-flex">
                                <div class="me-2">
                                    <span class="badge bg-label-primary p-2"><i
                                            class="bx bx-dollar text-primary"></i></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <small>2022</small>
                                    <h6 class="mb-0">$32.5k</h6>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <small>2021</small>
                                    <h6 class="mb-0">$41.2k</h6>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 266px; height: 377px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--/ Total Revenue -->
        {{-- <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="d-block mb-1">Payments</span>
                            <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                            <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card"
                                        class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Transactions</span>
                            <h3 class="card-title mb-2">$14,857</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                        </div>
                    </div>
                </div>
                <!-- </div>
            <div class="row"> -->
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3"
                                style="position: relative;">
                                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                    <div class="card-title">
                                        <h5 class="text-nowrap mb-2">Profile Report</h5>
                                        <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                                    </div>
                                    <div class="mt-sm-auto">
                                        <small class="text-success text-nowrap fw-semibold"><i
                                                class="bx bx-chevron-up"></i> 68.2%</small>
                                        <h3 class="mb-0">$84,686k</h3>
                                    </div>
                                </div>
                                <div id="profileReportChart" style="min-height: 80px;">
                                    <div id="apexcharts6lhetsj3"
                                        class="apexcharts-canvas apexcharts6lhetsj3 apexcharts-theme-light"
                                        style="width: 199px; height: 80px;"><svg id="SvgjsSvg1685" width="199"
                                            height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1687" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1686">
                                                    <clipPath id="gridRectMask6lhetsj3">
                                                        <rect id="SvgjsRect1692" width="200" height="85"
                                                            x="-4.5" y="-2.5" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask6lhetsj3"></clipPath>
                                                    <clipPath id="nonForecastMask6lhetsj3"></clipPath>
                                                    <clipPath id="gridRectMarkerMask6lhetsj3">
                                                        <rect id="SvgjsRect1693" width="195" height="84"
                                                            x="-2" y="-2" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <filter id="SvgjsFilter1699" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood1700" flood-color="#ffab00"
                                                            flood-opacity="0.15" result="SvgjsFeFlood1700Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite1701" in="SvgjsFeFlood1700Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite1701Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset1702" dx="5" dy="10"
                                                            result="SvgjsFeOffset1702Out" in="SvgjsFeComposite1701Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur1703" stdDeviation="3 "
                                                            result="SvgjsFeGaussianBlur1703Out" in="SvgjsFeOffset1702Out">
                                                        </feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge1704" result="SvgjsFeMerge1704Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode1705"
                                                                in="SvgjsFeGaussianBlur1703Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode1706"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend1707" in="SourceGraphic"
                                                            in2="SvgjsFeMerge1704Out" mode="normal"
                                                            result="SvgjsFeBlend1707Out"></feBlend>
                                                    </filter>
                                                </defs>
                                                <line id="SvgjsLine1691" x1="0" y1="0" x2="0"
                                                    y2="80" stroke="#b6b6b6" stroke-dasharray="3"
                                                    stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0"
                                                    y="0" width="1" height="80" fill="#b1b9c4"
                                                    filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1708" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1709" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1717" class="apexcharts-grid">
                                                    <g id="SvgjsG1718" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1720" x1="0" y1="0"
                                                            x2="191" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1721" x1="0" y1="20"
                                                            x2="191" y2="20" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1722" x1="0" y1="40"
                                                            x2="191" y2="40" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1723" x1="0" y1="60"
                                                            x2="191" y2="60" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1724" x1="0" y1="80"
                                                            x2="191" y2="80" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1719" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1726" x1="0" y1="80"
                                                        x2="191" y2="80" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1725" x1="0" y1="1"
                                                        x2="0" y2="80" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1694" class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG1695" class="apexcharts-series" seriesName="seriesx1"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1698"
                                                            d="M 0 76C 13.370000000000001 76 24.830000000000002 12 38.2 12C 51.57000000000001 12 63.03 62 76.4 62C 89.77 62 101.23 22 114.6 22C 127.97 22 139.43 38 152.8 38C 166.17000000000002 38 177.63 6 191 6"
                                                            fill="none" fill-opacity="1" stroke="rgba(255,171,0,0.85)"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                            stroke-dasharray="0" class="apexcharts-line" index="0"
                                                            clip-path="url(#gridRectMask6lhetsj3)"
                                                            filter="url(#SvgjsFilter1699)"
                                                            pathTo="M 0 76C 13.370000000000001 76 24.830000000000002 12 38.2 12C 51.57000000000001 12 63.03 62 76.4 62C 89.77 62 101.23 22 114.6 22C 127.97 22 139.43 38 152.8 38C 166.17000000000002 38 177.63 6 191 6"
                                                            pathFrom="M -1 120L -1 120L 38.2 120L 76.4 120L 114.6 120L 152.8 120L 191 120">
                                                        </path>
                                                        <g id="SvgjsG1696" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1732" r="0"
                                                                    cx="0" cy="0"
                                                                    class="apexcharts-marker wjud95tvj no-pointer-events"
                                                                    stroke="#ffffff" fill="#ffab00" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1697" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1727" x1="0" y1="0" x2="191"
                                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                    stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1728" x1="0" y1="0" x2="191"
                                                    y2="0" stroke-dasharray="0" stroke-width="0"
                                                    stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1729" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1730" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1731" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect1690" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                            </rect>
                                            <g id="SvgjsG1716" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1688" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(255, 171, 0);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 338px; height: 118px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    {{-- bawah --}}
    <div class="row">
        <!-- Order Statistics -->
        <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Tagihan {{ $bulan }} {{ $tahun }}</h5>
                        <small class="text-muted">{{ date('d F Y') }}</small>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                        <div class="d-flex flex-column align-items-center gap-1">
                            <h2 class="mb-2"> {{ $tagihanSudahBayar->count() }} /{{ $tagihanBelumBayar->count() }}</h2>
                            <span>Total Tagihan {{ $totalTagihan }}</span>
                        </div>
                        {!! $tagihanChart->container() !!}

                    </div>
                    <ul class="p-0 m-0">
                        {{-- ->take(10) hanya mengambil sampel 10 --}}
                        @foreach ($tagihanPerKelas->take(10) as $key => $item)
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary">
                                        {{ $item->count() }}
                                    </span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Kelas {{ $key }}</h6>
                                        <small class="text-muted">Sudah Bayar / Belum Bayar</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">{{ $item->where('status', 'lunas')->count() }} /
                                            {{ $item->where('status', '<>', 'lunas')->count() }}</small>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <!--/ Order Statistics -->


        {{--  tutor 164 --}}
        <!-- Belum Di Konfirmasi -->
        {{-- ->take(10) hanya mengambil sampel 10 --}}

        <div class="col-md-6 col-lg-4 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Belum Di Konfirmasi</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        @foreach ($dataPembayaranBelumKonfirmasi->take(10) as $item)
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="/{{ $item->tagihan->siswa->foto }}" alt="User" class="rounded">
                                    {{-- <img src="/assets/img/icons/unicons/wallet-info.png" alt="Credit Card"> --}}

                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small
                                            class="text-muted d-block mb-1">{{ $item->tanggal_bayar->diffForHumans() }}</small>
                                        <h6 class="mb-0">{{ $item->tagihan->siswa->nama }}</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <a href="{{ route('pembayaran.show', $item->id) }}">
                                            <i class="fa fa-light fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
        <!--/ Belum Di Konfirmasi -->

        <!-- Belum Lunas -->
        <div class="col-md-6 col-lg-4 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2"> Tagihan Belum Lunas </h5>
                    {{ $tagihanBelumBayar->count() }} /{{ $totalTagihan }}
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        @foreach ($tagihanBelumBayar->take(10) as $item)
                            {{-- ->take(10) hanya mengambil sampel 10 --}}

                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="/{{ $item->siswa->foto }}" alt="User" class="rounded">
                                    {{-- <img src="/assets/img/icons/unicons/wallet-info.png" alt="Credit Card"> --}}

                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small
                                            class="text-muted d-block mb-1">{{ $item->tanggal_tagihan->translatedFormat('F Y') }}</small>
                                        <h6 class="mb-0">{{ $item->siswa->nama }}</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <a href="{{ route('pembayaran.show', $item->id) }}">

                                        </a>

                                        <a
                                            href="{{ route('tagihan.show', [
                                                $item->id,
                                                'siswa_id' => $item->siswa_id,
                                                'bulan' => $item->tanggal_tagihan->format('m'),
                                                'tahun' => $item->tanggal_tagihan->format('Y'),
                                            ]) }}"><i
                                                class="fa fa-light fa-arrow-right"></i></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
        <!--/  Belum Lunas  -->
        {{--  tutor 164 --}}
    </div>
    <script src="{{ $tagihanChart->cdn() }}"></script>

    {{ $tagihanChart->script() }}
@endsection
