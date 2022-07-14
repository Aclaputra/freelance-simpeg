<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenilaianAktivitas;

class PenilaianKinerjaAktivitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['aktivitas'] = PenilaianAktivitas::orderBy('id', 'desc')->paginate(5);
        return view('pejabat_penilai.penilaian.aktivitas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('pejabat_penilai.penilaian.aktivitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
        ]);
        $aktivitas = new PenilaianAktivitas;
        $aktivitas->nama = $request->nama;
        $aktivitas->nip = $request->nip;
        $aktivitas->aktivitas = $request->aktivitas;
        $aktivitas->penilaian_aktivitas = $request->penilaian_aktivitas;
        $aktivitas->save();

        return redirect()->route('aktivitas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PenilaianAktivitas $aktivitas)
    {
        // return view('kkp.aktivitas.show', compact('aktivitas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PenilaianAktivitas $aktivita)
    {
        return view('pejabat_penilai.penilaian.aktivitas.edit', compact('aktivita'));
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
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
        ]);
        $aktivitas = PenilaianAktivitas::find($id);
        $aktivitas->nama = $request->nama;
        $aktivitas->nip = $request->nip;
        $aktivitas->aktivitas = $request->aktivitas;
        $aktivitas->penilaian_aktivitas = $request->penilaian_aktivitas;
        $aktivitas->save();
        return redirect()->route('penilaian.aktivitas.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenilaianAktivitas $aktivitas)
    {
        // $aktivitas->delete();
        // return redirect()->route('kkp.aktivitas.index');
    }
}
