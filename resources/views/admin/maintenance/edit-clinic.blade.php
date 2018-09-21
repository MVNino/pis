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
            {!!Form::open(['action' => ['Maintenance\ClinicController@editClinic', $clinic->clinic_contact_id], 'method' => 'POST', 'class' => 'form-material'])!!}
            @csrf
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
                    <label class="col-md-12">Email Address</span></label>
                    <div class="col-md-12">
                        <input type="text" name="email" class="form-control" value="{{$clinic->clinic_email}}" /> 
                    </div>
                </div>
                {{Form::hidden('_method', 'PUT')}}
                <div align="right">
                    <button type="submit" class="btn btn-info"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
				</div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection