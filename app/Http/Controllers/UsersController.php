<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller 
{
    public function export() 
    {
        $dataArr = [

            [1,2,3,4],
            [5,6,7,8]

        ];

        return Excel::download(new UsersExport($dataArr), 'testArr.xlsx');
    }
}