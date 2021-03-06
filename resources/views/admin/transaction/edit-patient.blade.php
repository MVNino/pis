@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Medical Record</h4>
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
<div class="container">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-light">Medical Records</h3>    
        </div>
        <div class="card-body">
            <div class="container">
                    <br/>
                    <div class="form-group">
                        <label class="col-md-12">Appointment Date</label>
                        <div class="col-md-12">
                            <select id="dateSelect" name="mr" class="form-control" rows="5">
                                @foreach($ap as $r)
                                    <option value="{{$r->appointment_id}}">
                                        {{\Carbon\Carbon::createFromFormat('Y-m-d', $r->appointment_date)->format('F j, Y')}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div align="right" class="col-md-12">
                            <button type="button" class="btn btn-info" onclick="openRecord()">
                                <i class="fa fa-fw fa-lg fa-check-circle"></i> View Record
                            </button>
                        </div>
                    </div>       
                <div style="display: none;">
                    @foreach($ap as $r)
                        <button class="btn btn-info" type="button" id="{{$r->appointment_id}}" data-toggle="collapse" data-target="#collapseRecord{{$r->appointment_id}}" aria-expanded="false" aria-controls="collapseRecord">button</button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div><br>

@foreach($ap as $r)
    <div class="form-material form-horizontal">
        <div class="collapse" id="collapseRecord{{$r->appointment_id}}">
            <div class="container">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-light">
                            Medical Record
                            <button type="button" class="close" aria-label="Close" data-toggle="collapse" data-target="#collapseRecord{{$r->appointment_id}}" aria-expanded="false" aria-controls="collapseRecord">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </h3>    
                    </div>
                    <div class="card-body">
                        <div class="container">
                                <br>
                                <h5>
                                    Patient ID: {{sprintf("%011d", $r->patient_id)}}
                                    <span class="pull-right">{{\Carbon\Carbon::createFromFormat('Y-m-d', $r->appointment_date)->format('F j, Y')}}</span>
                                </h5>
                                <br/>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-md-12">Last Name</label>
                                            <div class="col-md-12">
                                                <input type="text" name="lastName" class="form-control" value="{{$patient->lname}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-md-12">First Name</label>
                                            <div class="col-md-12">
                                                <input type="text" name="firstName" class="form-control" value="{{$patient->fname}}" disabled>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-md-12">Middle Name</label>
                                            <div class="col-md-12">
                                                <input type="text" name="middleName" class="form-control" value="{{$patient->mname}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-12">Contact Number</label>
                                            <div class="col-md-12">
                                                <input type="text" name="contactNumber" class="form-control" value="{{$patient->contact_no}}"disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-12">E-Mail</label>
                                            <div class="col-md-12">
                                                <input type="text" name="birthdate" class="form-control" value="{{$patient->email}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="display: none;">{{$ret = 0}}</div>
                                @foreach($medicalrecords as $mr)
                                    @if($mr->med_hist_date == $r->appointment_date)
                                        {!!Form::open(['action' => ['Transaction\PatientController@updateMedical', $r->appointment_id], 'method' => 'POST', 'class' => 'form-material form-horizontal'])!!}
                                            {{Form::hidden('_method', 'PUT')}}
                                            <div style="display: none">{{$ret = $ret + 1}}</div>
                                            <div class="row">
                                                <div class=col-md-4>
                                                    <div class="form-group">
                                                        <label class="col-md-12">Height</label>
                                                        <div class="col-md-12">
                                                            <input type="text" name="height" class="form-control" value="{{$mr->height}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=col-md-4>
                                                    <div class="form-group">
                                                        <label class="col-md-12">Weight</label>
                                                        <div class="col-md-12">
                                                            <input type="text" name="weight" class="form-control" value="{{$mr->weight}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=col-md-4>
                                                    <div class="form-group">
                                                        <label class="col-md-12">Temperature</label>
                                                        <div class="col-md-12">
                                                            <input type="text" name="temperature" class="form-control" value="{{$mr->temperature}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Procedure</label>
                                                <div class="col-md-12">
                                                    <textarea name="procedure" class="form-control" rows="5">{{$mr->med_hist_procedure}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Treatment</label>
                                                <div class="col-md-12">
                                                    <textarea name="treatment" class="form-control" rows="5">{{$mr->treatment}}</textarea>
                                                </div>
                                            </div>
                                            <div align="right">
                                                <button id="btnSave" type="submit" class="btn btn-info">
                                                    <i class="fa fa-fw fa-lg fa-check-circle"></i> Save
                                                </button>
                                                <button id="btnCancel" type="button" class="btn btn-inverse" style="display: inline-block;">
                                                    <i class="fa fa-close"></i> Cancel
                                                    <a href="#"></a>
                                                </button>
                                            </div>
                                        {!!Form::close()!!}
                                        {!! Form::open(['action' => 'Transaction\PatientController@addMedicalFileRecord', 'method' => 'POST', 'autocomplete' => 'off', 'enctype' => 'multipart/form-data', 'class' => 'form-material form-horizontal'])!!}
                                            <div class="form-group">
                                                <label class="col-md-12">Uploaded Test Resut</label>
                                                <div class="offset-md-1 col-md-12">
                                                    @if(count($mfr)>0)
                                                        @foreach($mfr as $file)
                                                            @if($file->medical_record_id == $mr->medical_record_id)
                                                                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#file{{$file->medical_file_record_id}}">
                                                                    {{$file->file_title}}
                                                                </button>
                                                                <!-- Modal for  Viewing Files -->
                                                                <div class="modal fade" id="file{{$file->medical_file_record_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                                <h4 class="modal-title" id="exampleModalLabel">MEDICAL TEST RESULT</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <img src="/storage/images/testResults/{{$file->file_title}}" style="width: 100%;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    @else
                                                        No Files Attached
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-12">Test Result</label>
                                                <div class="col-lg-6 col-md-6">
                                                    <label>File Name</label>
                                                    <input type="text" name="fileName" class="form-control" required/>
                                                    <input name="mrid" style="display: none;" value="{{$mr->medical_record_id}}">
                                                </div>
                                                <div class="fileinput fileinput-new input-group col-lg-6 col-md-6" data-provides="fileinput">
                                                    <label>File Upload</label>
                                                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                        <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                    <input type="hidden"><input type="file" name="testResultImage" accept=".jpg,.jpeg,.png"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                                <div align="right">
                                                    <button id="btnSave" type="submit" class="btn btn-info">
                                                        <i class="fa fa-fw fa-lg fa-plus-square"></i> Add File
                                                    </button>
                                                </div>
                                            </div><br>
                                        {!!Form::close()!!}
                                    @endif
                                @endforeach
                                @if($ret == 0)
                                    {!!Form::open(['action' => 'Transaction\PatientController@addMedical', 'method' => 'POST', 'class' => 'form-material form-horizontal'])!!}
                                        <input name="patient" value="{{$r->patient_id}}" style="display: none;">
                                        <input type="date" value="{{$r->appointment_date}}" style="display: none;" name="med_hist_date">
                                        <div class="row">
                                            <div class=col-md-4>
                                                <div class="form-group">
                                                    <label class="col-md-12">Height</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="height" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=col-md-4>
                                                <div class="form-group">
                                                    <label class="col-md-12">Weight</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="weight" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=col-md-4>
                                                <div class="form-group">
                                                    <label class="col-md-12">Temperature</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="temperature" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Procedure</label>
                                            <div class="col-md-12">
                                                <textarea name="procedure" class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Treatment</label>
                                            <div class="col-md-12">
                                                <textarea name="treatment" class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div align="right">
                                            <button id="btnSave" type="submit" class="btn btn-info">
                                                <i class="fa fa-fw fa-lg fa-check-circle"></i> Save
                                            </button>
                                            <button id="btnCancel" type="button" class="btn btn-inverse" style="display: inline-block;">
                                                <i class="fa fa-close"></i> Cancel
                                                <a href="#"></a>
                                            </button>
                                        </div>
                                    {!!Form::close()!!}
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br/><br/><br/>

<!-- Modal -->
<div style="padding-top: 1020px;" class="modal fade bd-example-modal-lg" id="manualEditPatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
@endforeach

<script>
    function openRecord()
    {
        var selected = document.getElementById("dateSelect").value;

        document.getElementById(selected).click();
    }

    window.addEventListener("keydown",function (e) {
    if (e.keyCode === 112) { 
        e.preventDefault();
        $("#manualEditPatient").modal("show");
    }
})
</script>

@endsection
