<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;

class GuestController extends Controller {
    public function viewIndex() {
    	return view('guest.index');
    }

    public function viewAbout() {
    	return view('guest.about');
    }

    public function viewServices() {
        return view('guest.services');
    }

    public function viewNews() {
        return view('guest.news');
    }

    public function viewContact() {
        $maxId = ContactUs::max('contact_us_id');
        $contact = ContactUs::findOrFail($maxId);
        return view('guest.contact', ['contact' => $contact]);
    }

    public function viewFaqs() {
        return view('guest.faqs');
    }
}

