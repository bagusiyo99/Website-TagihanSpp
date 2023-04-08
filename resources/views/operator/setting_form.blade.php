@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Pengaturan </h5>

                <div class="card-body">

                    {!! Form::open(['route' => 'setting.store', 'method' => 'POST']) !!}



                    <div class="form-group">

                        <div class="form-group mt-3">
                            <label for="app_name">Nama Instansi</label>
                            {!! Form::text('app_name', null, ['class' => 'form-control', 'autofocus']) !!}
                            <span class="text-danger">{{ $errors->first('app_name') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="app_email">Email Instansi</label>
                            {!! Form::text('app_email', null, ['class' => 'form-control rupiah']) !!}
                            <span class="text-danger">{{ $errors->first('app_email') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="app_phone">Nama Telphone</label>
                            {!! Form::text('app_phone', null, ['class' => 'form-control', 'autofocus']) !!}
                            <span class="text-danger">{{ $errors->first('app_phone') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="app_address">Alamat Instansi</label>
                            {!! Form::text('app_address', null, ['class' => 'form-control rupiah']) !!}
                            <span class="text-danger">{{ $errors->first('app_address') }}</span>
                        </div>

                        {!! Form::submit('UPDATE', ['class' => 'btn btn-primary mt-5']) !!}


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endsection
