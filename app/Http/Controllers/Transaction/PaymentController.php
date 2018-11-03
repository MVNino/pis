<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Patient;
use App\SpecialtyService;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function billing($id = NULL) 
    {
        if ($id == NULL) {
            $specialServices = SpecialtyService::all();

            return view('admin.transaction.billing', 
                ['specialServices' => $specialServices]);
        } else {
            $patient = Patient::findOrFail($id);
            $specialServices = SpecialtyService::all();
            return view('admin.transaction.patient-billing', 
                ['specialServices' => $specialServices, 
                'patient' => $patient]);
        }
    }

    public function availService(Request $request)
    {
        $this->validate($request, [
            'billNumber' => 'required',
            'patientId' => 'required',
            'services' => 'required'
        ]);

        $billing = new Billing;
        $billing->billing_id = $request->billNumber;
        $billing->patient_id = $request->patientId;
        if ($billing->save()) {
            foreach($request->services as $serviceId) {
                $data = array('spec_service_id' => $serviceId, 'billing_id' => $request->billNumber);
                BillingDetail::insert($data);    
            }
             $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
            );
            return \Response::json($response);
        }
    }

    public function showInitialAmount($id)
    {
        // show init amount ng services na in avail ng patient
        $initialAmount = BillingDetail::join('specialty_service_tbl', 
            'billing_details_tbl.spec_service_id', '=', 
            'specialty_service_tbl.spec_service_id')
            ->selectRaw('SUM(price) as price')
            ->where('billing_details_tbl.billing_id', $id)
            ->get();
        return \Response::json($initialAmount);        
    }

    public function proceedToPayment(Request $request)
    {
        $this->validate($request, [
            'billNumber' => 'required',
            'initialAmount' => 'required',
            'mode' => 'required',
            'balAmount' => 'required',
            'totalAmount' => 'required',
            'discountedAmount' => 'required',
        ]);

        $billing = Billing::findOrFail($request->billNumber);
        $billing->billing_date = now();
        $billing->total_amount = $request->initialAmount;
        $billing->discounted = $request->discountedAmount;
        if($request->mode == 0) {
            $billing->balance = $request->balAmount;
        }
        elseif($request->mode == 1) {
            $billing->balance = 0;
        }
        if($billing->save()) {
            return \Response::json('oks lang ako');        
            // return redirect('/admin/transaction/receipt');
        }
    }

    public function receipt($id) 
    {
        $billing = Billing::findOrFail($id);
        return view('admin.transaction.receipt', 
            ['billing' => $billing]);
    }

    public function processPayment(Request $request)
    {
        $this->validate($request, [
            'billingId' => 'required',
            'orNumber' => 'required',
            'paymentAmount' => 'required'
        ]);

        $or = new OfficialReceipt;
        $or->or_number = $request->orNumber;
        $or->or_date = now();
        $or->billing_id = $request->billingId;
        $or->amount_paid = $request->paymentAmount;
        if ($or->save()) {
             $response = array(
            'status' => 'success',
            'msg' => 'Official receipt created successfully',
            );
            return \Response::json($response);
        }
    }

    public function balance() {
        return view('admin.transaction.balance');
    }

    # Method for AJAX Request
    public function getSpecialtyServicePrice()
    {
        return SpecialtyService::select('price')
            ->get();   
    }
}
