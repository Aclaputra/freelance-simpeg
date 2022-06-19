<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenilaianPerilaku;

class PenilaianKinerjaPerilakuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['perilaku'] = PenilaianPerilaku::orderBy('id', 'desc')->paginate(5);
        return view('pejabat_penilai.penilaian.perilaku.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('pejabat_penilai.penilaian.perilaku.create');
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
        $perilaku = new PenilaianPerilaku;
        $perilaku->nama = $request->nama;
        $perilaku->nip = $request->nip;
        $perilaku->perilaku = $request->perilaku;
        $perilaku->penilaian = $request->penilaian;
        $perilaku->save();

        return redirect()->route('perilaku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PenilaianPerilaku $perilaku)
    {
        // return view('kkp.perilaku.show', compact('perilaku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PenilaianPerilaku $perilaku)
    {
        return view('pejabat_penilai.penilaian.perilaku.edit', compact('perilaku'));
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
        $perilaku = PenilaianPerilaku::find($id);
        $perilaku->nama = $request->nama;
        $perilaku->nip = $request->nip;
        $perilaku->perilaku = $request->perilaku;
        $perilaku->penilaian = $request->penilaian;
        $perilaku->save();
        return redirect()->route('penilaian.perilaku.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenilaianPerilaku $perilaku)
    {
        // $perilaku->delete();
        // return redirect()->route('kkp.perilaku.index');
    }
}
