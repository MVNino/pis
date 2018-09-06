@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Clinic</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Maintenance</a></li>
			<li class="active">Clinic</li>
		</ol>
	</div>
@endsection


@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="white-box">
				<h3 class="box-title">Clinic Information</h3>
				<form class="form-material form-horizontal">
					<div class="form-group">
						<label class="col-md-12">Contact</span></label>
						<div class="col-md-12">
							<input type="text" id="aboutTitle" name="example-text" class="form-control"> </div>
					</div>
					<div class="form-group">
						<label class="col-sm-12">About Image</label>
						<div class="col-sm-12">
							<div class="fileinput fileinput-new input-group" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i>
									<span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file">
								<span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
									<input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists"
									data-dismiss="fileinput">Remove</a> </div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Description</label>
						<div class="col-md-12">
							<textarea class="form-control" rows="3"></textarea>
						</div>
					</div>
					<button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
					<button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
				</form>
			</div>
		</div>
	</div>
@endsection