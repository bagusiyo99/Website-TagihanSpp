<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tagihan extends Model
{
    use HasFactory;

    //dapet dari use App\Traits\HasFormatRupiah;
    use HasFormatRupiah;

    
    protected $guarded = [];
    protected $dates = ['tanggal_tagihan'];
    protected $with = ['user','siswa', 'tagihanDetails'];

    

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
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


   
        protected static function booted()
    {
        static::creating(function ($tagihan) {
            $tagihan->user_id= auth()->user()->id;
        });

        static::updating(function ($tagihan) {
            $tagihan->user_id= auth()->user()->id;
        });
    }
    

}
