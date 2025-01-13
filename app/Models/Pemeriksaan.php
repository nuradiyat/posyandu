<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pemeriksaan extends Model
{
    //
    protected $fillable = [
        'anak_id',
        'jadwal_posyandu_id',
        'berat_badan',
        'tinggi_badan',
        'catatan_medis',
    ];

    public function anak(): BelongsTo
    {
        return $this->belongsTo(Anak::class);
    }

    public function jadwalPosyandu(): BelongsTo
    {
        return $this->belongsTo(JadwalPosyandu::class);
    }
}
