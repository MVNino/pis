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
                        <label class="col-md-12">Medical Treatment History</label>
                        <div class="col-md-12">
                            <input name="id" value="{{$patient->patient_id}}" style="display: none;">
                            <select id="dateSelect" name="mr" class="form-control" rows="5">
                                @foreach($mr as $r)
                                    <option value="{{$r->medical_record_id}}">
                                        {{\Carbon\Carbon::createFromFormat('Y-m-d', $r->med_hist_date)->format('F j, Y')}}
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
                    @foreach($mr as $r)
                        <button class="btn btn-info" type="button" id="{{$r->medical_record_id}}" data-toggle="collapse" data-target="#collapseRecord{{$r->medical_record_id}}" aria-expanded="false" aria-controls="collapseRecord">button</button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div><br>

@foreach($mr as $r)
        <div class="collapse" id="collapseRecord{{$r->medical_record_id}}">
            <div class="container">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-light">
                            Medical Record
                            <button type="button" class="close" aria-label="Close" data-toggle="collapse" data-target="#collapseRecord{{$r->medical_record_id}}" aria-expanded="false" aria-controls="collapseRecord">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </h3>    
                    </div>
                    <div class="card-body">
                        <div class="container">
                            {!!Form::open(['action' => ['Transaction\PatientController@updateMedical', $r->medical_record_id], 'method' => 'POST', 'class' => 'form-material form-horizontal'])!!}
                                {{Form::hidden('_method', 'PUT')}}<br>
                                <h5>
                                    Patient ID: {{sprintf("%011d", $r->patient_id)}}
                                    <span class="pull-right">{{\Carbon\Carbon::createFromFormat('Y-m-d', $r->med_hist_date)->format('F j, Y')}}</span>
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
                                            <label class="col-md-12">Birthdate</label>
                                            <div class="col-md-12">
                                                <input type="text" name="birthdate" class="form-control" value="{{\Carbon\Carbon::createFromFormat('Y-m-d', $patient->birthday)->format('F j, Y')}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-12">Contact Number</label>
                                            <div class="col-md-12">
                                                <input type="text" name="contactNumber" class="form-control" value="{{$patient->contact_no}}"disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=col-md-4>
                                        <div class="form-group">
                                            <label class="col-md-12">Height</label>
                                            <div class="col-md-12">
                                                <input type="text" name="height" class="form-control" value="{{$r->height}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=col-md-4>
                                        <div class="form-group">
                                            <label class="col-md-12">Weight</label>
                                            <div class="col-md-12">
                                                <input type="text" name="weight" class="form-control" value="{{$r->weight}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=col-md-4>
                                        <div class="form-group">
                                            <label class="col-md-12">Temperature</label>
                                            <div class="col-md-12">
                                                <input type="text" name="temperature" class="form-control" value="{{$r->temperature}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Procedure</label>
                                    <div class="col-md-12">
                                        <textarea name="procedure" class="form-control" rows="5">{{$r->med_hist_procedure}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Treatment</label>
                                    <div class="col-md-12">
                                        <textarea name="procedure" class="form-control" rows="5">{{$r->treatment}}</textarea>
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
                                                @if($file->medical_record_id == $r->medical_record_id)
                                                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#file{{$file->medical_file_record_id}}">
                                                        {{$file->file_title}}
                                                    </button>
                                                    <!-- Modal for Adding Banner -->
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
                                        <input name="mrid" style="display: none;" value="{{$r->medical_record_id}}">
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
                        </div>
                    </div>
                </div>
            </div>
        </div><br/><br/><br/>
@endforeach

<script>
    function openRecord()
    {
        var selected = document.getElementById("dateSelect").value;

        document.getElementById(selected).click();
    }
</script>

@endsection
