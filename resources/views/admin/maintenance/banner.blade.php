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
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					<i class="fa fa-plus"></i> &nbsp;Add Banner
					</button><br><br>
				</div>
				<table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
					<thead>
						<tr>
							<th>Order</th>
							<th>File Name</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($banners as $banner)
							<tr>
								<td>{{$banner->banner_order}}</td>
								<td>{{$banner->banner_picture}}</td>
								<td>
									@if($banner->banner_status == 0)
										{!!Form::open(['action' => ['Maintenance\BannerController@updateBanner', $banner->banner_id], 'method' => 'POST'])!!}
											{{Form::hidden('_method', 'PUT')}}
											<input type="text" name="status" value="1" style="display: none;">
											<span class="label label-table label-danger" data-toggle="tooltip" data-original-title="Click to Activate" onclick="document.getElementById('{{$banner->banner_id}}').click();" style="cursor: pointer;">Not Active</span>
											<button id="{{$banner->banner_id}}" type="submit" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" style="display: none;">
												<i class="ti-pencil-alt" aria-hidden="true"></i>
											</button>
										{!!Form::close()!!}
									@else
										{!!Form::open(['action' => ['Maintenance\BannerController@updateBanner', $banner->banner_id], 'method' => 'POST'])!!}
											{{Form::hidden('_method', 'PUT')}}
											<input type="text" name="status" value="0" style="display: none;">
											<span class="label label-table label-success" data-toggle="tooltip" data-original-title="Click to Deactivate" onclick="document.getElementById('{{$banner->banner_id}}').click();" style="cursor: pointer;">Active</span>
											<button id="{{$banner->banner_id}}" type="submit" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" style="display: none;">
												<i class="ti-pencil-alt" aria-hidden="true"></i>
											</button>
										{!!Form::close()!!}
									@endif
								</td>
								<td>
									{!!Form::open(['action' => ['Maintenance\BannerController@deleteBanner', $banner->banner_id],'method' => 'POST', 'onsubmit' => "return confirm('Remove Banner?')"])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        <button type="submit" class="btn btn-sm btn-icon btn-warning delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
											<i class="ti-close" aria-hidden="true"></i>
										</button>
								</a>
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
			</div>
		</div>
	</div>
	<!-- /.row -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
@endsection