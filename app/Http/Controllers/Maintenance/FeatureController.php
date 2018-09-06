<?php

namespace App\Http\Controllers\Maintenance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeatureController extends Controller
{
    public function viewFeatures()
    {
    	return view('admin.maintenance.features');
    }
}
