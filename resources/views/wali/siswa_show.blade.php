@extends('layouts.app_wali')

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

                                {{-- tutor 105 --}}
                                <tr>
                                    <td width="15%">STATUS SISWA</td>
                                    <td>:<span
                                            class="badge mx-2 {{ $model->status == 'aktif' ? 'bg-primary' : 'bg-danger' }}">
                                            {{ $model->status }}</span>
                                    </td>
                                </tr>
                                {{-- tutor 105 --}}


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
                                    <td width="15%">Tanggal</td>
                                    <td>: {{ $model->created_at->format('d-F-Y ') }}</td>
                                </tr>

                                <tr>
                                    <td width="15%">Update</td>
                                    <td>: {{ $model->updated_at->format('d-F-Y ') }}</td>
                                </tr>


                            </thead>

                        </table>


                        <div class="col-md-8 mt-5">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td width="10%">No</td>
                                        <td>Item Tagihan</td>
                                        <td>Jumlah Tagihan</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($model->biaya->children as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td class="text-end">{{ formatRupiah($item->jumlah) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <td colspan="2" class="text-center"> Total Tagihan</td>
                                    <td class="text-end">{{ formatRupiah($model->biaya->total_tagihan) }}</td>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
