@extends('layouts.app_wali')

@section('content')
    <div class="row">
        <div class="col-lg-8 mb-4 order-0 ">
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
                <div class="col-lg-12 col-md-12 col-6 mb-4">
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
                            <span class="fw-semibold d-block mb-1">Total Siswa</span>
                            <h3 class="card-title mb-2">{{ $siswa }}</h3>
                            <small> <a href="{{ route('siswa.index') }}" class="text-success fw-semibold"> Data Siswa</a>

                            </small>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="row">




        <!-- Transactions -->
        @foreach ($dataRekap as $item)
            <div class="col-md-6 col-lg-4 order-2 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        {{-- agar nama depan yang diambil 1 --}}
                        <h5 class="card-title m-0 me-2 text-uppercase">Kartu Spp
                            {{ Str::words(strtoupper($item['siswa']['nama']), 1) }}
                        </h5>


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
                        {{-- kartu spp --}}
                        <a href="{{ route('kartuspp.index', [
                            'siswa_id' => $item['siswa']['id'],
                            'tahun' => date('Y'),
                        ]) }}"
                            class="btn btn-primary mb-3 " target="blank"><i class="fa fa-file"> </i> Cetak Kartu
                            SPP</a>

                        <ul class="p-0 m-0">
                            @foreach ($item['dataTagihan'] as $itemTagihan)
                                <li class="d-flex mb-4 pb-1 list-group-item">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="/assets/img/icons/unicons/wallet-info.png" alt="Credit Card">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">{{ $itemTagihan['tahun'] }}</small>
                                            <h6 class="mb-0">{{ $itemTagihan['bulan'] }}</h6>
                                        </div>

                                        @if ($itemTagihan['status'] != null)
                                            <span
                                                class="badge rounded-pill {{ $itemTagihan['status'] == 'lunas' ? 'bg-primary' : 'bg-danger' }}">{{ $itemTagihan['status'] }}</span>
                                        @endif
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
        <!--/ Transactions -->
    </div>
@endsection
