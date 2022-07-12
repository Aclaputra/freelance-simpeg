<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianIKU extends Model
{
    use HasFactory;

    protected $table = "penilaian_iku";

    protected $fillable = [
        'nama',
        'nip',
        'iku',
        'penilaian'
    ];
}
