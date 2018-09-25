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
            <h3><b>BILLING ID</b> <span class="pull-right">#5669626</span></h3>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left"> 
                        <address>
                            <h3> &nbsp;<b class="text-danger">Hospital</b></h3>
                        </address> 
                    </div>
                    <div class="pull-right text-right"> <address>
                        <h3>To,</h3>
                        <h4 class="font-bold">Edward D. Cullen</h4>
                        <p class="m-t-30"><b>Date :</b> <i class="fa fa-calendar"></i> September 25,2018</p>
                        </address> </div>
                </div>
                <div class="col-md-12">
                    <div class="table-responsive m-t-40">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Item Name</th>
                                    <th class="text-right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>Medicines</td>
                                    <td class="text-right">1000 PHP</td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>X-ray Reports</td>
                                    <td class="text-right">1200 PHP</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="pull-right m-t-30 text-right">
                        <h3><b>Total :</b> 2200 PHP</h3> </div>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="text-right">
                        <button onclick="javascript:window.print();" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
