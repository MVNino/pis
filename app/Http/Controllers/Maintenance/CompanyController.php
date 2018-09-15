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
        $company = Company::all()->toArray();
        return view('admin.maintenance.company', compact('company'));
     //    if ($company->count() > 0)
     //    {
    	// 	$companyMaxId = Company::max('company_id');
    	// 	$company = Company::findOrFail($companyMaxId);
    	// 	return view('admin.maintenance.company', ['company' => $company]);
     //    }
     //    else
     //    {
	    //     return view('admin.maintenance.company');
    	// }
    }

    public function addCompany(Request $request)
    {
        $this->validate($request, [
    		'name' => 'required|string',
            'description' => 'required|string',
            'logo' => 'image|nullable|max:3000'
        ]);
 
        try
        {
            $company = new Company;
            $company->company_name = $request->input('name');
            $company->company_desc = $request->input('description');
            // Handle file upload for news image
            if($request->hasFile('fileCompanyImg')){
                // Get the file's extension
                $fileExtension = $request->file('fileCompanyImg')
                    ->getClientOriginalExtension();
                // Create a filename to store(database)
                $logoImgNameToStore = $request->title
                    .'_'.'CompanyImg'.'_'.time().'.'.$fileExtension;
                // Upload file to system
                $path = $request->file('fileCompanyImg')
                    ->storeAs('public/images/logo', $CompanyImgNameToStore);
                $company->company_clinic_logo = $CompanyImgNameToStore;
            }

            if ($company->save())
            {
                return redirect()->back()->with('success', 'Company Details Updated!');
            }

        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }
}
