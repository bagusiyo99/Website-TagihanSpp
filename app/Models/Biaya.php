<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Biaya extends Model
{
    use HasFactory;

    //dapet dari use App\Traits\HasFormatRupiah;
    use HasFormatRupiah;

    
    protected $append= ['nama_biaya_full', 'total_tagihan'];
    protected $guarded = [];

        public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


        //{{-- tutor 103 --}}
        protected function totalTagihan(): Attribute
    {
        return Attribute::make(
            get: fn ($valeu) =>$this->children()->sum('jumlah'),
        );
    }

    /**
     *{{-- tutor 103 --}}
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children(): HasMany
    {
        return $this->hasMany(Biaya::class, 'parent_id');
    }



        protected static function booted()
    {
        static::creating(function ($biaya) {
            $biaya->user_id= auth()->user()->id;
        });

        static::updating(function ($biaya) {
            $biaya->user_id= auth()->user()->id;
        });
    }


    //tutorial nomor 39
    protected function namaBiayaFull(): Attribute
    {
        return Attribute::make(
            get: fn ($valeu) => $this->nama . ' - ' .$this->formatRupiah('jumlah'),
        );
    }
}
