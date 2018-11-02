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
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3><b>BILLING ID</b> <span class="pull-right">#5669626</span></h3>
            <form class="form-material">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-3">
                        <label class="col-md-12">Official Receipt Number:</label>    
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input id="OR" class="form-control" name="ORNumber" placeholder="Enter here">
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
                                <p><u>LhexyKhrystelle B. Romero</u></p>
                                <i class="fa fa-calendar"></i> September 25, 2018</p>
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
                        <td>1</td>
                        <td>X-ray</td>
                        <td class="text-right">PHP 1.00</td>
                <tfoot>
                </tfoot>
			</table>
                </div>
                <div class="col-md-12">
                    <div class="pull-right m-t-30 text-right">
                        <h3><b>Total :</b>PHP 2200</h3> 
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <form class="form-material">
                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-3">
                                <label class="col-md-12">Payment Amount:</label>    
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" id="PA" class="form-control" name="paymentAmount" placeholder="Enter here">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-3">
                                <label class="col-md-12">Change:</label>    
                            </div>
                            <div class="col-md-3">
                                <p>10 PHP</p>
                            </div>
                        </div>
                    </form>
                    <div class="text-right">
                        <button onclick="toCheckOut()" id="checkOut" type="submit" class="btn btn-info"><i class="fa fa-fw fa-lg fa-check-circle"></i>Check Out</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('pg-specific-js')
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