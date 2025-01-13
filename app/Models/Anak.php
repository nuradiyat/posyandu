<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Anak extends Model
{
    //
    protected $fillable = [
        'ibu_hamil_id',
        'nama_anak',
        'tanggal_lahir',
        'jenis_kelamin',
    ];

    public function ibuHamil(): BelongsTo
    {
        return $this->belongsTo(IbuHamil::class);
    }

    public function imunisasi(): HasMany
    {
        return $this->hasMany(Imunisasi::class);
    }

    public function pemeriksaan(): HasMany
    {
        return $this->hasMany(Pemeriksaan::class);
    }
    
}
