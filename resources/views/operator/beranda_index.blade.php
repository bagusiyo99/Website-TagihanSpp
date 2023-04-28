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


    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat Datang</h5>
                            <p class="mb-4">
                                You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                                your profile.
                            </p>

                            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="/assets/img/illustrations/man-with-laptop-light.png" height="140"
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
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Profit</span>
                            <h3 class="card-title mb-2">$12,628</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
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
                            <span>Sales</span>
                            <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <!-- Total Revenue -->
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                        <div id="totalRevenueChart" class="px-2" style="min-height: 315px;">
                            <div id="apexchartsgrqnrl65" class="apexcharts-canvas apexchartsgrqnrl65 apexcharts-theme-light"
                                style="width: 410px; height: 300px;"><svg id="SvgjsSvg2326" width="410" height="300"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <foreignObject x="0" y="0" width="410" height="300">
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
                                    <g id="SvgjsG2328" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(53.80000114440918, 52)">
                                        <defs id="SvgjsDefs2327">
                                            <linearGradient id="SvgjsLinearGradient2332" x1="0" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop2333" stop-opacity="0.4"
                                                    stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                <stop id="SvgjsStop2334" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop2335" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <clipPath id="gridRectMaskgrqnrl65">
                                                <rect id="SvgjsRect2337" width="346.1999988555908"
                                                    height="223.70079907417298" x="-5" y="-3"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskgrqnrl65"></clipPath>
                                            <clipPath id="nonForecastMaskgrqnrl65"></clipPath>
                                            <clipPath id="gridRectMarkerMaskgrqnrl65">
                                                <rect id="SvgjsRect2338" width="340.1999988555908"
                                                    height="221.70079907417298" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect2336" width="23.053714207240514" height="217.70079907417298"
                                            x="0" y="0" rx="0" ry="0" opacity="1"
                                            stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient2332)"
                                            class="apexcharts-xcrosshairs" y2="217.70079907417298" filter="none"
                                            fill-opacity="0.9"></rect>
                                        <g id="SvgjsG2358" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG2359" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText2361"
                                                    font-family="Helvetica, Arial, sans-serif" x="24.0142856325422"
                                                    y="246.70079907417298" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2362">Jan</tspan>
                                                    <title>Jan</title>
                                                </text><text id="SvgjsText2364" font-family="Helvetica, Arial, sans-serif"
                                                    x="72.0428568976266" y="246.70079907417298" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2365">Feb</tspan>
                                                    <title>Feb</title>
                                                </text><text id="SvgjsText2367" font-family="Helvetica, Arial, sans-serif"
                                                    x="120.07142816271102" y="246.70079907417298" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2368">Mar</tspan>
                                                    <title>Mar</title>
                                                </text><text id="SvgjsText2370" font-family="Helvetica, Arial, sans-serif"
                                                    x="168.0999994277954" y="246.70079907417298" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2371">Apr</tspan>
                                                    <title>Apr</title>
                                                </text><text id="SvgjsText2373" font-family="Helvetica, Arial, sans-serif"
                                                    x="216.1285706928798" y="246.70079907417298" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2374">May</tspan>
                                                    <title>May</title>
                                                </text><text id="SvgjsText2376" font-family="Helvetica, Arial, sans-serif"
                                                    x="264.1571419579642" y="246.70079907417298" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2377">Jun</tspan>
                                                    <title>Jun</title>
                                                </text><text id="SvgjsText2379" font-family="Helvetica, Arial, sans-serif"
                                                    x="312.1857132230486" y="246.70079907417298" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2380">Jul</tspan>
                                                    <title>Jul</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG2395" class="apexcharts-grid">
                                            <g id="SvgjsG2396" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine2398" x1="0" y1="0"
                                                    x2="336.1999988555908" y2="0" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2399" x1="0" y1="43.540159814834595"
                                                    x2="336.1999988555908" y2="43.540159814834595" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2400" x1="0" y1="87.08031962966919"
                                                    x2="336.1999988555908" y2="87.08031962966919" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2401" x1="0" y1="130.6204794445038"
                                                    x2="336.1999988555908" y2="130.6204794445038" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2402" x1="0" y1="174.16063925933838"
                                                    x2="336.1999988555908" y2="174.16063925933838" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2403" x1="0" y1="217.70079907417298"
                                                    x2="336.1999988555908" y2="217.70079907417298" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG2397" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine2405" x1="0" y1="217.70079907417298"
                                                x2="336.1999988555908" y2="217.70079907417298" stroke="transparent"
                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2404" x1="0" y1="1" x2="0"
                                                y2="217.70079907417298" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG2339" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG2340" class="apexcharts-series" seriesName="2021"
                                                rel="1" data:realIndex="0">
                                                <path id="SvgjsPath2342"
                                                    d="M 12.487428528921944 119.62047944450379L 12.487428528921944 63.24819177780151Q 12.487428528921944 52.24819177780151 23.487428528921946 52.24819177780151L 18.541142736162456 52.24819177780151Q 29.541142736162456 52.24819177780151 29.541142736162456 63.24819177780151L 29.541142736162456 63.24819177780151L 29.541142736162456 119.62047944450379Q 29.541142736162456 130.6204794445038 18.541142736162456 130.6204794445038L 23.487428528921946 130.6204794445038Q 12.487428528921944 130.6204794445038 12.487428528921944 119.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskgrqnrl65)"
                                                    pathTo="M 12.487428528921944 119.62047944450379L 12.487428528921944 63.24819177780151Q 12.487428528921944 52.24819177780151 23.487428528921946 52.24819177780151L 18.541142736162456 52.24819177780151Q 29.541142736162456 52.24819177780151 29.541142736162456 63.24819177780151L 29.541142736162456 63.24819177780151L 29.541142736162456 119.62047944450379Q 29.541142736162456 130.6204794445038 18.541142736162456 130.6204794445038L 23.487428528921946 130.6204794445038Q 12.487428528921944 130.6204794445038 12.487428528921944 119.62047944450379z"
                                                    pathFrom="M 12.487428528921944 119.62047944450379L 12.487428528921944 119.62047944450379L 29.541142736162456 119.62047944450379L 29.541142736162456 119.62047944450379L 29.541142736162456 119.62047944450379L 29.541142736162456 119.62047944450379L 29.541142736162456 119.62047944450379L 12.487428528921944 119.62047944450379"
                                                    cy="52.24819177780151" cx="57.51599979400635" j="0"
                                                    val="18" barHeight="78.37228766670228"
                                                    barWidth="23.053714207240514"></path>
                                                <path id="SvgjsPath2343"
                                                    d="M 60.51599979400635 119.62047944450379L 60.51599979400635 111.14236757411956Q 60.51599979400635 100.14236757411956 71.51599979400635 100.14236757411956L 66.56971400124687 100.14236757411956Q 77.56971400124687 100.14236757411956 77.56971400124687 111.14236757411956L 77.56971400124687 111.14236757411956L 77.56971400124687 119.62047944450379Q 77.56971400124687 130.6204794445038 66.56971400124687 130.6204794445038L 71.51599979400635 130.6204794445038Q 60.51599979400635 130.6204794445038 60.51599979400635 119.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskgrqnrl65)"
                                                    pathTo="M 60.51599979400635 119.62047944450379L 60.51599979400635 111.14236757411956Q 60.51599979400635 100.14236757411956 71.51599979400635 100.14236757411956L 66.56971400124687 100.14236757411956Q 77.56971400124687 100.14236757411956 77.56971400124687 111.14236757411956L 77.56971400124687 111.14236757411956L 77.56971400124687 119.62047944450379Q 77.56971400124687 130.6204794445038 66.56971400124687 130.6204794445038L 71.51599979400635 130.6204794445038Q 60.51599979400635 130.6204794445038 60.51599979400635 119.62047944450379z"
                                                    pathFrom="M 60.51599979400635 119.62047944450379L 60.51599979400635 119.62047944450379L 77.56971400124687 119.62047944450379L 77.56971400124687 119.62047944450379L 77.56971400124687 119.62047944450379L 77.56971400124687 119.62047944450379L 77.56971400124687 119.62047944450379L 60.51599979400635 119.62047944450379"
                                                    cy="100.14236757411956" cx="105.54457105909074" j="1"
                                                    val="7" barHeight="30.478111870384218"
                                                    barWidth="23.053714207240514"></path>
                                                <path id="SvgjsPath2344"
                                                    d="M 108.54457105909074 119.62047944450379L 108.54457105909074 76.3102397222519Q 108.54457105909074 65.3102397222519 119.54457105909074 65.3102397222519L 114.59828526633126 65.3102397222519Q 125.59828526633126 65.3102397222519 125.59828526633126 76.3102397222519L 125.59828526633126 76.3102397222519L 125.59828526633126 119.62047944450379Q 125.59828526633126 130.6204794445038 114.59828526633126 130.6204794445038L 119.54457105909074 130.6204794445038Q 108.54457105909074 130.6204794445038 108.54457105909074 119.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskgrqnrl65)"
                                                    pathTo="M 108.54457105909074 119.62047944450379L 108.54457105909074 76.3102397222519Q 108.54457105909074 65.3102397222519 119.54457105909074 65.3102397222519L 114.59828526633126 65.3102397222519Q 125.59828526633126 65.3102397222519 125.59828526633126 76.3102397222519L 125.59828526633126 76.3102397222519L 125.59828526633126 119.62047944450379Q 125.59828526633126 130.6204794445038 114.59828526633126 130.6204794445038L 119.54457105909074 130.6204794445038Q 108.54457105909074 130.6204794445038 108.54457105909074 119.62047944450379z"
                                                    pathFrom="M 108.54457105909074 119.62047944450379L 108.54457105909074 119.62047944450379L 125.59828526633126 119.62047944450379L 125.59828526633126 119.62047944450379L 125.59828526633126 119.62047944450379L 125.59828526633126 119.62047944450379L 125.59828526633126 119.62047944450379L 108.54457105909074 119.62047944450379"
                                                    cy="65.3102397222519" cx="153.57314232417514" j="2"
                                                    val="15" barHeight="65.3102397222519"
                                                    barWidth="23.053714207240514"></path>
                                                <path id="SvgjsPath2345"
                                                    d="M 156.57314232417514 119.62047944450379L 156.57314232417514 15.354015981483457Q 156.57314232417514 4.354015981483457 167.57314232417514 4.354015981483457L 162.62685653141565 4.354015981483457Q 173.62685653141565 4.354015981483457 173.62685653141565 15.354015981483457L 173.62685653141565 15.354015981483457L 173.62685653141565 119.62047944450379Q 173.62685653141565 130.6204794445038 162.62685653141565 130.6204794445038L 167.57314232417514 130.6204794445038Q 156.57314232417514 130.6204794445038 156.57314232417514 119.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskgrqnrl65)"
                                                    pathTo="M 156.57314232417514 119.62047944450379L 156.57314232417514 15.354015981483457Q 156.57314232417514 4.354015981483457 167.57314232417514 4.354015981483457L 162.62685653141565 4.354015981483457Q 173.62685653141565 4.354015981483457 173.62685653141565 15.354015981483457L 173.62685653141565 15.354015981483457L 173.62685653141565 119.62047944450379Q 173.62685653141565 130.6204794445038 162.62685653141565 130.6204794445038L 167.57314232417514 130.6204794445038Q 156.57314232417514 130.6204794445038 156.57314232417514 119.62047944450379z"
                                                    pathFrom="M 156.57314232417514 119.62047944450379L 156.57314232417514 119.62047944450379L 173.62685653141565 119.62047944450379L 173.62685653141565 119.62047944450379L 173.62685653141565 119.62047944450379L 173.62685653141565 119.62047944450379L 173.62685653141565 119.62047944450379L 156.57314232417514 119.62047944450379"
                                                    cy="4.354015981483457" cx="201.60171358925953" j="3"
                                                    val="29" barHeight="126.26646346302033"
                                                    barWidth="23.053714207240514"></path>
                                                <path id="SvgjsPath2346"
                                                    d="M 204.60171358925953 119.62047944450379L 204.60171358925953 63.24819177780151Q 204.60171358925953 52.24819177780151 215.60171358925953 52.24819177780151L 210.65542779650005 52.24819177780151Q 221.65542779650005 52.24819177780151 221.65542779650005 63.24819177780151L 221.65542779650005 63.24819177780151L 221.65542779650005 119.62047944450379Q 221.65542779650005 130.6204794445038 210.65542779650005 130.6204794445038L 215.60171358925953 130.6204794445038Q 204.60171358925953 130.6204794445038 204.60171358925953 119.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskgrqnrl65)"
                                                    pathTo="M 204.60171358925953 119.62047944450379L 204.60171358925953 63.24819177780151Q 204.60171358925953 52.24819177780151 215.60171358925953 52.24819177780151L 210.65542779650005 52.24819177780151Q 221.65542779650005 52.24819177780151 221.65542779650005 63.24819177780151L 221.65542779650005 63.24819177780151L 221.65542779650005 119.62047944450379Q 221.65542779650005 130.6204794445038 210.65542779650005 130.6204794445038L 215.60171358925953 130.6204794445038Q 204.60171358925953 130.6204794445038 204.60171358925953 119.62047944450379z"
                                                    pathFrom="M 204.60171358925953 119.62047944450379L 204.60171358925953 119.62047944450379L 221.65542779650005 119.62047944450379L 221.65542779650005 119.62047944450379L 221.65542779650005 119.62047944450379L 221.65542779650005 119.62047944450379L 221.65542779650005 119.62047944450379L 204.60171358925953 119.62047944450379"
                                                    cy="52.24819177780151" cx="249.63028485434393" j="4"
                                                    val="18" barHeight="78.37228766670228"
                                                    barWidth="23.053714207240514"></path>
                                                <path id="SvgjsPath2347"
                                                    d="M 252.63028485434393 119.62047944450379L 252.63028485434393 89.37228766670228Q 252.63028485434393 78.37228766670228 263.6302848543439 78.37228766670228L 258.6839990615844 78.37228766670228Q 269.6839990615844 78.37228766670228 269.6839990615844 89.37228766670228L 269.6839990615844 89.37228766670228L 269.6839990615844 119.62047944450379Q 269.6839990615844 130.6204794445038 258.6839990615844 130.6204794445038L 263.6302848543439 130.6204794445038Q 252.63028485434393 130.6204794445038 252.63028485434393 119.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskgrqnrl65)"
                                                    pathTo="M 252.63028485434393 119.62047944450379L 252.63028485434393 89.37228766670228Q 252.63028485434393 78.37228766670228 263.6302848543439 78.37228766670228L 258.6839990615844 78.37228766670228Q 269.6839990615844 78.37228766670228 269.6839990615844 89.37228766670228L 269.6839990615844 89.37228766670228L 269.6839990615844 119.62047944450379Q 269.6839990615844 130.6204794445038 258.6839990615844 130.6204794445038L 263.6302848543439 130.6204794445038Q 252.63028485434393 130.6204794445038 252.63028485434393 119.62047944450379z"
                                                    pathFrom="M 252.63028485434393 119.62047944450379L 252.63028485434393 119.62047944450379L 269.6839990615844 119.62047944450379L 269.6839990615844 119.62047944450379L 269.6839990615844 119.62047944450379L 269.6839990615844 119.62047944450379L 269.6839990615844 119.62047944450379L 252.63028485434393 119.62047944450379"
                                                    cy="78.37228766670228" cx="297.6588561194283" j="5"
                                                    val="12" barHeight="52.248191777801516"
                                                    barWidth="23.053714207240514"></path>
                                                <path id="SvgjsPath2348"
                                                    d="M 300.6588561194283 119.62047944450379L 300.6588561194283 102.43433561115265Q 300.6588561194283 91.43433561115265 311.6588561194283 91.43433561115265L 306.7125703266688 91.43433561115265Q 317.7125703266688 91.43433561115265 317.7125703266688 102.43433561115265L 317.7125703266688 102.43433561115265L 317.7125703266688 119.62047944450379Q 317.7125703266688 130.6204794445038 306.7125703266688 130.6204794445038L 311.6588561194283 130.6204794445038Q 300.6588561194283 130.6204794445038 300.6588561194283 119.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskgrqnrl65)"
                                                    pathTo="M 300.6588561194283 119.62047944450379L 300.6588561194283 102.43433561115265Q 300.6588561194283 91.43433561115265 311.6588561194283 91.43433561115265L 306.7125703266688 91.43433561115265Q 317.7125703266688 91.43433561115265 317.7125703266688 102.43433561115265L 317.7125703266688 102.43433561115265L 317.7125703266688 119.62047944450379Q 317.7125703266688 130.6204794445038 306.7125703266688 130.6204794445038L 311.6588561194283 130.6204794445038Q 300.6588561194283 130.6204794445038 300.6588561194283 119.62047944450379z"
                                                    pathFrom="M 300.6588561194283 119.62047944450379L 300.6588561194283 119.62047944450379L 317.7125703266688 119.62047944450379L 317.7125703266688 119.62047944450379L 317.7125703266688 119.62047944450379L 317.7125703266688 119.62047944450379L 317.7125703266688 119.62047944450379L 300.6588561194283 119.62047944450379"
                                                    cy="91.43433561115265" cx="345.6874273845127" j="6"
                                                    val="9" barHeight="39.18614383335114"
                                                    barWidth="23.053714207240514"></path>
                                            </g>
                                            <g id="SvgjsG2349" class="apexcharts-series" seriesName="2020"
                                                rel="2" data:realIndex="1">
                                                <path id="SvgjsPath2351"
                                                    d="M 12.487428528921944 152.6204794445038L 12.487428528921944 187.22268720378878Q 12.487428528921944 198.22268720378878 23.487428528921946 198.22268720378878L 18.541142736162456 198.22268720378878Q 29.541142736162456 198.22268720378878 29.541142736162456 187.22268720378878L 29.541142736162456 187.22268720378878L 29.541142736162456 152.6204794445038Q 29.541142736162456 141.6204794445038 18.541142736162456 141.6204794445038L 23.487428528921946 141.6204794445038Q 12.487428528921944 141.6204794445038 12.487428528921944 152.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskgrqnrl65)"
                                                    pathTo="M 12.487428528921944 152.6204794445038L 12.487428528921944 187.22268720378878Q 12.487428528921944 198.22268720378878 23.487428528921946 198.22268720378878L 18.541142736162456 198.22268720378878Q 29.541142736162456 198.22268720378878 29.541142736162456 187.22268720378878L 29.541142736162456 187.22268720378878L 29.541142736162456 152.6204794445038Q 29.541142736162456 141.6204794445038 18.541142736162456 141.6204794445038L 23.487428528921946 141.6204794445038Q 12.487428528921944 141.6204794445038 12.487428528921944 152.6204794445038z"
                                                    pathFrom="M 12.487428528921944 152.6204794445038L 12.487428528921944 152.6204794445038L 29.541142736162456 152.6204794445038L 29.541142736162456 152.6204794445038L 29.541142736162456 152.6204794445038L 29.541142736162456 152.6204794445038L 29.541142736162456 152.6204794445038L 12.487428528921944 152.6204794445038"
                                                    cy="176.22268720378878" cx="57.51599979400635" j="0"
                                                    val="-13" barHeight="-56.60220775928498"
                                                    barWidth="23.053714207240514"></path>
                                                <path id="SvgjsPath2352"
                                                    d="M 60.51599979400635 152.6204794445038L 60.51599979400635 208.99276711120606Q 60.51599979400635 219.99276711120606 71.51599979400635 219.99276711120606L 66.56971400124687 219.99276711120606Q 77.56971400124687 219.99276711120606 77.56971400124687 208.99276711120606L 77.56971400124687 208.99276711120606L 77.56971400124687 152.6204794445038Q 77.56971400124687 141.6204794445038 66.56971400124687 141.6204794445038L 71.51599979400635 141.6204794445038Q 60.51599979400635 141.6204794445038 60.51599979400635 152.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskgrqnrl65)"
                                                    pathTo="M 60.51599979400635 152.6204794445038L 60.51599979400635 208.99276711120606Q 60.51599979400635 219.99276711120606 71.51599979400635 219.99276711120606L 66.56971400124687 219.99276711120606Q 77.56971400124687 219.99276711120606 77.56971400124687 208.99276711120606L 77.56971400124687 208.99276711120606L 77.56971400124687 152.6204794445038Q 77.56971400124687 141.6204794445038 66.56971400124687 141.6204794445038L 71.51599979400635 141.6204794445038Q 60.51599979400635 141.6204794445038 60.51599979400635 152.6204794445038z"
                                                    pathFrom="M 60.51599979400635 152.6204794445038L 60.51599979400635 152.6204794445038L 77.56971400124687 152.6204794445038L 77.56971400124687 152.6204794445038L 77.56971400124687 152.6204794445038L 77.56971400124687 152.6204794445038L 77.56971400124687 152.6204794445038L 60.51599979400635 152.6204794445038"
                                                    cy="197.99276711120606" cx="105.54457105909074" j="1"
                                                    val="-18" barHeight="-78.37228766670228"
                                                    barWidth="23.053714207240514"></path>
                                                <path id="SvgjsPath2353"
                                                    d="M 108.54457105909074 152.6204794445038L 108.54457105909074 169.80662327785492Q 108.54457105909074 180.80662327785492 119.54457105909074 180.80662327785492L 114.59828526633126 180.80662327785492Q 125.59828526633126 180.80662327785492 125.59828526633126 169.80662327785492L 125.59828526633126 169.80662327785492L 125.59828526633126 152.6204794445038Q 125.59828526633126 141.6204794445038 114.59828526633126 141.6204794445038L 119.54457105909074 141.6204794445038Q 108.54457105909074 141.6204794445038 108.54457105909074 152.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskgrqnrl65)"
                                                    pathTo="M 108.54457105909074 152.6204794445038L 108.54457105909074 169.80662327785492Q 108.54457105909074 180.80662327785492 119.54457105909074 180.80662327785492L 114.59828526633126 180.80662327785492Q 125.59828526633126 180.80662327785492 125.59828526633126 169.80662327785492L 125.59828526633126 169.80662327785492L 125.59828526633126 152.6204794445038Q 125.59828526633126 141.6204794445038 114.59828526633126 141.6204794445038L 119.54457105909074 141.6204794445038Q 108.54457105909074 141.6204794445038 108.54457105909074 152.6204794445038z"
                                                    pathFrom="M 108.54457105909074 152.6204794445038L 108.54457105909074 152.6204794445038L 125.59828526633126 152.6204794445038L 125.59828526633126 152.6204794445038L 125.59828526633126 152.6204794445038L 125.59828526633126 152.6204794445038L 125.59828526633126 152.6204794445038L 108.54457105909074 152.6204794445038"
                                                    cy="158.80662327785492" cx="153.57314232417514" j="2"
                                                    val="-9" barHeight="-39.18614383335114"
                                                    barWidth="23.053714207240514"></path>
                                                <path id="SvgjsPath2354"
                                                    d="M 156.57314232417514 152.6204794445038L 156.57314232417514 191.5767031852722Q 156.57314232417514 202.5767031852722 167.57314232417514 202.5767031852722L 162.62685653141565 202.5767031852722Q 173.62685653141565 202.5767031852722 173.62685653141565 191.5767031852722L 173.62685653141565 191.5767031852722L 173.62685653141565 152.6204794445038Q 173.62685653141565 141.6204794445038 162.62685653141565 141.6204794445038L 167.57314232417514 141.6204794445038Q 156.57314232417514 141.6204794445038 156.57314232417514 152.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskgrqnrl65)"
                                                    pathTo="M 156.57314232417514 152.6204794445038L 156.57314232417514 191.5767031852722Q 156.57314232417514 202.5767031852722 167.57314232417514 202.5767031852722L 162.62685653141565 202.5767031852722Q 173.62685653141565 202.5767031852722 173.62685653141565 191.5767031852722L 173.62685653141565 191.5767031852722L 173.62685653141565 152.6204794445038Q 173.62685653141565 141.6204794445038 162.62685653141565 141.6204794445038L 167.57314232417514 141.6204794445038Q 156.57314232417514 141.6204794445038 156.57314232417514 152.6204794445038z"
                                                    pathFrom="M 156.57314232417514 152.6204794445038L 156.57314232417514 152.6204794445038L 173.62685653141565 152.6204794445038L 173.62685653141565 152.6204794445038L 173.62685653141565 152.6204794445038L 173.62685653141565 152.6204794445038L 173.62685653141565 152.6204794445038L 156.57314232417514 152.6204794445038"
                                                    cy="180.5767031852722" cx="201.60171358925953" j="3"
                                                    val="-14" barHeight="-60.956223740768436"
                                                    barWidth="23.053714207240514"></path>
                                                <path id="SvgjsPath2355"
                                                    d="M 204.60171358925953 152.6204794445038L 204.60171358925953 152.39055935192107Q 204.60171358925953 163.39055935192107 215.60171358925953 163.39055935192107L 210.65542779650005 163.39055935192107Q 221.65542779650005 163.39055935192107 221.65542779650005 152.39055935192107L 221.65542779650005 152.39055935192107L 221.65542779650005 152.6204794445038Q 221.65542779650005 141.6204794445038 210.65542779650005 141.6204794445038L 215.60171358925953 141.6204794445038Q 204.60171358925953 141.6204794445038 204.60171358925953 152.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskgrqnrl65)"
                                                    pathTo="M 204.60171358925953 152.6204794445038L 204.60171358925953 152.39055935192107Q 204.60171358925953 163.39055935192107 215.60171358925953 163.39055935192107L 210.65542779650005 163.39055935192107Q 221.65542779650005 163.39055935192107 221.65542779650005 152.39055935192107L 221.65542779650005 152.39055935192107L 221.65542779650005 152.6204794445038Q 221.65542779650005 141.6204794445038 210.65542779650005 141.6204794445038L 215.60171358925953 141.6204794445038Q 204.60171358925953 141.6204794445038 204.60171358925953 152.6204794445038z"
                                                    pathFrom="M 204.60171358925953 152.6204794445038L 204.60171358925953 152.6204794445038L 221.65542779650005 152.6204794445038L 221.65542779650005 152.6204794445038L 221.65542779650005 152.6204794445038L 221.65542779650005 152.6204794445038L 221.65542779650005 152.6204794445038L 204.60171358925953 152.6204794445038"
                                                    cy="141.39055935192107" cx="249.63028485434393" j="4"
                                                    val="-5" barHeight="-21.770079907417298"
                                                    barWidth="23.053714207240514"></path>
                                                <path id="SvgjsPath2356"
                                                    d="M 252.63028485434393 152.6204794445038L 252.63028485434393 204.6387511297226Q 252.63028485434393 215.6387511297226 263.6302848543439 215.6387511297226L 258.6839990615844 215.6387511297226Q 269.6839990615844 215.6387511297226 269.6839990615844 204.6387511297226L 269.6839990615844 204.6387511297226L 269.6839990615844 152.6204794445038Q 269.6839990615844 141.6204794445038 258.6839990615844 141.6204794445038L 263.6302848543439 141.6204794445038Q 252.63028485434393 141.6204794445038 252.63028485434393 152.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskgrqnrl65)"
                                                    pathTo="M 252.63028485434393 152.6204794445038L 252.63028485434393 204.6387511297226Q 252.63028485434393 215.6387511297226 263.6302848543439 215.6387511297226L 258.6839990615844 215.6387511297226Q 269.6839990615844 215.6387511297226 269.6839990615844 204.6387511297226L 269.6839990615844 204.6387511297226L 269.6839990615844 152.6204794445038Q 269.6839990615844 141.6204794445038 258.6839990615844 141.6204794445038L 263.6302848543439 141.6204794445038Q 252.63028485434393 141.6204794445038 252.63028485434393 152.6204794445038z"
                                                    pathFrom="M 252.63028485434393 152.6204794445038L 252.63028485434393 152.6204794445038L 269.6839990615844 152.6204794445038L 269.6839990615844 152.6204794445038L 269.6839990615844 152.6204794445038L 269.6839990615844 152.6204794445038L 269.6839990615844 152.6204794445038L 252.63028485434393 152.6204794445038"
                                                    cy="193.6387511297226" cx="297.6588561194283" j="5"
                                                    val="-17" barHeight="-74.01827168521882"
                                                    barWidth="23.053714207240514"></path>
                                                <path id="SvgjsPath2357"
                                                    d="M 300.6588561194283 152.6204794445038L 300.6588561194283 195.9307191667557Q 300.6588561194283 206.9307191667557 311.6588561194283 206.9307191667557L 306.7125703266688 206.9307191667557Q 317.7125703266688 206.9307191667557 317.7125703266688 195.9307191667557L 317.7125703266688 195.9307191667557L 317.7125703266688 152.6204794445038Q 317.7125703266688 141.6204794445038 306.7125703266688 141.6204794445038L 311.6588561194283 141.6204794445038Q 300.6588561194283 141.6204794445038 300.6588561194283 152.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskgrqnrl65)"
                                                    pathTo="M 300.6588561194283 152.6204794445038L 300.6588561194283 195.9307191667557Q 300.6588561194283 206.9307191667557 311.6588561194283 206.9307191667557L 306.7125703266688 206.9307191667557Q 317.7125703266688 206.9307191667557 317.7125703266688 195.9307191667557L 317.7125703266688 195.9307191667557L 317.7125703266688 152.6204794445038Q 317.7125703266688 141.6204794445038 306.7125703266688 141.6204794445038L 311.6588561194283 141.6204794445038Q 300.6588561194283 141.6204794445038 300.6588561194283 152.6204794445038z"
                                                    pathFrom="M 300.6588561194283 152.6204794445038L 300.6588561194283 152.6204794445038L 317.7125703266688 152.6204794445038L 317.7125703266688 152.6204794445038L 317.7125703266688 152.6204794445038L 317.7125703266688 152.6204794445038L 317.7125703266688 152.6204794445038L 300.6588561194283 152.6204794445038"
                                                    cy="184.9307191667557" cx="345.6874273845127" j="6"
                                                    val="-15" barHeight="-65.3102397222519"
                                                    barWidth="23.053714207240514"></path>
                                            </g>
                                            <g id="SvgjsG2341" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG2350" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <line id="SvgjsLine2406" x1="0" y1="0" x2="336.1999988555908"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine2407" x1="0" y1="0" x2="336.1999988555908"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG2408" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG2409" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG2410" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g id="SvgjsG2381" class="apexcharts-yaxis" rel="0"
                                        transform="translate(15.80000114440918, 0)">
                                        <g id="SvgjsG2382" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2383"
                                                font-family="Helvetica, Arial, sans-serif" x="20" y="53.5"
                                                text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2384">30</tspan>
                                                <title>30</title>
                                            </text><text id="SvgjsText2385" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="97.0401598148346" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2386">20</tspan>
                                                <title>20</title>
                                            </text><text id="SvgjsText2387" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="140.5803196296692" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2388">10</tspan>
                                                <title>10</title>
                                            </text><text id="SvgjsText2389" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="184.1204794445038" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2390">0</tspan>
                                                <title>0</title>
                                            </text><text id="SvgjsText2391" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="227.66063925933838" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2392">-10</tspan>
                                                <title>-10</title>
                                            </text><text id="SvgjsText2393" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="271.200799074173" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2394">-20</tspan>
                                                <title>-20</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG2329" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(105, 108, 255);"></span>
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
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(3, 195, 236);"></span>
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
                                <div style="width: 427px; height: 377px;"></div>
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
                            <div id="apexcharts5qrjze1n"
                                class="apexcharts-canvas apexcharts5qrjze1n apexcharts-theme-light"
                                style="width: 213px; height: 154.875px;"><svg id="SvgjsSvg2411" width="213"
                                    height="154.875" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG2413" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(-0.5, -25)">
                                        <defs id="SvgjsDefs2412">
                                            <clipPath id="gridRectMask5qrjze1n">
                                                <rect id="SvgjsRect2415" width="222" height="285" x="-3"
                                                    y="-1" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                                </rect>
                                            </clipPath>
                                            <clipPath id="forecastMask5qrjze1n"></clipPath>
                                            <clipPath id="nonForecastMask5qrjze1n"></clipPath>
                                            <clipPath id="gridRectMarkerMask5qrjze1n">
                                                <rect id="SvgjsRect2416" width="220" height="287" x="-2"
                                                    y="-2" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                                </rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient2421" x1="1" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop2422" stop-opacity="1"
                                                    stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                <stop id="SvgjsStop2423" stop-opacity="0.6"
                                                    stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                                <stop id="SvgjsStop2424" stop-opacity="0.6"
                                                    stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient id="SvgjsLinearGradient2432" x1="1" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop2433" stop-opacity="1"
                                                    stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                <stop id="SvgjsStop2434" stop-opacity="0.6"
                                                    stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop>
                                                <stop id="SvgjsStop2435" stop-opacity="0.6"
                                                    stop-color="rgba(105,108,255,0.6)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="SvgjsG2417" class="apexcharts-radialbar">
                                            <g id="SvgjsG2418">
                                                <g id="SvgjsG2419" class="apexcharts-tracks">
                                                    <g id="SvgjsG2420" class="apexcharts-radialbar-track apexcharts-track"
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
                                                <g id="SvgjsG2426">
                                                    <g id="SvgjsG2431" class="apexcharts-series apexcharts-radial-series"
                                                        seriesName="Growth" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath2436"
                                                            d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"
                                                            fill="none" fill-opacity="0.85"
                                                            stroke="url(#SvgjsLinearGradient2432)" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="17.357317073170734"
                                                            stroke-dasharray="5"
                                                            class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                            data:angle="234" data:value="78" index="0"
                                                            j="0"
                                                            data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481">
                                                        </path>
                                                    </g>
                                                    <circle id="SvgjsCircle2427" r="54.65121951219512" cx="108"
                                                        cy="108" class="apexcharts-radialbar-hollow"
                                                        fill="transparent"></circle>
                                                    <g id="SvgjsG2428" class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)" style="opacity: 1;"><text
                                                            id="SvgjsText2429" font-family="Public Sans" x="108"
                                                            y="123" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="15px" font-weight="500" fill="#566a7f"
                                                            class="apexcharts-text apexcharts-datalabel-label"
                                                            style="font-family: &quot;Public Sans&quot;;">Growth</text><text
                                                            id="SvgjsText2430" font-family="Public Sans" x="108"
                                                            y="99" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="22px" font-weight="500" fill="#566a7f"
                                                            class="apexcharts-text apexcharts-datalabel-value"
                                                            style="font-family: &quot;Public Sans&quot;;">78%</text>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine2437" x1="0" y1="0" x2="216"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine2438" x1="0" y1="0" x2="216"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG2414" class="apexcharts-annotations"></g>
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
                                <div style="width: 214px; height: 377px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Total Revenue -->
        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card"
                                        class="rounded">
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
                            <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i>
                                -14.82%</small>
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
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                +28.14%</small>
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
                                    <div id="apexcharts5whdh201"
                                        class="apexcharts-canvas apexcharts5whdh201 apexcharts-theme-light"
                                        style="width: 125px; height: 80px;"><svg id="SvgjsSvg2463" width="125"
                                            height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG2465" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs2464">
                                                    <clipPath id="gridRectMask5whdh201">
                                                        <rect id="SvgjsRect2470" width="126" height="85"
                                                            x="-4.5" y="-2.5" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff">
                                                        </rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask5whdh201"></clipPath>
                                                    <clipPath id="nonForecastMask5whdh201"></clipPath>
                                                    <clipPath id="gridRectMarkerMask5whdh201">
                                                        <rect id="SvgjsRect2471" width="121" height="84"
                                                            x="-2" y="-2" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff">
                                                        </rect>
                                                    </clipPath>
                                                    <filter id="SvgjsFilter2477" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood2478" flood-color="#ffab00"
                                                            flood-opacity="0.15" result="SvgjsFeFlood2478Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite2479" in="SvgjsFeFlood2478Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite2479Out">
                                                        </feComposite>
                                                        <feOffset id="SvgjsFeOffset2480" dx="5" dy="10"
                                                            result="SvgjsFeOffset2480Out" in="SvgjsFeComposite2479Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur2481" stdDeviation="3 "
                                                            result="SvgjsFeGaussianBlur2481Out"
                                                            in="SvgjsFeOffset2480Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge2482" result="SvgjsFeMerge2482Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode2483"
                                                                in="SvgjsFeGaussianBlur2481Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode2484"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend2485" in="SourceGraphic"
                                                            in2="SvgjsFeMerge2482Out" mode="normal"
                                                            result="SvgjsFeBlend2485Out"></feBlend>
                                                    </filter>
                                                </defs>
                                                <line id="SvgjsLine2469" x1="0" y1="0"
                                                    x2="0" y2="80" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="80" fill="#b1b9c4" filter="none"
                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG2486" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG2487" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG2495" class="apexcharts-grid">
                                                    <g id="SvgjsG2496" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine2498" x1="0" y1="0"
                                                            x2="117" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2499" x1="0" y1="20"
                                                            x2="117" y2="20" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2500" x1="0" y1="40"
                                                            x2="117" y2="40" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2501" x1="0" y1="60"
                                                            x2="117" y2="60" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2502" x1="0" y1="80"
                                                            x2="117" y2="80" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG2497" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine2504" x1="0" y1="80"
                                                        x2="117" y2="80" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine2503" x1="0" y1="1"
                                                        x2="0" y2="80" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG2472"
                                                    class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG2473" class="apexcharts-series" seriesName="seriesx1"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath2476"
                                                            d="M 0 76C 8.19 76 15.209999999999999 12 23.4 12C 31.589999999999996 12 38.61 62 46.8 62C 54.989999999999995 62 62.010000000000005 22 70.2 22C 78.39 22 85.41 38 93.6 38C 101.78999999999999 38 108.81 6 117 6"
                                                            fill="none" fill-opacity="1"
                                                            stroke="rgba(255,171,0,0.85)" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="5"
                                                            stroke-dasharray="0" class="apexcharts-line"
                                                            index="0" clip-path="url(#gridRectMask5whdh201)"
                                                            filter="url(#SvgjsFilter2477)"
                                                            pathTo="M 0 76C 8.19 76 15.209999999999999 12 23.4 12C 31.589999999999996 12 38.61 62 46.8 62C 54.989999999999995 62 62.010000000000005 22 70.2 22C 78.39 22 85.41 38 93.6 38C 101.78999999999999 38 108.81 6 117 6"
                                                            pathFrom="M -1 120L -1 120L 23.4 120L 46.8 120L 70.2 120L 93.6 120L 117 120">
                                                        </path>
                                                        <g id="SvgjsG2474" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2510" r="0"
                                                                    cx="0" cy="0"
                                                                    class="apexcharts-marker wxaoy2j6jh no-pointer-events"
                                                                    stroke="#ffffff" fill="#ffab00" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0">
                                                                </circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2475" class="apexcharts-datalabels"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine2505" x1="0" y1="0"
                                                    x2="117" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2506" x1="0" y1="0"
                                                    x2="117" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG2507" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG2508" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG2509" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect2468" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                            </rect>
                                            <g id="SvgjsG2494" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG2466" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            </div>
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
                                        <div style="width: 260px; height: 117px;"></div>
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
    <div class="row">
        <!-- Order Statistics -->
        <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Order Statistics</h5>
                        <small class="text-muted">42.82k Total Sales</small>
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
                            <h2 class="mb-2">8,258</h2>
                            <span>Total Orders</span>
                        </div>
                        <div id="orderStatisticsChart" style="min-height: 137.55px;">
                            <div id="apexchartsh3siu5j7"
                                class="apexcharts-canvas apexchartsh3siu5j7 apexcharts-theme-light"
                                style="width: 130px; height: 137.55px;"><svg id="SvgjsSvg2439" width="130"
                                    height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG2441" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(-7, 0)">
                                        <defs id="SvgjsDefs2440">
                                            <clipPath id="gridRectMaskh3siu5j7">
                                                <rect id="SvgjsRect2443" width="150" height="173" x="-4.5"
                                                    y="-2.5" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                                </rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskh3siu5j7"></clipPath>
                                            <clipPath id="nonForecastMaskh3siu5j7"></clipPath>
                                            <clipPath id="gridRectMarkerMaskh3siu5j7">
                                                <rect id="SvgjsRect2444" width="145" height="172" x="-2"
                                                    y="-2" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                                </rect>
                                            </clipPath>
                                        </defs>
                                        <g id="SvgjsG2445" class="apexcharts-pie">
                                            <g id="SvgjsG2446" transform="translate(0, 0) scale(1)">
                                                <circle id="SvgjsCircle2447" r="44.835365853658544" cx="70.5"
                                                    cy="70.5" fill="transparent"></circle>
                                                <g id="SvgjsG2448" class="apexcharts-slices">
                                                    <g id="SvgjsG2449" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Electronic" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath2450"
                                                            d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z"
                                                            fill="rgba(105,108,255,1)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                            index="0" j="0" data:angle="153"
                                                            data:startAngle="0" data:strokeWidth="5" data:value="85"
                                                            data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z"
                                                            stroke="#ffffff"></path>
                                                    </g>
                                                    <g id="SvgjsG2451" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Sports" rel="2" data:realIndex="1">
                                                        <path id="SvgjsPath2452"
                                                            d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z"
                                                            fill="rgba(133,146,163,1)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                            index="0" j="1" data:angle="27"
                                                            data:startAngle="153" data:strokeWidth="5" data:value="15"
                                                            data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z"
                                                            stroke="#ffffff"></path>
                                                    </g>
                                                    <g id="SvgjsG2453" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Decor" rel="3" data:realIndex="2">
                                                        <path id="SvgjsPath2454"
                                                            d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z"
                                                            fill="rgba(3,195,236,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                            index="0" j="2" data:angle="90"
                                                            data:startAngle="180" data:strokeWidth="5" data:value="50"
                                                            data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z"
                                                            stroke="#ffffff"></path>
                                                    </g>
                                                    <g id="SvgjsG2455" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Fashion" rel="4" data:realIndex="3">
                                                        <path id="SvgjsPath2456"
                                                            d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z"
                                                            fill="rgba(113,221,55,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                            index="0" j="3" data:angle="90"
                                                            data:startAngle="270" data:strokeWidth="5" data:value="50"
                                                            data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z"
                                                            stroke="#ffffff"></path>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2457" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"><text id="SvgjsText2458"
                                                    font-family="Helvetica, Arial, sans-serif" x="70.5"
                                                    y="90.5" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="0.8125rem" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-datalabel-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;">Weekly</text><text
                                                    id="SvgjsText2459" font-family="Public Sans" x="70.5"
                                                    y="71.5" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="1.5rem" font-weight="400" fill="#566a7f"
                                                    class="apexcharts-text apexcharts-datalabel-value"
                                                    style="font-family: &quot;Public Sans&quot;;">38%</text></g>
                                        </g>
                                        <line id="SvgjsLine2460" x1="0" y1="0" x2="141"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                        </line>
                                        <line id="SvgjsLine2461" x1="0" y1="0" x2="141"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG2442" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(105, 108, 255);"></span>
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
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(133, 146, 163);"></span>
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
                                    <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(3, 195, 236);"></span>
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
                                    <div class="apexcharts-tooltip-series-group" style="order: 4;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(113, 221, 55);"></span>
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
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 260px; height: 139px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-primary"><i
                                        class="bx bx-mobile-alt"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Electronic</h6>
                                    <small class="text-muted">Mobile, Earbuds, TV</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">82.5k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Fashion</h6>
                                    <small class="text-muted">T-shirt, Jeans, Shoes</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">23.8k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Decor</h6>
                                    <small class="text-muted">Fine Art, Dining</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">849k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-secondary"><i
                                        class="bx bx-football"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Sports</h6>
                                    <small class="text-muted">Football, Cricket Kit</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">99</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Order Statistics -->

        <!-- Expense Overview -->
        <div class="col-md-6 col-lg-4 order-1 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income"
                                aria-selected="true">
                                Income
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab">Expenses</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab">Profit</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body px-0">
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel"
                            style="position: relative;">
                            <div class="d-flex p-4 pt-3">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../assets/img/icons/unicons/wallet.png" alt="User">
                                </div>
                                <div>
                                    <small class="text-muted d-block">Total Balance</small>
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">$459.10</h6>
                                        <small class="text-success fw-semibold">
                                            <i class="bx bx-chevron-up"></i>
                                            42.9%
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="incomeChart" style="min-height: 215px;">
                                <div id="apexcharts6o5h9z8wh"
                                    class="apexcharts-canvas apexcharts6o5h9z8wh apexcharts-theme-light"
                                    style="width: 307px; height: 215px;"><svg id="SvgjsSvg2511" width="307"
                                        height="215" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                        transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG2513" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 10)">
                                            <defs id="SvgjsDefs2512">
                                                <clipPath id="gridRectMask6o5h9z8wh">
                                                    <rect id="SvgjsRect2518" width="295.6875" height="176.70079907417298"
                                                        x="-3" y="-1" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask6o5h9z8wh"></clipPath>
                                                <clipPath id="nonForecastMask6o5h9z8wh"></clipPath>
                                                <clipPath id="gridRectMarkerMask6o5h9z8wh">
                                                    <rect id="SvgjsRect2519" width="317.6875" height="202.70079907417298"
                                                        x="-14" y="-14" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient2539" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop2540" stop-opacity="0.5"
                                                        stop-color="rgba(105,108,255,0.5)" offset="0"></stop>
                                                    <stop id="SvgjsStop2541" stop-opacity="0.25"
                                                        stop-color="rgba(195,196,255,0.25)" offset="0.95"></stop>
                                                    <stop id="SvgjsStop2542" stop-opacity="0.25"
                                                        stop-color="rgba(195,196,255,0.25)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine2517" x1="0" y1="0" x2="0"
                                                y2="174.70079907417298" stroke="#b6b6b6" stroke-dasharray="3"
                                                stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0"
                                                y="0" width="1" height="174.70079907417298" fill="#b1b9c4"
                                                filter="none" fill-opacity="0.9" stroke-width="1">
                                            </line>
                                            <g id="SvgjsG2545" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG2546" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"><text id="SvgjsText2548"
                                                        font-family="Helvetica, Arial, sans-serif" x="0"
                                                        y="203.70079907417298" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan2549"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2551"
                                                        font-family="Helvetica, Arial, sans-serif" x="41.38392857142857"
                                                        y="203.70079907417298" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan2552">Jan</tspan>
                                                        <title>Jan</title>
                                                    </text><text id="SvgjsText2554"
                                                        font-family="Helvetica, Arial, sans-serif" x="82.76785714285714"
                                                        y="203.70079907417298" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan2555">Feb</tspan>
                                                        <title>Feb</title>
                                                    </text><text id="SvgjsText2557"
                                                        font-family="Helvetica, Arial, sans-serif" x="124.15178571428572"
                                                        y="203.70079907417298" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan2558">Mar</tspan>
                                                        <title>Mar</title>
                                                    </text><text id="SvgjsText2560"
                                                        font-family="Helvetica, Arial, sans-serif" x="165.53571428571428"
                                                        y="203.70079907417298" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan2561">Apr</tspan>
                                                        <title>Apr</title>
                                                    </text><text id="SvgjsText2563"
                                                        font-family="Helvetica, Arial, sans-serif" x="206.91964285714283"
                                                        y="203.70079907417298" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan2564">May</tspan>
                                                        <title>May</title>
                                                    </text><text id="SvgjsText2566"
                                                        font-family="Helvetica, Arial, sans-serif" x="248.3035714285714"
                                                        y="203.70079907417298" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan2567">Jun</tspan>
                                                        <title>Jun</title>
                                                    </text><text id="SvgjsText2569"
                                                        font-family="Helvetica, Arial, sans-serif" x="289.68749999999994"
                                                        y="203.70079907417298" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan2570">Jul</tspan>
                                                        <title>Jul</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG2573" class="apexcharts-grid">
                                                <g id="SvgjsG2574" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine2576" x1="0" y1="0"
                                                        x2="289.6875" y2="0" stroke="#eceef1"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2577" x1="0" y1="43.675199768543244"
                                                        x2="289.6875" y2="43.675199768543244" stroke="#eceef1"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2578" x1="0" y1="87.35039953708649"
                                                        x2="289.6875" y2="87.35039953708649" stroke="#eceef1"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2579" x1="0" y1="131.02559930562973"
                                                        x2="289.6875" y2="131.02559930562973" stroke="#eceef1"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2580" x1="0" y1="174.70079907417298"
                                                        x2="289.6875" y2="174.70079907417298" stroke="#eceef1"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2575" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine2582" x1="0" y1="174.70079907417298"
                                                    x2="289.6875" y2="174.70079907417298" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine2581" x1="0" y1="1" x2="0"
                                                    y2="174.70079907417298" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG2520" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG2521" class="apexcharts-series" seriesName="seriesx1"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2543"
                                                        d="M 0 174.70079907417298L 0 113.55551939821244C 14.484375 113.55551939821244 26.899553571428577 126.65807932877541 41.38392857142858 126.65807932877541C 55.86830357142858 126.65807932877541 68.28348214285715 87.3503995370865 82.76785714285715 87.3503995370865C 97.25223214285715 87.3503995370865 109.66741071428572 122.29055935192109 124.15178571428572 122.29055935192109C 138.63616071428572 122.29055935192109 151.0513392857143 34.9401598148346 165.5357142857143 34.9401598148346C 180.0200892857143 34.9401598148346 192.43526785714286 104.82047944450379 206.91964285714286 104.82047944450379C 221.40401785714286 104.82047944450379 233.81919642857144 65.51279965281486 248.30357142857144 65.51279965281486C 262.78794642857144 65.51279965281486 275.203125 91.71791951394081 289.6875 91.71791951394081C 289.6875 91.71791951394081 289.6875 91.71791951394081 289.6875 174.70079907417298M 289.6875 91.71791951394081z"
                                                        fill="url(#SvgjsLinearGradient2539)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMask6o5h9z8wh)"
                                                        pathTo="M 0 174.70079907417298L 0 113.55551939821244C 14.484375 113.55551939821244 26.899553571428577 126.65807932877541 41.38392857142858 126.65807932877541C 55.86830357142858 126.65807932877541 68.28348214285715 87.3503995370865 82.76785714285715 87.3503995370865C 97.25223214285715 87.3503995370865 109.66741071428572 122.29055935192109 124.15178571428572 122.29055935192109C 138.63616071428572 122.29055935192109 151.0513392857143 34.9401598148346 165.5357142857143 34.9401598148346C 180.0200892857143 34.9401598148346 192.43526785714286 104.82047944450379 206.91964285714286 104.82047944450379C 221.40401785714286 104.82047944450379 233.81919642857144 65.51279965281486 248.30357142857144 65.51279965281486C 262.78794642857144 65.51279965281486 275.203125 91.71791951394081 289.6875 91.71791951394081C 289.6875 91.71791951394081 289.6875 91.71791951394081 289.6875 174.70079907417298M 289.6875 91.71791951394081z"
                                                        pathFrom="M -1 218.37599884271623L -1 218.37599884271623L 41.38392857142858 218.37599884271623L 82.76785714285715 218.37599884271623L 124.15178571428572 218.37599884271623L 165.5357142857143 218.37599884271623L 206.91964285714286 218.37599884271623L 248.30357142857144 218.37599884271623L 289.6875 218.37599884271623">
                                                    </path>
                                                    <path id="SvgjsPath2544"
                                                        d="M 0 113.55551939821244C 14.484375 113.55551939821244 26.899553571428577 126.65807932877541 41.38392857142858 126.65807932877541C 55.86830357142858 126.65807932877541 68.28348214285715 87.3503995370865 82.76785714285715 87.3503995370865C 97.25223214285715 87.3503995370865 109.66741071428572 122.29055935192109 124.15178571428572 122.29055935192109C 138.63616071428572 122.29055935192109 151.0513392857143 34.9401598148346 165.5357142857143 34.9401598148346C 180.0200892857143 34.9401598148346 192.43526785714286 104.82047944450379 206.91964285714286 104.82047944450379C 221.40401785714286 104.82047944450379 233.81919642857144 65.51279965281486 248.30357142857144 65.51279965281486C 262.78794642857144 65.51279965281486 275.203125 91.71791951394081 289.6875 91.71791951394081"
                                                        fill="none" fill-opacity="1" stroke="#696cff"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMask6o5h9z8wh)"
                                                        pathTo="M 0 113.55551939821244C 14.484375 113.55551939821244 26.899553571428577 126.65807932877541 41.38392857142858 126.65807932877541C 55.86830357142858 126.65807932877541 68.28348214285715 87.3503995370865 82.76785714285715 87.3503995370865C 97.25223214285715 87.3503995370865 109.66741071428572 122.29055935192109 124.15178571428572 122.29055935192109C 138.63616071428572 122.29055935192109 151.0513392857143 34.9401598148346 165.5357142857143 34.9401598148346C 180.0200892857143 34.9401598148346 192.43526785714286 104.82047944450379 206.91964285714286 104.82047944450379C 221.40401785714286 104.82047944450379 233.81919642857144 65.51279965281486 248.30357142857144 65.51279965281486C 262.78794642857144 65.51279965281486 275.203125 91.71791951394081 289.6875 91.71791951394081"
                                                        pathFrom="M -1 218.37599884271623L -1 218.37599884271623L 41.38392857142858 218.37599884271623L 82.76785714285715 218.37599884271623L 124.15178571428572 218.37599884271623L 165.5357142857143 218.37599884271623L 206.91964285714286 218.37599884271623L 248.30357142857144 218.37599884271623L 289.6875 218.37599884271623">
                                                    </path>
                                                    <g id="SvgjsG2522" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="0">
                                                        <g id="SvgjsG2524" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMask6o5h9z8wh)">
                                                            <circle id="SvgjsCircle2525" r="6" cx="0"
                                                                cy="113.55551939821244"
                                                                class="apexcharts-marker no-pointer-events wrrmsvpur"
                                                                stroke="transparent" fill="transparent" fill-opacity="1"
                                                                stroke-width="4" stroke-opacity="0.9" rel="0"
                                                                j="0" index="0" default-marker-size="6">
                                                            </circle>
                                                            <circle id="SvgjsCircle2526" r="6"
                                                                cx="41.38392857142858" cy="126.65807932877541"
                                                                class="apexcharts-marker no-pointer-events wty7z9eis"
                                                                stroke="transparent" fill="transparent" fill-opacity="1"
                                                                stroke-width="4" stroke-opacity="0.9" rel="1"
                                                                j="1" index="0" default-marker-size="6">
                                                            </circle>
                                                        </g>
                                                        <g id="SvgjsG2527" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMask6o5h9z8wh)">
                                                            <circle id="SvgjsCircle2528" r="6"
                                                                cx="82.76785714285715" cy="87.3503995370865"
                                                                class="apexcharts-marker no-pointer-events w649x3q3"
                                                                stroke="transparent" fill="transparent" fill-opacity="1"
                                                                stroke-width="4" stroke-opacity="0.9" rel="2"
                                                                j="2" index="0" default-marker-size="6">
                                                            </circle>
                                                        </g>
                                                        <g id="SvgjsG2529" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMask6o5h9z8wh)">
                                                            <circle id="SvgjsCircle2530" r="6"
                                                                cx="124.15178571428572" cy="122.29055935192109"
                                                                class="apexcharts-marker no-pointer-events wi1fm095e"
                                                                stroke="transparent" fill="transparent" fill-opacity="1"
                                                                stroke-width="4" stroke-opacity="0.9" rel="3"
                                                                j="3" index="0" default-marker-size="6">
                                                            </circle>
                                                        </g>
                                                        <g id="SvgjsG2531" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMask6o5h9z8wh)">
                                                            <circle id="SvgjsCircle2532" r="6"
                                                                cx="165.5357142857143" cy="34.9401598148346"
                                                                class="apexcharts-marker no-pointer-events wkzixfolbf"
                                                                stroke="transparent" fill="transparent" fill-opacity="1"
                                                                stroke-width="4" stroke-opacity="0.9" rel="4"
                                                                j="4" index="0" default-marker-size="6">
                                                            </circle>
                                                        </g>
                                                        <g id="SvgjsG2533" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMask6o5h9z8wh)">
                                                            <circle id="SvgjsCircle2534" r="6"
                                                                cx="206.91964285714286" cy="104.82047944450379"
                                                                class="apexcharts-marker no-pointer-events wct52f7dp"
                                                                stroke="transparent" fill="transparent" fill-opacity="1"
                                                                stroke-width="4" stroke-opacity="0.9" rel="5"
                                                                j="5" index="0" default-marker-size="6">
                                                            </circle>
                                                        </g>
                                                        <g id="SvgjsG2535" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMask6o5h9z8wh)">
                                                            <circle id="SvgjsCircle2536" r="6"
                                                                cx="248.30357142857144" cy="65.51279965281486"
                                                                class="apexcharts-marker no-pointer-events wihxyb4u4h"
                                                                stroke="transparent" fill="transparent" fill-opacity="1"
                                                                stroke-width="4" stroke-opacity="0.9" rel="6"
                                                                j="6" index="0" default-marker-size="6">
                                                            </circle>
                                                        </g>
                                                        <g id="SvgjsG2537" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMask6o5h9z8wh)">
                                                            <circle id="SvgjsCircle2538" r="6" cx="289.6875"
                                                                cy="91.71791951394081"
                                                                class="apexcharts-marker no-pointer-events weygq09wf"
                                                                stroke="#696cff" fill="#ffffff" fill-opacity="1"
                                                                stroke-width="4" stroke-opacity="0.9" rel="7"
                                                                j="7" index="0" default-marker-size="6">
                                                            </circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2523" class="apexcharts-datalabels" data:realIndex="0">
                                                </g>
                                            </g>
                                            <line id="SvgjsLine2583" x1="0" y1="0" x2="289.6875"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine2584" x1="0" y1="0" x2="289.6875"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2585" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2586" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2587" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect2588" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-zoom-rect">
                                            </rect>
                                            <rect id="SvgjsRect2589" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-selection-rect"></rect>
                                        </g>
                                        <rect id="SvgjsRect2516" width="0" height="0" x="0"
                                            y="0" rx="0" ry="0" opacity="1"
                                            stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                        </rect>
                                        <g id="SvgjsG2571" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-8, 0)">
                                            <g id="SvgjsG2572" class="apexcharts-yaxis-texts-g"></g>
                                        </g>
                                        <g id="SvgjsG2514" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 107.5px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(105, 108, 255);"></span>
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
                                        class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center pt-4 gap-2">
                                <div class="flex-shrink-0" style="position: relative;">
                                    <div id="expensesOfWeek" style="min-height: 57.7px;">
                                        <div id="apexcharts3w75hgc8"
                                            class="apexcharts-canvas apexcharts3w75hgc8 apexcharts-theme-light"
                                            style="width: 60px; height: 57.7px;"><svg id="SvgjsSvg2222" width="60"
                                                height="57.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)" style="background: transparent;">
                                                <g id="SvgjsG2224" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(-10, -10)">
                                                    <defs id="SvgjsDefs2223">
                                                        <clipPath id="gridRectMask3w75hgc8">
                                                            <rect id="SvgjsRect2226" width="86" height="87"
                                                                x="-3" y="-1" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff">
                                                            </rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMask3w75hgc8"></clipPath>
                                                        <clipPath id="nonForecastMask3w75hgc8"></clipPath>
                                                        <clipPath id="gridRectMarkerMask3w75hgc8">
                                                            <rect id="SvgjsRect2227" width="84" height="89"
                                                                x="-2" y="-2" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG2228" class="apexcharts-radialbar">
                                                        <g id="SvgjsG2229">
                                                            <g id="SvgjsG2230" class="apexcharts-tracks">
                                                                <g id="SvgjsG2231"
                                                                    class="apexcharts-radialbar-track apexcharts-track"
                                                                    rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0"
                                                                        d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247"
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="rgba(236,238,241,0.85)"
                                                                        stroke-opacity="1" stroke-linecap="round"
                                                                        stroke-width="2.0408536585365864"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area"
                                                                        data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG2233">
                                                                <g id="SvgjsG2237"
                                                                    class="apexcharts-series apexcharts-radial-series"
                                                                    seriesName="seriesx1" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath2238"
                                                                        d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095"
                                                                        fill="none" fill-opacity="0.85"
                                                                        stroke="rgba(105,108,255,0.85)"
                                                                        stroke-opacity="1" stroke-linecap="round"
                                                                        stroke-width="4.081707317073173"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                        data:angle="234" data:value="65"
                                                                        index="0" j="0"
                                                                        data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095">
                                                                    </path>
                                                                </g>
                                                                <circle id="SvgjsCircle2234" r="18.881402439024395"
                                                                    cx="40" cy="40"
                                                                    class="apexcharts-radialbar-hollow"
                                                                    fill="transparent"></circle>
                                                                <g id="SvgjsG2235" class="apexcharts-datalabels-group"
                                                                    transform="translate(0, 0) scale(1)"
                                                                    style="opacity: 1;"><text id="SvgjsText2236"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="40" y="45"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="13px" font-weight="400"
                                                                        fill="#697a8d"
                                                                        class="apexcharts-text apexcharts-datalabel-value"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">$65</text>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine2239" x1="0" y1="0"
                                                        x2="80" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine2240" x1="0" y1="0"
                                                        x2="80" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                                <g id="SvgjsG2225" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 61px; height: 59px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-n1 mt-1">Expenses This Week</p>
                                    <small class="text-muted">$39 less than last week</small>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 308px; height: 377px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Expense Overview -->

        <!-- Transactions -->
        <div class="col-md-6 col-lg-4 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Transactions</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Paypal</small>
                                    <h6 class="mb-0">Send money</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+82.6</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Wallet</small>
                                    <h6 class="mb-0">Mac'D</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+270.69</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/chart.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Transfer</small>
                                    <h6 class="mb-0">Refund</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+637.91</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/cc-success.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Credit Card</small>
                                    <h6 class="mb-0">Ordered Food</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">-838.71</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Wallet</small>
                                    <h6 class="mb-0">Starbucks</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+203.33</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Mastercard</small>
                                    <h6 class="mb-0">Ordered Food</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">-92.45</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Transactions -->
    </div>
@endsection
