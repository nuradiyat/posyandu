<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IbuHamil extends Model
{
    //
    protected $fillable = [
        'nama_ibu',
        'nik',
        'alamat',
        'no_hp',
        'usia_kandungan',
        'tanggal_perkiraan_lahir',
    ];

    public function anak(): HasMany
    {
        return $this->hasMany(Anak::class);
    }
}
