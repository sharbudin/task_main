<?php

namespace App\Exports;

use App\Models\product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportUser implements FromCollection
{

    public function collection()
    {
        return product::select('id','product_img', 'product_name', 'product_cost', 'product_desc', 'product_stock', 'product_is_active')->get();
    }
}
