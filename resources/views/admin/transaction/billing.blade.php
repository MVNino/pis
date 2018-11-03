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
        <div class="col-md-8" id="leftPanel">
        {{-- {!! Form::open(['action' => 'Transaction\PaymentController@availService', 'method' => 'POST', 'id' => 'formPayment', 'class' => 'form-material form-horizontal', 'onsubmit' => "return confirm('Avail now and proceed to payment?')"]) !!} --}}
        <form method="POST" id="formPayment" class="form-material form-horizontal">
            @csrf
            <div class="white-box">
                <div class="row">
                    <div class="col-md-7"></div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <div class="row">
                            <div class="col-md-5"><label>Billing Number: </label></div>
                            <div class="col-md-7">
                            <input type="text" class="form-control text-danger" name="numBill" id="billNumber" readonly>
                            </div>
                        </div>
                      </div>  
                    </div>
                </div>
                    <div class="form-group">
                        <label class="col-md-12">Patient Name</span></label>
                        <div class="col-md-12">
                            <select id="patientId" name="slctPatient" class="form-control">
                            @foreach($patients as $patient)
                                <option value="{{ $patient->patient_id }}">
                                    {{ $patient->full_name }}
                                </option>
                            @endforeach
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
                    {{-- Daya ni Leki code --}}
                    <p style="margin-top:158px;"></p>
                    <div align="right">
                        <a style="margin-top:20px;" href="#" role="button" class="btn btn-info waves-effect waves-light m-r-10" id="btnCompute">Compute</a>
                    </div>
            </div>
        </form>
        {{-- {!! Form::close() !!} --}}
                    {{-- Effort ni Leki wag i-remove --}}
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
        </div>                  
        <div class="col-md-4" id="rightPanel">
            <form action="POST" id="formComputePayment" class="form-material form-horizontal">
                <div class="white-box">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-md-12">Initial Amount</label>
                                <input type="number" id="initAmount" value="0" hidden>
                            </div>
                            <div class="col-md-6">
                                <div id="initialAmount"></div>
                                <button type="button" id="add" onclick="addDiscount()" class="btn btn-sm btn-info">
                                    Add Discount
                                </button>
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
                        <div id="txtboxPercent" style="display: none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" style="margin-left:50px;" type="number" name="amount" id="txtPerDiscount">
                                </div>
                                <div class="col-md-2">
                                    <label class="col-md-12">%</label>
                                </div>
                                <div class="col-md-4">
                                    <a href="#" id="btnPercent" class="btn btn-info">Set</a>
                                </div>
                            </div>
                        </div><br>
                        <div id="txtboxAmount" style="display: none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" style="margin-left:50px;" type="number" name="amount" id="txtAmtDiscount">
                                </div>
                                <div class="col-md-2">
                                    <label class="col-md-12">Php</label>
                                </div>
                                <div class="col-md-4">
                                    <a href="#" id="btnAmount" class="btn btn-info">Set</a>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-md-12">Discount Price</label>
                            </div>
                            <div class="col-md-6">
                                <div id="discountedPrice"></div>
                                <input type="numBill" id="discountedAmount" value="0" hidden>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Mode of Payment</label>
                        <select class="form-control" id="selectMode" name="selectMode">
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
                                <div id="totalAmount"></div>
                                <input type="number" id="balAmount" value="0" hidden>
                                <input type="number" id="totAmount" value="0" hidden>
                            </div>
                        </div>
                    </div>
                    <div align="right">
                        <a style="margin-top:20px;" href="#" role="button" id="btnProceed" class="btn btn-info waves-effect waves-light m-r-10"><i class="fa fa-fw fa-lg fa-check-circle"></i>Proceed to Payment</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('pg-specific-js')
<script>
$(() => {
    $('#rightPanel').hide();
    $("#addDiscount").hide();
    let randomNumber =  Math.round(Math.random() * 100000);
    let billNo = '<p style="margin-bottom:0px;" class="text-right">Billing Number</p><p class="text-right box-title text-danger"><font size="5px">#'+randomNumber+'</font></p>';
    $("#billNumber").val(randomNumber);
});

$('#btnCompute').click(() => {
    availServices();
});

function availServices() {
    let data = $("#formPayment").serializeArray();
    // console.log(data);
    let billNumber = $('#billNumber').val();
    let patientId = $('#patientId').val();
    let services = $('#selectServices').val();
    let _token = $('input[name=_token]').val();
    // Ajax POST Request
    $.ajax({
        'dataType' : 'json',
        'type' : "POST", 
        'url' : "/admin/transaction/avail-service", 
        'data': {
            'billNumber' : billNumber, 
            'patientId' : patientId, 
            'services' : services, 
            '_token' : _token 
        }, 
        'success' : function(msg) {
            $('#rightPanel').show();
            $('#btnCompute').hide();
            $('#patientId').attr('disabled', '');
            computeServiceAmount(billNumber);
        }
    });
}

