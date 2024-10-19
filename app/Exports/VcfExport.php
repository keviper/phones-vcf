<?php

namespace App\Exports;

use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;

class VcfExport implements FromArray
{
    protected $vCards;

    public function __construct(array $vCards)
    {
        $this->vCards = $vCards;
    }

    public function array(): array
    {
        return $this->vCards;
    }
}