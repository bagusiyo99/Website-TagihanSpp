@extends('layouts.app_sneat_blank')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <h5 class="card-header">laporan tagihan</h5>

                <div class="card-body">

                    <div class="table-responsive mt-4">
                        <table id="data" class="table table-bordered text-center ">
                            <thead>
                                <tr class="table-primary">
                                    <th>No</th>
                                    <th>Nama </th>
                                    <th>Nisn</th>
                                    <th>tanggal tagihan</th>
                                    <th>Status</th>
                                    <th>Jumlah Biaya</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tagihan as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->siswa->nama }}</td>
                                        <td>{{ $item->siswa->nisn }}</td>
                                        <td>{{ $item->tanggal_tagihan->format('d-F-Y ') }}</td>
                                        <td><span class="badge  {{ $item->status == 'lunas' ? 'bg-primary' : 'bg-danger' }}">
                                                {{ $item->getTagihanWali() }}</span>
                                        </td>
                                        <td>{{ formatRupiah($item->tagihanDetails->sum('jumlah_biaya')) }}</td>

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