// for service computation na to menn
function computeServiceAmount(billNumber) {
    // Show initial amount
    let initPrice = showInitialAmount(billNumber);

    // if the discount was being added
        // get the price men    
    $('#btnPercent').click(() => {
        let perDiscount = $('#txtPerDiscount').val();
        let billNum = $('#billNumber').val();

        $.get('/admin/transaction/'+billNum+'/show-initial-amount', (response) => {
            let initialPrice = response[0].price;

            // percentage divide by 100 x the initial amount
            let discountedPrice = (perDiscount/100)*initialPrice;
            let actualDiscountedPrice = initialPrice - discountedPrice;
            let html = `<p>PHP ${actualDiscountedPrice}</p>`;
            $("#discountedPrice").html(html);
            let html2 = `<h3 class="text-danger"><b> ${actualDiscountedPrice} PHP</b></h3>`;
            $('#totalAmount').html(html2);
            $('#totAmount').val(actualDiscountedPrice);
            $('#discountedAmount').val(actualDiscountedPrice);
        });
    });


    $('#btnAmount').click(() => {
        let amtDiscount = $('#txtAmtDiscount').val();
        let billNum = $('#billNumber').val();

        $.get('/admin/transaction/'+billNum+'/show-initial-amount', (response) => {
            let initialPrice = response[0].price;
            // percentage divide by 100 x the initial amount
            let discountedPrice = initialPrice - amtDiscount;

            let html = `<p>PHP ${discountedPrice}</p>`;
            $("#discountedPrice").html(html);
            let html2 = `<h3 class="text-danger"><b> ${discountedPrice} PHP</b></h3>`;
            $('#totalAmount').html(html2);
            $('#totAmount').val(discountedPrice);
            $('#discountedAmount').val(discountedPrice);
        });
    });

    // Mode of payment
    $("#selectMode").change(() => {
        let mode = $("#selectMode").val();
        let amount = $('#totAmount').val();
        let balAmount = 0;
        if(mode == 0) {
            // hindi makuha ung value ng tot amount
            console.log(`amount: ${amount}`);
            let totalAmount = amount / 2;
            priceFromMop = totalAmount;
            let html = `<h3 class="text-danger"><b> ${priceFromMop} PHP</b></h3>`;
            $('#totalAmount').html(html);
            balAmount = amount - totalAmount;
            $('#balAmount').val(balAmount);
        } else {
            let html = `<h3 class="text-danger"><b> ${amount} PHP</b></h3>`;
            $('#totalAmount').html(html);  
        }
    });
    
    // PROCEED TO PAYMENT
    $('#btnProceed').click(() => {
        proceedToPayment();        
    });

    function proceedToPayment(){
        let mode = $("#selectMode").val();
        let billNumber = $('#billNumber').val();
        let initialAmount = $('#initAmount').val();
        let discountedAmount = $('#discountedAmount').val();
        let balAmount = $('#balAmount').val();
        let totalAmount = $('#totAmount').val();
        let _token = $('input[name=_token]').val();
        // Ajax POST Request
        $.ajax({
            'dataType' : 'json',
            'type' : "POST", 
            'url' : "/admin/transaction/proceed-to-payment", 
            'data': {
                'billNumber' : billNumber,
                'mode' : mode,
                'initialAmount' : initialAmount, 
                'discountedAmount' : discountedAmount, 
                'balAmount' : balAmount, 
                'totalAmount' : totalAmount,
                '_token' : _token 
            },
            success: (res) => {
                console.log(res);
                window.location.href = `/admin/transaction/receipt/${billNumber}`;
            }
        });   
    }
}

function showInitialAmount(billNumber) {
     $.get('/admin/transaction/'+billNumber+'/show-initial-amount', (response) => {
        let price = response[0].price; 
        let html = `<p>PHP &nbsp ${price}</p>`
        $('#initialAmount').html(html);
        let html2 = `<h3 class="text-danger"><b> ${price} PHP</b></h3>`;
        $('#totalAmount').html(html2);
        $('#totAmount').val(price);
        $('#initAmount').val(price);
    });
}

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
  $("#txtboxAmount").css("display", "none");
  $("#txtboxPercent").css("display", "block");
});

$( "#amtDiscount" ).click(function() {
  let radioValue = $("input[name='discount']:checked").val();
  $("#txtboxPercent").css("display", "none");
  $("#txtboxAmount").css("display", "block");
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