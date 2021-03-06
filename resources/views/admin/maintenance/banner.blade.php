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
							<td align="center">
								<a href="/admin/maintenance/bannerEdit/{{$banner->banner_id}}" class="btn btn-sm btn-primary" role="button">
                                	<i class="fa fa-edit"></i>
                            	</a>
							</td>
							<td>
								<div align="center">
									{!!Form::open(['action' => ['Maintenance\BannerController@deleteBanner', $banner->banner_id],'method' => 'POST', 'onsubmit' => "return confirm('Remove Banner?')"])!!}
										{{Form::hidden('_method', 'DELETE')}}
										<button type="submit" class="btn btn-sm btn-icon btn-danger delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
											<i class="ti-close" aria-hidden="true"></i>
										</button>
									{!!Form::close()!!}
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
				<tfoot>
				</tfoot>
			</table>
			<div align="center">
				{{ $banners->links() }}
			</div>
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
									<input type="file" name="bannerImage" accept=".jpg,.jpeg,.png"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists"
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

<!-- Modal -->
<div style="padding-top: 750px;" class="modal fade bd-example-modal-lg" id="manualBanner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h3 id="exampleModalLongTitle"> &nbsp;<b>HELP</b> &nbsp;<i class="fa fa-question-circle"></i></h3>
		</div>
		<div class="modal-body">
			<h4 style="margin-bottom:0;" class="text-primary"><b>Banner</b></h4>
			<p style="margin-top:0;">This part will discuss the Banner module. It will show you how to manage the banners for the website.</p>
			<div style="padding:15px;">
				
				<label><b>Step 1 :</b>&nbsp;</label>
				Under “WEBSITE MAINTENANCE”, click [1] which will direct you to this page.<br><br>

				<img class="dynamic" src="{{asset('img/banner/banner.jpg')}}"><br><br>

				<p class="text-danger"><b><em>How to add a Banner?</em></b>&nbsp;</p>

				<label><b>Step 1 :</b>&nbsp;</label>
				To add a new Banner, click [2] which will direct you to this page.<br><br>
				<img class="dynamic" src="{{asset('img/banner/banner1.jpg')}}"><br><br>
				
				<label><b>Step 2 :</b>&nbsp;</label>
				Input the number of order of your banner.<br><br>

				<label><b>Step 3 :</b>&nbsp;</label>
				Select an image for your banner. After selecting an image, you will be given an option to change or remove the image.<br><br>

				<label><b>Step 4 :</b>&nbsp;</label>
				To add your new banner, click [5]. A message [6] will be shown that the adding of banner is successful.<br><br>

				<label><b>Step 5 :</b>&nbsp;</label>
				To set the status of a banner (active or inactive), click [7].<br><br>
				<img class="dynamic" src="{{asset('img/banner/banner2.jpg')}}"><br><br>

				<p class="text-danger"><b><em>How to delete a Banner?</em></b>&nbsp;</p>

				<label><b>Step 1 :</b>&nbsp;</label>
				To delete a banner, click [4]. Once you clicked the button, a confirmation message will appear to confirm your action.<br><br>
				
				<img class="dynamic" src="{{asset('img/banner/banner5.jpg')}}"><br><br>
				<label><b>Step 2 :</b>&nbsp;</label>
				Step 2:	Click [11] To remove the banner. Click [12]. To disregard any changes. Once you deleted the banner, a message [13] will appear that the banner is removed successfully.<br><br>
				<img class="dynamic" src="{{asset('img/banner/banner6.jpg')}}"><br><br>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>
		</div>
		</div>
	</div>
</div>
@endsection

@section('pg-specific-js')
<script>
	function editOrder(id)
	{
		var c = document.getElementsByClassName(id);
		c[0].style.display = "none";
		c[1].style.display = "block";
	}
	window.addEventListener("keydown",function (e) {
    if (e.keyCode === 112) { 
        e.preventDefault();
        $("#manualBanner").modal("show");
    }
})
</script>
@endsection