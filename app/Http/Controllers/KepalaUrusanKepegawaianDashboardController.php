<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\SkpExport;
use Maatwebsite\Excel\Facades\Excel;

class KepalaUrusanKepegawaianDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['pegawai'] = User::join('skp', 'users.id', '=', 'skp.user_id')
        //     ->join('penilaian_aktivitas', 'skp', 'users.id', '=', 'penilaian_aktivitas.user_id')
        //     ->get();
        $data['pegawai'] = DB::table('users')
            ->join('skp', 'users.id', '=', 'skp.user_id')
            ->join('penilaian_aktivitas', 'users.id', '=', 'penilaian_aktivitas.user_id')
            ->join('penilaian_iki', 'users.id', '=', 'penilaian_iki.user_id')
            ->join('penilaian_ikp', 'users.id', '=', 'penilaian_ikp.user_id')
            ->join('penilaian_iku', 'users.id', '=', 'penilaian_iku.user_id')
            ->join('penilaian_perilaku', 'users.id', '=', 'penilaian_perilaku.user_id')
            ->join('penilaian_realisasi', 'users.id', '=', 'penilaian_realisasi.user_id')
            ->get();

        // $data['aktivitas'] = DB::table('penilaian_aktivitas')->get();
        // $data['iki'] = DB::table('penilaian_iki')->get();
        // $data['ikp'] = DB::table('penilaian_ikp')->get();
        // $data['iku'] = DB::table('penilaian_iku')->get();
        // $data['perilaku'] = DB::table('penilaian_perilaku')->get();
        // $data['realisasi'] = DB::table('penilaian_realisasi')->get();

        return view('kepala_urusan_kepegawaian.dashboard', $data);
    }

    public function export() {
        return Excel::download(new SkpExport, 'skp.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
