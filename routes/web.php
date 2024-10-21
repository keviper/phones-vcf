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
                    $telefono = str_replace(['-', ' ', '+'], '', trim($valor[1]));
                    if (
                        str_starts_with($telefono, '584') || 
                        str_starts_with($telefono, '5804') || 
                        str_starts_with($telefono, '041') || 
                        str_starts_with($telefono, '042') || 
                        str_starts_with($telefono, '412') || 
                        str_starts_with($telefono, '414') || 
                        str_starts_with($telefono, '424') ||
                        str_starts_with($telefono, '416') ||
                        str_starts_with($telefono, '426')
                        ) {
                            if (str_starts_with($telefono, '041') || str_starts_with($telefono, '042')) {
                                # code...
                                if(str_starts_with($telefono, '0412'))
                                    $telefono = str_replace('0412', '412', trim($telefono));

                                if(str_starts_with($telefono, '0414'))
                                    $telefono = str_replace('0414', '414', trim($telefono));

                                if(str_starts_with($telefono, '0424'))
                                    $telefono = str_replace('0424', '414', trim($telefono));

                                if(str_starts_with($telefono, '0416'))
                                    $telefono = str_replace('0416', '416', trim($telefono));

                                if(str_starts_with($telefono, '0426'))
                                    $telefono = str_replace('0426', '426', trim($telefono));

                            }
                            if (str_starts_with($telefono, '58') === false) {
                                $telefono = '58' . $telefono;
                            }
                        // $telefono = preg_replace('/^([58])([0-9]{3})([0-9]{3})([0-9]{4})$/', '$1$2$3$4', $telefono);
                        $telefono = preg_replace('/[^0-9]/', '', $telefono);
                        if (strlen($telefono)==12)
                            $vCards[] = trim($telefono);
                    }
                }

            }
        }
    }
    $export = new VcfExport(
        array_chunk($vCards,10)
    );

    return Excel::download($export, 'phones.xlsx');
})->name('verify-vcf');
