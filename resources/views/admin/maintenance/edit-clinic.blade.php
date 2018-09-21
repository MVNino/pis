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
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Clinic Information</h3>
            {!!Form::open(['action' => ['Maintenance\ClinicController@editClinic', $clinic->clinic_contact_id], 'method' => 'POST'])!!}
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
                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Update</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection