<?php

namespace App\Models;

use App\Models\Biaya;
use Spatie\ModelStatus\HasStatuses;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    use SearchableTrait;
    protected $guarded = [];
    use HasStatuses;

//pencarian vidio part 21 
    protected $searchable = [
        'columns' => [
            'nama' => 10,
            'nisn' => 10,
            'wali_id' => 10,
        ],

    ];

    public function biaya(): BelongsTo
    {
        return $this->BelongsTo(Biaya::class);
    }

    
    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    /**
     * Get the user that owns the Siswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wali(): BelongsTo
    {
        return $this->belongsTo(User::class, 'wali_id')->withDefault([
            'name' => 'Belum ada Wali murid'
        ]);
    }

    
}
