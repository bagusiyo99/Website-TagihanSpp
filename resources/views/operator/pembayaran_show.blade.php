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
                                    <td>Invoice Tagihan</td>
                                    <td>: <a href="{{ route('invoice.show', $model->tagihan_id) }}" target="blank"
                                            class="btn btn-primary">
                                            Cetak</a>
                                    </td>
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
                                    <td>: {{ $model->tanggal_bayar->translatedFormat('d-F-Y ') }}</td>
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
                                    <td>:<a href="javascript:void[0]"
                                            onclick="popupCenter({url: '{{ \Storage::url($model->bukti_bayar) }}', 
                                    title: 'Bukti Pembayaran', w:900, h: 800});  ">
                                            Lihat
                                            Bukti
                                            Pembayaran</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Kwitansi Pembayaran</td>
                                    <td>: <a href="{{ route('kwitansipembayaran.show', $model->id) }}" target="blank"
                                            class="btn btn-primary">
                                            Cetak</a>
                                    </td>
                                </tr>

                                {{-- <tr>
                                    <td> Status Konfirmasi</td>
                                    <td> : {{ strtoupper($model->status_konfirmasi) }}</td>
                                </tr> --}}

                                <tr>
                                    <td> Status Pembayaran</td>
                                    <td> : {{ strtoupper($model->tagihan->getTagihanWali()) }}</td>
                                </tr>

                                <tr>
                                    <td> Tanggal Konfirmasi</td>
                                    <td> : {{ $model->tanggal_konfirmasi }}</td>
                                </tr>

                            </thead>
                        </table>
                        {{--    untuk pop up bukti bayar tutor 93 --}}


                        @if ($model->tanggal_konfirmasi == null)
                            {!! Form::open([
                                'route' => $route,
                                'method' => 'PUT',
                                'onsubmit' => 'return confirm ("Yakin ingin Konfirmasi data ini?")',
                            ]) !!}

                            {!! Form::hidden('pembayaran_id', $model->id, []) !!}

                            {!! Form::submit('Konfirmasi Pembayaran', ['class' => 'btn btn-primary mt-5']) !!}


                            {!! Form::close() !!}
                        @else
                            <div class="alert alert-primary bg-primary mt-2 mb-2 text-white text-uppercase text-center"
                                role="alert">
                                <h1 class="text-white text-uppercase text-center">Pembayaran
                                    Lunas</h1>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
