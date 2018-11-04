<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Billing;
use App\BillingDetail;
use App\OfficialReceipt;
use App\Patient;
use App\SpecialtyService;
use PDF;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function billing($id = NULL) 
    {
        if ($id == NULL) {
            // If there is no specific record
            $specialServices = SpecialtyService::all();

            // need to extract patient na approved na, at wala pang billing men
            // $patients = Patient::selectRaw('patient_id, CONCAT(lname,", ",fname, " ", mname) as full_name')
            //         ->get();
            $patients = Patient::all();
            return view('admin.transaction.billing', 
                ['specialServices' => $specialServices, 
                'patients' => $patients]);
        } else {
            // If there is a certain patient record
            $patient = Patient::findOrFail($id);
            $specialServices = SpecialtyService::all();
            return view('admin.transaction.billing', 
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
                $data = array('spec_service_id' => $serviceId, 
                    'billing_id' => $request->billNumber);
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
            $billing->isPaid = 1;
            $billing->balance = 0;
        }
        if($billing->save()) {
            return \Response::json('bill created');        
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
        // return $request;   
            // payment is ung binigay niya
        $this->validate($request, [
            'txtBillingId' => 'required',
            'txtOrNumber' => 'required',
            'numTotalAmount' => 'required',
            'txtPaymentAmount' => 'required'
        ]);

        $or = new OfficialReceipt;
        $or->or_number = $request->txtOrNumber;
        $or->or_date = now();
        $or->billing_id = $request->txtBillingId;
        $or->amount_paid = $request->numTotalAmount;
        if ($or->save()) {

            $billing = Billing::findOrFail($request->txtBillingId);
            $patientName = $billing->patient->fname.' '
                .$billing->patient->mname.' '.$billing->patient->lname;

            $pdf = PDF::loadView('admin.transaction.checkout-pdf', ['patientName' => $patientName, 'amount' => $request->numTotalAmount]);
            return $pdf->stream('payment_checkout.pdf');
            // return redirect()->back()->with('success', 'yeah men');   
        }
    }

    public function generateCheckoutPDF($amount, $billId)
    {
        $billing = Billing::findOrFail($billId);
        $patientName = $billing->patient->fname.' '
            .$billing->patient->mname.' '.$billing->patient->lname;
        $data = array(
            'amount' => $amount,
            'patientName' => $patientName
        );

        $pdf = PDF::loadView('admin.transaction.generatedCheckOut.html');
        return $pdf->stream('payment_checkout.pdf');
    }

    public function balance() {
        $patients = Patient::with('billing')->get();
        return view('admin.transaction.balance', 
            ['patients' => $patients]);
    }

    public function balanceReceipt($id)
    {
        $billing = Billing::findOrFail($id);
        return view('admin.transaction.balance-receipt', 
            ['billing' => $billing]);
    }

    public function processBalancePayment(Request $request)
    {
        // return $request;   
            // payment is ung binigay niya
        $this->validate($request, [
            'txtBillingId' => 'required',
            'txtOrNumber' => 'required',
            'numTotalAmount' => 'required',
            'txtPaymentAmount' => 'required'
        ]);

        // set 'balance' to 0 and set 'isPaid to 1'
        $bill = Billing::findOrFail($request->txtBillingId);
        $bill->balance = 0.00;
        $bill->isPaid = 1;
        $bill->save();

        $or = new OfficialReceipt;
        $or->or_number = $request->txtOrNumber;
        $or->or_date = now();
        $or->billing_id = $request->txtBillingId;
        $or->amount_paid = $request->numTotalAmount;
        if ($or->save()) {

            $billing = Billing::findOrFail($request->txtBillingId);
            $patientName = $billing->patient->fname.' '
                .$billing->patient->mname.' '.$billing->patient->lname;

            $pdf = PDF::loadView('admin.transaction.checkout-pdf', ['patientName' => $patientName, 'amount' => $request->numTotalAmount]);
            return $pdf->stream('payment_checkout.pdf');
            // return redirect()->back()->with('success', 'yeah men');   
        }
    }

    # Method for AJAX Request
    public function getSpecialtyServicePrice()
    {
        return SpecialtyService::select('price')
            ->get();   
    }
}
