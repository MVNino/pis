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
use App\Patient;
use App\Profile;
use App\Appointment;
use App\Http\Controllers\Controller;
use DB;
use Carbon;
    

class GuestController extends Controller
{   
    public function _construct() 
    {
        $this->middleware('auth');
    }

    public function fetch(Request $request)
    {
        // $select = $request->get('select');
        $value = $request->get('value');
        $start_variable = 'clinic_open_time';
        $end_variable = 'clinic_close_time';
        $data = DB::table('clinic_contact_tbl')
              ->where('clinic_contact_id', $value)
              ->groupBy('clinic_contact_id')
              ->get();

        $output = '<option value="" >Preferred Time</option>';     

        foreach($data as $row)
        {

            $start_hour = $row->$start_variable;
            $end_hour = $row->$end_variable;
            $start_slice = $start_hour[0].$start_hour[1];
            $end_slice = $end_hour[0].$end_hour[1];
            
            for($ctr = (int)$start_slice ; $ctr < (int)$end_slice ; $ctr++) {

                $time_value = '0'.$ctr.':00:00';
                if($ctr > 9) 
                    $time_value = $ctr.':00:00';

                $output .= '<option value="'.\Carbon\Carbon::createFromFormat('H:i:s', $time_value)->format('g:i A ').'" style = "color:#000000" >'.\Carbon\Carbon::createFromFormat('H:i:s',$time_value)->format('g:i A ').'</option>';

            }
        }

        echo $output;
    }

    public function viewIndex()
    {
        $otherServices = OtherService::where('status', 1)
                ->orderBy('other_services_id', 'desc')
                ->limit(3)
                ->get();
        $news = News::where('status', 1)
                ->orderBy('news_id', 'desc')
                ->limit(3)
                ->get();
        $banners = Banner::where('banner_status', 1)
                ->get();

        $location_list = DB::table('clinic_contact_tbl')
                       ->selectRaw('clinic_contact_id, clinic_location')
                       ->where('status', 0)
                       ->groupBy('clinic_contact_id')
                       ->get();

        return view('guest.index', ['banners'=>$banners, 
                'news' => $news, 'otherServices' => $otherServices, 'location_list' => $location_list]);
    }

    public function viewAbout()
    {
        try
        {
            $profile = Profile::all();
            $features = Feature::orderBy('features_id', 'desc')->get();

            if ($profile->count() > 0)
            {
                $profileMaxId = Profile::max('profile_id');
                $profile = Profile::findOrFail($profileMaxId);

                return view('guest.about', ['profile' => $profile, 'features' => $features]);
            }
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function viewServices() 
    {
        $otherServices = OtherService::where('status', 1)
                ->orderBy('other_services_id', 'desc')
                ->paginate(6);
        $specialtyServices = SpecialtyService::where('status', 1)
                ->orderBy('spec_service_id', 'desc')
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
        $recentNews = News::where('status', 1)
            ->orderBy('news_order')
            ->get();
        $news = News::where('status', 1)
            ->orderBy('news_order')
            ->paginate(2);
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
    		return view('guest.contact', ['clinic' => $clinic, 'contact' => $contact, 'clinics' => $clinics]);
        }
        else
        {
	        return view('guest.contact', ['clinics' => $clinics]);
        }
    }


    public function createAppointment(Request $request)
    {
        $this->validate($request,[
            'fname' => 'required|string',
            'mname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|string',
            'contact' => 'required|string',
            'date' => 'required',
            'clinic_open_time' => 'required',

        ]);

        try{

        $patient = new Patient;
        $patient->fname = $request->fname;
        $patient->mname = $request->mname;
        $patient->lname = $request->lname;
        $patient->contact_no = $request->contact;
        $patient->email = $request->email;

        $patient->save();

        // latest patient id
        $patientId = Patient::max('patient_id');

        $appointment = new Appointment;
        $appointment->appointment_date = $request->date;
        $appointment->patient_id = $patientId;
        $appointment->time = $request->clinic_open_time;


        $appointment->save();
        
        return redirect()->back()->with('success','Your appointment is now sent. Please check your email often to see if your appointment is approve. Thank you!');
        }

        catch (\Exception $e)
        {
            return redirect()->back()->with('error',"Your appointment wasn't able to sent please refresh the page.");
        }

    }

    public function storeContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string',
            'inquiry' => 'required'
        ]);

        try
        {

            $contact = new Contact;
            $contact->contact_name = $request->name;
            $contact->contact_email = $request->email;
            $contact->contact_inquiry = $request->inquiry;

            if($contact->save()){
                return redirect()->back()->with('success', 'Your inquiry has been submitted. Check you email for the response. Thank you');
            }
        }

        catch (\Exception $e)
        {
            return redirect()->back()->with('error', "Your inquiry was not sent. Please refresh the page.");
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
    public function viewFaqs() 
    {
        $faqs = FAQ::where('status', 1)
                ->get();
        $clinic = $this->getClinicContact();
        return view('guest.faqs', ['faqs' => $faqs, 
            'clinic' => $clinic]);
    }
}

