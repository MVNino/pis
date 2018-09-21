@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">FAQs</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i></a></li>
			<li>Maintenance</li>
			<li><a class="active" href="{{ route('maintenance.faqs') }}">FAQs</a></li>
		</ol>
	</div>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="white-box">
				<h3 class="box-title">FAQs</h3>
				{!! Form::open(['action' => 'Maintenance\FAQController@addFAQs', 'method' => 'POST', 'autocomplete' => 'off', 'class' => 'form-material']) !!}
				<form class="form-material form-horizontal">
					<div class="form-group">
						<label class="col-md-12">Question</label>
						<div class="col-md-12">
							<input type="text" name="question" class="form-control"> </div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Answer</label>
						<div class="col-md-12">
							<textarea name = "answer" class="form-control" rows="3"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Category</label>
						<div class="col-md-12">
							<select class="custom-select form-control" name="category">
								<option selected>Select category</option>
								<option value="surgery">Surgery</option>
								<option value="service">Service</option>
								<option value="recovery">Recovery</option>
								<option value="appointment">Appointments</option>
								<option value="payments">Payments</option>
								<option value="others">Others</option>
							  </select>
						</div>
					</div>
					<button type="submit" class="btn btn-info btn-md waves-effect waves-light m-r-10">Submit</button>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection