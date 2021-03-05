<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
class UsersExport implements FromArray
{
    protected $dataArr;

    public function __construct($arr)
    {
        $this->dataArr = $arr;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function array():array
    {
        return $this->dataArr;
        // return User::all();
    }
}
