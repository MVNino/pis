@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Patient</h4>
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
                        <th>Age</th>
                        <th>Contact</th>
                        <th>E-Mail</th>
                        <th>Medical History</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patients as $patient)
                        <tr>
                            <td>{{$patient->fname}} {{$patient->mname}} {{$patient->lname}}</td>
                            <td>{{$patient->birthday}}</td>
                            <td>{{$patient->contact_no}}</td>
                            <td>{{$patient->email}}</td>
                            <td>
                                <center>
                                    {!! Form::open(['action' => 'Transaction\PatientController@editRecord', 'method' => 'GET', 'class' => 'form-material form-horizontal'])!!}
                                        <input name="id" value="{{$patient->patient_id}}" style="display: none;">
                                        <button role="submit" class="btn btn-sm btn-info">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                    {!!Form::close()!!}
                                </center>
                            </td>
                        </tr>
                    @endforeach
                <tfoot>
                </tfoot>
			</table>
        </div>
    </div>
</div>

<script>
</script>
@endsection