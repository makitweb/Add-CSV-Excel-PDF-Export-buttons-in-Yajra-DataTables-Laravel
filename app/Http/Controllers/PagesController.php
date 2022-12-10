<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use DataTables;

class PagesController extends Controller
{

    public function index(){
        return view('index');
    } 

    public function getDataTableData(){
        $employees = Employees::select('*');

        return Datatables::of($employees)
            ->addIndexColumn()
            ->addColumn('status',function($row){
                if($row->status == 1){
                    return "Active";
                }else{
                    return "Inactive";
                }
            })
            ->make();
    }
}
