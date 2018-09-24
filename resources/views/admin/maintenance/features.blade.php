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
						<th colspan="2" class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($feature as $row)  
						@if($row['status'] == 0)
						<tr>
							<td>{{$row['feature_title']}}</td>
							<td>{{$row['feature_description']}}</td>
							<td>
								<a role="button" href="{{action('Maintenance\FeatureController@edit', $row['features_id'])}}" class="btn btn-sm btn-primary">
									<i class="fa fa-edit"></i>
								</a>
							</td>
							<td>
                                {!!Form::open(['action' => ['Maintenance\FeatureController@deleteFeature', $row['features_id']],'method' => 'POST', 'onsubmit' => "return confirm('Remove Feature?')"])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" data-original-title="Delete">
                                        <i class="fa fa-times"></i>
                                    </button>
                                {!!Form::close()!!}
                            </td>
						</tr>
						@endif
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
			{!! Form::open(['action' => 'Maintenance\FeatureController@storeFeature', 'method' => 'POST', 
			'autocomplete' => 'off', 'enctype' => 'multipart/form-data', 'class' => 'form-material form-horizontal'])!!}
			<div class="modal-body">
				<div class="form-group">
					{{ Form::label('lblTitle', 'Title', ['class' => 'col-md-12']) }}
					<div class="col-md-12">
						{{ Form::text('title', '', ['class' => 'form-control']) }}		
					</div>			
				</div>
				<div class="form-group">
					{{ Form::label('lblDesc', 'Description', ['class' => 'col-md-12']) }}
					<div class="col-md-12">
						{{ Form::textarea('description', '', ['class' => 'form-control', 'rows' => '5']) }}
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
@endsection