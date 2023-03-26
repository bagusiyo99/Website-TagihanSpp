@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">{{ $title }}</h5>

                <div class="card-body">

                    {!! Form::model($model, ['route' => $route, 'method' => $method]) !!}


                    <div class="form-group">
                        @foreach ($biaya as $item)
                            <div class="form-check mt-3">

                                {!! Form::checkbox('biaya_id[]', $item->id, null, [
                                    'class' => 'form-check-input',
                                    'id' => 'defaultCheck' . $loop->iteration,
                                ]) !!}

                                <label class="form-check-label" for="defaultCheck">{{ $item->nama_biaya_full }}</label>
                            </div>
                        @endforeach


                        <div class="form-group mt-3">
                            <label for="angkatan">Tagihan Untuk Angkatan</label>
                            {!! Form::select('angkatan', $angkatan, null, ['class' => 'form-control', 'placeholder' => 'Pilih Angkatan']) !!}
                            <span class="text-danger">{{ $errors->first('angkatan') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="kelas">Tagihan Untuk Kelas</label>
                            {!! Form::select('kelas', $kelas, null, ['class' => 'form-control', 'placeholder' => 'Pilih Kelas']) !!}
                            <span class="text-danger">{{ $errors->first('kelas') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="tanggal_tagihan"> Tanggal Tagihan </label>
                            {!! Form::date('tanggal_tagihan', $model->tanggal_tagihan ?? date('Y-m-d'), ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('tanggal_tagihan') }}</span>
                        </div>


                        <div class="form-group mt-3">
                            <label for="tanggal_jatuh_tempo"> Tanggal Tagihan Jatuh Tempo </label>
                            {!! Form::date('tanggal_jatuh_tempo', $model->tangal_jatuh_tempo ?? date('Y-m-d'), ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('tanggal_jatuh_tempo') }}</span>
                        </div>


                        <div class="form-group mt-3">
                            <label for="keterangan">Keterangan</label>
                            {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('keterangan') }}</span>
                        </div>

                        {!! Form::submit($button, ['class' => 'btn btn-primary mt-5']) !!}

                        <a href="{{ route('biaya.index') }}" class="btn btn-warning mt-5 mx-3">Kembali</a>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endsection
