<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function viewIndex()
    {
    	return view('guest.index');
    }

    public function viewAbout()
    {
    	return view('guest.about');
    }
}
