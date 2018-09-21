@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">News</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li>Transaction</li>
			<li>
				<a class="active" href="{{ route('maintenance.news') }}">All Patients</a>
			</li>
		</ol>
	</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Medical Record</h3>
            <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Medical History Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        <td>Leki Romero</td>
                        <td> October 02, 2009</td>
                        <td>
                            <a role="button" href="{{action('Transaction\PatientController@editPatients')}}" class="btn btn-sm btn-info">
                            <i class="fa fa-eye"></i>
                            </a>
                        </td>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            <div class="text-right">
                                <ul class="pagination"> </ul>
                            </div>
                        </td>
                    </tr>
                </tfoot>
			</table>
        </div>
    </div>
</div>
@endsection