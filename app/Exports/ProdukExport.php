<?php

namespace App\Exports;

use App\Products;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProdukExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Products::select("products.name")
        ->get();
    }
}
