<?php

namespace App\Http\Controllers\Maintenance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FAQ;

class FAQController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewFAQs()
    { 
    	return view('admin.maintenance.faqs');
    }

    public function addFAQs(Request $request)
    {
    	$this->validate($request, [
    		'question' => 'required|string',
    		'answer' => 'required|string',
    		'category' => 'required'
    	]);

    	$faq = new FAQ;
    	$faq->faq_question = $request->question;
    	$faq->faq_answer = $request->answer;
    	$faq->faq_category = $request->category;
    	if($faq->save()) {
    		return redirect()->back()->with('success', 'FAQs added!');
    	}
    }
}
