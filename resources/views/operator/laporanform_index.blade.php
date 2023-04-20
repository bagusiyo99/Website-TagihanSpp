@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Laporan</h5>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12">
                            @include('operator.laporanform_tagihan')

                        </div>
                        <hr>


                        <div class="row mt-5">
                            <div class="col-md-12">
                                <h5>Laporan Pembayaran </h5>

                                @include('operator.laporanform_pembayaran')

                            </div>
                            <hr>
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <h5>Laporan Rekap Pembayaran</h5>

                                    @include('operator.laporanform_rekappembayaran')

                                </div>
                                <hr>

                            </div>

                        </div>



                    </div>
                </div>
            </div>
        @endsection
