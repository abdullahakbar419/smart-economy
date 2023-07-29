<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\Pakar;
use App\Models\Pembobotan;
use App\Models\Village;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PembobotanController extends Controller
{
    public function lickert($pakars)
    {

        $pasar = collect([]);
        $jalan = collect([]);
        $sekolah = collect([]);
        $bank = collect([]);
        $koperasi = collect([]);
        $komunitas = collect([]);
        $umkm = collect([]);
        $media_sosial = collect([]);
        $online_shop = collect([]);
        $flag = collect([]);
        foreach ($pakars as $key => $value) {

            $pasar->push($value->pasar);
            $jalan->push($value->jalan);
            $sekolah->push($value->sekolah);
            $bank->push($value->bank);
            $koperasi->push($value->koperasi);
            $komunitas->push($value->komunitas);
            $umkm->push($value->umkm);
            $media_sosial->push($value->media_sosial);
            $online_shop->push($value->online_shop);
            $flag->push($value->flag);
        }

        $totalVariable = $pasar->sum() + $jalan->sum() + $sekolah->sum() + $bank->sum() + $koperasi->sum() + $komunitas->sum() + $umkm->sum() + $media_sosial->sum() + $online_shop->sum();
        $bobotPasar = $pasar->sum() / $totalVariable;
        $bobotJalan = $jalan->sum() / $totalVariable;
        $bobotSekolah = $sekolah->sum() / $totalVariable;
        $bobotBank = $bank->sum() / $totalVariable;
        $bobotKoperasi = $koperasi->sum() / $totalVariable;
        $bobotKomunitas = $komunitas->sum() / $totalVariable;
        $bobotUmkm = $umkm->sum() / $totalVariable;
        $bobotMediaSosial = $media_sosial->sum() / $totalVariable;
        $bobotOnlineShop = $online_shop->sum() / $totalVariable;

        $bobot = Bobot::updateOrInsert([
            'flag' => $flag->unique()->implode('')
        ], [
            'pasar' => $bobotPasar,
            'jalan' => $bobotJalan,
            'sekolah' =>   $bobotSekolah,
            'bank' => $bobotBank,
            'koperasi' => $bobotKoperasi,
            'komunitas' => $bobotKomunitas,
            'umkm' =>  $bobotUmkm,
            'media_sosial' => $bobotMediaSosial,
            'online_shop' => $bobotOnlineShop,
            'flag' => $flag->unique()->implode(''),
        ]);

        return $bobot;
    }

    public function pembobotanPakar(Request $request)
    {
        $pakars = Pakar::where('flag', $request->flag)->get();
        $bobotId =  $this->lickert($pakars);
        $bobot = Bobot::findOrFail($bobotId->firstOrCreate()->id);
        return redirect()->route('pakar.index', compact('bobot'));
    }

    public function pembobotanDesa(Request $request)
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


        Pembobotan::updateOrInsert([
            'village_name' => $request->village_name,
            'flag' => $request->flag
        ], [
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
}
