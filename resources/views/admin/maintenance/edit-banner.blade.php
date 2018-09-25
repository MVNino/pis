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
@endsection