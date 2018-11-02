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
                                    <button role="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#selectDate{{$patient->patient_id}}">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </center>

                                <!-- Modal for Adding Banner -->
                                <div class="modal fade" id="selectDate{{$patient->patient_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="exampleModalLabel">MEDICAL HISTORY</h4>
                                            </div>
                                            <div class="modal-body">
                                                {!! Form::open(['action' => 'Transaction\PatientController@editRecord', 'method' => 'GET', 'class' => 'form-material form-horizontal'])!!}
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <input name="patient" value="{{$patient->patient_id}}" style="display: none;">
                                                                <label class="col-sm-12">SELECT DATE</label>
                                                                <div class="col-md-12">
                                                                    <select name="record_id" class="form-control">
                                                                        @foreach($medicalRecords as $mr)
                                                                            @if($patient->patient_id == $mr->patient_id)
                                                                                <option value="{{$mr->medical_record_id}}">{{\Carbon\Carbon::createFromFormat('Y-m-d', $mr->med_hist_date)->format('F j, Y')}}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-info">View</button>
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
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