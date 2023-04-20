@extends('layouts.app_sneat_blank')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5">
            <div class="card">
                <h5 class="card-header text-center">laporan Rekap Pembayaran</h5>

                <div class="card-body">
                    {{-- @include('operator.laporan_header') --}}
                    <div class="table-responsive mt-4">
                        <table id="data" class="table table-bordered text-center ">
                            <thead>
                                <tr class="table-primary">
                                    <th>No</th>
                                    <th>Nama Siswa </th>
                                    @foreach ($header as $bulan)
                                        <th>{{ ubahNamaBulan($bulan) }}</th>
                                    @endforeach

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataRekap as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item['siswa']['nama'] }}</td>
                                        @foreach ($item['dataTagihan'] as $itemTagihan)
                                            <td>
                                                @if ($itemTagihan['tanggal_lunas'] != '-')
                                                    {{ optional($itemTagihan['tanggal_lunas'])->format('d-m-Y') }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {!! $models->links() !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
