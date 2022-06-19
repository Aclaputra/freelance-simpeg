<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianIKP extends Model
{
    use HasFactory;

    protected $table = "penilaian_ikp";

    protected $fillable = [
        'nama',
        'nip',
        'jabatan',
    ];
}
