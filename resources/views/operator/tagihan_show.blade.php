@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Data Tagihan {{ strtoupper($periode) }}</h5>
                <div class="card-body">
                    <table class="table table-sm">
                        <tr>
                            <td rowspan="8" width="100"><img src="/{{ $siswa->foto }}" alt="{{ $siswa->nama }}"
                                    width="150"> </td>
                        </tr>
                        <tr>
                            <td width="50">Nisn</td>
                            <td> : {{ $siswa->nisn }}</td>
                        </tr>

                        <tr>
                            <td>Nama</td>
                            <td> : {{ $siswa->nama }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-5">
            <div class="card">
                <h5 class="card-header"> Data Tagihan</h5>
                <div class="card-body">
                    Data Tagihan {{ $periode }}
                    <table class="table table-sm mt-2 table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Tagihan</th>
                                <th>Jumlah Tagihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tagihan->tagihanDetails as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_biaya }}</td>
                                    <td> Rp. {{ $item->jumlah_biaya }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <h5 class="card-header"> Data Pembayaran</h5>
            </div>
        </div>

        <div class="col-md-7 ">
            <div class="card">
                <h5 class="card-header">KARTU SPP</h5>
                <div class="card-body">
                    KARTU SPP
                </div>
            </div>
        </div>

    </div>
@endsection
