<style>
    .tba {
        background-color: rgb(35, 148, 60);
        color: rgb(243, 241, 241);
    }
</style>
@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                {{-- <h5 class="card-header">Data Tagihan {{ strtoupper($periode) }}</h5>
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


                </div> --}}

                <header class=" pt-4 pt-md-0 bg-secondary">
                    <div class="row">
                        <div class="col-block col-md-auto text-center text-md-start">
                            <img src="/{{ $siswa->foto }}" alt="{{ $siswa->nama }}" width="250px" height="250px">
                        </div>
                        <!--//col-->
                        <div class="col">
                            <div class="row p-3 justify-content-center justify-content-md-between">
                                <div class="primary-info col-md-6 col-sm-12">
                                    <h2 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">
                                        TAGIHAN SPP {{ strtoupper($siswa->nama) }}</h2>
                                    <table class="text-white mt-3">

                                        <tr>
                                            <td width="60">NAMA</td>
                                            <td> : {{ strtoupper($siswa->nama) }}</td>
                                        </tr>

                                        <tr>
                                            <td> NISN</td>
                                            <td> : {{ strtoupper($siswa->nisn) }}</td>
                                        </tr>


                                        <tr>
                                            <td> JURUSAN</td>
                                            <td> : {{ strtoupper($siswa->jurusan) }}</td>
                                        </tr>


                                        <tr>
                                            <td> KELAS</td>
                                            <td> : {{ strtoupper($siswa->kelas) }}</td>
                                        </tr>


                                        <tr>
                                            <td> ANGKATAN</td>
                                            <td> : {{ strtoupper($siswa->angkatan) }}</td>
                                        </tr>
                                    </table>
                                </div>


                                <!--//primary-info-->
                                <div class=" col-md-6 col-sm-1 p-4">
                                    <table class="text-white ">

                                        <tr>
                                            <td>Pembayaran ID</td>
                                            <td> : #SB-{{ strtoupper($tagihan->id) }}</td>
                                        </tr>

                                        <tr>
                                            <td> Tanggal Tagihan</td>
                                            <td> :
                                                {{ strtoupper($tagihan->tanggal_tagihan->translatedformat('d F Y')) }}
                                            </td>
                                        </tr>


                                        <tr>
                                            <td> Tanggal Jatuh Tempo</td>
                                            <td> :
                                                {{ strtoupper($tagihan->tanggal_jatuh_tempo->translatedformat('d F Y')) }}
                                            </td>
                                        </tr>


                                        <tr>
                                            <td> Status Pembayaran</td>
                                            <td> : {{ strtoupper($tagihan->getTagihanWali()) }}</td>
                                        </tr>


                                    </table>
                                    <a class="btn btn-warning text-white mt-2"
                                        href="{{ route('invoice.show', $tagihan->id) }}" target="blank"><i
                                            class="fa fa-file-pdf"></i>
                                        Cetak Invoice Tagihan</a>

                                </div>
                                <!--//secondary-info-->
                            </div>
                            <!--//row-->

                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </header>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        {{-- DATA Tagihan --}}

        <div class="col-md-5">
            <div class="card">
                <h5 class="card-header"> Data Tagihan {{ $periode }}</h5>
                <div class="card-body">
                    <table class="table table-sm mt-2 table-bordered">
                        <thead>
                            <tr class="table-primary">
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

                                    {{-- dari app/helpers/helper.php --}}
                                    <td>{{ formatRupiah($item->jumlah_biaya) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="text-center" colspan="2">Total Pembayaran</td>
                                <td>{{ formatRupiah($tagihan->tagihanDetails->sum('jumlah_biaya')) }}</td>
                            </tr>
                        </tfoot>

                    </table>

                    <a href="{{ route('invoice.show', $tagihan->id) }}" target="blank" class="btn btn-primary mt-2">
                        Cetak Invoice</a>


                </div>


            </div>

            {{-- DATA PEMBAYARAN --}}

            <div class="card mt-3">
                <h5 class="card-header "> DATA PEMBAYARAN</h5>

                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-primary">
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Jumlah</th>
                                <th>Metode</th>
                            </tr>
                        <tbody>
                            @foreach ($tagihan->pembayaran as $item)
                                <td><a href="{{ route('kwitansipembayaran.show', $item->id) }}" target="blank"><i
                                            class="fa-solid fa-print"></i></a></td>
                                <td>{{ $item->tanggal_bayar->format('d/m/Y') }}</td>

                                <td>{{ $item->formatRupiah('jumlah_dibayar') }}</td>
                                <td> {{ $item->metode_pembayaran }}</td>
                            @endforeach
                        </tbody>
                        </thead>
                    </table>

                    <h5 class="text-danger mt-3 ">Status Pembayaran : {{ strtoupper($tagihan->status) }}</h5>

                </div>

                <hr>


                <h5 class="card-header"> Form Pembayaran</h5>

                <div class="card-body">
                    {!! Form::model($model, ['route' => 'pembayaran.store', 'method' => 'POST']) !!}
                    {!! Form::hidden('tagihan_id', $tagihan->id, []) !!}
                    <div class="form-group">
                        <label for="tanggal_bayar">Tanggal Pembayaran</label>
                        {!! Form::date('tanggal_bayar', $model->tanggal_bayar ?? \Carbon\Carbon::now(), [
                            'class' => 'form-control',
                        ]) !!}
                        <span class="text-danger">{{ $errors->first('tanggal_bayar') }}</span>
                    </div>

                    <div class="form-group mt-3">
                        <label for="jumlah_dibayar">Jumlah Yang dibayarkan</label>
                        {!! Form::text('jumlah_dibayar', null, [
                            'class' => 'form-control rupiah',
                        ]) !!}
                        <span class="text-danger">{{ $errors->first('jumlah_dibayar') }}</span>
                    </div>
                    {!! Form::submit('SIMPAN', [
                        'class' => 'btn btn-primary mt-3',
                    ]) !!}

                    {!! Form::close() !!}
                </div>

            </div>
        </div>



        {{-- KARTU SPP --}}
        <div class="col-md-7 ">
            <div class="card ">
                <h5 class="card-header "> kartu Spp</h5>

                <div class="card-body">
                    <table class="table table-bordered text-center ">
                        <tr class="table-primary">
                            <th width="10">No</th>

                            <th>Bulan</th>

                            <th>Jumlah Tagihan</th>
                            <th>Tanggal Bayar</th>

                            <th>Paraf</th>
                        </tr>

                        @foreach ($kartuSpp as $item)
                            <tr class="item">
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    {{ $item['bulan'] . '  ' . $item['tahun'] }}</td>

                                {{-- dari app/helpers/helper.php --}}
                                <td>{{ formatRupiah($item['total_tagihan']) }}</td>
                                <td>{{ $item['tanggal_bayar'] }}</td>
                                <td>&nbsp;</td>
                            </tr>
                        @endforeach
                    </table>

                    <a href="{{ route('kartuspp.index', [
                        'siswa_id' => $siswa->id,
                        'tahun' => request('tahun'),
                    ]) }}"
                        class="btn btn-primary mt-2 " target="blank"><i class="fa fa-file"> </i> Cetak Kartu
                        SPP</a>
                </div>
            </div>
        </div>

    </div>
@endsection
