<?php

namespace App\Http\Controllers\Maintenance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FAQController extends Controller
{
    public function viewFAQs()
    {
    	return view('admin.maintenance.faqs');
    }
}
