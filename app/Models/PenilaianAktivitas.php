<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianAktivitas extends Model
{
    use HasFactory;

    protected $table = "penilaian_aktivitas";

    protected $fillable = [
        'nama',
        'nip',
        'jabatan',
    ];
}
