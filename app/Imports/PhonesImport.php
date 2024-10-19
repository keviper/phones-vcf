<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PhonesImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        //
        $phones=[];
        foreach ($rows as $row) 
        {
            for ($i=0; $i < count($row); $i++) { 
                # code...
                if(!in_array($row[$i], $phones)){
                    $phones[]=$row[$i];
                }
            }
        }
        \Session::put('phones',$phones);
    }
}
