@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Services</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li>Maintenance</li>
			<li class="active"><a class="active" href="{{ route('maintenance.services') }}">Services</a></li>
		</ol>
	</div>
@endsection
@section('content')
<div class="card">
	<div class="card-body p-b-0">
	</div>
	<!-- Nav tabs -->
	<ul class="nav nav-tabs customtab" role="tablist">
		<li class="nav-item"> 
			<a class="nav-link active" data-toggle="tab" href="#home2" role="tab">
				<span class="hidden-sm-up"><i class="ti-home"></i></span> 
				<span class="hidden-xs-down">Specialty Services</span>
			</a> 
		</li>
		<li class="nav-item"> 
			<a class="nav-link" data-toggle="tab" href="#profile2" role="tab">
				<span class="hidden-sm-up"><i class="ti-user"></i></span> 
				<span class="hidden-xs-down">Main Services</span>
			</a> 
		</li>
	</ul>
	<div class="container">	
		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane active" id="home2" role="tabpanel">
				<div>
					<h3 class="box-title">Specialty Services</h3>
					<div align="right">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#specialtyServiceModal">
							<i class="fa fa-plus"></i> Add Specialty Service
						</button><br><br>
					</div>
					<table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
						<thead>
							<tr>
								<th>Service ID</th>
								<th>Service</th>
								<th>Service Description</th>
								<th colspan="2" class = "text-center">Action</th>
							</tr>
						</thead>
						<tbody>
						@forelse($specialtyServices as $specialtyService)
							<tr>
								<td>{{ $specialtyService->spec_service_id }}</td>
								<td>{{ $specialtyService->spec_title }}</td>
								<td>{{ $specialtyService->spec_desc }}</td>
								<td class="text-center">
									<a role="button" class="btn btn-sm btn-primary" href="/admin/maintenance/specialty-service/{{ $specialtyService->spec_service_id }}/edit">
										<i class="fa fa-edit"></i>
									</a>
								</td>
								<td class="text-center">
									{!!Form::open(['action' => ['Maintenance\ServiceController@deleteSpecialty', $specialtyService->spec_service_id],'method' => 'POST', 'onsubmit' => "return confirm('Remove service?')"])!!}
										{{Form::hidden('_method', 'DELETE')}}
										<button type="submit" class="btn btn-sm btn-icon btn-danger delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
											<i class="fa fa-times" aria-hidden="true"></i>
										</button>
									{!!Form::close()!!}
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
						{{ $specialtyServices->links() }}
					</div>
				</div>
			</div>
			<div class="tab-pane" id="profile2" role="tabpanel">
				<div>
				<h3 class="box-title">Main Services</h3>
					<div align="right">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#otherServiceModal">
							<i class="fa fa-plus"></i> Add Main Service
						</button><br><br>
					</div>
					<table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
						<thead>
							<tr>
								<th>Service ID</th>
								<th>Service</th>
								<th>Service Description</th>
								<th colspan="2" class = "text-center">Action</th>
							</tr>
						</thead>
						<tbody>
						@forelse($otherServices as $otherService)
							<tr>
								<td>{{ $otherService->other_services_id }}</td>
								<td>{{ $otherService->other_title }}</td>
								<td>{{ $otherService->other_desc }}</td>
								<td class="text-center">
									<a role="button" class="btn btn-sm btn-primary" href="/admin/maintenance/main-service/{{ $otherService->other_services_id }}/edit">
										<i class="fa fa-edit"></i>
									</a>
								</td>
								<td class="text-center">
									{!!Form::open(['action' => ['Maintenance\ServiceController@deleteMainService', $otherService->other_services_id],'method' => 'POST', 'onsubmit' => "return confirm('Remove service?')"])!!}
										{{Form::hidden('_method', 'DELETE')}}
										<button type="submit" class="btn btn-sm btn-icon btn-danger delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
											<i class="fa fa-times" aria-hidden="true"></i>
										</button>
									{!!Form::close()!!}
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
						{{ $otherServices->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- Add special service modal --}}
<div class="modal fade" id="specialtyServiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="exampleModalLabel">Add Specialty Service</h4>
			</div>
			{!! Form::open(['action' => 'Maintenance\ServiceController@addSpecialty','class' => 'form-material' ,'method' => 'POST', 'autocomplete' => 'off', 'enctype' => 'multipart/form-data']) !!}
			<div class="modal-body">
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
						<input type="text" name="txtTitle" class="form-control"> </div>
				</div>
				<div class="form-group">
					<label class="col-md-12">Service Description</label>
					<div class="col-md-12">
						<textarea name="txtareaDescription" class="form-control" rows="8"> </textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12">Video Link</label>
					<div class="col-md-12">
						<input type="text" name="txtVideoLink" class="form-control"> </div>
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
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-info"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
{{-- /Add special service modal --}}

{{-- Add other service modal --}}
<div class="modal fade" id="otherServiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="exampleModalLabel">Add Other Service</h4>
			</div>
			{!! Form::open(['action' => 'Maintenance\ServiceController@addOtherService', 'class' => 'form-material','method' => 'POST', 'autocomplete' => 'off', 'enctype' => 'multipart/form-data']) !!}
			<div class="modal-body">
				<div class="form-group">
						<label class="col-sm-12">Image</label>
						<div class="col-sm-12">
							<div class="fileinput fileinput-new input-group" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span>
								</div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
								<input type="file" name="fileServiceImg"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Service Title</label>
						<div class="col-md-12">
							<input type="text" name="txtTitle" class="form-control"> </div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Service Description</label>
						<div class="col-md-12">
							<textarea name="txtareaDescription" class="form-control" rows="5"> </textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Video Link</label>
						<div class="col-md-12">
							<input type="text" name="txtVideoLink" class="form-control"> </div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-info"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
{{-- /Add other service modal --}}
@endsection