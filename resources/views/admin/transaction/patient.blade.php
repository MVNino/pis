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
                        <th>Contact</th>
                        <th>E-Mail</th>
                        <th>Medical History</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($patients as $patient)
                        <tr>
                            <td>{{$patient->fname}} {{$patient->mname}} {{$patient->lname}}</td>
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
                    @empty
                    <div class="alert alert-warning">
                        There is no record yet.
                    </div>
                <tfoot>
                </tfoot>
                @endforelse
                </tbody>
			</table>
        </div>
    </div>
</div>

<!-- Modal -->
<div style="padding-top: 1020px;" class="modal fade bd-example-modal-lg" id="manualPatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h3 id="exampleModalLongTitle"> &nbsp;<b>HELP</b> &nbsp;<i class="fa fa-question-circle"></i></h3>
		</div>
		<div class="modal-body">
			<h4 style="margin-bottom:0;" class="text-primary"><b>Patients</b></h4>
                <div style="padding:15px;">
				
				<label><b>Step 1 :</b>&nbsp;</label>
				Step 1: Under Patients is the Medical Record of the patients. To go to Patients, click[1].<br><br>

				<label><b>Step 2 :</b>&nbsp;</label>
				Step 2: To view the patient’s medical history, click [2].<br><br>
				<img class="dynamic" src="{{asset('img/patient/patient1.JPG')}}"><br><br>

                <label><b>Step 3 :</b>&nbsp;</label>
				Select an appointment date where you want to add a medical record.<br><br>

                <label><b>Step 4 :</b>&nbsp;</label>
				Once the date is selected, click [3] to view the record.<br><br>
                <img class="dynamic" src="{{asset('img/patient/patient2.JPG')}}"><br><br>

                <label><b>Step 5 :</b>&nbsp;</label>
                To add a medical record, input the patient’s height, weight,temperature, procedure, and treatment. <br><br>

                <label><b>Step 6 :</b>&nbsp;</label>
                To save and add the record, click [4].<br><br>
                <img class="dynamic" src="{{asset('img/patient/patient3.JPG')}}"><br><br>

                <label><b>Step 7 :</b>&nbsp;</label>
                A message will be shown once the medical record has been added.<br><br>
                <img class="dynamic" src="{{asset('img/patient/patient4.JPG')}}"><br><br>
                
                <label><b>Step 8 :</b>&nbsp;</label>
                Select an appointment date where you want to update a medical record.<br><br>

                <label><b>Step 9 :</b>&nbsp;</label>
                Click [5] to view the record.<br><br>
                <img class="dynamic" src="{{asset('img/patient/patient5.JPG')}}"><br><br>

                <label><b>Step 10 :</b>&nbsp;</label>
                To upload a file, click [6] and select the file you wish to upload.<br><br>

                <label><b>Step 11 :</b>&nbsp;</label>
                To save the uploaded file, click Add File [7].<br><br>

                <label><b>Step 12 :</b>&nbsp;</label>
                To save it, click [8].<br><br>
                <img class="dynamic" src="{{asset('img/patient/patient6.JPG')}}"><br><br>

                <label class="text-danger"><b>Note</b>&nbsp;</label>
                You cannot add files if there is no record yet.<br><br>

                <label><b>Step 13 :</b>&nbsp;</label>
                A message will be shown once the medical record has been updated.<br><br>
                <img class="dynamic" src="{{asset('img/patient/patient7.JPG')}}"><br><br>
            </div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>
		</div>
		</div>
	</div>
</div>
@endsection

@section('pg-specific-js')
<script>
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 112) { 
        e.preventDefault();
        $("#manualPatient").modal("show");
    }
})
</script>
@endsection