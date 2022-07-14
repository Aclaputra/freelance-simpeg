<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianIKI extends Model
{
    use HasFactory;

    protected $table = "penilaian_iki";

    protected $fillable = [
        'nama',
        'nip',
        'iki',
        'penilaian_iki'
    ];
}
