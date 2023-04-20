    {!! Form::open(['route' => 'laporanpembayaran.index', 'method' => 'GET', 'target' => 'blank']) !!}

    <div class="row gx-2">
        <div class="col">
            <label for="jurusan">Jurusan</label>
            {!! Form::select('jurusan', getNamaJurusan(), null, ['class' => 'form-control', 'placeholder' => 'Jurusan']) !!}
            <span class="text-danger">{{ $errors->first('jurusan') }}</span>
        </div>


        <div class="col">
            <label for="kelas">Kelas</label>
            {{-- {!! Form::selectRange('kelas', 10, 12, null, ['class' => 'form-control', 'placeholder' => 'Pilih Kelas']) !!} --}}
            {!! Form::select('kelas', getNamaKelas(), null, ['class' => 'form-control', 'placeholder' => 'Kelas']) !!}
            <span class="text-danger">{{ $errors->first('kelas') }}</span>
        </div>

        <div class="col-md-3 col-sm-12">
            <label for=""> Status Pembayaran</label>
            {!! Form::select(
                'tanggal_konfirmasi',
                [
                    '' => 'Pilih Status',
                    'sudah-konfirmasi' => 'Sudah Dikonfirmasi',
                    'belum-konfirmasi' => 'Belum Dikonfirmasi',
                ],
                request('tanggal_konfirmasi'),
                ['class' => 'form-control'],
            ) !!}
        </div>


        <div class="col">
            <label for="bulan"> Bulan </label>

            {!! Form::selectMonth('bulan', request('bulan'), ['class' => 'form-control', 'placeholder' => 'Pilih Bulan']) !!}
        </div>

        <div class="col">
            <label for="tahun"> Tahun </label>

            {!! Form::selectRange('tahun', 2022, date('Y') + 10, request('tahun'), [
                'class' => 'form-control',
                // 'placeholder' => 'Pilih Tahun',
            ]) !!}
        </div>

        <div class="col">
            <button class="btn btn-primary mt-4" type="submit">Cari</button>
        </div>
    </div>
    </div>
    {!! Form::close() !!}
