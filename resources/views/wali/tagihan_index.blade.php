@extends('layouts.app_wali')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Data Tagihan Siswa</h5>

                <div class="card-body">

                    <div class="table-responsive mt-2">
                        <table id="data" class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Kelas</th>
                                    <th>Tanggal Tagihan</th>
                                    <th>Status Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tagihan as $item)
                                    <tr>
                                        {{-- siswa-> memanggil tabel siswa, untuk controller nya panggil di WaliMuridTagihanController vidio 70 --}}
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->siswa->nama }}</td>
                                        <td>{{ $item->siswa->jurusan }}</td>
                                        <td>{{ $item->kelas }}</td>
                                        <td>{{ $item->tanggal_tagihan->format('d-F-Y ') }}</td>
                                        <td>{{ $item->getTagihanWali() }}</td>
                                        {{-- getTagihanWali di model tagihan tutorial 70 --}}
                                        <td>
                                            @if ($item->status == 'baru' || $item->status == 'angsur')
                                                <a href="{{ route('wali.tagihan.show', $item->id) }}" class="btn btn-primary">
                                                    Lakukan Pembayaran</a>
                                            @else
                                                <a href="" class="btn btn-warning">
                                                    Pembayaran Sudah Lunas</a>
                                            @endif
                                        </td>

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
