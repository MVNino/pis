<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Banner;
use App\Clinic;
use App\Contact;
use App\FAQ;
use App\Feature;
use App\News;
use App\OtherService;
use App\SpecialtyService;
use App\Http\Controllers\Controller;
use DB;

class GuestController extends Controller 
{   
    public function _construct() 
    {
        $this->middleware('auth');
    }

    public function viewIndex()
    {
        $otherServices = OtherService::orderBy('other_services_id', 'desc')
                ->limit(3)
                ->get();
        $news = News::orderBy('news_id', 'desc')->limit(3)->get();
        $banners = Banner::where('banner_status', '=', 1)->get();
        return view('guest.index', ['banners'=>$banners, 
                'news' => $news, 'otherServices' => $otherServices]);
    }

    public function viewAbout()
    {
        $features = Feature::orderBy('features_id', 'desc')->get();
        //$about = $this->getAbout();
        return view('guest.about', ['features' => $features]);
    }

    public function viewServices() 
    {
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
    public function viewContact() 
    {
        $contact = $this->getClinicContact();
        // $about = $this->getAbout();
        $clinics = Clinic::all();
        if ($clinics->count() > 0)
        {
    		$clinicMaxId = Clinic::max('clinic_contact_id');
    		$clinic = Clinic::findOrFail($clinicMaxId);
    		return view('guest.contact', ['clinic' => $clinic, 'contact' => $contact,
                    'clinics' => $clinics]);
        }
        else
        {
	        return view('guest.contact', ['clinics' => $clinics]);
        }
    }

    public function storeContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required',
            'inquiry' => 'required'
        ]);
        $contact = new Contact;
        $contact->contact_name = $request->name;
        $contact->contact_email = $request->email;
        $contact->contact_phone = $request->phone;
        $contact->contact_inquiry = $request->inquiry;
        $contact->status = 0;

        if($contact->save()){
            return redirect()->back()->with('success', 'Contact added!');
        }
    }

    public function getContact()
    {
        $MaxId = Contact::max('contact_us_id');
        return $contact = Contact::findOrFail($MaxId);
    }

    //Get about
    public function getAbout()
    {
        $MaxId = About::max('about_id');
    	return $about = About::findOrFail($MaxId);
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

