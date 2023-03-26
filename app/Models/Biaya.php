<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Biaya extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    protected $append= ['nama_biaya_full'];
    protected $guarded = [];

        public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
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
 

     protected function namaBiayaFull(): Attribute
    {
        return Attribute::make(
            get: fn ($valeu) => $this->nama . ' - ' .$this->jumlah,

        );
    }
}
