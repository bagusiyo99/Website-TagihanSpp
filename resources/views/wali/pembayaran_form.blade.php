@extends('layouts.app_wali')
@section('js')
    {{-- tutorial hal 83 --}}
    <script>
        $(function() {
            $("#checkboxtoggle").click(function() {
                if ($(this).is(":checked")) {
                    $('#pilihan_bank').fadeOut();
                    $("#form_bank_pengirim").fadeIn();
                } else {
                    $("#form_bank_pengirim").fadeOut();
                    $('#pilihan_bank').fadeIn();
                }
            });
        });

        //     {{-- tutorial hal 77 --}}
        $(document).ready(function() {

            @if (count($ListWaliBank) >= 1)
                $("#form_bank_pengirim").hide();
            @else
                $("#form_bank_pengirim").show();
            @endif
            $("#pilih_bank").change(function(e) {
                var bankId = $(this).find(":selected").val();
                window.location.href = "{!! $url !!}&bank_sekolah_id=" + bankId;
            });
        });
    </script>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header text-uppercase">Transfer</h5>
                <div class="card-body">
                    {!! Form::model($model, ['route' => $route, 'method' => $method, 'files' => true]) !!}
                    {!! Form::hidden('tagihan_id', request('tagihan_id'), []) !!}
                    <div class="divider ">
                        <div class="divider-text text-bold"><i class="fa fa-info-circle text-center "></i> INFORMASI REKENING
                            PENGIRIM</div>
                    </div>
                    @if (count($ListWaliBank) >= 1)
                        {{-- sudah pernah bayar --}}
                        <div class="form-group " id="pilihan_bank">
                            <label for="wali_bank_id">Nama Bank Pengirim</label>
                            {!! Form::select('wali_bank_id', $ListWaliBank, null, [
                                'class' => 'form-control select2',
                                'placeholder' => 'Pilih Nomor Pengirim',
                            ]) !!}
                            <span class="text-danger">{{ $errors->first('wali_bank_id') }}</span>
                        </div>


                        {{--  tutor 84 --}}
                        <div class="form-check mt-3">
                            {!! Form::checkbox('pilihan_bank', 1, false, ['class' => 'form-check-input', 'id' => 'checkboxtoggle']) !!}
                            <label class="form-check-label" for="defaultCheck1"> Pembayaran Menggunakan Rekening Baru
                            </label>
                        </div>
                    @endif

                    <div class="  mt-2 mb-5 " role="alert" id="form_bank_pengirim">
                        {{-- belum pernah bayar  tutor 83 --}}

                        <div class="form-group ">
                            <label for="nama_bank_pengirim">Nama Bank Pengirim</label>
                            {!! Form::select('bank_id', $listBank, null, [
                                'class' => 'form-control',
                                'placeholder' => 'Pilih Bank Tujuan Transfer',
                            ]) !!}
                            <span class="text-danger">{{ $errors->first('bank_id') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="nama_rekening"> Nama Pemilik Rekening Pengirim</label>
                            {!! Form::text('nama_rekening', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('nama_rekening') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="nomor_rekening"> Nomor Rekening Pengirim</label>
                            {!! Form::text('nomor_rekening', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('nomor_rekening') }}</span>
                        </div>

                        <div class="form-check mt-3">
                            {!! Form::checkbox('simpan_data_rekening', 1, true, ['class' => 'form-check-input', 'id' => 'defaultCheck1']) !!}
                            <label class="form-check-label" for="defaultCheck1"> Simpan Data </label>
                        </div>
                    </div>

                    <div class="divider mt-5">
                        <div class="divider-text text-bold"><i class="fa fa-info-circle text-center "></i> INFORMASI
                            PEMBAYARAN
                        </div>
                    </div>

                    <div class="form-group mt-1">
                        <label for="bank_sekolah_id"> Bank Tujuan Pembayaran</label>
                        {!! Form::select('bank_sekolah_id', $listBankSekolah, request('bank_sekolah_id'), [
                            'class' => 'form-control',
                            'placeholder' => 'Pilih Bank Tujuan Transfer',
                            'id' => 'pilih_bank',
                        ]) !!}
                        <span class="text-danger">{{ $errors->first('bank_sekolah_id') }}</span>
                    </div>

                    @if (request('bank_sekolah_id') != '')
                        <div class="alert alert-primary bg-primary mt-2 mb-2" role="alert">
                            <table class="text-white" width="100%">
                                <tbody>
                                    <tr>
                                        <td width="45%">Nama Bank</td>
                                        <td> : {{ strtoupper($bankYangDipilih->nama_bank) }}</td>
                                    </tr>


                                    <tr>
                                        <td>Nomor Rekening Bank</td>
                                        <td> : {{ strtoupper($bankYangDipilih->nomor_rekening) }}</td>

                                    </tr>

                                    <tr>
                                        <td>Nama Rekening Bank</td>
                                        <td> : {{ strtoupper($bankYangDipilih->nama_rekening) }}</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endif

                    <div class="form-group mt-3">
                        <label for="tanggal_bayar"> Tanggal Bayar </label>
                        {!! Form::date('tanggal_bayar', $model->tanggal_bayar ?? date('Y-m-d'), ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('tanggal_bayar') }}</span>
                    </div>

                    <div class="form-group mt-3">
                        <label for="jumlah_dibayar"> Jumlah Yang Dibayarkan</label>
                        {!! Form::text('jumlah_dibayar', $tagihan->tagihanDetails->sum('jumlah_biaya'), [
                            'class' => 'form-control rupiah',
                        ]) !!}
                        <span class="text-danger">{{ $errors->first('jumlah_dibayar') }}</span>
                    </div>

                    <div class="form-group mt-3">
                        <label for="bukti_bayar"> Bukti Pembayaran </label>
                        {!! Form::file('bukti_bayar', ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('bukti_bayar') }}</span>
                    </div>

                    {!! Form::submit('SIMPAN', ['class' => 'btn btn-primary mt-5']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
