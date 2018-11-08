@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">{{ $news->news_title }}</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i></a></li>
			<li>Maintenance</li>
            <li><a href="{{ route('maintenance.news') }}">News</a></li>
			<li>
                <a class="active" href="/admin/maintenance/news/{{ $news->news_id }}">
                    {{ $news->news_title }}
                </a>
            </li>
		</ol>
	</div>
@endsection

@section('content')
<div class="container">
	<div class="card">
		<div class="card-header bg-primary">
			<h3 class="text-light">Edit News</h3>
		</div>
		<div class="card-body">
			<div class="container">
				{!! Form::open(['action' => ['Maintenance\NewsController@updateNews', $news->news_id], 'method' => 'POST', 
				'autocomplete' => 'off', 'enctype' => 'multipart/form-data', 'class' => 'form-material form-horizontal'])!!}
				@csrf
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							{{ Form::label('lblOrder', 'Order of viewing') }}
							{{ Form::number('numOrder', $news->news_order, ['class' => 'form-control', 'min' => '1']) }}					
						</div>
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('lblNewsTitle', 'News Title') }}
					{{ Form::text('title', $news->news_title, ['class' => 'form-control']) }}
				</div>
				<div class="form-group">
					{{ Form::label('lblNewsDesc', 'News Description') }}
					{{ Form::textarea('description', $news->news_desc, ['class' => 'form-control']) }}
				</div>
				<div class="form-group">
					<!-- Existing image na nasa database -->    
					<label class="col-md-12">Current News Image</span></label>
					<img src="">
				</div>
				<div class="form-group">
					<label class="col-sm-12">Image 
					<small>Current Image: <a target="_blank" href="/storage/images/news/{{ $news->news_picture }}">{{ $news->news_picture }}</a></small>
					</label>
					<div class="col-sm-12">
						<div class="fileinput fileinput-new input-group" data-provides="fileinput">
							<div class="form-control" data-trigger="fileinput"> 
								<i class="glyphicon glyphicon-file fileinput-exists"></i> 
								<span class="fileinput-filename"></span>
							</div> 
							<span class="input-group-addon btn btn-default btn-file"> 
								<span class="fileinput-new">Select file</span> 
								<span class="fileinput-exists">Change</span>
								<input type="file" name="fileNewsImg">
							</span>
							<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
						</div>
					</div>
				</div>				
				{{ Form::hidden('_method', 'PUT') }}
				<div align="right">
					<button id="btnSave" type="submit" class="btn btn-info">
						<i class="fa fa-fw fa-lg fa-check-circle"></i> Save
					</button>
					<a href="{{ route('maintenance.news') }}" role="button" id="btnCancel" type="button" class="btn btn-inverse" style="display: inline-block;">
						<i class="fa fa-close"></i> Cancel
					</a>
				</div>
				{!! Form::close() !!}
			</div>	
		</div>
	</div>
</div>

<div style="padding-top: 400px;" class="modal fade bd-example-modal-lg" id="manualEditNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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

				<p class="text-danger"><b><em>How to edit a News?</em></b>&nbsp;</p>
				
				<label><b>Step 1 :</b>&nbsp;</label>
				To edit an existing News, click [3] which will direct you to this page.
				<img class="dynamic" src="{{asset('img/news/news5.jpg')}}"><br><br>

				<label><b>Step 2 :</b>&nbsp;</label>
				Step 2:	You will now be able to change the order of viewing, news title, news description, and image. To commit any changes, click [8]. To disregard any changes, click [9].<br><br>
				
				<label><b>Step 3 :</b>&nbsp;</label>
				Once you edited the News, a message [10] will appear that the changes were made successfully.
				<img class="dynamic" src="{{asset('img/news/news6.jpg')}}"><br><br>
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

window.addEventListener("keydown",function (e) {
    if (e.keyCode === 112) { 
        e.preventDefault();
        $("#manualEditNews").modal("show");
    }
})
</script>
@endsection