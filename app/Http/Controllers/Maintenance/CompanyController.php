<?php

namespace App\Http\Controllers\MAINTENANCE;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Company;

class CompanyController extends Controller
{
    public function viewCompany()
    {
        //$about = DB::select('SELECT * FROM about_table');
        $company = Company::all();

        return view('admin.maintenance.company', ['company'=>$company]);
    }
}
