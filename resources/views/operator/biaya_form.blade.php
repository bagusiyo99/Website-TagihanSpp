@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">{{ $title }}</h5>

                <div class="card-body">

                    {!! Form::model($model, ['route' => $route, 'method' => $method]) !!}

                    {{-- tutor 103 --}}
                    @if (request()->filled('parent_id'))
                        <h2>Info {{ $parentData->nama }}</h2>
                        {!! Form::hidden('parent_id', $parentData->id, []) !!}
                        <div class="col-md-8">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>Parent ID</td>
                                        <td>Nama Biaya</td>
                                        <td>Jumlah</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($parentData->children as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->jumlah }}</td>
                                            <td> <a href="{{ route('delete-biaya.item', $item->id) }}"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="return confirm ('Anda Yakin Ingin Hapus Data Ini')">
                                                    Hapus </a></td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                    {{-- tutor 101 --}}

                    <div class="form-group">

                        <div class="form-group mt-3">
                            <label for="nama">Nama Biaya</label>
                            {!! Form::text('nama', null, ['class' => 'form-control', 'autofocus']) !!}
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="jumlah">Nominal</label>
                            {{-- plugin rupiah tutor  29 --}}
                            {!! Form::text('jumlah', null, ['class' => 'form-control rupiah']) !!}
                            <span class="text-danger">{{ $errors->first('jumlah') }}</span>
                        </div>

                        {!! Form::submit($button, ['class' => 'btn btn-primary mt-5']) !!}

                        <a href="{{ route('biaya.index') }}" class="btn btn-warning mt-5 mx-3">Kembali</a>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endsection
