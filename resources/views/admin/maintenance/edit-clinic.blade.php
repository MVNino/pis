@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Clinic</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Maintenance</a></li>
			<li><a href="/admin/maintenance/clinic">Clinic</a></li>
			<li class="active">Edit Information</li>
		</ol>
	</div>
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-light">Edit Details</h3>
        </div>
        <div class="card-body">
            <div class="container">
            {!! Form::open(['action' => ['Maintenance\ClinicController@updateClinic', $clinic->clinic_contact_id], 'method' => 'POST', 'enctype' => 'multipart/form-data','class' => 'form-material' ,'autocomplete' => 'off'])!!}
            @csrf
            {{Form::hidden('_method', 'PUT')}}
                <div class="form-group">
                    <label class="col-md-12">Contact</span></label>
                    <div class="col-md-12">
                        <input type="text" name="contact" class="form-control" value="{{$clinic->clinic_contact}}" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Location</span></label>
                    <div class="col-md-12">
                        <input type="text" name="location" class="form-control" value="{{$clinic->clinic_location}}" /> 
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6">Clinic Opening Time</span></label>
                    <label class="col-md-6">Clinic Closing Time</span></label>
                    <div class="col-md-6">
                        <input type="time" name="open" class="form-control" value="{{$clinic->clinic_open_time}}">
                    </div>
                    <div class="col-md-6">
                        <input type="time" name="close" class="form-control" value="{{$clinic->clinic_close_time}}" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Clinic Days</span></label>
                    <div class="col-md-12">
                        <input type="text" name="days" class="form-control" value="{{$clinic->clinic_days}}"  /> 
                    </div>
                </div>
                <div class="form-group">
                    <!-- Existing image na nasa database -->    
                    <label class="col-md-12">Uploaded Map</span></label>
                    <img src="">
                </div>
                <div class="form-group">
                    <label class="col-sm-12">Map Image
                    <small>Current Image: <a target="_blank" href="/storage/images/news/{{ $clinic->clinic_email }}">{{ $clinic->clinic_map }}</a></small>
                    </label>
                        <div class="col-md-12">
                            <div class="form-group">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                <input type="file" name="fileMapImg"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                        <label class="col-md-12">Clinic Places</span></label>
                        <div class="col-md-12">
                            <input type="text" name="places" class="form-control" value="{{$clinic->clinic_places}}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Telephone</span></label>
                        <div class="col-md-12">
                            <input type="text" name="telephone" class="form-control" value="{{$clinic->clinic_telephone}}" /> 
                        </div>
                    </div>
                </div> 
                {{Form::hidden('_method', 'PUT')}}
                <div align="right">
                    <button type="submit" class="btn btn-info"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                    <a href="{{ route('maintenance.clinic') }}" role="button" id="btnCancel" type="button" class="btn btn-inverse" style="display: inline-block;">
                        <i class="fa fa-close"></i> Cancel
                    </a>
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection