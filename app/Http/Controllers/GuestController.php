<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;
use App\FAQ;
use App\News;

class GuestController extends Controller 
{
    // public $maxId;
    // public $contact;
    
    public function _construct() {
        // $this->maxId = ContactUs::max('contact_us_id');
        // return $this->contact = ContactUs::findOrFail($maxId);
    }

    public function viewIndex() {
    	return view('guest.index');
    }

    public function viewAbout() {
    	return view('guest.about');
    }

    public function viewServices() {
        return view('guest.services');
    }

    # News
    public function viewNews() {
        $recentNews = News::orderBy('news_id', 'desc')->get();
        $news = News::orderBy('news_id', 'desc')->paginate(2);
        return view('guest.news', ['news' => $news, 
            'recentNews' => $recentNews]);
    }

    # Contact
    public function viewContact() {
        $contact = $this->getContact();
        return view('guest.contact', ['contact' => $contact]);
    }

    // Get contact information
    public function getContact()
    {
        $maxId = ContactUs::max('contact_us_id');
        return $contact = ContactUs::findOrFail($maxId);
    }

    # FAQs
    public function viewFaqs() {
        $faqs = FAQ::all();
        $contact = $this->getContact();
        return view('guest.faqs', ['faqs' => $faqs, 
            'contact' => $contact]);
    }
}

