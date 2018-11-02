@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Billing Section</h4>
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
{!! Form::open(['action' => 'Transaction\PaymentController@availService', 'method' => 'POST', 'class' => 'form-material form-horizontal', 'onsubmit' => "return confirm('Avail now and proceed to payment?')"]) !!}
    @csrf
    <div class="row">
        <div class="col-md-8">
            <div class="white-box">
                <div class="bill"></div>
                    <div class="form-group">
                        <label class="col-md-12">Patient Name</span></label>
                        <div class="col-md-12">
                            <select name="name"  class="form-control">
                                <option>Leki Romero</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <label class="col-md-12">Special Services</label>
                        </div>
                        <div class="col-md-12">
                            <select id="selectServices" name="slctServices" multiple="multiple" class="form-control">
                                @foreach($specialServices as $service)
                                    <option value="{{ $service->spec_service_id }}">
                                        {{ $service->spec_title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- <div class="feeTxt">
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Additional Fee</label>
                                <input class="form-control" name="fee" type="text">
                            </div>
                            <div class="col-md-4">
                                <label>Amount</label>
                                <input class="form-control" name="amountFee" type="number">
                            </div>
                            <div class="col-md-2">
                                <button type='button' onclick="addFees()" 
                                    style="margin-top:30px;" rel="tooltip" title="" class="btn btn-primary btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </div><br><br> -->
                    <p style="margin-top:158px;"></p>
                </div>
        </div>
        <div class="col-md-4">
            <div class="white-box">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-md-12">Initial Amount</label>
                            </div>
                            <div class="col-md-6">
                                <p>PHP 900.00</p>
                                <button type="button" id="add" onclick="addDiscount()" class="btn btn-sm btn-info">Add Discount</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="addDiscount"> 
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-md-12">Discount</label>
                            </div>
                            <div class="col-md-6">
                                <button type="button" onclick="cancelDiscount()" class="pull-right btn btn-sm btn-danger">x</button><br>
                            </div>
                        </div>
                        <input style="margin-left:50px;" type="radio" name="discount" value="0" id="perDiscount">&nbsp;Percentage<br>
                        <input style="margin-left:50px;" type="radio" name="discount" value="1" id="amtDiscount">&nbsp;Amount<br>
                        <div id="textbox"></div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-md-12">Discount Price</label>
                            </div>
                            <div class="col-md-6">
                                <p>PHP 900.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Mode of Payment</label>
                        <select class="form-control" name="selectMode">
                            <option>...</option>
                            <option value="0"> Half Payment </option>
                            <option value="1"> Full Payment </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <br><label class="col-md-12">Total Amount</label>
                            </div>
                            <div class="col-md-6">
                                <h3 class="text-danger"><b> 900 PHP</b></h3>
                            </div>
                        </div>
                    </div>
                    <div align="right">
                        <a style="margin-top:20px;" href="{{ route('transaction.receipt') }}" role="button" class="btn btn-info waves-effect waves-light m-r-10"><i class="fa fa-fw fa-lg fa-check-circle"></i>Proceed to Payment</a>
                    </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}
@endsection

@section('pg-specific-js')
<script>
$(function(){
    $("#addDiscount").hide();
    let randomNumber =  Math.round(Math.random() * 100000);
    let billNo = '<p style="margin-bottom:0px;" class="text-right">Billing Number</p><p class="text-right box-title text-danger"><font size="5px">#'+randomNumber+'</font></p>';
    $(".bill").html(billNo);
});

function addDiscount(){
    $("#addDiscount").show();
    $("#add").hide();
}

function cancelDiscount(){
    $("#addDiscount").hide();
    $("#add").show();
}

$( "#perDiscount" ).click(function() {
  let radioValue = $("input[name='discount']:checked").val();
  let txt = '<div class="row"><div class="col-md-6"><input class="form-control" style="margin-left:50px;" type="text" name="amount"></div><div class="col-md-6"><label class="col-md-12">%</label></div></div>';
  $("#textbox").html(txt);
});

$( "#amtDiscount" ).click(function() {
  let radioValue = $("input[name='discount']:checked").val();
  let txt = '<div class="row"><div class="col-md-6"><input class="form-control" style="margin-left:50px;" type="text" name="amount"></div><div class="col-md-6"><label class="col-md-12">PHP</label></div></div>';
  $("#textbox").html(txt);
});

$("#selectServices").multipleSelect({
    filter: true
});

let count = 0;
let target = $(".feeTxt");
let targetBtn = $("#responseButton");

function addFees() {

    let boxName = "fee" + count;
    let boxName2 = "amountFee" + count;
    let buttonName = "button" + count;
    let html = '<input type="text" class="form-control" name="' + boxName + '"">';
    let html1 = '<input type="number" class="form-control" name="' + boxName2 + '"">'
    let button = '<button name="' + buttonName + '"type="button" onclick ="deleteField(' + count + ')" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove"><i class="fa fa-close"></i></button>';
    let newDiv = "<div class='feeDiv" + count + " row'>" + "<div class='col-md-6'>" + html + "</div>"+"<div class='col-md-4'>" + html1 + "</div>"+"<div class='col-sm-2'>" + button + "</div>";

    target.append(newDiv);
    
    console.log(count);
    console.log(boxName);
    count++;
}

function deleteField(count) {
    $('input[name=fee' + count + ']').remove();
    $('button[name=button' + count + ']').remove();
    $('.feeDiv' + count).remove();
    count--;
    console.log(count + "lol");
}
</script>
@endsection