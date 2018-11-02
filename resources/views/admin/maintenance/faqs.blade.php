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
			<div align="right">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					<i class="fa fa-plus"></i> Add FAQs
				</button>
			</div><br>
			<table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
				<thead>
					<tr>
						<th>Questions</th>
						<th>Answer</th>
						<th>Category</th>
						<th colspan="2" class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					@forelse($faqs as $faq)
						<tr>
							<td>{{ $faq->faq_question }}</td>
							<td>{{ $faq->faq_answer }}</td>
							<td>{{ $faq->faq_category }}</td>
			
							<td>
								<!-- for href="edit-faqs" -->
								<a role="button" class="btn btn-sm btn-primary" href="/admin/maintenance/faqs/{{ $faq->faq_id }}">
									<i class="fa fa-edit"></i>
								</a>
							</td>
							<td>
								{!!Form::open(['action' => ['Maintenance\FAQController@softDelete', $faq->faq_id],'method' => 'POST', 'onsubmit' => "return confirm('Remove faq?')"])!!}
									{{Form::hidden('_method', 'PUT')}}
									<button type="submit" class="btn btn-sm btn-icon btn-danger delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
										<i class="fa fa-times" aria-hidden="true"></i>
									</button>
								{!!Form::close()!!}
							</td>
						</tr>
					@empty
						<div class="alert alert-warning">
							There is no record yet.
						</div>
					@endforelse
				</tbody>
				<tfoot>
				</tfoot>
			</table>
			<div align="center">
				{{ $faqs->links() }}	
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="exampleModalLabel">Add FAQs</h4>
			</div>
			{!! Form::open(['action' => 'Maintenance\FAQController@addFAQs', 'method' => 'POST', 'class' => 'form-material form-horizontal']) !!}
				@csrf
				<div class="modal-body">
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
							<select class="custom-select" name="category">
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
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-info"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
				</div>
			</form>	
		</div>
	</div>
</div>


<!-- Modal -->
<div style="padding-top: 650px;" class="modal fade bd-example-modal-lg" id="manualFaqs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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

				<p class="text-danger"><b><em>How to add a FAQ?</em></b>&nbsp;</p>
				
				<label><b>Step 1 :</b>&nbsp;</label>
				To add a new FAQs, click [2] which will direct you to this page.<br><br>
				<img class="dynamic" src="{{asset('img/faqs/faqs1.jpg')}}"><br><br>
				
				<label><b>Step 2 :</b>&nbsp;</label>
				Input the question of the FAQ.

				<label><b>Step 3 :</b>&nbsp;</label>
				Input the answer that corresponds to the question.

				<label><b>Step 4 :</b>&nbsp;</label>
				Select the category in which the question belongs.

				<label><b>Step 5 :</b>&nbsp;</label>
				To save the new FAQ, click [5]. A message [6] will be shown that the adding of FAQ is successful.<br><br>
				<img class="dynamic" src="{{asset('img/faqs/faqs2.jpg')}}"><br><br>

				<p class="text-danger"><b><em>How to delete a FAQ?</em></b>&nbsp;</p>
				
				<label><b>Step 1 :</b>&nbsp;</label>
				To delete a FAQ, click [4]. Once you clicked the button, a confirmation message will appear to confirm your action.<br><br>
				<img class="dynamic" src="{{asset('img/faqs/faqs3.jpg')}}"><br><br>

				<label><b>Step 2 :</b>&nbsp;</label>
				Click [10] to remove the FAQ. Click [11] to disregard any changes. Once you deleted the FAQ, a message [12] will appear that the FAQ is removed successfully.<br><br>
				<img class="dynamic" src="{{asset('img/faqs/faqs4.jpg')}}"><br><br>
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
window.onhelp = function() {
	return false;
};
window.onkeydown = evt => {
	if (evt.keyCode == 112){
		$("#manualFaqs").modal("show");
		
	}
	return false;
};
</script>
@endsection