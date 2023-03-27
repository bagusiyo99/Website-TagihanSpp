{{-- _blank tambahan --}}
@extends('layouts.app_sneat_blank')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="p-3 bg-white rounded">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="text-uppercase">Kwitansi</h1>
                            <div class="billed"><span class="font-weight-bold text-uppercase">Nama: </span><span
                                    class="ml-1">Smk Bagus</span></div>
                            <div class="billed"><span class="font-weight-bold text-uppercase">Tanggal: </span><span
                                    class="ml-1">{{ $pembayaran->tanggal_bayar->translatedformat('d F Y') }}</span></div>
                            <div class="billed"><span class="font-weight-bold text-uppercase">Pembayaran ID: </span><span
                                    class="ml-1">#SB-{{ $pembayaran->id }}</span></div>
                        </div>

                    </div>
                    <div class="mt-3">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Jumlah Pembayaran</th>
                                        <th>Metode Pembayaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>{{ $pembayaran->tanggal_bayar->translatedformat('d F Y') }}</td>
                                    <td> {{ formatRupiah($pembayaran->jumlah_dibayar) }}</td>
                                    <td> {{ $pembayaran->metode_pembayaran }}</td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="text-right mb-3 text-danger"> Terbilang :
                        {{ ucwords(terbilang($pembayaran->jumlah_dibayar)) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
