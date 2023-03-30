@extends('layouts.app_wali')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <header class=" pt-4 pt-md-0 bg-secondary">
                        <div class="row">
                            <div class="col-block col-md-auto text-center text-md-start">
                                <img src="/{{ $siswa->foto }}" alt="{{ $siswa->nama }}" width="250px" height="250px">
                            </div>
                            <!--//col-->
                            <div class="col">
                                <div class="row p-3 justify-content-center justify-content-md-between">
                                    <div class="primary-info col-md-6 col-sm-12">
                                        <h2 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">
                                            TAGIHAN SPP {{ strtoupper($siswa->nama) }}</h2>
                                        <table class="text-white mt-3">

                                            <tr>
                                                <td width="60">NAMA</td>
                                                <td> : {{ strtoupper($siswa->nama) }}</td>
                                            </tr>

                                            <tr>
                                                <td> NISN</td>
                                                <td> : {{ strtoupper($siswa->nisn) }}</td>
                                            </tr>


                                            <tr>
                                                <td> JURUSAN</td>
                                                <td> : {{ strtoupper($siswa->jurusan) }}</td>
                                            </tr>


                                            <tr>
                                                <td> KELAS</td>
                                                <td> : {{ strtoupper($siswa->kelas) }}</td>
                                            </tr>


                                            <tr>
                                                <td> ANGKATAN</td>
                                                <td> : {{ strtoupper($siswa->angkatan) }}</td>
                                            </tr>
                                        </table>
                                    </div>


                                    <!--//primary-info-->
                                    <div class=" col-md-6 col-sm-1 p-4">
                                        <table class="text-white">

                                            <tr>
                                                <td>Pembayaran ID</td>
                                                <td> : #SB-{{ strtoupper($tagihan->id) }}</td>
                                            </tr>

                                            <tr>
                                                <td> Tanggal Tagihan</td>
                                                <td> :
                                                    {{ strtoupper($tagihan->tanggal_tagihan->translatedformat('d F Y')) }}
                                                </td>
                                            </tr>


                                            <tr>
                                                <td> Tanggal Jatuh Tempo</td>
                                                <td> :
                                                    {{ strtoupper($tagihan->tanggal_jatuh_tempo->translatedformat('d F Y')) }}
                                                </td>
                                            </tr>


                                            <tr>
                                                <td> Status Pembayaran</td>
                                                <td> : {{ strtoupper($tagihan->getTagihanWali()) }}</td>
                                            </tr>


                                        </table>
                                        <a class="btn btn-warning text-white mt-2" href=""><i
                                                class="fa fa-file-pdf"></i>
                                            Cetak Invoice Tagihan</a>

                                    </div>
                                    <!--//secondary-info-->
                                </div>
                                <!--//row-->

                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </header>

                    <div class="table-responsive mt-5">
                        <table class="table table-sm mt-2 table-bordered">
                            <thead>
                                <tr>
                                    <th width="1%">No</th>
                                    <th width="50%">Nama Tagihan</th>
                                    <th width="30%" class="text-end">Jumlah Tagihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tagihan->tagihanDetails as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_biaya }}</td>
                                        {{-- dari app/helpers/helper.php --}}
                                        <td class="text-end">{{ formatRupiah($item->jumlah_biaya) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-center fw-bold">Total Pembayaran</td>
                                    <td class="text-end fw-bold">
                                        {{ formatRupiah($tagihan->tagihanDetails->sum('jumlah_biaya')) }}
                                    </td>
                                </tr>
                            </tfoot>
                        </table>


                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12  mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <p class="text-danger fst-italic text-center">Hati-Hati Penipuan Mengatasnamakan Sekolah</p>
                        <h5 class="px-3 text-bg-primary">PEMBAYARAN DAPAT DILAKUKAN SECARA OFFLINE DENGAN
                            DATANG LANGSUNG
                            KE SEKOLAH ATAU TRANFER MELALUI BANK MILIK SEKOLAH SEBAGI BERIKUT:</h5>
                        <ul class="px-5">
                            <li><a href="">Cara Pendaftaran Melalui Transfer</a></li>
                            <li><a href="">Cara Pendaftaran Melalui Transfer</a></li>

                        </ul>
                        @foreach ($bankSekolah as $itemBank)
                            <div class="col-md-4 mt-1">
                                <div class="alert alert-primary bg-primary" role="alert">
                                    <table class="text-white" width="100%">
                                        <tbody>
                                            <tr>
                                                <td width="45%">Nama Bank</td>
                                                <td> : {{ strtoupper($itemBank->nama_bank) }}</td>
                                            </tr>

                                            <tr>
                                                <td>Nomor Rekening Bank</td>
                                                <td> : {{ strtoupper($itemBank->nomor_rekening) }}</td>

                                            </tr>

                                            <tr>
                                                <td>Nama Rekening Bank</td>
                                                <td> : {{ strtoupper($itemBank->nama_rekening) }}</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <a class="btn btn-warning text-white mt-2 text-end"
                                        href="{{ route('wali.pembayaran.create', [
                                            'tagihan_id' => $tagihan->id,
                                            'bank_sekolah_id' => $itemBank->id,
                                        ]) }}">
                                        Konfirmasi Pembayaran</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
