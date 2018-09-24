@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Main Service</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li>Maintenance</li>
			<li><a href="{{ route('maintenance.services') }}">Services</a></li>
			<li class="active">
				<a class="active" href="/admin/maintenance/main-service/{{ $mainService->other_services_id }}/edit">
					{{ $mainService->other_title }}
				</a>
			</li>
		</ol>
	</div>
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-light">Edit {{ $mainService->other_title }}</h3>
        </div>
        <div class="card-body">
            <div class="container">
				{!! Form::open(['action' => ['Maintenance\ServiceController@updateMainService', $mainService->other_services_id],
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
								<input type="text" name="txtTitle" class="form-control" value="{{ $mainService->other_title }}"> 
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Service Description</label>
							<div class="col-md-12">
								<textarea name="txtareaDescription" class="form-control" rows="5">{{ $mainService->other_desc }}</textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Video Link</label>
							<div class="col-md-12">
								<input type="text" name="txtVideoLink" class="form-control" value="{{ $mainService->otherServiceVid->video }}"> 
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
						<button type="submit" class="btn btn-info waves-effect waves-light m-r-10 float-right"><i class="fa fa-fw fa-lg fa-check-circle"></i> Submit</button>	
					{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection