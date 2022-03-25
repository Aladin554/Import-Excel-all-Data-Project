<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\UsersImport;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new UsersImport([
            'name'=>$row['name'],
            'email'=>$row['email'],
            'phone'=>$row['phone'],

        ]);
    }
}
