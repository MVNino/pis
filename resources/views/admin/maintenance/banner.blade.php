@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Banner</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Maintenance</a></li>
			<li class="active">Banner</li>
		</ol>
	</div>
@endsection


@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="white-box">
			<div align="right">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addBanner">
				<i class="fa fa-plus"></i> &nbsp;Add Banner
				</button><br><br>
			</div>
			<table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
				<thead>
					<tr>
						<th>Order</th>
						<!-- Order must be clickable inorder to change the number
						Sample Logic: 
							if the number you need to change is existing
								give it to a temp variable and change it to last number that is not taken
								in order for the number to change. -->
						<th>File Name</th>
						<th>Status</th>
						<th colspan="2" class = "text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($banners as $banner)
						<tr>
							<td>{{$banner->banner_order}}</td>
							<td>{{$banner->banner_picture}}</td>
							<td>
								<span class="label label-table label-success" data-toggle="tooltip">Active</span>
							</td>
							<td>
								{!!Form::open(['action' => ['Maintenance\BannerController@deleteBanner', $banner->banner_id],'method' => 'POST', 'onsubmit' => "return confirm('Remove Banner?')"])!!}
									{{Form::hidden('_method', 'DELETE')}}
									<button type="submit" class="btn btn-sm btn-icon btn-danger delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
										<i class="ti-close" aria-hidden="true"></i>
									</button>
								{!!Form::close()!!}
							</td>
							<td>
								<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewBanner">
								<i class="fa fa-eye"></i></button>
							</td>
						</tr>
					@endforeach
				</tbody>
				<tfoot>
				</tfoot>
			</table>
		</div>
	</div>
</div>

<!-- Modal for Adding Banner -->
<div class="modal fade" id="addBanner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="exampleModalLabel">BANNER FORM</h4>
			</div>
			<div class="modal-body">
				{!! Form::open(['action' => 'Maintenance\BannerController@addBanner', 'method' => 'POST', 'autocomplete' => 'off', 'enctype' => 'multipart/form-data', 'class' => 'form-material form-horizontal'])!!}
					<div class="form-group">
						<div class="row">
							<div class="col-sm-4">
								<label class="col-sm-12">Order</label>
								<div class="col-md-12">
									<input type="number" id="aboutTitle" name="order" min="1" class="form-control">
								</div>
							</div>
							<div class="col-sm-8">
								<label class="col-sm-12">Banner Image</label>
								<div class="fileinput fileinput-new input-group" data-provides="fileinput">
									<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i>
										<span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file">
									<span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
									<input type="file" name="bannerImage"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists"
										data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-info">Add</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>

<!-- Modal for Viewing Banner -->
<div class="modal fade" id="viewBanner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="exampleModalLabel">BANNER</h4>
			</div>
			<div class="modal-body">
				<form class="form-material">
					<div class="form-group">
						<label class="col-md-12">File Name</label>
						<p class="col-md-12">NAME OF THE FILE</p>
						<div class="col-md-12">
							<img src="">IMAGE HERE
						</div><br>
						<div class="col-md-12">
								<!-- If the status is active to the table the /a/ must be Click to Deactivate
								else Click to Activate -->
							<a href="#" class="text-success">Click to Activate</a><br>
							<a href="#" class="text-warning">Click to Deactivate</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection