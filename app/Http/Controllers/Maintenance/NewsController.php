<?php

namespace App\Http\Controllers\Maintenance;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
    public function viewNews() {
    	return view('admin.maintenance.news');
    }

    public function addNews(Request $request) 
    {	
  		$this->validate($request, [
            'numOrder' => 'required',  
            'title' => 'required',
  			'description' => 'required',
            'fileNewsImg' => 'image|nullable|max:3000'
  		]);
        $news = new News;
        $news->news_order = $request->numOrder;
  		$news->news_title = $request->title;
  		$news->news_desc = $request->description;
        // Handle file upload for news image
        if($request->hasFile('fileNewsImg')){
            // Get the file's extension
            $fileExtension = $request->file('fileNewsImg')
                ->getClientOriginalExtension();
            // Create a filename to store(database)
            $newsImgNameToStore = $request->title
                .'_'.'NewsImg'.'_'.time().'.'.$fileExtension;
            // Upload file to system
            $path = $request->file('fileNewsImg')
                ->storeAs('public/images/news', $newsImgNameToStore);
            $news->news_picture = $newsImgNameToStore;
        }
        if ($news->save()) {
        	return redirect()->back()->with('success', 'News added!');
        }
    }
}
