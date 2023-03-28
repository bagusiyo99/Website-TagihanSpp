{{-- _blank tambahan --}}
@extends('layouts.app_sneat_blank')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="p-3 bg-white rounded">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="text-uppercase">Kartu Spp</h1>
                            <div class="billed"><span class="font-weight-bold text-uppercase">Nama Sekolah: </span><span
                                    class="ml-1">Smk Bagus</span></div>

                            <div class="billed"><span class="font-weight-bold text-uppercase">Nama Siswa: </span><span
                                    class="ml-1">{{ $siswa->nama }}</span></div>
                        </div>

                    </div>
                    <div class="mt-3">
                        <div class="table-responsive">
                            <table class="table table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Bulan Tagihan</th>
                                        <th>Jumlah</th>
                                        <th>Paraf</th>
                                        <th>Total</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($tagihan as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->tanggal_tagihan->translatedFormat('f Y') }}</td>
                                            <td>{{ formatRupiah($item->jumlah_biaya) }}</td>
                                            <td>
                                                <ul>
                                                    @foreach ($item->tagihanDetails as $itemDetails)
                                                        <li>
                                                            {{ $itemDetails->nama_biaya }}
                                                            ({{ $itemDetails->jumlah_biaya }})
                                                        </li>
                                                    @endforeach
                                                </ul>

                                            </td>
                                            <td>{{ formatRupiah($item->tagihanDetails->sum('jumlah_biaya')) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
