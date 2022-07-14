<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenilaianRealisasi;

class PenilaianKinerjaRealisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['realisasi'] = PenilaianRealisasi::orderBy('id', 'desc')->paginate(5);
        return view('pejabat_penilai.penilaian.realisasiAnggaran.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('pejabat_penilai.penilaian.realisasi.create');
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
        $realisasi = new PenilaianRealisasi;
        $realisasi->nama = $request->nama;
        $realisasi->nip = $request->nip;
        $realisasi->realisasi = $request->realisasi;
        $realisasi->penilaian = $request->penilaian;
        $realisasi->save();

        return redirect()->route('realisasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PenilaianRealisasi $realisasi)
    {
        // return view('kkp.realisasi.show', compact('realisasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PenilaianRealisasi $realisasi)
    {
        return view('pejabat_penilai.penilaian.realisasiAnggaran.edit', compact('realisasi'));
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
        $realisasi = PenilaianRealisasi::find($id);
        $realisasi->nama = $request->nama;
        $realisasi->nip = $request->nip;
        $realisasi->realisasi_anggaran = $request->realisasi_anggaran;
        $realisasi->penilaian_realisasi = $request->penilaian_realisasi;
        $realisasi->save();
        return redirect()->route('penilaian.realisasi.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenilaianRealisasi $realisasi)
    {
        // $realisasi->delete();
        // return redirect()->route('kkp.realisasi.index');
    }
}
