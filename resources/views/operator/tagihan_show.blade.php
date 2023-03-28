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
                    {{-- <a href="{{ route('kartuspp.index', [
                        'siswa_id' => $siswa->id,
                        'tahun' => request('tahun'),
                    ]) }}"
                        class="btn btn-primary mt-5" target="blank"><i class="fa fa-file"> Kartu Tagihan
                            SPP</i></a> --}}

                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-5">
            <div class="card">
                <h5 class="card-header"> Data Tagihan {{ $periode }}</h5>
                <div class="card-body">
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

                                    {{-- dari app/helpers/helper.php --}}
                                    <td>{{ formatRupiah($item->jumlah_biaya) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2">Total Pembayaran</td>
                                <td>{{ formatRupiah($tagihan->tagihanDetails->sum('jumlah_biaya')) }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>


            </div>
        </div>

        <div class="col-md-7 ">
            <div class="card">
                <div class="card-body">

                    <h5 class="card-header pb-0  px-0"> DATA PEMBAYARAN</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
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

                    <h5 class="text-danger mt-3">Status Pembayaran : {{ $tagihan->status }}</h5>

                </div>
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

    </div>
@endsection
