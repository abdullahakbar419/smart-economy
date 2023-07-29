<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $umkmData = Umkm::all(); // Ganti dengan model dan kolom yang sesuai untuk data UMKM

        return response()->json($umkmData);
    }
}
