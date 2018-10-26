@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Appointment</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li>Transaction</li>
			<li>
				<a class="active" href="#">Appointment</a>
			</li>
		</ol>
	</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">list of Appointment</h3>
            <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Date and Time</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                        <td>Leki Romero</td>
                        <td>lhexyromero@gmail.com</td>
                        <td>09452066903</td>
                        <td>October 25, 2018 - 8AM</td>
                        <td class="text-center">
                            <!-- <a role="button" href="{{action('Transaction\PatientController@editPatients')}}" class="btn btn-sm btn-info">
                            <i class="fa fa-eye"></i>
                            </a> -->
                            <a role="button" href="#" class="btn btn-sm btn-success">Approve</a>
                            <a role="button" href="#" class="btn btn-sm btn-warning">Re-schedule</a>
				</button>
                        </td>
                <tfoot>
                </tfoot>
			</table>
        </div>
    </div>
</div>
@endsection