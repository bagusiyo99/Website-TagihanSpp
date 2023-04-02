@extends('layouts.app_sneat')

@section('content')
    {{-- TUTorial 90 --}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center text-uppercase fw-bold text-danger"> Detail Pembayaran
                        {{ $model->tagihan->siswa->nama }}</h5>

                    <table class="table table-bordered mt-5">
                        <thead>

                            <th>No</th>
                            <th>Nama Biaya</th>
                            <th>Jumlah Tagihan</th>

                        </thead>
                        <tbody>
                            @foreach ($model->tagihan->tagihanDetails as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_biaya }}</td>
                                    {{-- dari app/helpers/helper.php --}}
                                    <td>{{ formatRupiah($item->jumlah_biaya) }}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>


                    <div class="table-responsive mt-4">
                        <table class="table table-striped">

                            <thead>

                                <tr>
                                    <td colspan="2" class="bg-primary text-white text-uppercase mb-3">informasi terkini
                                    </td>
                                </tr>

                                <tr>
                                    <td width="15%">No</td>
                                    <td>: {{ $model->id }}</td>
                                </tr>

                                <tr>
                                    <td>ID Tagihan</td>
                                    <td>: {{ $model->tagihan_id }}</td>
                                </tr>




                                <tr>
                                    <td>Total Tagihan</td>
                                    <td>: {{ formatRupiah($model->tagihan->tagihanDetails->sum('jumlah_biaya')) }}</td>
                                </tr>

                                <tr class="mt-5">
                                    <td colspan="2" class="bg-primary text-white text-uppercase mt-3">informasi siswa
                                    </td>
                                </tr>

                                <tr>
                                    <td>Nama Siswa</td>
                                    <td>: {{ $model->tagihan->siswa->nama }}</td>
                                </tr>

                                <tr>
                                    <td>Nama Wali</td>
                                    <td>: {{ $model->tagihan->siswa->wali->name }}</td>
                                </tr>

                                <tr class="mt-5">
                                    <td colspan="2" class="bg-primary text-white text-uppercase mt-3">informasi
                                        bank Pengirim
                                    </td>
                                </tr>

                                <tr>
                                    <td>Bank Pengirim</td>
                                    <td>: {{ $model->waliBank->nama_bank }}</td>
                                </tr>

                                <tr>
                                    <td>Nomor Rekening</td>
                                    <td>: {{ $model->waliBank->nomor_rekening }}</td>
                                </tr>

                                <tr>
                                    <td>Pemilik Rekening</td>
                                    <td>: {{ $model->waliBank->nama_rekening }}</td>
                                </tr>

                                <tr class="mt-5">
                                    <td colspan="2" class="bg-primary text-white text-uppercase mt-3">informasi bank
                                        tujuan transfer
                                    </td>
                                </tr>

                                <tr>
                                    <td>Bank Tujuan Transfer</td>
                                    <td>: {{ $model->bankSekolah->nama_bank }}</td>
                                </tr>

                                <tr>
                                    <td>Nomor Rekening</td>
                                    <td>: {{ $model->bankSekolah->nomor_rekening }}</td>
                                </tr>

                                <tr>
                                    <td>Atas Nama</td>
                                    <td>: {{ $model->bankSekolah->nama_rekening }}</td>
                                </tr>

                                <tr class="mt-5">
                                    <td colspan="2" class="bg-primary text-white text-uppercase mt-3">informasi
                                        pembayaran
                                    </td>
                                </tr>


                                <tr>
                                    <td>Metode Pembayaran</td>
                                    <td>: {{ $model->metode_pembayaran }}</td>
                                </tr>

                                <tr>
                                    <td>Tanggal Pembayaran</td>
                                    <td>: {{ $model->tanggal_bayar->format('d-F-Y ') }}</td>
                                </tr>

                                <tr>
                                    <td>Jumlah Total Tagihan</td>
                                    <td>: {{ formatRupiah($model->jumlah_dibayar) }}</td>
                                </tr>

                                <tr>
                                    <td>Jumlah Yang Dibayar</td>
                                    <td>: {{ formatRupiah($model->tagihan->tagihanDetails->sum('jumlah_biaya')) }}</td>
                                </tr>


                                <tr>
                                    <td>Jumlah Yang Dibayar</td>
                                    <td>: {{ formatRupiah($model->tagihan->tagihanDetails->sum('jumlah_biaya')) }}</td>
                                </tr>

                                <tr>
                                    <td>Bukti Pembayaran</td>
                                    <td>:<a href="{{ \Storage::url($model->bukti_bayar) }}" target="_blank"> Lihat
                                            Bukti
                                            Pembayaran</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td> Status Pembayaran</td>
                                    <td> : {{ strtoupper($model->tagihan->getTagihanWali()) }}</td>

                                </tr>

                            </thead>
                        </table>
                        <a href="{{ \Storage::url($model->bukti_bayar) }}" class="btn btn-primary mt-3 center-block">
                            Konfirmasi Bukti
                            Pembayaran</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
