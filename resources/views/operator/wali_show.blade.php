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
                                    <td>: {{ $model->name }}</td>
                                </tr>

                                <tr>
                                    <td width="15%">No HP</td>
                                    <td>: {{ $model->nohp }}</td>
                                </tr>

                                <tr>
                                    <td width="15%">Email</td>
                                    <td>: {{ $model->email }}</td>
                                </tr>


                                <tr>
                                    <td width="15%">password</td>
                                    <td>: {{ $model->password }}</td>
                                </tr>

                                <tr>
                                    <td width="15%">Tanggal</td>
                                    <td>: {{ $model->created_at->format('d-F-Y ') }}</td>
                                </tr>

                                <tr>
                                    <td width="15%">Update</td>
                                    <td>: {{ $model->updated_at->format('d-F-Y ') }}</td>
                                </tr>


                            </thead>
                        </table>
                        <a href="{{ route('wali.index') }}" class="btn btn-warning mt-5 mx-3">Kembali</a>

                        <h4 class="mt-4">Data ANAK</h4>
                        <table class="table table-light">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nisn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($model->siswa as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nisn }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
