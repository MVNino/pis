<?php

namespace App\Http\Controllers\MAINTENANCE;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ContactUs;
use DB;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function viewContact()
    {
    	$contact = ContactUs::all()->toArray();
        return view('admin.maintenance.contact', compact('contact'));
		// if ($contacts->count() > 0)
		// {
  //   		$contactMaxId = ContactUs::max('contact_us_id');
  //   		$contact = ContactUs::findOrFail($contactMaxId);
  //   		return view('admin.maintenance.contact', ['contact' => $contact]);
		// }
		// else
		// {
	 //        return view('admin.maintenance.contact');
  //   	}
    }

    public function addContact(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'required',
            'inquiry' => 'required'
    	]);

    	// save contact to database
    	$contact = new ContactUs;
    	$contact->contact_name = $request->name;
    	$contact->contact_email = $request->email;
    	$contact->contact_phone = $request->phone;
    	$contact->contact_inquiry = $request->inquiry;
    	if($contact->save()){
    		return redirect()->back()->with('success', 'Contact added!');
    	}
    }

    public function edit($id)
    {
        $contact = ContactUs::findOrFail($id);
        return view('admin.maintenance.edit-contact', compact('contact', 'id'));
    }

    public function editContact(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'required',
            'inquiry' => 'required'
        ]);

        // save contact to database
        try
        {
        $contact = ContactUs::find($id);
        $contact->contact_name = $request->input('name');
        $contact->contact_email = $request->input('email');
        $contact->contact_phone = $request->input('phone');
        $contact->contact_inquiry = $request->input('inquiry');
        
        $contact->save();

        if ($contact->save())
            {
                return redirect()->back()->with('success', 'Contact Updated!');
            }
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function deleteContact($id)
    {
        try
        {
            $contact = ContactUs::find($id);

            if ($contact->delete())
            {
                return redirect()->back()->with('success', 'Contact Removed Successfully!');
            }

        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

}
