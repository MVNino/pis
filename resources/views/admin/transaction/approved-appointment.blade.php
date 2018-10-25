@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Approved Appointment</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li>Transaction</li>
			<li>
				<a class="active" href="#">Approved Appointment</a>
			</li>
		</ol>
	</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="text-center"><b>LIST OF APPROVED APPOINTMENT</b></h3>
            <div class="row">
                <div class = "offset-md-1 col-md-10">
                    <h4 class="text-center text-danger"><b>October 25, 2018</b></h4>
                    <div class="table-responsive m-t-40">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width:150px;"class="text-left">Time</th>
                                    <th>Patient Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-left">8:00 AM</td>
                                    <td>LhexyKhrystelle B. Romero</td>
                                </tr>
                                <tr>
                                    <td class="text-left">9:00 AM</td>
                                    <td>Marlon V. Nino</td>
                                </tr>
                            </tbody>
                        </table><hr>
                    </div>
                    <h4 class="text-center text-danger"><b>October 26, 2018</b></h4>
                    <div class="table-responsive m-t-40">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width:150px;"class="text-left">Time</th>
                                    <th>Patient Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-left">8:00 AM</td>
                                    <td>LhexyKhrystelle B. Romero</td>
                                </tr>
                                <tr>
                                    <td class="text-left">9:00 AM</td>
                                    <td>Marlon V. Nino</td>
                                </tr>
                            </tbody>
                        </table><hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
