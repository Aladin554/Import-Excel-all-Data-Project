<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UserImport;
use App\Models\UsersImport;

class UserImportController extends Controller
{
    public function ImportFrom(){
        $data=UsersImport::all();
        return view('importForm',compact('data'));
    }
    public function import(Request $request){
        Excel::import(new UserImport,$request->file);
        return redirect()->back()->with('success','Imported Successfully');
    }
}
