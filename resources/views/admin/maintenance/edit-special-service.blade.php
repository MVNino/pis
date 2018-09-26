@extends('admin.layouts.app')

@section('breadcrumb')
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
	<h4 class="page-title">Specialty Service</h4>
</div>
<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-home"></i></a></li>
		<li>Maintenance</li>
		<li><a href="{{ route('maintenance.services') }}">Services</a></li>
		<li class="active">
			<a class="active" href="/admin/maintenance/specialty-service/{{ $specialtyService->spec_service_id }}/edit">
				{{ $specialtyService->spec_title }}
			</a>
		</li>
	</ol>
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-8">
		<div class="container">
			<div class="card">
				<div class="card-header bg-primary">
					<h4 class="text-light">Edit Service</h4>
				</div>
				<div class="card-body">
					{!! Form::open(['action' => ['Maintenance\ServiceController@updateSpecialty', $specialtyService->spec_service_id],
					'class' => 'form-material' ,'method' => 'POST', 'autocomplete' => 'off', 'enctype' => 'multipart/form-data']) !!}
	                	@csrf
						<div>
							<img src="/storage/images/service/specialty/{{ $specialtyService->spec_image_icon }}" width="300" height="200">
						</div>
						<label class="col-sm-12">Image</label>
						<div class="col-sm-12">
							<div class="fileinput fileinput-new input-group" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
								<input type="file" name="fileServiceImg"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Services Title</label>
							<div class="col-md-12">
								<input type="text" name="txtTitle" class="form-control" value="{{ $specialtyService->spec_title }}">	
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Services Description</label>
							<div class="col-md-12">
								<textarea name="txtAreaDescription" class="form-control" rows="5">{{ $specialtyService->spec_desc }}
								</textarea>	
							</div>
						</div>
						<div align="right">
							{{ Form::hidden('_method', 'PUT') }}
							<button type="submit" class="btn btn-info"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
							<a href="#" role="button" id="btnCancel" type="button" class="btn btn-inverse" style="display: inline-block;">
								<i class="fa fa-close"></i> Cancel
							</a>
                    	</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="container">
			<div class="card">
				<div class="card-header bg-primary">
					<h5 class="text-light">Video Links</h5>
				</div>
				<div class="card-body">
				<div align="right">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addVideo">
					<i class="fa fa-plus"></i> &nbsp;Add Video Link
					</button>
				</div>
					<br>
					@foreach($specialtyService->specialtyServiceVids as $specialtyServiceVid)
					<a href="/admin/maintenance/main-service/{{ $specialtyServiceVid->video_id }}/edit-video">{{ $specialtyServiceVid->video }}</a>
					<a href="/admin/maintenance/main-service/{{ $specialtyServiceVid->video_id }}/delete" role="button" id="btnCancel" type="button" class="btn btn-sm btn-danger pull-right" style="display: inline-block;">
						<i class="fa fa-close"></i>
					</a>
					<hr>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="addVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="exampleModalLabel">VIDEO LINKS</h4>
			</div>
			{!! Form::open(['action' => ['Maintenance\ServiceController@addSpecialtyServiceVideo', $specialtyService->spec_service_id], 'method' => 'POST', 
				'class' => 'form-material', 'autocomplete' => 'off']) !!}
			@csrf
			<div class="modal-body">
					<div class="form-group">
						<label class="col-md-12">Video Link</label>
						<div class="col-md-12">
							<input type="text" name="txtVideoLink" class="form-control">	
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
@endsection
