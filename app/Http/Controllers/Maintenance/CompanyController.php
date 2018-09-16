<?php

namespace App\Http\Controllers\MAINTENANCE;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Company;
use \Input as Input;

class CompanyController extends Controller
{
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

    public function addCompany(Request $request)
    {
        $this->validate($request, [
    		'name' => 'required|string',
            'description' => 'required|string',
            'fileCompanyLogo' => 'image|nullable|max:3000',
            'map'=>'nullable'
        ]);
 
        try
        {
            $company = new Company;
            $company->company_name = $request->input('name');
            $company->company_desc = $request->input('description');
            $company->company_clinic_logo = $request->input('fileCompanyLogo');
            // Handle file upload for company logo
            if($request->hasFile('fileCompanyLogo')){
                // Get the file's extension
                $fileExtension = $request->file('fileCompanyLogo')
                    ->getClientOriginalExtension();
                // Create a filename to store(database)
                $logoImgNameToStore = $request->title
                    .'_'.'fileCompanyLogo'.'_'.time().'.'.$fileExtension;
                // Upload file to system
                $path = $request->file('fileCompanyLogo')
                    ->storeAs('public/images/logo', $CompanyImgNameToStore);
                $company->company_clinic_logo = $CompanyImgNameToStore;
            }
            $company->company_map = $request->input('map');

            $company->save();
            
            return redirect()->back()->with('success', 'Company Details Updated!');

        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }
}
