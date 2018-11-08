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
                    <div class="col-md-12">
                        <label>Contact</span></label>
                        <div>
                            <input type="text" name="contact" class="form-control" value="{{$clinic->clinic_contact}}" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label>Location</span></label>
                        <div>
                            <input type="text" name="location" class="form-control" value="{{$clinic->clinic_location}}" /> 
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <label>Clinic Opening Time</label>
                        <input type="time" name="open" class="form-control" value="{{$clinic->clinic_open_time}}">
                    </div>
                    <div class="col-md-4">
                        <label>Clinic Closing Time</label>
                        <input type="time" name="close" class="form-control" value="{{$clinic->clinic_close_time}}">
                    </div>
                    <div class="col-md-4">
                        <label class="col-md-12">Clinic Days</span></label>
                        <input type="text" name="days" class="form-control" value="{{$clinic->clinic_days}}"  /> 
                    </div>
                </div>
                <div class="form-group">
                    <!-- Existing image na nasa database -->    
                    <label class="col-md-12">Uploaded Map</span></label>
                    <div class="col-md-4">
                        <div align="center">
                            <a target="_blank" href="/storage/images/map/{{$clinic->clinic_map}}">
                                <img src="/storage/images/map/{{$clinic->clinic_map}}" style="width: 150px">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label class="col-sm-6">Map Image
                            <small>Current Image: <a target="_blank" href="/storage/images/map/{{$clinic->clinic_map}}">{{ $clinic->clinic_map }}</a></small>
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

<!-- Modal -->
<div style="padding-top: 415px;" class="modal fade bd-example-modal-lg" id="manualEditClinic" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h3 id="exampleModalLongTitle"> &nbsp;<b>HELP</b> &nbsp;<i class="fa fa-question-circle"></i></h3>
		</div>
		<div class="modal-body">
			<h4 style="margin-bottom:0;" class="text-primary"><b>Clinic</b></h4>
			<p style="margin-top:0;">This part will discuss the Clinic module. It will show you how to manage the clinic information in the system.</p>
			<div style="padding:15px;">
				
				<p class="text-danger"><b><em>How to edit a Clinic?</em></b>&nbsp;</p>

				<label><b>Step 1 :</b>&nbsp;</label>
				To edit an existing clinic, click [3] which will direct you to this page.<br><br>
                <img class="dynamic" src="{{asset('img/clinic/clinic.jpg')}}"><br><br>
				
				<label><b>Step 2 :</b>&nbsp;</label>
				You will now be able to change the details of the said clinic.<br><br>
                <img class="dynamic" src="{{asset('img/clinic/clinic5.jpg')}}"><br><br>

				<label><b>Step 3 :</b>&nbsp;</label>
				To commit any changes, click [7]. To disregard any changes, click [8].<br><br>

				<label><b>Step 4 :</b>&nbsp;</label>
				Once you edited the clinic, a message [9] will appear that the changes were made successfully.<br><br>
				<img class="dynamic" src="{{asset('img/clinic/clinic6.jpg')}}"><br><br>
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
        $("#manualEditClinic").modal("show");
    }
})
</script>
@endsection