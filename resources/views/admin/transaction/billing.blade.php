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
            <h3 class="box-title">Medical Record</h3>
            <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Birthday</th>
                        <th>Contact</th>
                        <th>Medical History</th>
                    </tr>
                </thead>
                <tbody>
                        <td>Leki Romero</td>
                        <td> October 02, 2009</td>
                        <td>09452066903</td>
                        <td>
                            <a role="button" href="{{action('Transaction\PatientController@editPatients')}}" class="btn btn-sm btn-info">
                            <i class="fa fa-eye"></i>
                            </a>
                        </td>
                <tfoot>
                </tfoot>
			</table>
        </div>
    </div>
</div>
@endsection