<?php

namespace App\Http\Controllers\Maintenance;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function listNews() {
        $news = News::where('status', 1)
            ->orderBy('news_order')
            ->paginate(5);
    	return view('admin.maintenance.news', ['news' => $news]);
    }

    public function viewNews($id)
    {
        $news = News::findOrFail($id);
        return view('admin.maintenance.view-news', ['news' => $news]);
    }

    public function addNews(Request $request) 
    {	
  		$this->validate($request, [
            'numOrder' => 'required|unique:news_tbl',  
            'title' => 'required',
  			'description' => 'required',
            'fileNewsImg' => 'image|nullable|max:3000'
  		]);

        // Insert record to database
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
        // Save record
        if ($news->save()) {
        	return redirect()->back()->with('success', 'News added!');
        }
    }

    public function updateNews(Request $request, $id)
    {
        $this->validate($request, [
            'numOrder' => 'required',
            'radioStatus' => 'required',  
            'title' => 'required',
  			'description' => 'required',
            'fileNewsImg' => 'image|nullable|max:3000'
        ]);
        
        // Update record in database
        $news = News::findOrFail($id);
        // !order must be unique
        $news->news_order = $request->numOrder;
        $news->isActive = $request->radioStatus;
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
                ->storeAs('public\images\news', $newsImgNameToStore);
            $news->news_picture = $newsImgNameToStore;
        }
        // Save record
        if ($news->save()) {
            return redirect(route('maintenance.news'))
                ->with('success', 'News updated!');
        }
    }

    public function activate($id)
    {
        $news = News::findOrFail($id);
        $news->isActive = 1;
        if ($news->save()) {
            return redirect()->back()
            ->with('success', 'The news record has been activated!');
        }
    }

    public function deactivate($id)
    {
        $news = News::findOrFail($id);
        $news->isActive = 0;
        if ($news->save()) {
            return redirect()->back()
            ->with('error', 'The news record has been deactivated!');
        }
    }

    public function softDelete($id)
    {
        $news = News::findOrFail($id);
        $news->status = 0;
        if ($news->save()) {
            return redirect()->back()->with('error', 
                'The news has been deleted!');
        }
    }
}
