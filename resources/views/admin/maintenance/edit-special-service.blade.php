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
						<div class="form-group">
							<label class="col-md-12">Price</label>
							<div class="col-md-12">
								<input type="number" name="price" class="form-control" value="{{ $specialtyService->price }}">
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

<!-- Modal -->
<div style="padding-top: 1000px;" class="modal fade bd-example-modal-lg" id="manualEditService" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h3 id="exampleModalLongTitle"> &nbsp;<b>HELP</b> &nbsp;<i class="fa fa-question-circle"></i></h3>
		</div>
		<div class="modal-body">
			<h4 style="margin-bottom:0;" class="text-primary"><b>Services</b></h4>
			<p style="margin-top:0;">This part will discuss the Services module. It will show you how to manage the services for the website.</p>
			<div style="padding:15px;">
				
				<label><b>Step 1 :</b>&nbsp;</label>
				Under “WEBSITE MAINTENANCE”, click [1] which will direct you to this page.<br><br>
				<img class="dynamic" src="{{asset('img/services/services.JPG')}}"><br><br>

				<p class="text-danger"><b><em>How to edit a Specialty Services?</em></b>&nbsp;</p>

				<label><b>Step 1 :</b>&nbsp;</label>
				To add a new Service, click [5] which will direct you to this page.<br><br>
				<img class="dynamic" src="{{asset('img/services/services4.JPG')}}"><br><br>
				
				<label><b>Step 2 :</b>&nbsp;</label>
				You will now be able to change the image, services title, service description, and price.<br><br>

				<label><b>Step 3 :</b>&nbsp;</label>
				To add another video link, click [6], which will direct you to this page.<br><br>
				<img class="dynamic" src="{{asset('img/services/services5.JPG')}}"><br><br>

				<label><b>Step 4 :</b>&nbsp;</label>
				To add the additional video, click [7]. A message [8] will be shown that the additional video was added successfully.<br><br>
				<img class="dynamic" src="{{asset('img/services/services6.JPG')}}"><br><br>

				<label><b>Step 5 :</b>&nbsp;</label>
				To edit a video, click [9] which will direct you to this page.<br><br>
				<img class="dynamic" src="{{asset('img/services/services7.JPG')}}"><br><br>

				<label><b>Step 6 :</b>&nbsp;</label>
				To save any changes, click [11]. To discard the changes, click [12].<br><br>

				<label><b>Step 7 :</b>&nbsp;</label>
				To delete a service video, click [10]. A message [13] will be shown that the removal of the video link is successful.<br><br>
				<img class="dynamic" src="{{asset('img/services/services8.JPG')}}"><br><br>

				<label><b>Step 8 :</b>&nbsp;</label>
				To save all of the changes, click [14]. A message [15] will appear that the editing of service is successful.<br><br>
				<img class="dynamic" src="{{asset('img/services/services9.JPG')}}"><br><br>
				<img class="dynamic" src="{{asset('img/services/services10.JPG')}}"><br><br>
				
				<p class="text-danger"><b><em>How to edit Other Services?</em></b>&nbsp;</p>

				<label><b>Step 1 :</b>&nbsp;</label>
				Follow the same instructions in editing a specialty service.<br><br>
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
	function editOrder(id)
	{
		var c = document.getElementsByClassName(id);
		c[0].style.display = "none";
		c[1].style.display = "block";
	}
	window.onhelp = function() {
		return false;
	};
	window.onkeydown = evt => {
		if (evt.keyCode == 112){
			$("#manualEditService").modal("show");
			
		}
		return false;
	};
</script>
@endsection
