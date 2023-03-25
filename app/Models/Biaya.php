<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Biaya extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    
    protected $guarded = [];

        public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    ///ini blm dipake
    //     protected static function booted()
    // {
    //     static::creating(function ($biaya) {
    //         $biaya->user_id= auth()->user()->id;
    //     });

    //     static::updating(function ($biaya) {
    //         $biaya->user_id= auth()->user()->id;
    //     });
    // }

}
