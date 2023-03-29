<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;


class BankSekolah extends Model
{
    use HasFactory;
     use SearchableTrait;
    protected $guarded = [];

//pencarian vidio part 21 
    protected $searchable = [
        'columns' => [
            'nama_bank' => 10,
            'nama_rekening' => 10,
        ],

    ];
}
