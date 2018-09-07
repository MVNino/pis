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
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        try
        {
            $company = new Company;
            $company->company_name = $request->input('name');
            $company->company_desc = $request->input('description');
            $company->clinic_clinic_logo = $request->input('logo');

            $company->save();

            return redirect()->back()->with('success', 'Company Details Updated!');
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }
}
