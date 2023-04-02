<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pembayaran extends Model
{
    use HasFactory;

    //dapet dari use App\Traits\HasFormatRupiah;
    use HasFormatRupiah;

    
    protected $guarded = [];
    protected $dates = ['tanggal_bayar'];

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
