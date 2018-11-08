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
					@forelse($features as $feature)  
						<tr>
							@if($feature->status == 0)
							<td>{{$feature->feature_title}}</td>
							<td>{{$feature->feature_description}}</td>
							<td class="text-center">
								<a role="button" href="{{action('Maintenance\FeatureController@edit', $feature->features_id)}}" class="btn btn-sm btn-primary">
									<i class="fa fa-edit"></i>
								</a>
							</td>
							<td class="text-center">
                                {!!Form::open(['action' => ['Maintenance\FeatureController@deleteFeature', $feature->features_id],'method' => 'POST', 'onsubmit' => "return confirm('Remove Feature?')"])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" data-original-title="Delete">
                                        <i class="fa fa-times"></i>
                                    </button>
                                {!!Form::close()!!}
                            </td>
                            @endif
						</tr>
					@empty
						<div class="alert alert-warning">
							There is no record yet.
						</div>
					@endforelse
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
			<div align="center">
				{{ $features->links() }}
			</div>
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

<!-- Modal -->
<div style="padding-top: 750px;" class="modal fade bd-example-modal-lg" id="manualFeatures" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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

				<p class="text-danger"><b><em>How to add a Feature?</em></b>&nbsp;</p>

				<label><b>Step 1 :</b>&nbsp;</label>
				To add a new Feature, click [2] which will direct you to this page.<br><br>
				<img class="dynamic" src="{{asset('img/features/features1.jpg')}}"><br><br>
				
				<label><b>Step 2 :</b>&nbsp;</label>
				Input the title of the feature.<br><br>

				<label><b>Step 3 :</b>&nbsp;</label>
				Input the description of the feature.<br><br>

				<label><b>Step 4 :</b>&nbsp;</label>
				To save the new feature, click [5]. A message [6] will be shown that the adding of feature is successful.<br><br>
				<img class="dynamic" src="{{asset('img/features/features2.jpg')}}"><br><br>

				<p class="text-danger"><b><em>How to delete a Feature?</em></b>&nbsp;</p>

				<label><b>Step 1 :</b>&nbsp;</label>
				To delete a feature, click [4]. Once you clicked the button, a confirmation message will appear to confirm your action.<br><br>
				
				<img class="dynamic" src="{{asset('img/features/features3.jpg')}}"><br><br>
				<label><b>Step 2 :</b>&nbsp;</label>
				Click [10] to remove the feature. Click [11] to disregard any changes. Once you deleted the feature, a message [12] will appear that the feature is removed successfully.<br><br>
				<img class="dynamic" src="{{asset('img/features/features4.jpg')}}"><br><br>
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
<!-- wysuhtml5 Plugin JavaScript -->
<script src="{{ asset('elite/js/tinymce.min.js') }}"></script>
<script>
$(document).ready(function() {

	if ($("#mymce").length > 0) {
		tinymce.init({
			selector: "textarea#mymce",
			theme: "modern",
			height: 300,
			plugins: [
				"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
				"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
				"save table contextmenu directionality emoticons template paste textcolor"
			],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
		});
	}
});
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 112) { 
        e.preventDefault();
        $("#manualFeatures").modal("show");
    }
})
</script>
@endsection