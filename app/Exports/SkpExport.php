<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class SkpExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('users')
            ->join('skp', 'users.id', '=', 'skp.user_id')
            ->join('penilaian_aktivitas', 'users.id', '=', 'penilaian_aktivitas.user_id')
            ->join('penilaian_iki', 'users.id', '=', 'penilaian_iki.user_id')
            ->join('penilaian_ikp', 'users.id', '=', 'penilaian_ikp.user_id')
            ->join('penilaian_iku', 'users.id', '=', 'penilaian_iku.user_id')
            ->join('penilaian_perilaku', 'users.id', '=', 'penilaian_perilaku.user_id')
            ->join('penilaian_realisasi', 'users.id', '=', 'penilaian_realisasi.user_id')
            ->get();
    }
}
