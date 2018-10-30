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
<div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">Billing</h3>
                    <form class="form-material form-horizontal" method="POST">
                        <div class="form-group">
                            <label class="col-md-12">Patient Name</span></label>
                            <div class="col-md-12">
                                <input type="text" name="name"  class="form-control">
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label class="col-md-12">Special Services</label>
                            </div>
                            <div class="col-md-12">
                                <select multiple="multiple" class="form-control">
                                    <option value="1">Xray</option>
                                    <option value="12">Laboratory</option>
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
                        <div align="right">
                            <a style="margin-top:20px;" href="{{ route('transaction.receipt') }}" role="button" class="btn btn-info waves-effect waves-light m-r-10"><i class="fa fa-fw fa-lg fa-check-circle"></i>Proceed to Payment</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection

@section('pg-specific-js')
<script>
$("select").multipleSelect({
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