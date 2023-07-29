<?php

namespace App\Http\Controllers;

use App\Models\MPE;
use App\Models\Pembobotan;
use Illuminate\Http\Request;

class MPEController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mpes = Pembobotan::pluck('flag')->unique();
        return view('contents.mpe.index', compact('mpes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MPE $mPE)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MPE $mPE)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MPE $mPE)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MPE $mPE)
    {
        //
    }
}
