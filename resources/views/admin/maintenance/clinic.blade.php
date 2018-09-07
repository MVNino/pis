@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Clinic</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Maintenance</a></li>
			<li class="active">Clinic</li>
		</ol>
	</div>
@endsection

@section('content')
    @foreach($clinic as $c)
        {!! Form::open(['action' => 'ClinicController@updateClinic', 'method' => 'POST', 'autocomplete' => 'off'])!!}
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title">Clinic Information</h3>
                        <form class="form-material form-horizontal" method = "POST">
                            <div class="form-group">
                                <label class="col-md-12">Contact</span></label>
                                <div class="col-md-12">
                                    <input type="text" name="contact" class="form-control" placeholder="{{$c->clinic_contact}}"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Location</label>
                                <div class="col-md-12">
                                    <input type="text" name="location" class="form-control" placeholder="{{$c->clinic_location}}"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Clinic Hours</span></label>
                                <div class="col-md-12">
                                    <input type="text" name="hours" class="form-control" placeholder="{{$c->clinic_hours}}"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Clinic Days</span></label>
                                <div class="col-md-12">
                                    <input type="text" name="days" class="form-control" placeholder="{{$c->clinic_days}}"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Email Address</label>
                                <div class="col-md-12">
                                    <input type="text" name="email" class="form-control" placeholder="{{$c->clinic_email}}"> </div>
                            </div>
                            <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                            <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    @endforeach
@endsection