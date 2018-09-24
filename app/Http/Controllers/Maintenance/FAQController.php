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
        $faqs = FAQ::orderBy('faq_id', 'desc')->paginate(5);
    	return view('admin.maintenance.faqs', ['faqs' => $faqs]);
    }

    public function addFAQs(Request $request)
    {
    	$this->validate($request, [
    		'question' => 'required|string|max:191',
    		'answer' => 'required|string|max:191',
    		'category' => 'required'
    	]);

    	$faq = new FAQ;
    	$faq->faq_question = $request->question;
    	$faq->faq_answer = $request->answer;
    	$faq->faq_category = $request->category;
    	if($faq->save()) {
    		return redirect()->back()->with('success', 'The FAQs has been added!');
    	}
	}

    public function editFAQs($id)
    {
        $faq = FAQ::findOrFail($id);
        return view('admin.maintenance.edit-faqs', 
            ['faq' => $faq]);
    }

    public function updateFAQs(Request $request, $id)
    {
        $this->validate($request, [
            'question' => 'required|string|max:191',
            'answer' => 'required|string|max:191',
            'category' => 'required'
        ]);

        $faq = FAQ::findOrFail($id);
        $faq->faq_question = $request->question;
        $faq->faq_answer = $request->answer;
        $faq->faq_category = $request->category;
        if($faq->save()) {
            return redirect()->back()->with('success', 'The FAQs has been updated!');
        }
    }

    public function deleteFAQs($id)
    {   
        try
        {
            $faq = FAQ::findOrFail($id);

            if ($faq->delete())
            {
                return redirect()->back()->with('success', 
                    'FAQs removed successfully!');
            }

        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function activate($id)
    {
        $faq = FAQ::findOrFail($id);
        $faq->status = 1;
        if ($faq->save()) {
            return redirect()->back()
            ->with('success', 'The FAQs record has been activated!');
        }
    }

    public function deactivate($id)
    {
        $faq = FAQ::findOrFail($id);
        $faq->status = 0;
        if ($faq->save()) {
            return redirect()->back()
            ->with('error', 'The FAQs record has been deactivated!');
        }
    }
}
