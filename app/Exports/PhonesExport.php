<?php

namespace App\Exports;

use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;

class PhonesExport implements FromArray
{
    public function array(): array
    {
        return array_chunk(\Session::get('phones'),10);
    }
}
