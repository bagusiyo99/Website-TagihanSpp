@extends('layouts.app_wali')
@section('js')
    {{-- tutorial hal 77 --}}
    <script>
        $(document).ready(function() {
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
                <h5 class="card-header text-uppercase">siswa</h5>
                <div class="card-body">
                    {!! Form::model($model, ['route' => $route, 'method' => $method]) !!}
                    <div class="divider ">
                        <div class="divider-text text-bold"><i class="fa fa-info-circle text-center "></i> INFORMASI REKENING
                            PENGIRIM</div>
                    </div>

                    <div class="alert alert-primary bg-info mt-2 mb-5 text-white" role="alert">

                        <div class="form-group ">
                            <label for="nama_bank_pengirim">Nama Bank Pengirim</label>
                            {!! Form::select('bank_id', $listBank, null, ['class' => 'form-control']) !!}

                            <span class="text-danger">{{ $errors->first('nama_bank_pengirim') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="rekening_bank_pengirim"> Nama Pemilik Rekening Pengirim</label>
                            {!! Form::text('rekening_bank_pengirim', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('rekening_bank_pengirim') }}</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="no_rekening_bank_pengirim"> Nomor Rekening Pengirim</label>
                            {!! Form::text('no_rekening_bank_pengirim', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('no_rekening_bank_pengirim') }}</span>
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
                        <label for="bank_id"> Bank Tujuan Pembayaran</label>
                        {!! Form::select('bank_id', $listBankSekolah, request('bank_sekolah_id'), [
                            'class' => 'form-control',
                            'placeholder' => 'Pilih Bank Tujuan Transfer',
                            'id' => 'pilih_bank',
                        ]) !!}
                        <span class="text-danger">{{ $errors->first('bank_id') }}</span>
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
                        {!! Form::text('jumlah_dibayar', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('jumlah_dibayar') }}</span>
                    </div>

                    <div class="form-group mt-3">
                        <label for="bukti_bayar"> Tanggal Tagihan </label>
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
