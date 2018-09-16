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

    public function addBanner(Request $request)
    {
        $this->validate($request, [
    		'order' => 'required|numeric',
            'bannerImage' => 'image|nullable|max:3000'
        ]);

        try
        {
            //CHECK IF THERE'S A BANNER IN THAT ORDER. CAN'T PLACE IF THERE'S ONE
            $b = Banner::
                all()
                ->where('banner_order',  $request->input('order'))
                ->count();

            if($b > 0)
            {
                return redirect()->back()->with('error', "Can't Add Banner! Order number is Taken!");
            }
            else
            {
                $banner = new Banner;
                $banner->banner_order = $request->input('order');
                $banner->banner_status = 0;
                $banner->banner_picture = $request->input('bannerImage');
                // Handle file upload for news image
                if($request->hasFile('bannerImage')){
                    // Get the file's extension
                    $fileExtension = $request->file('bannerImage')
                        ->getClientOriginalExtension();
                    // Create a filename to store(database)
                    $bannerImgNameToStore = $request->title
                        .'_'.'bannerImage'.'_'.time().'.'.$fileExtension;
                    // Upload file to system
                    $path = $request->file('bannerImage')
                        ->storeAs('public/images/banner', $bannerImgNameToStore);
                    $banner->banner_picture = $bannerImgNameToStore;
                }

                if ($banner->save())
                {
                    return redirect()->back()->with('success', 'Banner Image Added!');
                }
            }
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function updateBanner(Request $request, $id)
    {
        try
        {
            $banner = Banner::find($id);
                $banner->banner_status = $request->input('status');
                $banner->save();

            if ($banner->save())
            {
                return redirect()->back()->with('success', 'Banner Status Changed!');
            }
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function deleteBanner($id)
    {
        try
        {
            $banner = Banner::find($id);

            if ($banner->delete())
            {
                return redirect()->back()->with('success', 'Banner Removed Successfully!');
            }

        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }
}
