<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class WaliBank extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $append= ['nama_biaya_full'];

    //tutorial nomor 83
     protected function namaBankFull(): Attribute
    {
        //BANK BRI - AN . BAGUS (10000-1)
        return Attribute::make(
            get: fn ($valeu) => $this->nama_bank. ' - ' .$this->nama_rekening. '('.$this->nomor_rekening.')',
        );
    }




}
