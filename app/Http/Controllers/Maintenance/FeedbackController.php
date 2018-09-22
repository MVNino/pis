<?php

namespace App\Http\Controllers\Maintenance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function viewFeedback()
    {
    	return view('admin.maintenance.feedback');
    }
}
