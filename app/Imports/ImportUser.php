<?php

namespace App\Imports;


use App\Models\product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportUser implements ToModel
{

    public function model(array $row)
    {

        $count = NULL;

        $count = product::where('id',$row[0])->first();

        if(isset($count)) {
            if(!isset($row[6])) {
                $row[6] = 0;
            }

            product::where('id', $row[0])
                    ->update([
                        'product_img' => $row[1],
                        'product_name' => $row[2],
                        'product_cost' => $row[3],
                        'product_desc' => $row[4],
                        'product_stock' => $row[5],
                        'product_is_active' => $row[6],
                    ]);
            return;
        }
        else {
            if(!isset($row[6])) {
                $row[6] = 0;
            }

        return new product([

            'product_img' => $row[1],
            'product_name' => $row[2],
            'product_cost' => $row[3],
            'product_desc' => $row[4],
            'product_stock' => $row[5],
            'product_is_active' => $row[6],
        ]);
    }
    }
}
