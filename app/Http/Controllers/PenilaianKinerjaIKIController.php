<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenilaianIKI;

class PenilaianKinerjaIKIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['iki'] = PenilaianIKI::orderBy('id', 'desc')->paginate(5);
        return view('pejabat_penilai.penilaian.indikatorKinerjaIndividu.index', $data);
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
        $iki = new PenilaianIKI;
        $iki->nama = $request->nama;
        $iki->nip = $request->nip;
        $iki->iki = $request->iki;
        $iki->penilaian = $request->penilaian;
        $iki->save();

        return redirect()->route('iki.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PenilaianIKI $iki)
    {
        // return view('kkp.aktivitas.show', compact('aktivitas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PenilaianIKI $iki)
    {
        return view('pejabat_penilai.penilaian.indikatorKinerjaIndividu.edit', compact('iki'));
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
        $iki = PenilaianIKI::find($id);
        $iki->nama = $request->nama;
        $iki->nip = $request->nip;
        $iki->iki = $request->iki;
        $iki->penilaian = $request->penilaian;
        $iki->save();
        return redirect()->route('penilaian.iki.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenilaianIKI $iki)
    {
        // $aktivitas->delete();
        // return redirect()->route('kkp.aktivitas.index');
    }
}
