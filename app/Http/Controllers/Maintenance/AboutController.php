<?php

namespace App\Http\Controllers\MAINTENANCE;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\About;

class AboutController extends Controller
{
    public function viewAbout()
    {
        //$about = DB::select('SELECT * FROM about_table');
        $about = About::all();

        return view('admin.maintenance.about', ['about' => $about]);
    }

    public function updateAbout(Request $request)
    {
        try
        {
            //Create Intake
            $about = new Proof;
            $about->about_title = $request->input('aboutTitle');
            $about->about_desc = $request->input('aboutDescription');
            $about->about_img = $request->input('aboutImage');
            $about->save();

            return redirect()->back();
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }
}
