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
                                <textarea name ="description" class="form-control" rows="3">{{ $feature->feature_description }}</textarea>
                            </div>
                        </div>
                    <div align="right">
                        <button type="submit" class="btn btn-info"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                        <a href="{{ route('maintenance.features') }}" role="button" id="btnCancel" type="button" class="btn btn-inverse" style="display: inline-block;">
                            <i class="fa fa-close"></i> Cancel
                        </a>
                    </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div style="padding-top: 400px;" class="modal fade bd-example-modal-lg" id="manualEditFeatures" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h3 id="exampleModalLongTitle"> &nbsp;<b>HELP</b> &nbsp;<i class="fa fa-question-circle"></i></h3>
		</div>
		<div class="modal-body">
			<h4 style="margin-bottom:0;" class="text-primary"><b>Features</b></h4>
			<p style="margin-top:0;">This part will discuss the Features module. It will show you how to manage the features of the test or tools used that will be shown in the website.</p>
			<div style="padding:15px;">
				
				<label><b>Step 1 :</b>&nbsp;</label>
				Under “WEBSITE MAINTENANCE”, click [1] which will direct you to this page.<br><br>
				<img class="dynamic" src="{{asset('img/features/features.jpg')}}"><br><br>

				<p class="text-danger"><b><em>How to edit a Feature?</em></b>&nbsp;</p>
				
				<label><b>Step 2 :</b>&nbsp;</label>
				You will now be able to change the title and description. To commit any changes, click [7]. To disregard any changes, click [8].<br><br>
                <img class="dynamic" src="{{asset('img/features/features5.jpg')}}"><br><br>

				<label><b>Step 3 :</b>&nbsp;</label>
				Once you edited the feature, a message [9] will appear that the changes were made successfully.<br><br>
				<img class="dynamic" src="{{asset('img/features/features6.jpg')}}"><br><br>
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
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 112) { 
        e.preventDefault();
        $("#manualEditFeatures").modal("show");
    }
})
</script>
@endsection