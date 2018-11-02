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
<div class="content">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-light">Edit Banner</h3>
        </div>
        <div class="card-body"><br>
            {!! Form::open(['action' => ['Maintenance\BannerController@modifyBanner', $banner->banner_id], 'method' => 'POST', 'autocomplete' => 'off', 'enctype' => 'multipart/form-data', 'class' => 'form-material form-horizontal'])!!}
                {{Form::hidden('_method', 'PUT')}}
                <div class="row form-group">
                    <div class="col-md-6">
                        <a target="_blank" href="/storage/images/banner/{{$banner->banner_picture}}">
                            <img src="/storage/images/banner/{{$banner->banner_picture}}" style="width: 100%;">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <label>Order of Viewing</label>
                        <input type="number" name="order" class="form-control" min="1" value="{{$banner->banner_order}}">

                        <br/>

                        <label>Status</label>
                        <p>
                            @if($banner->banner_status == 0)
                                Not Active
                            @else
                                Active
                            @endif
                        </p>

                        <br/>

                        <label>Uploaded Banner</label>
                        <p>{{$banner->banner_picture}}</p>

                        <br/>

                        <label>Banner Image</label>
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i>
                            <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file">
                            <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                            <input type="file" name="bannerImage" accept=".jpg,.jpeg,.png"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                </div>

                <div align="right">
                    <button id="btnSave" type="submit" class="btn btn-info">
                        <i class="fa fa-fw fa-lg fa-check-circle"></i> Save
                    </button>
                    <a href="{{ route('maintenance.banner') }}" role="button" id="btnCancel" type="button" class="btn btn-inverse" style="display: inline-block;">
                        <i class="fa fa-close"></i> Cancel
                    </a>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>

<!-- Modal -->
<div style="padding-top: 395px;" class="modal fade bd-example-modal-lg" id="manualEditBanner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h3 id="exampleModalLongTitle"> &nbsp;<b>HELP</b> &nbsp;<i class="fa fa-question-circle"></i></h3>
		</div>
		<div class="modal-body">
            <h4 style="margin-bottom:0;" class="text-primary"><b>Edit Banner</b></h4>
			<p style="margin-top:0;">This part will discuss the Banner module. It will show you how to manage the banners for the website.</p>
			
			<div style="padding:15px;">

				<p class="text-danger"><b><em>How to Edit a Banner?</em></b>&nbsp;</p>
				
				<label><b>Step 1 :</b>&nbsp;</label>
				To edit an existing banner, click [3] which will direct you to this page.<br><br>
				<img class="dynamic" src="{{asset('img/banner/banner.jpg')}}"><br><br>
				
				<label><b>Step 2 :</b>&nbsp;</label>
				You will now be able to change the order of viewing, status (Active or Inactive), and image.<br><br>
                <img class="dynamic" src="{{asset('img/banner/banner3.jpg')}}"><br><br>
                
                <label><b>Step 3 :</b>&nbsp;</label>
                To commit any changes, click [8]. To disregard any changes, click [9].<br><br>

                <label><b>Step 4 :</b>&nbsp;</label>
				Once you edited the banner, a message [10] will appear that the changes were made successfully.<br><br>
                <img class="dynamic" src="{{asset('img/banner/banner4.jpg')}}"><br><br>
                
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
    window.onhelp = function() {
        return false;
    };
    window.onkeydown = evt => {
        if (evt.keyCode == 112){
            $("#manualEditBanner").modal("show");
            
        }
        return false;
    };
</script>
@endsection