<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianRealisasi extends Model
{
    use HasFactory;

    protected $table = "penilaian_realisasi";

    protected $fillable = [
        'nama',
        'nip',
        'jabatan',
    ];
}
