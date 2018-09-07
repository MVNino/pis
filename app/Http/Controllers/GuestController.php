<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('guest.contact');
    }

    public function viewFaqs() {
        return view('guest.faqs');
    }
}

