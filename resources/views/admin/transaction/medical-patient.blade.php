@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Medical</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li>Transaction</li>
			<li>
				<a class="active" href="#">All Patients</a>
			</li>
		</ol>
	</div>
@endsection

@section('content')
<div class="container">
	<div class="card">
		<div class="card-header bg-primary">
			<h3 class="text-light">Medical Record</h3>    
		</div>
		<div class="card-body">
			<div class="container">
				<h5 class="text-right">October 26, 2018</h5><br> <!-- get date now -->
				<form class="form-material form-horizontal"><br>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-md-12">Last Name</label>
								<div class="col-md-12">
									<input type="text" name="lastName" value="Romero" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-md-12">First Name</label>
								<div class="col-md-12">
									<input type="text" name="firstName" value="LhexyKhrystelle" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-md-12">Middle Name</label>
								<div class="col-md-12">
									<input type="text" name="middleName" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-md-12">Birthdate</label>
								<div class="col-md-12">
									<input type="text" name="birthdate" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-md-12">Contact Number</label>
								<div class="col-md-12">
									<input type="text" value="09452066903" name="contactNumber" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class=col-md-4>
							<div class="form-group">
								<label class="col-md-12">Height (m)</label>
								<div class="col-md-12">
									<input type="text" name="height" class="form-control">
								</div>
							</div>
						</div>
						<div class=col-md-4>
							<div class="form-group">
								<label class="col-md-12">Weight (kg)</label>
								<div class="col-md-12">
									<input type="text" name="height" class="form-control">
								</div>
							</div>
						</div>
						<div class=col-md-4>
							<div class="form-group">
								<label class="col-md-12">Temperature</label>
								<div class="col-md-12">
									<input type="text" name="height" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Diagnostic</label>
						<div class="col-md-12">
							<textarea name="diagnostic" class="form-control" rows="5"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Procedure</label>
						<div class="col-md-12">
							<textarea name="procudere" class="form-control" rows="5"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Uploaded Test Resut</label>
						<div class="offset-md-1 col-md-12">
							<a href="#">Laboratory Results.jpg</a><br>
							<a href="#">X-RAY Results.jpg</a>
						</div>
					</div>
					<div class="form-froup">
						<label class="col-sm-12">Test Result</label>
						<div class="fileinput fileinput-new input-group" data-provides="fileinput">
							<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i>
								<span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file">
							<span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
							<input type="hidden"><input type="file" name="bannerImage" accept=".jpg,.jpeg,.png"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
						</div>
					</div><br>
					<div align="right">
						<button id="btnSave" type="button" class="btn btn-info">
							<i class="fa fa-fw fa-lg fa-check-circle"></i> Save
						</button>
						<button id="btnCancel" type="button" class="btn btn-inverse" style="display: inline-block;">
							<i class="fa fa-close"></i> Cancel
							<a href="#"></a>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
