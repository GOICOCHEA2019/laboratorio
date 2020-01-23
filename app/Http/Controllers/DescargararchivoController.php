<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DescargararchivoController extends Controller
{
    public function descargararchivos(Request $request){
        $rutaArchivo = storage_path().'/app/'.$request->input("rutaarchivo");

        if(file_exists($rutaArchivo)){
            return Storage::download($request->input("rutaarchivo"));
        }
        else{
            exit("no se ha encontrado el archivo");
        }
    }
}
