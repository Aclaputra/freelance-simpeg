<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianPerilaku extends Model
{
    use HasFactory;

    protected $table = "penilaian_perilaku";

    protected $fillable = [
        'nama',
        'nip',
        'perilaku',
        'penilaian_perilaku'
    ];
}
