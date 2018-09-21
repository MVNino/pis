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
	{!! Form::open(['action' => 'Maintenance\FeatureController@storeFeature', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'autocomplete' => 'off']) !!}
	<div class="row">
		<div class="col-md-12">
			<div class="white-box">
				<h3 class="box-title">Features</h3>
				
					<div class="form-group">
						<label class="col-md-12">Title</label>
						<div class="col-md-12">
							<input type="text" name="title" class="form-control"> </div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Description</label>
						<div class="col-md-12">
							<textarea name = "description" class="form-control" rows="3"></textarea>
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
					<button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
					<button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>

					 <br><br>

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
                            
                            <a href="{{action('Maintenance\FeatureController@edit', $row['features_id'])}}" class="btn btn-warning">Edit</a>
                       
                            
                            {!!Form::open(['action' => ['Maintenance\FeatureController@deleteFeature', $row['features_id']],'method' => 'POST', 'onsubmit' => "return confirm('Remove Contact?')"])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                <button type="button" class="btn btn-warning">Delete</button> 

                            {!! Form::close() !!}
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
	{!! Form::close() !!}
@endsection