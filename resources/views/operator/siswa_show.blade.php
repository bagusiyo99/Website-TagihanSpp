@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">{{ $title }}</h5>

                <div class="card-body">
                    <div class="table-responsive">
                        <img src="/{{ $model->foto }}" width="300px" class="mb-4" alt="">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td width="15%">ID</td>
                                    <td>: {{ $model->id }}</td>
                                </tr>

                                <tr>
                                    <td width="15%">Nama</td>
                                    <td>: {{ $model->nama }}</td>
                                </tr>

                                <tr>
                                    <td width="15%">Nisn</td>
                                    <td>: {{ $model->nisn }}</td>
                                </tr>

                                <tr>
                                    <td width="15%">Jurusan</td>
                                    <td>: {{ $model->jurusan }}</td>
                                </tr>


                                <tr>
                                    <td width="15%">Angkatan</td>
                                    <td>: {{ $model->angkatan }}</td>
                                </tr>

                                <tr>
                                    <td width="15%">Kelas</td>
                                    <td>: {{ $model->kelas }}</td>
                                </tr>

                                <tr>
                                    <td width="15%">Kelas</td>
                                    <td>: {{ $model->created_at->format('d-F-Y ') }}</td>
                                </tr>

                                <tr>
                                    <td width="15%">Kelas</td>
                                    <td>: {{ $model->updated_at->format('d-F-Y ') }}</td>
                                </tr>


                            </thead>
                        </table>
                        <a href="{{ route('siswa.index') }}" class="btn btn-warning mt-5 mx-3">Kembali</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
