  <div class="card ">
      <h5 class="card-header "> kartu Spp</h5>

      <div class="card-body">
          <table class="table table-bordered text-center ">
              <tr class="table-primary">
                  <th width="10">No</th>

                  <th>Bulan</th>

                  <th>Jumlah Tagihan</th>
                  <th>Tanggal Bayar</th>

                  <th>Paraf</th>
              </tr>

              @foreach ($kartuSpp as $item)
                  <tr class="item">
                      <td>{{ $loop->iteration }}</td>

                      <td>
                          {{ $item['bulan'] . '  ' . $item['tahun'] }}</td>

                      {{-- dari app/helpers/helper.php --}}
                      <td>{{ formatRupiah($item['total_tagihan']) }}</td>
                      <td>{{ $item['tanggal_bayar'] }}</td>
                      <td>&nbsp;</td>
                  </tr>
              @endforeach
          </table>

          <a href="{{ route('kartuspp.index', [
              'siswa_id' => $siswa->id,
              'tahun' => request('tahun'),
          ]) }}"
              class="btn btn-primary mt-2 " target="blank"><i class="fa fa-file"> </i> Cetak Kartu
              SPP</a>
      </div>
  </div>
