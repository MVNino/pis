<?php

namespace App\Http\Controllers\MAINTENANCE;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\About;

class ContactController extends Controller
{
    public function viewContact()
    {
        $contacts = Contact::all();

        return view('admin.maintenance.contact', ['contacts'=>$contacts]);
    }
}
