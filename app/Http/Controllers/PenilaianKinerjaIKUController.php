<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenilaianIKU;

class PenilaianKinerjaIKUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['iku'] = PenilaianIKU::orderBy('id', 'desc')->paginate(5);
        return view('pejabat_penilai.penilaian.indikatorKinerjaUtama.index', $data);
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
        $iku = new PenilaianIKU;
        $iku->nama = $request->nama;
        $iku->nip = $request->nip;
        $iku->iku = $request->iku;
        $iku->penilaian = $request->penilaian;
        $iku->save();

        return redirect()->route('iku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PenilaianIKU $iku)
    {
        // return view('kkp.aktivitas.show', compact('aktivitas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PenilaianIKU $iku)
    {
        return view('pejabat_penilai.penilaian.indikatorKinerjaUtama.edit', compact('iku'));
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
        $iku = PenilaianIKU::find($id);
        $iku->nama = $request->nama;
        $iku->nip = $request->nip;
        $iku->iku = $request->iku;
        $iku->penilaian_iku = $request->penilaian_iku;
        $iku->save();
        return redirect()->route('penilaian.iku.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenilaianIKU $iku)
    {
        // $aktivitas->delete();
        // return redirect()->route('kkp.aktivitas.index');
    }
}
