<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenilaianIKP;

class PenilaianKinerjaIKPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['ikp'] = PenilaianIKP::orderBy('id', 'desc')->paginate(5);
        return view('pejabat_penilai.penilaian.intruksiKhususPimpinan.index', $data);
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
        $ikp = new PenilaianIKP;
        $ikp->nama = $request->nama;
        $ikp->nip = $request->nip;
        $ikp->ikp = $request->ikp;
        $ikp->penilaian = $request->penilaian;
        $ikp->save();

        return redirect()->route('ikp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PenilaianIKP $ikp)
    {
        // return view('kkp.aktivitas.show', compact('aktivitas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PenilaianIKP $ikp)
    {
        return view('pejabat_penilai.penilaian.intruksiKhususPimpinan.edit', compact('ikp'));
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
        $ikp = PenilaianIKP::find($id);
        $ikp->nama = $request->nama;
        $ikp->nip = $request->nip;
        $ikp->ikp = $request->ikp;
        $ikp->penilaian = $request->penilaian;
        $ikp->save();
        return redirect()->route('penilaian.ikp.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenilaianIKP $ikp)
    {
        // $aktivitas->delete();
        // return redirect()->route('kkp.aktivitas.index');
    }
}
