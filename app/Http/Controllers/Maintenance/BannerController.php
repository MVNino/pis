<?php

namespace App\Http\Controllers\MAINTENANCE;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Banner;

class BannerController extends Controller
{
    public function viewBanner()
    {
        $banners = Banner::all();

        return view('admin.maintenance.banner', ['banners'=>$banners]);
    }
}
