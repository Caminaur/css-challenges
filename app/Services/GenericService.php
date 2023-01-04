<?php

namespace App\Services;

use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;


class GenericService
{
    public function generateCSVReport(int $userId)
    {
        // This should use the information of the user id
        // to retrieve relevant information
        // and to create a simple csv file 
        return Excel::download(new UserExport, 'invoices.xlsx');
        // return back();
    }
}
