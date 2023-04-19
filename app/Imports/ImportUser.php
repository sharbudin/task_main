<?php

namespace App\Imports;


use App\Models\Contact;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportUser implements ToModel
{

    public function model(array $row)
    {
        return new Contact([

            'Emp_ID' => $row[0],
            'name' => $row[1],
            'email' => $row[2],
            'mobile' => $row[3],
        ]);
    }
}
