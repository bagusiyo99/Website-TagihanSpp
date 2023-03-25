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
                            <label for="wali_id">Wali Murid (optional)</label>
                            {!! Form::select('wali_id', $wali, null, [
                                'class' => 'form-control select2',
                                'placeholder' => 'Pilih Wali Murid',
                            ]) !!}
                            <span class="text-danger">{{ $errors->first('wali_id') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="nama">Nama</label>
                            {!! Form::text('nama', null, ['class' => 'form-control', 'autofocus']) !!}
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="nisn">NISN</label>
                            {!! Form::text('nisn', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('nisn') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="kelas">Kelas</label>
                            {!! Form::selectRange('kelas', 10, 12, null, ['class' => 'form-control', 'placeholder' => 'Pilih Kelas']) !!}
                            <span class="text-danger">{{ $errors->first('kelas') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="angkatan">Angkatan</label>
                            {!! Form::selectRange('angkatan', 2000, date('Y'), null, [
                                'class' => 'form-control',
                                'placeholder' => 'Angkatan',
                            ]) !!}
                            <span class="text-danger">{{ $errors->first('angkatan') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="jurusan">Jurusan</label>
                            {!! Form::select(
                                'jurusan',
                                [
                                    'RPL' => 'Rekayasa Perangkat Lunak',
                                    'TKJ' => 'Teknik Komputer Jaringan',
                                    'TKR' => 'Teknik Kendaraan Ringan',
                                ],
                                null,
                                ['class' => 'form-control', 'placeholder' => 'Jurusan'],
                            ) !!}
                            <span class="text-danger">{{ $errors->first('jurusan') }}</span>
                        </div>

                        @if ($model->foto != null)
                            <img src="/{{ $model->foto }}" width="300px" class="mt-4" alt="">
                        @endif

                        <div class="form-group mt-3">
                            <label for="foto">Foto <b>(Format:jpg, jpeg, png, Ukuran Maks : 3MB)</b></label>
                            {!! Form::file('foto', ['class' => 'form-control', 'accept' => 'image/*']) !!}
                            <span class="text-danger">{{ $errors->first('foto') }}</span>
                        </div>


                        {!! Form::submit($button, ['class' => 'btn btn-primary mt-5']) !!}

                        <a href="{{ route('user.index') }}" class="btn btn-warning mt-5 mx-3">Kembali</a>


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endsection
