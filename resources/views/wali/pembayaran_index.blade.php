@extends('layouts.app_wali')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">DATA PEMBAYARAN</h5>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::open(['route' => 'wali.pembayaran.index', 'method' => 'GET']) !!}

                            <div class="row">
                                <div class="col">
                                    {!! Form::selectMonth('bulan', request('bulan'), ['class' => 'form-control']) !!}
                                </div>



                                <div class="col">
                                    {!! Form::selectRange('tahun', 2000, date('Y') + 10, request('tahun'), ['class' => 'form-control']) !!}
                                </div>

                                <div class="col">
                                    <button class="btn btn-primary" type="submit">Cari</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    <div class="table-responsive mt-4" id="data">
                        <table id="data" class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama </th>
                                    <th>Nisn</th>
                                    <th>Nama Wali </th>
                                    <th>Tanggal Konfirmasi</th>
                                    <th>Status Konfirmasi</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($models as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->tagihan->siswa->nama }}</td>
                                        <td>{{ $item->tagihan->siswa->nisn }}</td>
                                        <td>{{ $item->wali->name }}</td>
                                        <td>{{ optional($item->tanggal_bayar)->format('d-F-Y ') }}</td>
                                        <td>{{ $item->metode_pembayaran }}</td>
                                        <td>{{ $item->status_konfirmasi }}</td>

                                        <td>

                                            {!! Form::open([
                                                'route' => ['wali.pembayaran.destroy', $item->id],
                                                'method' => 'DELETE',
                                                'onsubmit' => 'return confirm ("Yakin ingin mengapus data ini?")',
                                            ]) !!}

                                            <a href="{{ route('wali.pembayaran.show', [$item->id]) }}"
                                                class="btn btn-warning mb-2"><i class="fa-solid fa-pen-to-square"></i>
                                                Detail</a>


                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">Data TIdak Ada</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {!! $models->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
