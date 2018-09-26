<?php

namespace App\Http\Controllers\MAINTENANCE;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Company;
use \Input as Input;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewCompany()
    {
        $company = Company::all();
        // ->toArray();
        // return view('admin.maintenance.company', compact('company'));
        if ($company->count() > 0)
        {
    		$companyMaxId = Company::max('company_id');
    		$company = Company::findOrFail($companyMaxId);
    		return view('admin.maintenance.company', ['company' => $company]);
        }
        else
        {
	        return view('admin.maintenance.company');
    	}
    }

    public function updateCompany(Request $request, $id)
    {
        $this->validate($request, [
    		'name' => 'required|string',
            'fileCompanyLogo' => 'image|nullable|mimes:png|max:10000',
            
            
        ]);      
        $company = Company::findOrFail($id);
        $company->company_name = $request->name;
        // Handle file upload for company logo
        if($request->hasFile('fileCompanyLogo')){
            // Get the file's extension
            $fileExtension = $request->file('fileCompanyLogo')
                ->getClientOriginalExtension();
            // Create a filename to store(database)
            $companyImgNameToStore = $request->title
                .'_'.'CompanyLogo'.'_'.time().'.'.$fileExtension;
            // Upload file to system
            $path = $request->file('fileCompanyLogo')
                ->storeAs('public/images/logo', $companyImgNameToStore);
            $company->company_clinic_logo = $companyImgNameToStore;
        }
        
        $company->save();
        return redirect()->back()->with('success', 'Company Details Updated!');
    }
}
