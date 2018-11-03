@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">News</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li>Maintenance</li>
			<li>
				<a class="active" href="{{ route('maintenance.news') }}">News</a>
			</li>
		</ol>
	</div>
@endsection

@section('content')
{{-- List News --}}
<div class="row">
	<div class="col-lg-12">
		<div class="white-box">
			<div align="right">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					<i class="fa fa-plus"></i> Add News
				</button><br><br>
			</div>
			<table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
				<thead>
					<tr>
						<th>Order</th>
						<th>News Title</th>
						<th>News Description</th>
						<th>Status</th>
						<th colspan="2" class = "text-center">Action</th>
					</tr>
				</thead>
				<tbody>
				@forelse($news as $new)
					<tr>
						<td>{{ $new->news_order }}</td>
						<td>{{ $new->news_title }}</td>
						<td>{{ $new->news_desc }}</td>
						<td>
							@if($new->isActive == 1)
							<span class="label label-table label-success">
								<a href="/admin/maintenance/news/{{ $new->news_id }}/deactivate" class="text-light">Active</a>
							</span>
							@else
							<span class="label label-table label-danger">
								<a href="/admin/maintenance/news/{{ $new->news_id }}/activate" class="text-light">Inactive</a>
							</span>
							@endif
						</td>
						<td class="text-center">
							<a role="button" class="btn btn-sm btn-primary" href="/admin/maintenance/news/{{ $new->news_id }}">
								<i class="fa fa-edit"></i>
							</a>
						</td>
						<td class="text-center">
							<a role="button" class="btn btn-sm btn-danger" href="/admin/maintenance/news/{{ $new->news_id }}/soft-delete">
								<i class="fa fa-times"></i>
							</a>
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
				{{ $news->links() }}
			</div>
		</div>
	</div>
</div>
{{-- /List News --}}

{{-- Add news modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="exampleModalLabel">Add News</h4>
			</div>
			{!! Form::open(['action' => 'Maintenance\NewsController@addNews', 'method' => 'POST', 
			'autocomplete' => 'off', 'enctype' => 'multipart/form-data', 'class' => 'form-material form-horizontal'])!!}
			<div class="modal-body">
				@csrf
					<div class="form-group">
						{{ Form::label('lblOrder', 'Order of viewing', ['class' => 'col-md-12']) }}
						<div class="col-md-12">
							{{ Form::number('numOrder', '', ['class' => 'form-control', 'min' => '1']) }}		
						</div>			
					</div>
					<div class="form-group">
						{{ Form::label('lblNewsTitle', 'News Title', ['class' => 'col-md-12']) }}
						<div class="col-md-12">
							{{ Form::text('title', '', ['class' => 'form-control']) }}
						</div>
					</div>
					<div class="form-group">
						{{ Form::label('lblNewsDesc', 'News Description' , ['class' => 'col-md-12']) }}
						<div class="col-md-12">
							{{ Form::textarea('description', '', ['class' => 'form-control','rows' =>'5']) }}
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Image</label>
							<div class="col-md-12">
								<div class="fileinput fileinput-new input-group" data-provides="fileinput">
									<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
									<input type="file" name="fileNewsImg"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
								</div>
							</div>
					</div>			
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-info"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
{{-- /Add news modal --}}

<!-- Modal -->
<div style="padding-top: 820px;" class="modal fade bd-example-modal-lg" id="manualNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h3 id="exampleModalLongTitle"> &nbsp;<b>HELP</b> &nbsp;<i class="fa fa-question-circle"></i></h3>
		</div>
		<div class="modal-body">
			<h4 style="margin-bottom:0;" class="text-primary"><b>News</b></h4>
			<p style="margin-top:0;">This part will discuss the News module. It consists of new information or report about current events. It will show you how to manage the News that will be displayed in the website.</p>
			<div style="padding:15px;">
				
				<label><b>Step 1 :</b>&nbsp;</label>
				Under “WEBSITE MAINTENANCE”, click [1] which will direct you to this page.<br><br>
				<img class="dynamic" src="{{asset('img/news/news.jpg')}}"><br><br>

				<p class="text-danger"><b><em>How to add a News?</em></b>&nbsp;</p>
				
				<label><b>Step 1 :</b>&nbsp;</label>
				To add a recent News, click [2] which will direct you to this page
				<img class="dynamic" src="{{asset('img/news/news1.jpg')}}"><br><br>

				<label><b>Step 2 :</b>&nbsp;</label>
				Input the number of order of the News.<br><br>

				<label><b>Step 3 :</b>&nbsp;</label>
				Input the title of the News.<br><br>

				<label><b>Step 4 :</b>&nbsp;</label>
				Input the description of the News.<br><br>

				<label><b>Step 5 :</b>&nbsp;</label>
				Select an image for the News. After selecting an image, you will be given an option to change or remove the image<br><br>

				<label><b>Step 6 :</b>&nbsp;</label>
				To save the recent News, click [5]. A message [6] will be shown that the adding of News is successful.<br><br>

				<label><b>Step 7 :</b>&nbsp;</label>
				To set the status of a news (active or inactive), click [7].
				<img class="dynamic" src="{{asset('img/news/news2.jpg')}}"><br><br>
				
				<label><b>Step 3 :</b>&nbsp;</label>
				Once you edited the FAQ, a message [9] will appear that the changes were made successfully.
				<img class="dynamic" src="{{asset('img/faqs/faqs6.jpg')}}"><br><br>
				
				<p class="text-danger"><b><em>How to delete a News?</em></b>&nbsp;</p>

				<label><b>Step 1 :</b>&nbsp;</label>
				To delete a News, click [4]. Once you clicked the button, a confirmation message will appear to confirm your action.
				<img class="dynamic" src="{{asset('img/news/news3.jpg')}}"><br><br>

				<label><b>Step 2 :</b>&nbsp;</label>
				Click [11] to remove the News. Click [12] to disregard any changes. Once you deleted the News, a message [13] will appear that the News is removed successfully.
				<img class="dynamic" src="{{asset('img/news/news4.jpg')}}"><br><br>
				
				<label class="text-danger"><b>Note :</b>&nbsp;</label>
				Before adding a news, a consent or confirmation by the admin is needed. News must have supporting documents or proofs to assure the validity and truthfulness and be treated as facts. 
				
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
<!-- wysuhtml5 Plugin JavaScript -->
<script src="{{ asset('elite/js/tinymce.min.js') }}"></script>
<script>
$(document).ready(function() {

	if ($("#mymce").length > 0) {
		tinymce.init({
			selector: "textarea#mymce",
			theme: "modern",
			height: 300,
			plugins: [
				"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
				"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
				"save table contextmenu directionality emoticons template paste textcolor"
			],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
		});
	}
});

window.onhelp = function() {
	return false;
};
window.onkeydown = evt => {
	if (evt.keyCode == 112){
		$("#manualNews").modal("show");
		
	}
	return false;
};
</script>
@endsection