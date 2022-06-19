<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SasaranKerjaPegawai;
use App\Models\PenilaianAktivitas;
use App\Models\PenilaianIKU;
use App\Models\PenilaianRealisasi;
use App\Models\PenilaianPerilaku;
use App\Models\PenilaianIKI;
use App\Models\PenilaianIKP;
use Illuminate\Support\Facades\Auth;

class PegawaiDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SasaranKerjaPegawai $dashboard)
    {
        $data['skp'] = User::join('skp', 'users.id', '=', 'skp.user_id')
            ->where('users.id', Auth::user()->id)
            ->get();

        return view('dashboard', $data, compact('dashboard'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'jabatan' => 'required'
        ]);
        $skp = new SasaranKerjaPegawai;
        $skp->nama = $request->nama;
        $skp->nip = $request->nip;
        $skp->jabatan = $request->jabatan;
        $skp->user_id = $request->user_id;

        // buat 6 penilaian

        $aktivitas = new PenilaianAktivitas;
        $aktivitas->nama = $request->nama;
        $aktivitas->nip = $request->nip;
        // $aktivitas->jabatan = $request->jabatan;
        $aktivitas->user_id = $request->user_id;

        $iku = new PenilaianIKU;
        $iku->nama = $request->nama;
        $iku->nip = $request->nip;
        // $iku->jabatan = $request->jabatan;
        $iku->user_id = $request->user_id;
        
        $realisasi = new PenilaianRealisasi;
        $realisasi->nama = $request->nama;
        $realisasi->nip = $request->nip;
        // $realisasi->jabatan = $request->jabatan;
        $realisasi->user_id = $request->user_id;

        $perilaku = new PenilaianPerilaku;
        $perilaku->nama = $request->nama;
        $perilaku->nip = $request->nip;
        // $perilaku->jabatan = $request->jabatan;
        $perilaku->user_id = $request->user_id;

        $iki = new PenilaianIKI;
        $iki->nama = $request->nama;
        $iki->nip = $request->nip;
        // $iki->jabatan = $request->jabatan;
        $iki->user_id = $request->user_id;

        $ikp = new PenilaianIKP;
        $ikp->nama = $request->nama;
        $ikp->nip = $request->nip;
        // $ikp->jabatan = $request->jabatan;
        $ikp->user_id = $request->user_id;

        $aktivitas->save();
        $skp->save();
        $iku->save();
        $realisasi->save();
        $perilaku->save();
        $iki->save();
        $ikp->save();

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['skp'] = User::join('skp', 'users.id', '=', 'skp.user_id')
        ->where('users.id', Auth::user()->id)
        ->get();

        return view('skp.show', $data);
        // return view('skp.show', compact('skp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SasaranKerjaPegawai $dashboard)
    {
        return view('edit', compact('dashboard'));
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
            'jabatan' => 'required'
        ]);
        $skp = SasaranKerjaPegawai::find($id);
        $skp->nama = $request->nama;
        $skp->nip = $request->nip;
        $skp->jabatan = $request->jabatan;
        // $skp->user_id = $request->user_id;
        $skp->save();

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skp->delete();
        return redirect()->route('dashboard');
    }
}
