@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">{{ $title }}</h5>

                <div class="card-body">

                    {!! Form::model($model, ['route' => $route, 'method' => $method, 'files' => true]) !!}


                    <div class="form-group">
                        <div class="form-group mt-3">
                            <label for="sandi_bank">Kode</label>
                            {!! Form::text('sandi_bank', null, ['class' => 'form-control', 'autofocus']) !!}
                            <span class="text-danger">{{ $errors->first('sandi_bank') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="nama_bank">Nama Bank</label>
                            {!! Form::text('nama_bank', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('nama_bank') }}</span>
                        </div>


                        {!! Form::submit($button, ['class' => 'btn btn-primary mt-5']) !!}

                        <a href="{{ route('user.index') }}" class="btn btn-warning mt-5 mx-3">Kembali</a>


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endsection
