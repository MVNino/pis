<?php

namespace App\Http\Controllers\MAINTENANCE;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Company;
use \Input as Input;

class AccountController extends Controller
{

    public function editAccount() {
	    return view('admin.maintenance.account');
    }
}
