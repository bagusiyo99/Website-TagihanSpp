@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">{{ $title }}</h5>

                <div class="card-body">
                    <a href="{{ route($routePrefix . '.create') }}" class="btn btn-primary  mb-4">Tambah Data </a>
                    {!! Form::open(['route' => $routePrefix . '.index', 'method' => 'GET']) !!}
                    <div class="input-group">
                        <input name="q" type="text" class="form-control" placeholder="Cari Data Siswa"
                            aria-label="Cari Data" aria-describedby="button-addon2" value="{{ request('q') }}">
                        <button type="submit" class="btn btn-outline-primary" id="button-addon2"><i
                                class="bx bx-search"></i></button>
                    </div>
                    {!! Form::close() !!}
                    <div class="table-responsive mt-4">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Biaya</th>
                                    <th>Total Tagihan</th>
                                    <th>Created By</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($models as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>

                                        {{-- tutorial 32 dan 33 membuat helper  dan cara manual --}}
                                        {{-- <td>{{ $item->formatRupiah('jumlah') }}</td> --}}

                                        {{-- tutor 103 --}}
                                        <td>{{ formatRupiah($item->total_tagihan) }}</td>


                                        {{-- cara cepet --}}
                                        {{-- <td> Rp. {{ $item->jumlah }}</td> --}}

                                        <td>{{ $item->user->name }}</td>
                                        <td>


                                            {!! Form::open([
                                                'route' => [$routePrefix . '.destroy', $item->id],
                                                'method' => 'DELETE',
                                                'onsubmit' => 'return confirm ("Yakin ingin mengapus data ini?")',
                                            ]) !!}

                                            <a href="{{ route($routePrefix . '.edit', $item->id) }}"
                                                class="btn btn-success mb-2"><i class="fa-solid fa-pen-to-square"></i>
                                                Edit</a>

                                            <a href="{{ route($routePrefix . '.create', ['parent_id' => $item->id]) }}"
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
                        {!! $models->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
