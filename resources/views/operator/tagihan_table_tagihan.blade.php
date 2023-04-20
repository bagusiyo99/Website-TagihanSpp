          <div class="card">
              <h5 class="card-header"> Data Tagihan {{ $periode }}</h5>
              <div class="card-body">
                  <table class="table table-sm mt-2 table-bordered">
                      <thead>
                          <tr class="table-primary">
                              <th>No</th>
                              <th>Nama Tagihan</th>
                              <th>Jumlah Tagihan</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($tagihan->tagihanDetails as $item)
                              <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $item->nama_biaya }}</td>

                                  {{-- dari app/helpers/helper.php --}}
                                  <td>{{ formatRupiah($item->jumlah_biaya) }}</td>
                              </tr>
                          @endforeach
                      </tbody>
                      <tfoot>
                          <tr>
                              <td class="text-center" colspan="2">Total Pembayaran</td>
                              <td>{{ formatRupiah($tagihan->total_tagihan) }}</td>
                          </tr>
                      </tfoot>

                  </table>

                  <a href="{{ route('invoice.show', $tagihan->id) }}" target="blank" class="btn btn-primary mt-2">
                      Cetak Invoice</a>
              </div>
          </div>
