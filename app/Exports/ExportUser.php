<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportUser implements FromCollection
{

    public function collection()
    {
        return Contact::select('Emp_ID','name','email','mobile')->get();
    }
}
