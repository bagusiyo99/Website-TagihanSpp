@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">{{ $title }}</h5>

                <div class="card-body">
                    <a href="{{ route($routePrefix . '.create') }}" class="btn btn-primary  mb-4">Tambah Data </a>
                    {!! Form::open(['route' => $routePrefix . '.index', 'method' => 'GET']) !!}
                    {{-- <div class="input-group">
                        <input name="q" type="text" class="form-control" placeholder="Cari Nama Siswa"
                            aria-label="Cari Nama" aria-describedby="button-addon2" value="{{ request('q') }}">
                        <button type="submit" class="btn btn-outline-primary" id="button-addon2"><i
                                class="bx bx-search"></i></button>
                    </div> --}}
                    {!! Form::close() !!}
                    <div class="table-responsive mt-4">
                        <table id="data" class="table table-bordered text-center">
                            <thead>
                                <tr class=" text-center">
                                    <th>No</th>
                                    <th>Wali Murid</th>
                                    <th>Nama</th>
                                    <th>NISN</th>
                                    <th>Status</th>
                                    {{-- <th>Jurusan</th> --}}
                                    {{-- <th>foto</th> --}}
                                    <th>Tagihan</th>
                                    <th>Angkatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($models as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->wali->name }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nisn }}</td>
                                        <td><span
                                                class="badge  {{ $item->status == 'aktif' ? 'bg-primary' : 'bg-danger' }}">
                                                {{ $item->status }}</span>
                                        </td>
                                        {{-- <td>{{ $item->jurusan }}</td> --}}
                                        {{-- <td><img src="/{{ $item->foto }}" width="100px" alt=""> </td> --}}

                                        {{-- 104 part 1 --}}
                                        <td>{{ formatRupiah($item->biaya->children->sum('jumlah')) }}</td>


                                        <td>{{ $item->angkatan }}</td>
                                        <td>
                                            {{-- <a href="{{ route('user.edit', $item->id) }}"
                                                class="btn btn-success mb-2">Edit</a> --}}

                                            {!! Form::open([
                                                'route' => [$routePrefix . '.destroy', $item->id],
                                                'method' => 'DELETE',
                                                'onsubmit' => 'return confirm ("Yakin ingin mengapus data ini?")',
                                            ]) !!}

                                            <a href="{{ route($routePrefix . '.edit', $item->id) }}"
                                                class="btn btn-success mb-2"><i class="fa-solid fa-pen-to-square"></i>
                                                Edit</a>

                                            <a href="{{ route($routePrefix . '.show', $item->id) }}"
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
