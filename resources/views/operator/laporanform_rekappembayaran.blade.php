    {!! Form::open(['route' => 'laporanrekappembayaran.index', 'method' => 'GET', 'target' => 'blank']) !!}

    <div class="row gx-2">



        <div class="col">
            <label for="kelas">Kelas</label>
            {{-- {!! Form::selectRange('kelas', 10, 12, null, ['class' => 'form-control', 'placeholder' => 'Pilih Kelas']) !!} --}}
            {!! Form::select('kelas', getNamaKelas(), null, ['class' => 'form-control', 'placeholder' => 'Kelas']) !!}
            <span class="text-danger">{{ $errors->first('kelas') }}</span>
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
