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
				<div align="right">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						<i class="fa fa-plus"></i> Add Features
					</button>
				</div><br>
	            <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
	                <thead>
	                <tr>
	                    <th>Title</th>
	                    <th>Description</th>
	                    <th>Image</th>
	                    <th>Action</th>
	                </tr>
	            </thead>
	            <tbody>

	             @foreach($feature as $row)  
	            <tr>
	                <td>{{$row['feature_title']}}</td>
	                <td>{{$row['feature_description']}}</td>
	                <td>{{$row['feature_image']}} </td>
	                <td>
	                <a href="{{action('Maintenance\FeatureController@edit', $row['features_id'])}}" class="btn btn-sm btn-warning">a</a>
	                {!!Form::open(['action' => ['Maintenance\FeatureController@deleteFeature', $row['features_id']],'method' => 'POST', 'onsubmit' => "return confirm('Remove Banner?')"])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                            <button type="submit" class="btn btn-sm btn-warning" data-toggle="tooltip" data-original-title="Delete">b
							</button>
                    {!!Form::close()!!}
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
		</form>
	</div>
	</div>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="exampleModalLabel">Add Features</h4>
            </div>
    
            <h4 class="box-title">Features</h4>
			{!! Form::open(['action' => 'Maintenance\FeatureController@storeFeature', 'method' => 'POST', 
			'autocomplete' => 'off', 'enctype' => 'multipart/form-data', 'class' => 'form-material form-horizontal'])!!}
			<div class="modal-body">
                    <div class="form-group">
                        {{ Form::label('lblTitle', 'Title') }}
                        {{ Form::text('title', '', ['class' => 'form-control']) }}                 
                    </div>
                    <div class="form-group">
                        {{ Form::label('lblDesc', 'Description') }}
                        {{ Form::textarea('description', '', ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
						<label class="col-sm-12">Image</label>
						<div class="col-sm-12">
							<div class="fileinput fileinput-new input-group" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
								<input type="file" name="fileNewsImg"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
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
	</div>
	{!! Form::close() !!}
@endsection