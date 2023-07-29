<?php

namespace App\Http\Controllers;

use App\Models\Village;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreVillageRequest;
use App\Http\Requests\UpdateVillageRequest;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contents.desa.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contents.desa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVillageRequest $request)
    {
        $request->validate([
            'village_name' => ['required'],
            'pasar' => ['required'],
            'jalan' => ['required'],
            'sekolah' => ['required'],
            'bank' => ['required'],
            'koperasi' => ['required'],
            'komunitas' => ['required'],
            'umkm' => ['required'],
            'flag' => ['required'],
        ]);

        Village::create([
            'village_name' => $request->village_name,
            'pasar' => $request->pasar,
            'jalan' => $request->jalan,
            'sekolah' => $request->sekolah,
            'bank' => $request->bank,
            'koperasi' => $request->koperasi,
            'komunitas' => $request->komunitas,
            'umkm' => $request->umkm,
            'flag' => $request->flag,
        ]);
        Alert::success('Desa Smart Economy', 'Data Desa berhasil dimasukkan !');
        return redirect()->route('village.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Village $village)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Village $village)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVillageRequest $request, Village $village)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Village $village)
    {
        //
    }
}
