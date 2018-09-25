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
            <form class="form-material">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-md-12">Order of Viewing</label>
                            <div class="col-md-12">
                                <input type="number" name="height" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Uploaded Banner</label>
                    <img src="">
                </div>
                <div class="form-group">
                    <label class="col-md-12">Banner Image</label>
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i>
                            <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                        <input type="hidden"><input type="file" name="bannerImage" accept=".jpg,.jpeg,.png"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
                <div align="right">
                    <button id="btnSave" type="button" class="btn btn-info">
                        <i class="fa fa-fw fa-lg fa-check-circle"></i> Save
                    </button>
                    <button id="btnCancel" type="button" class="btn btn-inverse" style="display: inline-block;">
                        <i class="fa fa-close"></i> Cancel
                        <a href="#"></a>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection