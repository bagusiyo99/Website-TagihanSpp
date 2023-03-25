@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">{{ $title }}</h5>

                <div class="card-body">
                    <a href="{{ route($routePrefix . '.create') }}" class="btn btn-primary  mb-4">Tambah Data </a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>No.Hp</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($models as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->nohp }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->akses }}</td>
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
                        {!! $models->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
