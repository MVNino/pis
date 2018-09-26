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
@endsection