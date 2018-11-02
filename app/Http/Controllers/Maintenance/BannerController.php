<?php

namespace App\Http\Controllers\MAINTENANCE;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Banner;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function viewBanner()
    {
        $banners = Banner::
            where('status', '=', 0)
            ->orderBy('banner_order')
            ->paginate(5);
        return view('admin.maintenance.banner', ['banners'=>$banners]);
    }

    public function addBanner(Request $request)
    {
        $this->validate($request, [
    		'order' => 'required|numeric',
            'bannerImage' => 'image|nullable|max:10000'
        ]);

        try
        {
            //CHECK IF THERE'S A BANNER IN THAT ORDER. CAN'T PLACE IF THERE'S ONE
            $b = Banner::
                all()
                ->where('banner_order',  $request->input('order'))
                ->where('status', 0)
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
                $banner->status = 0;
                $banner->banner_picture = $request->input('bannerImage');
                // Handle file upload for banner image
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
        /*if update to reorder
        if ($request->input('request') == 0)
        {
            try
            {
                $banners = Banner::all();
                $b = Banner::find($id);
                $bc = Banner::count();

                $order = $request->input('order');
                $flag = 0;

                foreach ($banners as $banner)
                {
                    //search for similar order
                    if ($banner->banner_order == $order)
                    {
                        $banner->banner_order = $b->banner_order;
                        $b->banner_order = $order;
                        $banner->save();
                        $b->save();

                        $flag = 1;
                    }
                }

                if ($flag == 0)
                {
                    $b->banner_order = $order;
                    $b->save();
                }

                if ($banner->save())
                {
                    return redirect()->back()->with('success', 'Banner Order Changed!');
                }
            }
            catch (\Exception $e)
            {
                return $e->getMessage();
            }
        }
        else if ($request->input('request') == 1)
        {*/
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
        //}
    }

    public function deleteBanner($id)
    {
        try
        {
            $banner = Banner::find($id);
            $banner->status = 1;

            if ($banner->save())
            {
                return redirect()->back()->with('success', 'Banner Removed Successfully!');
            }

        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function editBanner($id)
    {
        try
        {
            $banner = Banner::find($id);

            return view('admin.maintenance.edit-banner', ['banner'=>$banner]);
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function modifyBanner(Request $request, $id)
    {
        $this->validate($request, [
            'order' => 'numeric',
            'bannerImage' => 'image|nullable|max:10000',
        ]);
        
        try
        {
            $banner = Banner::find($id);
            $banner->banner_order = $request->input('order');

            // Handle file upload for banner image
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
                return redirect()->back()->with('success', 'Banner Updates Successfully!');
            }
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }
}
