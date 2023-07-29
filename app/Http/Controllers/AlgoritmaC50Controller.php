<?php

namespace App\Http\Controllers;

use App\Models\Pakar;
use App\Models\FileUpload;
use App\Models\AlgoritmaC50;
use Illuminate\Http\Request;

class AlgoritmaC50Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $files = FileUpload::all();
        $c50s = AlgoritmaC50::all();
        $algoritmaC50 = session('algoritmaC50');
        if ($algoritmaC50 != NULL) {
            $accuracy = str_replace(',', ', ', $algoritmaC50->accuracy);
            $precision = str_replace(',', ', ', $algoritmaC50->precision);
            $recall = str_replace(',', ', ', $algoritmaC50->recall);
            $f1 = str_replace(',', ', ', $algoritmaC50->f1);
            $auc = str_replace(',', ', ', $algoritmaC50->auc);
        } else {
            $accuracy = NULL;
            $precision = NULL;
            $recall = NULL;
            $f1 = NULL;
            $auc = NULL;
        }
        return view(
            'contents.c50.index',
            compact(
                'files',
                'c50s',
                'algoritmaC50',
                'accuracy',
                'precision',
                'recall',
                'f1',
                'auc'
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contents.c50.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     */
    public function show(AlgoritmaC50 $algoritmaC50)
    {
        return redirect()->route('algoritmaC50.index')->with('algoritmaC50', $algoritmaC50);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AlgoritmaC50 $algoritmaC50)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AlgoritmaC50 $algoritmaC50)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AlgoritmaC50 $algoritmaC50)
    {
        //
    }
}
