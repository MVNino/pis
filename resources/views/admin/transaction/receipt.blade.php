@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Official Receipt</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li>Transaction</li>
			<li>
				<a class="active" href="#">Billing</a>
			</li>
		</ol>
	</div>
@endsection

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
        {!! Form::open(['action' => 'Transaction\PaymentController@processPayment', 'method' => 'POST', 
        'onsubmit' => "return confirm('Checkout payment?')"]) !!}
        @csrf
        <div class="white-box">
            <h3><b>BILLING ID</b> <span class="pull-right">#{{ $billing->billing_id }}</span></h3>
            <input type="number" id="billingId" name="txtBillingId" value="{{ $billing->billing_id }}" hidden readonly>
            <form class="form-material">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-3">
                        <label class="col-md-12">Official Receipt Number:</label>    
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input id="ORNum" class="form-control" name="txtOrNumber" placeholder="Enter here" required>
                        </div>
                    </div>
                </div>
            </form>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left"> 
                        <address>
                            <h3><b class="text-danger">Dra. Joy Gali</b></h3>
                            <h5>Address of the Hospital based on the branch selected</h5><br>
                        </address> 
                        <div class="row">
                            <div class="col-md-4">
                                <p><b>Received From</b></p>
                                <p><b>Date</b>
                            </div>
                            <div class="col-md-2">
                                <p>:</p>
                                <p>:</p>
                            </div>
                            <div class="col-md-6">
                                <p><u>{{ $billing->patient->fname.' '.$billing->patient->mname.' '.$billing->patient->lname }}</u></p>
                                <i class="fa fa-calendar"></i> {{ date('F d, Y', strtotime($billing->billing_date)) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12"><br>
                <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Item Name</th>
                        <th class="text-right">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($billing->billingDetails as $detail)
                    <tr>
                        <td>{{ $detail->specialtyService->spec_service_id }}</td>
                        <td>{{ $detail->specialtyService->spec_title }}</td>
                        <td>{{ $detail->specialtyService->price }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                </tfoot>
            </table>
                </div>
                <div class="col-md-12">
                    <div class="pull-right m-t-30 text-right">
                        <h3>
                            <b>Total :</b>
                            PHP @if($billing->balance != 0.00)
                                    {{ $billing->balance }}
                                    <input type="number" id="total" name="numTotalAmount" value="{{ $billing->balance }}" hidden readonly> 
                                @else
                                    @if($billing->discounted != 0.00)
                                        {{ $billing->discounted }}
                                        <input type="number" id="total" name="numTotalAmount" value="{{ $billing->discounted }}" hidden readonly> 
                                    @else
                                        {{ $billing->total_amount }}
                                        <input type="number" id="total" name="numTotalAmount" value="{{ $billing->total_amount }}" hidden readonly> 
                                    @endif
                                @endif
                        </h3>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                        <div class="row">
                            <div class="col-md-7">
                            </div>
                            <div class="col-md-2">
                                <label class="col-md-12">Payment Amount:</label>    
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" id="paymentAmount" class="form-control" name="txtPaymentAmount" placeholder="Enter here" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                            </div>
                            <div class="col-md-2">
                                <label class="col-md-12">Change:</label>    
                            </div>
                            <div class="col-md-3">
                                <p><span id="change">0</span> PHP</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <button id="checkOut" type="submit" class="btn btn-info"><i class="fa fa-fw fa-lg fa-check-circle"></i>Check Out</button>
                        </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}    
    </div>
</div>
    
</div>
@endsection

@section('pg-specific-js')
<script>
$('#checkOutt').click(() => {
    let ORNumber = $('#ORNum').val();
    let billingId = $('#billingId').val();    
    let paymentAmount = $('#total').val();    
    let _token = $('input[name=_token]').val();

    $.ajax({
        'dataType' : 'json',
        'type' : "POST", 
        'url' : `/admin/transaction/receipt/process-payment`, 
        'data': {
            'orNumber' : ORNumber, 
            'billingId' : billingId, 
            'paymentAmount' : paymentAmount, 
            '_token' : _token 
        }, 
        'success' : function(res) {
            alert(res.msg);
            window.location.href = `/admin/transaction/billing`;
            
        }
    });
});

$('#paymentAmount').blur((e) => {
    e.preventDefault();
    let total = $('#total').val();   
    let paymentAmount = $('#paymentAmount').val();   
    let change = paymentAmount - total;
    $('#change').text(change);
});
</script>
<!-- <script>
$(document).ready(function() {
    $("#print").hide();
});

function toCheckOut() {
    $("#checkOut").hide();
    $("#print").show();
    $("#OR").attr('disabled','""');
    $("#PA").attr('disabled','""');
}
</script> -->
@endsection