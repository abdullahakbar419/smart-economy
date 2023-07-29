<?php

namespace App\Http\Controllers;

use App\Models\Pakar;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PakarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pakars = Pakar::pluck('flag')->unique();
        return view('contents.pakar.index', compact('pakars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contents.pakar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pakar_name' => ['required'],
            'pasar' => ['required'],
            'jalan' => ['required'],
            'sekolah' => ['required'],
            'bank' => ['required'],
            'koperasi' => ['required'],
            'komunitas' => ['required'],
            'umkm' => ['required'],
            'media_sosial' => ['required'],
            'online_shop' => ['required'],
            'flag' => ['required'],
        ]);

        Pakar::create([
            'pakar_name' => $request->pakar_name,
            'pasar' => $request->pasar,
            'jalan' => $request->jalan,
            'sekolah' => $request->sekolah,
            'bank' => $request->bank,
            'koperasi' => $request->koperasi,
            'komunitas' => $request->komunitas,
            'umkm' => $request->umkm,
            'media_sosial' => $request->media_sosial,
            'online_shop' => $request->online_shop,
            'flag' => $request->flag,
        ]);
        Alert::success('Pakar Smart Economy', 'Data Pakar berhasil dimasukkan !');
        return redirect()->route('classification.pakar.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pakar $pakar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pakar $pakar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pakar $pakar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pakar $pakar)
    {
        //
    }
}
