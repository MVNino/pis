@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Features</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Maintenance</a></li>
            <li>Features</li>
            <li><a href="/admin/maintenance/features/{{ $feature->features_id }}" class="active">{{ $feature->feature_title }}</a></li>
		</ol>
	</div>
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-light">Edit Feature</h3>
        </div>
        <div class="card-body">
            <div class="container">
                {!!Form::open(['action' => ['Maintenance\FeatureController@editFeature', $feature->features_id], 'method' => 'POST', 'class' => 'form-material'])!!}
                {{Form::hidden('_method', 'PUT')}}
                @csrf
                    <div class="form-group">
                        <label class="col-md-12">Title</label>
                        <div class="col-md-12">
                            <input type="text" name="title" class="form-control" value="{{$feature->feature_title}}"> </div>
                    </div>
                    <div class="form-group">
                            <label class="col-md-12">Description</label>
                            <div class="col-md-12">
                                <input name ="description" class="form-control"  value="{{$feature->feature_description}}" rows="3"/>
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
                    <div align="right">
                        <button type="submit" class="btn btn-info"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                    </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>

@endsection