<?php

namespace App\Http\Controllers\Maintenance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    public function viewFeedback()
    {
    	return view('admin.maintenance.feedback');
    }
}
