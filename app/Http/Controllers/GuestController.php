<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Banner;
use App\Clinic;
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

    public function viewIndex()
    {
        $banners = Banner::
            all()
            ->where('banner_status', '=', 1);

    	return view('guest.index', ['banners'=>$banners]);
    }

    public function viewAbout()
    {
        $about = About::all();
        if ($about->count() > 0)
        {
    		$aboutMaxId = About::max('about_id');
    		$about = About::findOrFail($aboutMaxId);
    		return view('guest.about', ['about' => $about]);
        }
        else
        {
	        return view('guest.about');
    	}
    }

    public function viewServices() {
        return view('guest.services');
    }

    # News
    public function viewNews() {
        $recentNews = News::orderBy('news_order')->get();
        $news = News::orderBy('news_order')->paginate(2);
        return view('guest.news', ['news' => $news, 
            'recentNews' => $recentNews]);
    }

    # Contact
    public function viewContact() {
        $contact = $this->getContact();

        $clinics = Clinic::all();

        if ($clinics->count() > 0)
        {
    		$clinicMaxId = Clinic::max('clinic_contact_id');
    		$clinic = Clinic::findOrFail($clinicMaxId);
    		return view('guest.contact', ['clinic' => $clinic, 'contact' => $contact]);
        }
        else
        {
	        return view('guest.contact');
        }
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

