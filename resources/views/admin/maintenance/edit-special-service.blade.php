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
<<<<<<< HEAD
<<<<<<< HEAD
<div class="container">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-light">Edit {{ $specialtyService->spec_title }}</h3>
        </div>
        <div class="card-body">
            <div class="container">
				{!! Form::open(['action' => ['Maintenance\ServiceController@updateSpecialty', $specialtyService->spec_service_id],
				'class' => 'form-material' ,'method' => 'POST', 'autocomplete' => 'off', 'enctype' => 'multipart/form-data']) !!}
                @csrf
                <div class="form-group">
							<label class="col-sm-12">Image</label>
							<div class="col-sm-12">
								<div class="fileinput fileinput-new input-group" data-provides="fileinput">
									<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
									<input type="file" name="fileServiceImg"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Service Title</label>
							<div class="col-md-12">
								<input type="text" name="txtTitle" class="form-control" value="{{ $specialtyService->spec_title }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Service Description</label>
							<div class="col-md-12">
								<textarea name="txtareaDescription" class="form-control" rows="5">{{ $specialtyService->spec_desc }}
								</textarea>
							</div>
						</div>
						@foreach($specialtyService->specialtyServiceVids as $haha)
						<div class="form-group">
							<label class="col-md-12">Video Link</label>
							<div class="col-md-12">
								<input type="text" name="txtVideoLink" class="form-control" value="{{ $haha->video }}"> 
							</div>
						</div>
						@endforeach
						{{-- <div class="form-group">
							<div class="col-sm-12">
								<div class="fileinput fileinput-new input-group" data-provides="fileinput">
									<div class="form-control" data-trigger="fileinput"> 
										<i class="glyphicon glyphicon-file fileinput-exists"></i> 
										<span class="fileinput-filename"></span>
									</div> 
									<span class="input-group-addon btn btn-default btn-file"> 
										<span class="fileinput-new">Select file</span> 
										<span class="fileinput-exists">Change</span>
										<input type="file" name="fileServiceVid"> 
									</span> 
									<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
=======
=======
>>>>>>> 31c85ed0c9d10ad35e6a0fcdee8925c190770449
<div class="row">
	<div class="col-md-8">
		<div class="container">
			<div class="card">
				<div class="card-header bg-primary">
					<h3 class="text-light">Edit {{ $specialtyService->spec_title }}</h3>
				</div>
				<div class="card-body">
					<div class="container">
						{!! Form::open(['action' => ['Maintenance\ServiceController@updateSpecialty', $specialtyService->spec_service_id],
						'class' => 'form-material' ,'method' => 'POST', 'autocomplete' => 'off', 'enctype' => 'multipart/form-data']) !!}
						@csrf
						<div class="form-group">
									<label class="col-sm-12">Image</label>
									<div class="col-sm-12">
										<div class="fileinput fileinput-new input-group" data-provides="fileinput">
											<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
											<input type="file" name="fileServiceImg"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-12">Service Title</label>
									<div class="col-md-12">
										<input type="text" name="txtTitle" class="form-control" value="{{ $specialtyService->spec_title }}">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-12">Service Description</label>
									<div class="col-md-12">
										<textarea name="txtareaDescription" class="form-control" rows="5">{{ $specialtyService->spec_desc }}
										</textarea>
									</div>
<<<<<<< HEAD
>>>>>>> f4820d7cf470def8991811188b6ab336913a8675
=======
>>>>>>> 31c85ed0c9d10ad35e6a0fcdee8925c190770449
								</div>
								<div class="form-group">
									<label class="col-md-12">Video Link</label>
									<div class="col-md-12">
										<input type="text" name="txtVideoLink" class="form-control" value="{{ $specialtyService->spec_vidlink }}"> 
									</div>
								</div>
								{{-- <div class="form-group">
									<div class="col-sm-12">
										<div class="fileinput fileinput-new input-group" data-provides="fileinput">
											<div class="form-control" data-trigger="fileinput"> 
												<i class="glyphicon glyphicon-file fileinput-exists"></i> 
												<span class="fileinput-filename"></span>
											</div> 
											<span class="input-group-addon btn btn-default btn-file"> 
												<span class="fileinput-new">Select file</span> 
												<span class="fileinput-exists">Change</span>
												<input type="file" name="fileServiceVid"> 
											</span> 
											<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
										</div>
									</div>
								</div> --}}
								{{ Form::hidden('_method', 'PUT') }}
								<div align="right">
									<button type="submit" class="btn btn-info waves-effect waves-light"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
									<a href="{{ route('maintenance.services') }}" role="button" id="btnCancel" type="button" class="btn btn-inverse" style="display: inline-block;">
										<i class="fa fa-close"></i> Cancel
									</a>
								</div>
							{!! Form::close() !!}
					</div>
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
					<br>
					<a href="">Vid Link</a>
					<hr>
					<a href="">SVid Link</a>
					<hr>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('pg-specific-js')
<script>
	// $(document).ready(function(){
	// 	$('a[href="/admin/maintenance/"]')
	// });
</script>
@endsection