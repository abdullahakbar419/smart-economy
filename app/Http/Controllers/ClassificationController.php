<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\Classification;
use App\Models\Pakar;
use App\Models\FileUpload;
use App\Models\Pembobotan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use RealRashid\SweetAlert\Facades\Alert;

class ClassificationController extends Controller
{

    public function maps()
    {
        return view('contents.maps');
    }

    public function createDesa()
    {
        return  view('contents.desa.create');
    }

    public function storeDesa()
    {
        return 0;
    }

    public function createC50()
    {
        $files = FileUpload::all();
        return view('contents.c50.create', compact('files'));
    }

    public function storeC50(Request $request)
    {
        $request->validate([
            'file_upload' => ['required', 'mimes:csv,txt']
        ]);
        $file = $request->file('file_upload');
        $uuid_file = uniqid() . "." . $file->getClientOriginalExtension();
        $path_file = "public/classification";

        $file->storeAs($path_file, $uuid_file);
        FileUpload::create([
            'uuid_file' => $uuid_file,
            'name_file' => $file->getClientOriginalName(),
            'path_file' => $path_file . '/' . $uuid_file,
            'flag' => $request->flag
        ]);
        return redirect()->route('classification.c50.create');
    }

    public function mpe(Request $request)
    {
        $bobot = Bobot::where('flag', $request->flag)->first();
        $villages = Pembobotan::where('flag', $request->flag)->get();

        foreach ($villages as $key => $value) {
            $village_name = $value->village_name;
            $pasar = pow($value->pasar, $bobot->pasar);
            $jalan = pow($value->jalan, $bobot->jalan);
            $sekolah = pow($value->sekolah, $bobot->sekolah);
            $bank = pow($value->bank, $bobot->bank);
            $koperasi = pow($value->koperasi, $bobot->koperasi);
            $komunitas = pow($value->komunitas, $bobot->komunitas);
            $umkm = pow($value->umkm, $bobot->umkm);
            $media_sosial = pow($value->media_sosial, $bobot->media_sosial);
            $online_shop = pow($value->online_shop, $bobot->online_shop);

            $total_value = $pasar + $jalan + $sekolah + $bank + $koperasi + $komunitas + $umkm + $media_sosial + $online_shop;

            Classification::updateOrInsert([
                'village_name' => $value->village_name,
                'flag' => $value->flag
            ], [
                'village_name' => $village_name,
                'pasar' => $pasar,
                'jalan' => $jalan,
                'sekolah' => $sekolah,
                'bank' => $bank,
                'koperasi' => $koperasi,
                'komunitas' => $komunitas,
                'umkm' => $umkm,
                'media_sosial' => $media_sosial,
                'online_shop' => $online_shop,
                'total_value' => $total_value,
                'flag' => $value->flag
            ]);
        }

        $min_total_value = Classification::where('flag', $request->flag)
            ->orderBy('total_value')
            ->first();

        $max_total_value = Classification::where('flag', $request->flag)
            ->orderByDesc('total_value')
            ->first();

        $jangkauan = $max_total_value->total_value - $min_total_value->total_value;
        $interval = $jangkauan / 3;

        $cukup_berpotensi = $min_total_value->total_value + $interval;
        $sangat_berpotensi = $min_total_value->total_value + $interval * 2;

        $classifications = Classification::where('flag', $request->flag)->get();

        foreach ($classifications as $classification) {

            if ($classification->total_value < $cukup_berpotensi) {
                $classification->class = 'Cukup Berpotensi';
                $classification->save();
            } else if ($classification->total_value > $sangat_berpotensi) {
                $classification->class  = 'Sangat Berpotensi';
                $classification->save();
            } else {
                $classification->class = 'Berpotensi';
                $classification->save();
            }
        }

        $filePath = public_path('geojson/Adm_Kemang.geojson');
        // Baca file GeoJSON
        $fileContents = file_get_contents($filePath);
        $geoJson = json_decode($fileContents, true);

        // Ubah isi file GeoJSON sesuai dengan data dari database
        foreach ($classifications as $data) {
            // Cari fitur GeoJSON berdasarkan kondisi tertentu, misalnya menggunakan NAMOBJ sebagai identifikasi
            foreach ($geoJson['features'] as &$feature) {
                if ($feature['properties']['NAMOBJ'] == $data->village_name) {
                    // Ubah nilai properti yang diinginkan
                    if ($data->class == 'Cukup Berpotensi') {
                        $feature['properties']['Warna'] = '#660303';
                    } else if ($data->class == 'Berpotensi') {
                        $feature['properties']['Warna'] = '#6e6005';
                    } else {
                        $feature['properties']['Warna'] = '#045908';
                    }
                    break;
                }
            }
        }

        // Simpan kembali isi file GeoJSON yang telah diubah
        file_put_contents($filePath, json_encode($geoJson));



        return redirect()->route('mpe.index');
    }
}
