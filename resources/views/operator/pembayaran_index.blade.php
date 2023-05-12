@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">DATA PEMBAYARAN</h5>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::open(['route' => 'pembayaran.index', 'method' => 'GET']) !!}

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
                    <div class="table-responsive mt-4">
                        <table id="data" class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama </th>
                                    <th>Nisn</th>
                                    <th>Nama Wali </th>
                                    <th>Tanggal Konfirmasi</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Status Konfirmasi</th>

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
                                        <td>
                                            @if ($item->tanggal_konfirmasi == null)
                                                <span class="badge bg-danger ">
                                                    Belum Dikonfirmasi</span>
                                            @else
                                                <span class="badge bg-primary ">
                                                    {{ optional($item->tanggal_konfirmasi)->format('d-F-Y ') }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->metode_pembayaran }}</td>
                                        {{-- <td> <span class="badge  bg-primary">
                                                {{ $item->status_konfirmasi }}</span>
                                        </td> --}}
                                        {{-- <td>
                                            {{ $item->status_konfirmasi }}
                                        </td> --}}


                                        {{-- tutor 166 --}}
                                        <td>
                                            <span class="badge badge-pill bg-{{ $item->status_style }}">
                                                @if ($item->status_konfirmasi == null)
                                                @else
                                                    {{ $item->status_konfirmasi }}
                                                @endif
                                            </span>
                                        </td>

                                        <td>

                                            {!! Form::open([
                                                'route' => ['pembayaran.destroy', $item->id],
                                                'method' => 'DELETE',
                                                'onsubmit' => 'return confirm ("Yakin ingin mengapus data ini?")',
                                            ]) !!}

                                            <a href="{{ route('pembayaran.show', [$item->id]) }}"
                                                class="btn btn-warning mb-2"><i class="fa-solid fa-pen-to-square"></i>
                                                Detail</a>

                                            <button type="submit" class="btn btn-danger mb-2 "><i
                                                    class="fa-solid fa-trash-can"></i> Hapus</button>

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
                        {{-- {!! $models->links() !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
