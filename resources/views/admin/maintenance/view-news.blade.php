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
						<button id="btnSave" type="button" class="btn btn-info">
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
</script>
@endsection