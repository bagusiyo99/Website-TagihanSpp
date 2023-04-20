<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tagihan extends Model
{
    use HasFactory;

    //dapet dari use App\Traits\HasFormatRupiah;
    use HasFormatRupiah;
    use SearchableTrait;

    protected $searchable = [
        'columns' => [
            'siswas.nama' => 10,
            'siswas.nisn' => 10,
        ],
        'joins' => [
            'siswas' => ['siswas.id', 'tagihans.siswa_id'],
        ],
    ];
    protected $guarded = [];
    protected $dates = ['tanggal_tagihan', 'tanggal_jatuh_tempo','tanggal_lunas'];
    protected $with = ['user','siswa', 'tagihanDetails'];
    protected $append= [ 'total_tagihan', 'total_pembayaran'];


            //{{-- tutor 154 --}}
        protected function totalPembayaran(): Attribute
    {
        return Attribute::make(
            get: fn ($valeu) =>$this->pembayaran()->sum('jumlah_dibayar'),
        );
    }

        //{{-- tutor 103 --}}
        protected function totalTagihan(): Attribute
    {
        return Attribute::make(
            get: fn ($valeu) =>$this->tagihanDetails()->sum('jumlah_biaya'),
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class)->withDefault();
    }

    /**
     * Get all of the comments for the Tagihan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tagihanDetails(): HasMany
    {
        return $this->hasMany(TagihanDetail::class);
    }


       public function pembayaran(): HasMany
    {
        return $this->hasMany(pembayaran::class);
    }

        public function getTagihanWali()
    {
        if ($this->status =='baru') {
            return 'Belum Lunas';
        }

        if ($this->status =='lunas') {
            return 'Sudah Dibayar';
        }
        return $this->status;
    }



    public function scopeWaliSiswa($q)
    {
        return $q->whereIn('siswa_id', Auth::user()->getAllSiswaId());
    }
   
        protected static function booted()
    {
        static::creating(function ($tagihan) {
            $tagihan->user_id= auth()->user()->id;
        });

        static::updating(function ($tagihan) {
            $tagihan->user_id= auth()->user()->id;
        });
    }
    

    // tutor 154 
    public function updateStatus ()
    {
        if ($this->total_pembayaran >= $this->total_tagihan) {
            $tanggalBayar = $this->pembayaran()
            ->orderBy('tanggal_bayar', 'desc')
            ->first()
            ->tanggal_bayar;
            $this->update([
                'status' => 'lunas',
                'tanggal_lunas' => $tanggalBayar,
            ]);
        }

        if ($this->total_pembayaran > 0 && $this->total_pembayaran < $this->total_tagihan) {
            $this->update(['status' => 'angsur', 'tanggal_lunas' => null]);
        }


        if ($this->total_pembayaran <= 0) {
            $this->update(['status' => 'baru', 'tanggal_lunas' => null]);
        }

    }

}
