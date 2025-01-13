<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JadwalPosyandu extends Model
{
    //
    protected $fillable = [
        'tanggal_kegiatan',
        'lokasi',
        'keterangan',
    ];

    public function pemeriksaan(): HasMany
    {
        return $this->hasMany(Pemeriksaan::class);
    }
}
