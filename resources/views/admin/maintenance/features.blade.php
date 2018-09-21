@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Features</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Maintenance</a></li>
			<li class="active">Features</li>
		</ol>
	</div>
@endsection


@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="white-box">
				<table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
					<thead>
						<th>Title</th>
						<th>Description</th>
						<th>Image</th>
						<th>Action</th>
					</thead>
					<tbody>
					@foreach($feature as $row)  
					<tr>
						<td>{{$row['feature_title']}}</td>
						<td>{{$row['feature_description']}}</td>
						<td>{{$row['feature_image']}} </td>
						<td>
							<button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Edit"><i
									class="ti-pencil-alt" aria-hidden="true"></i></button>
							<button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i
									class="ti-close" aria-hidden="true"></i></button>
						</td>
					</tr>
					@endforeach
					</tbody>
					<tfoot>
						<tr>
							<td colspan="6">
								<div class="text-right">
									<ul class="pagination"> </ul>
								</div>
							</td>
						</tr>
					</tfoot>
				</table>
				<div align="right">
                    <button class="btn btn-info waves-effect waves-light m-r-10" type="button" data-toggle="collapse" data-target="#featuresForm" aria-expanded="false" aria-controls="collapseExample">Add Contact</button>
                </div>

				<div class="collapse" id="featuresForm">
					{!! Form::open(['action' => 'Maintenance\FeatureController@storeFeature', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form-material','autocomplete' => 'off']) !!}
						<div class="form-group">
							<label class="col-md-12">Title</label>
							<div class="col-md-12">
								<input type="text" name="title" class="form-control"> </div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Description</label>
							<div class="col-md-12">
								<textarea name = "description" class="form-control" rows="5"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-12">Image</label>
							<div class="col-sm-12">
								<div class="fileinput fileinput-new input-group" data-provides="fileinput">
									<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
									<input type="file" name="fileFeatureImg"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
							</div>
						</div>
						<button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	{!! Form::close() !!}
@endsection