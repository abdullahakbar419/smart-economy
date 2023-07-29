<?php

namespace App\Http\Controllers;


use App\Models\AlgoritmaC50;
use App\Models\Classification;
use App\Models\Pembobotan;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class RController extends Controller
{
    public function runRScript(Request $request)
    {
        $value = $request->input('selectedOption');
        $valueArr = explode(',', $value);
        $fileName = $valueArr[0];
        $flag = $valueArr[1];
        $pathToScript = app_path('scripts/klasifikasi.R');
        $dataFilePath = storage_path('app/public/classification/' . $fileName);


        // Menjalankan skrip R dan mendapatkan output
        $result = shell_exec("Rscript {$pathToScript} {$dataFilePath}");
        $output = json_decode($result, true);

        // Mendapatkan hasil evaluasi dari output
        $accuracy = $output["evaluation"]["accuracy"];
        $precision = $output["evaluation"]["precision"];
        $recall = $output["evaluation"]["recall"];
        $F1 = $output["evaluation"]["F1"];
        $AUC = $output["evaluation"]["AUC"];

        // Mendapatkan nama file gambar scatterplot
        $scatterplotImage = $output["scatterplotImage"];

        $domisiliArr = $output['class_modus'];

        foreach ($domisiliArr as $domisili) {
            // $domisili = json_decode($domisili);

            Pembobotan::updateOrInsert([
                'village_name' => $domisili['Domisili'],
                'flag' => $flag,
            ], [
                'village_name' => $domisili['Domisili'],
                'media_sosial' => $domisili['Modus'],
                'online_shop' => $domisili['Modus'],
                'flag' => $flag,
            ]);
        }

        AlgoritmaC50::updateOrInsert([
            'flag' => $flag
        ], [
            'accuracy' => join(",", $accuracy),
            'precision' => join(",", $precision),
            'recall' => join(",", $recall),
            'f1' =>  join(",", $F1),
            'auc' => join(",", $AUC),
            'plot' => join(",", $scatterplotImage),
            'flag' => $flag,
        ]);


        return $result;
    }
}
