@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">{{ $title }}</h5>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route($routePrefix . '.create') }}" class="btn btn-primary  mb-4">Tambah Data </a>
                        </div>
                        <div class="col-md-8">
                            {!! Form::open(['route' => $routePrefix . '.index', 'method' => 'GET']) !!}

                            <div class="row">
                                <div class="col-md-3">
                                    {!! Form::text('q', request('q'), ['class' => 'form-control', 'placeholder' => 'Pencarian Data']) !!}
                                </div>

                                <div class="col">
                                    {!! Form::selectMonth('bulan', request('bulan'), ['class' => 'form-control', 'placeholder' => 'Pilih Bulan']) !!}
                                </div>

                                <div class="col">

                                    {!! Form::select(
                                        'status',
                                        [
                                            '' => 'Pilih Status',
                                            'lunas' => 'Lunas',
                                            'baru' => 'Belum Lunas',
                                            'angsur' => 'Angsur',
                                        ],
                                        null,
                                        ['class' => 'form-control'],
                                    ) !!}
                                </div>


                                <div class="col">
                                    {!! Form::selectRange('tahun', 2022, date('Y') + 10, request('tahun'), ['class' => 'form-control']) !!}
                                </div>

                                <div class="col">
                                    <button class="btn btn-primary" type="submit">Cari</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>

                    </div>

                    <div class="table-responsive mt-4">
                        <table id="data" class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama </th>
                                    <th>Nisn</th>
                                    <th>tanggal tagihan</th>
                                    <th>Status</th>
                                    <th>Jumlah Biaya</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($models as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->siswa->nama }}</td>
                                        <td>{{ $item->siswa->nisn }}</td>
                                        <td>{{ $item->tanggal_tagihan->format('d-F-Y ') }}</td>
                                        {{-- cara pertama --}}
                                        {{-- <td><span
                                                class="badge  {{ $item->status == 'lunas' ? 'bg-primary' : 'bg-danger' }}">
                                                {{ $item->getTagihanWali() }}</span>
                                        </td> --}}

                                        {{-- tutor 166 --}}
                                        <td><span class="badge rounded-pill bg-{{ $item->status_style }}">
                                                {{ $item->getTagihanWali() }}</span>
                                        </td>

                                        <td>{{ formatRupiah($item->tagihanDetails->sum('jumlah_biaya')) }}</td>
                                        <td>

                                            {!! Form::open([
                                                'route' => [$routePrefix . '.destroy', $item->id],
                                                'method' => 'DELETE',
                                                'onsubmit' => 'return confirm ("Yakin ingin mengapus data ini?")',
                                            ]) !!}

                                            <a href="{{ route($routePrefix . '.show', [
                                                $item->id,
                                                'siswa_id' => $item->siswa_id,
                                                'bulan' => $item->tanggal_tagihan->format('m'),
                                                'tahun' => $item->tanggal_tagihan->format('Y'),
                                            ]) }}"
                                                class="btn btn-warning mb-2"><i class="fa-solid fa-pen-to-square"></i>
                                                Detail</a>

                                            <button type="submit" class="btn btn-danger mb-2 "><i
                                                    class="fa-solid fa-trash-can"></i> Hapus</button>

                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">Data TIdak Ada</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- <div class="mt-3">{!! $models->links() !!}</div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
