<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Banner;
use App\Clinic;
use App\Contact;
use App\FAQ;
use App\News;
use App\OtherService;
use App\SpecialtyService;

class GuestController extends Controller 
{   
    public function _construct() {
    }

    public function viewIndex()
    {
        $banners = Banner::where('banner_status', '=', 1);
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
        $otherServices = OtherService::orderBy('other_services_id', 'desc')
                ->paginate(6);
        $specialtyServices = SpecialtyService::orderBy('spec_service_id', 'desc')
                ->paginate(6);
        return view('guest.services', ['otherServices' => $otherServices, 
                'specialtyServices' => $specialtyServices]);
    }

    public function showService($id)
    {
        $specialtyService = SpecialtyService::findOrFail($id);
        return view('guest.show-service', ['service' => $specialtyService]);
    }

    public function showOtherService($id)
    {
        $otherService = OtherService::findOrFail($id);
        return view('guest.show-other-service', ['service' => $otherService]);
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
        $contact = $this->getClinicContact();

        $clinic = Clinic::all();

        if ($clinic->count() > 0)
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
    public function getClinicContact()
    {
        $maxId = Clinic::max('clinic_contact_id');
        return Clinic::findOrFail($maxId);
    }

    # FAQs
    public function viewFaqs() {
        $faqs = FAQ::all();
        $clinic = $this->getClinicContact();
        return view('guest.faqs', ['faqs' => $faqs, 
            'clinic' => $clinic]);
    }
}

