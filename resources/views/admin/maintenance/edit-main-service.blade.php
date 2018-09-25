@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Other Service</h4>
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
<div class="row">
	<div class="col-md-8">
		<div class="container">
			<div class="card">
				<div class="card-header bg-primary">
					<h4 class="text-light">Edit </h4>
				</div>
				<div class="card-body">
					<form class="form-material">
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
								<input type="text" name="txtTitle" class="form-control">	
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Services Description</label>
							<div class="col-md-12">
								<textarea name="txtAreaDescription" class="form-control" rows="5"></textarea>	
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Video Link</label>
							<div class="col-md-12">
								<input type="text" name="txtVideoLink" class="form-control">	
							</div>
						</div>
						<div align="right">
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