@extends('layouts.app_sneat_blank')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <h5 class="card-header">laporan Pembayaran</h5>

                <div class="card-body">

                    <div class="table-responsive mt-4">
                        <table id="data" class="table table-bordered text-center ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama </th>
                                    <th>Nama Wali </th>
                                    <th>Nisn</th>
                                    <th>Tanggal Konfirmasi</th>
                                    <th>Status Konfirmasi</th>
                                    <th>Metode Pembayaran</th>

                                    <th>Jumlah Biaya</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pembayaran as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->tagihan->siswa->nama }}</td>
                                        <td>{{ $item->wali->name }}</td>
                                        <td>{{ $item->tagihan->siswa->nisn }}</td>
                                        <td>{{ $item->tagihan->tanggal_tagihan->format('d-F-Y ') }}</td>
                                        <td><span
                                                class="badge bg-danger {{ $item->status_konfirmasi == 'Sudah Di Konfirmasi' ? 'bg-danger' : ' bg-primary' }}">
                                                {{ $item->status_konfirmasi }}</span>
                                        </td>
                                        <td>{{ $item->metode_pembayaran }}</td>

                                        <td>{{ formatRupiah($item->jumlah_dibayar) }}</td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">Data TIdak Ada</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- {!! $models->links() !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
