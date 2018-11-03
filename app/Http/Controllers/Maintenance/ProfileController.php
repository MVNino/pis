<?php

namespace App\Http\Controllers\MAINTENANCE;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Company;
use \Input as Input;

class ProfileController extends Controller
{

    public function viewProfile() {
	    return view('admin.maintenance.profile');
    }
}
