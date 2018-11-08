@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Patient</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li>Transaction</li>
			<li>
				<a class="active" href="#">Payments</a>
			</li>
		</ol>
	</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Balance Record</h3>
            <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Balance</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patients as $patient)
                        @if($patient->billing && $patient->billing->isPaid == 0)
                            <tr>
                                <td>{{ $patient->fname.' '.$patient->lname }}</td>
                                <td>PHP {{ $patient->billing->balance }}</td>
                                <td class="text-center">
                                    <a role="button" href="/admin/transaction/balance-receipt/{{ $patient->billing->billing_id }}/patient={{ $patient->fname }}" class="btn btn-sm btn-info">
                                        Pay Balance
                                    </a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                <tfoot>
                </tfoot>
			</table>
        </div>
    </div>
</div>
<!-- Modal -->
<div style="padding-top: 320px;" class="modal fade bd-example-modal-lg" id="manualBalance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h3 id="exampleModalLongTitle"> &nbsp;<b>HELP</b> &nbsp;<i class="fa fa-question-circle"></i></h3>
		</div>
		<div class="modal-body">
			<h4 style="margin-bottom:0;" class="text-primary"><b>Payment</b></h4>
                <div style="padding:15px;">
				
				<label><b>Step 1 :</b>&nbsp;</label>
				Under payments is the Billing and Balance of Patients in the clinic. To go to payments, click [1].<br><br>
				<img class="dynamic" src="{{asset('img/payment/payment1.JPG')}}"><br><br>
                
				<p class="text-danger"><b><em>Balance</em></b>&nbsp;</p>

				<label><b>Step 1 :</b>&nbsp;</label>
				To go to balance, click [5]. Under payments.<br><br>
				<img class="dynamic" src="{{asset('img/payment/payment8.JPG')}}"><br><br>

                <label><b>Step 2 :</b>&nbsp;</label>
				The patient name and his outstanding balance will be shown. Once the balance is to be payed, click [8].<br><br>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>
		</div>
		</div>
	</div>
</div>
@endsection

@section('pg-specific-js')
<script>
	window.addEventListener("keydown",function (e) {
    if (e.keyCode === 112) { 
        e.preventDefault();
        $("#manualBalance").modal("show");
    }
})
</script>
@endsection
