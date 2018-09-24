@extends('admin.layouts.app')

@section('breadcrumb')
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
	<h4 class="page-title">FAQs</h4>
</div>
<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i></a></li>
		<li>Maintenance</li>
		<li><a href="{{ route('maintenance.faqs') }}">FAQs</a></li>
		<li><a class="active" href="{{ $faq->faq_id }}">View FAQs</a></li>
	</ol>
</div>
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-light">Edit FAQs</h3>
        </div>
        <div class="card-body">
            <div class="container">
			{!! Form::open(['action' => ['Maintenance\FAQController@updateFAQs', $faq->faq_id], 'method' => 'POST', 'class' => 'form-material form-horizontal']) !!}
				@csrf
				<div class="form-group">
					<label class="col-md-12">Question</label>
					<div class="col-md-12">
						<input type="text" name="question" class="form-control" value="{{ $faq->faq_question }}"> 
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12">Answer</label>
					<div class="col-md-12">
						<textarea name = "answer" class="form-control" rows="3">{{ $faq->faq_answer }}</textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12">Category</label>
					<div class="col-md-12">
						<select class="custom-select" name="category">
							<option value="$faq->faq_category" selected>{{ $faq->faq_category }}</option>
							<option value="surgery">Surgery</option>
							<option value="service">Service</option>
							<option value="recovery">Recovery</option>
							<option value="appointment">Appointments</option>
							<option value="payments">Payments</option>
							<option value="others">Others</option>
						</select>
					</div>
				</div>
				{{ Form::hidden('_method', 'PUT') }}
				<button type="submit" class="btn btn-info waves-effect waves-light m-r-10 float-right">
					<i class="fa fa-fw fa-lg fa-check-circle"></i> Submit
				</button>
			{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection