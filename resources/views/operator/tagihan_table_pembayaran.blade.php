   <div class="card mt-3">
       <h5 class="card-header "> DATA PEMBAYARAN</h5>

       <div class="card-body">

           <table class="table table-bordered">
               <thead>
                   <tr class="table-primary">
                       <th>#</th>
                       <th>Tanggal</th>

                       <th>Metode</th>
                       <th>Jumlah</th>
                   </tr>
               <tbody>
                   @forelse ($tagihan->pembayaran as $item)
                       <tr>
                           <td><a href="{{ route('kwitansipembayaran.show', $item->id) }}" class="btn btn-primary "
                                   target="blank"><i class="fa-solid fa-print"></i></a>

                               {!! Form::open([
                                   'route' => ['pembayaran.destroy', $item->id],
                                   'method' => 'DELETE',
                                   'onsubmit' => 'return confirm ("Yakin ingin mengapus data ini?")',
                               ]) !!}

                               <button type="submit" class="btn btn-danger  mt-3"><i class="fa-solid fa-trash-can"></i>
                               </button>

                               {!! Form::close() !!}
                           </td>
                           <td>{{ $item->tanggal_bayar->format('d/m/Y') }}</td>
                           <td> {{ $item->metode_pembayaran }}</td>
                           <td>{{ $item->formatRupiah('jumlah_dibayar') }}</td>
                       </tr>
                   @empty
                       <tr>
                           <td colspan="5" class="text-center">Belum Melakukan Pembayaran</td>
                       </tr>
                   @endforelse

               </tbody>
               <tfoot>
                   <tr>
                       <td class="text-center" colspan="3">Total Pembayaran</td>
                       <td>{{ formatRupiah($tagihan->total_pembayaran) }}</td>

                   </tr>
               </tfoot>
               </thead>
           </table>

           <h5 class="text-danger mt-3 ">Status Pembayaran : {{ strtoupper($tagihan->getTagihanWali()) }}</h5>

       </div>

       <hr>


       <h5 class="card-header"> Form Pembayaran</h5>

       <div class="card-body">
           {!! Form::model($model, ['route' => 'pembayaran.store', 'method' => 'POST']) !!}
           {!! Form::hidden('tagihan_id', $tagihan->id, []) !!}
           <div class="form-group">
               <label for="tanggal_bayar">Tanggal Pembayaran</label>
               {!! Form::date('tanggal_bayar', $model->tanggal_bayar ?? \Carbon\Carbon::now(), [
                   'class' => 'form-control',
               ]) !!}
               <span class="text-danger">{{ $errors->first('tanggal_bayar') }}</span>
           </div>

           <div class="form-group mt-3">
               <label for="jumlah_dibayar">Jumlah Yang dibayarkan</label>
               {!! Form::text('jumlah_dibayar', formatRupiah($tagihan['total_tagihan']), [
                   'class' => 'form-control rupiah',
               ]) !!}
               <span class="text-danger">{{ $errors->first('jumlah_dibayar') }}</span>
           </div>
           {!! Form::submit('SIMPAN', [
               'class' => 'btn btn-primary mt-3',
           ]) !!}

           {!! Form::close() !!}
       </div>

   </div>
