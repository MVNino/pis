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
							<option value="{{ $faq->faq_category }}" selected>{{ $faq->faq_category }}</option>
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
				<div align="right">
                    <button id="btnSave" type="submit" class="btn btn-info">
                        <i class="fa fa-fw fa-lg fa-check-circle"></i> Save
                    </button>
                    <a href="{{ route('maintenance.faqs') }}" role="button" id="btnCancel" type="button" class="btn btn-inverse" style="display: inline-block;">
                        <i class="fa fa-close"></i> Cancel
                    </a>
                </div>
			{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div style="padding-top: 400px;" class="modal fade bd-example-modal-lg" id="manualEditFaqs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h3 id="exampleModalLongTitle"> &nbsp;<b>HELP</b> &nbsp;<i class="fa fa-question-circle"></i></h3>
		</div>
		<div class="modal-body">
			<h4 style="margin-bottom:0;" class="text-primary"><b>FAQs</b></h4>
			<p style="margin-top:0;">This part will discuss the FAQs module. It will show you how to manage the FAQs or the Frequently Asked Questions of the users pertaining to a particular topic that will appear in the website.</p>
			<div style="padding:15px;">
				
				<label><b>Step 1 :</b>&nbsp;</label>
				Under “WEBSITE MAINTENANCE”, click [1] which will direct you to this page.<br><br>
				<img class="dynamic" src="{{asset('img/faqs/faqs.jpg')}}"><br><br>
				To edit an existing FAQ, click [3] which will direct you to this page.<br><br>

				<p class="text-danger"><b><em>How to edit a FAQ?</em></b>&nbsp;</p>
				
				<label><b>Step 2 :</b>&nbsp;</label>
				You will now be able to change the question, answer, and its category. To commit any changes, click [7]. To disregard any changes, click [8].
				<img class="dynamic" src="{{asset('img/faqs/faqs5.jpg')}}"><br><br>
				
				<label><b>Step 3 :</b>&nbsp;</label>
				Once you edited the FAQ, a message [9] will appear that the changes were made successfully.
				<img class="dynamic" src="{{asset('img/faqs/faqs6.jpg')}}"><br><br>

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
        $("#manualEditFaqs").modal("show");
    }
})
</script>
@endsection