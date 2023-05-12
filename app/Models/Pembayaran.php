<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory;

    //dapet dari use App\Traits\HasFormatRupiah;
    use HasFormatRupiah;

    
    protected $guarded = [];
    protected $dates = ['tanggal_bayar', 'tanggal_konfirmasi'];
    // protected $with = ['user', 'tagihan'];
    protected $append= ['status_konfirmasi', 'status_style'];



    public function getStatusStyleAttribute()
    {
        if ($this->status_konfirmasi == 'null') {
            return 'success';
        }

            return 'warning';


    }

        //tutor 94
        protected function statusKonfirmasi(): Attribute
    {
        return Attribute::make(
            get: fn ($valeu) => ($this->tanggal_konfirmasi == null) ? 'Belum Di Konfirmasi ' : 'Sudah Di Konfirmasi '
        );
    }

        public function konfirmasi()
    {
        if ($this->status_konfirmasi =='Belum Di Konfirmasi ') {
            return 'Belum Di Konfirmasi ';
        }

        if ($this->status_konfirmasi =='Sudah Di Konfirmasi') {
            return 'Sudah Di Konfirmasi';
        }
        return $this->status;
    }

        public function tagihan(): BelongsTo
    {
        return $this->belongsTo(Tagihan::class);
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


            public function wali(): BelongsTo
    {
        return $this->belongsTo(User::class, 'wali_id');
    }

            public function bankSekolah(): BelongsTo
    {
        return $this->belongsTo(BankSekolah::class);
    }

            public function waliBank(): BelongsTo
    {
        return $this->belongsTo(WaliBank::class);
    }
}
