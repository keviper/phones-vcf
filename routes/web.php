<?php

use Illuminate\Support\Facades\Route;
use App\Imports\PhonesImport;
use App\Exports\PhonesExport;
use App\Exports\VcfExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/verify', function (Request $request) {
    Excel::import(new PhonesImport, $request->file('xls'));
    return Excel::download(new PhonesExport, 'phones.xls');
})->name('verify');
Route::post('/verify-vcf', function (Request $request) {
    
    $archivos = $request->file('files');
    foreach ($archivos as $archivo) {
        $contenido = file_get_contents($archivo);
        $lineas = explode("\n", $contenido);
        $vCards = [];
        $vCard = [];
        foreach ($lineas as $linea) {
            if (substr($linea, 0, 1) == 'B') { // BEGIN:VCARD
            } elseif (substr($linea, 0, 1) == 'E') { // END:VCARD
            } else {
                $valor = explode(':', $linea);
                if (substr($linea, 0, 3) == 'TEL') { // Teléfono

                    $vCards[] = trim($valor[1]);
                }

            }
        }
    }
    $export = new VcfExport(
        array_chunk($vCards,10)
    );

    return Excel::download($export, 'phones.xlsx');
})->name('verify-vcf');
