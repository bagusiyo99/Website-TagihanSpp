<style>
    .tba {
        background-color: rgb(35, 148, 60);
        color: rgb(243, 241, 241);
    }
</style>
@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                {{-- headerrr --}}
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
                                    <table class="text-white ">

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
                                    <a class="btn btn-warning text-white mt-2"
                                        href="{{ route('invoice.show', $tagihan->id) }}" target="blank"><i
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
            </div>
        </div>
    </div>

    <div class="row mt-4">
        {{-- DATA Tagihan --}}

        <div class="col-md-5">
            {{-- link tagihan table --}}
            {{-- klik Alt+ --}}
            @include('operator.tagihan_table_tagihan')

            {{-- DATA PEMBAYARAN --}}
            @include('operator.tagihan_table_pembayaran')
        </div>



        {{-- KARTU SPP --}}
        <div class="col-md-7 ">
            @include('operator.tagihan_table_KartuSpp')
        </div>

    </div>
@endsection
