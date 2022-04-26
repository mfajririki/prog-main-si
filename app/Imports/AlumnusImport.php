<?php

namespace App\Imports;

use App\Models\Alumnus;
use Maatwebsite\Excel\Concerns\ToModel;

class AlumnusImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Alumnus([
            //
        ]);
    }
}
