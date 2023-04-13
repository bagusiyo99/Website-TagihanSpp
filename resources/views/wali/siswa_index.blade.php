@extends('layouts.app_wali')
{{-- walimurid controller --}}
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">siswa</h5>

                <div class="card-body">

                    <div class="table-responsive mt-2">
                        <table id="data" class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Wali Murid</th>
                                    <th>Nama</th>
                                    <th>NISN</th>
                                    <th>Jurusan</th>
                                    {{-- <th>foto</th> --}}
                                    <th>Kelas</th>
                                    {{-- <th>Angkatan</th> --}}
                                    <th>biaya</th>
                                    <th>Kartu Spp</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($models as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->wali->name }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nisn }}</td>
                                        <td>{{ $item->jurusan }}</td>
                                        {{-- <td><img src="/{{ $item->foto }}" width="100px" alt=""> </td> --}}
                                        <td>{{ $item->kelas }}</td>
                                        {{-- <td>{{ $item->angkatan }}</td> --}}
                                        <td>
                                            <a href="{{ route('wali.siswa.show', $item->id) }}" class="btn btn-primary">
                                                {{ formatRupiah($item->biaya->children->sum('jumlah')) }}
                                            </a>
                                        </td>
                                        <td> <a href="{{ route('kartuspp.index', [
                                            'siswa_id' => $item->id,
                                            'tahun' => date('Y'),
                                        ]) }}"
                                                class="btn btn-primary" target="blank"><i class="fa fa-file"> </i>
                                                Kartu
                                                SPP</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">Data TIdak Ada</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
