@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">News</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#">Dashboard</a></li>
			<li>Maintenance</li>
			<li class="active">News</li>
		</ol>
	</div>
@endsection

@section('content')
{{-- List News --}}
<div class="row">
		<div class="col-lg-12">
			<div class="white-box">
				<h3 class="box-title m-b-0">News</h3>
				<div align="right">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						<i class="fa fa-plus"></i> Add News
					</button><br><br>
				</div>
				<table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
					<thead>
						<tr>
							<th>Order</th>
							<th>Title</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
							<tr>
								<td></td>
								<td></td>
								<td><span class="label label-table label-success">Active</span></td>
								<td>
									wow
								</td>
							</tr>
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
{{-- /List News --}}

{{-- Add news modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="exampleModalLabel">Add News</h4>
			</div>
			<div class="modal-body">
				{!! Form::open(['action' => 'Maintenance\NewsController@addNews', 'method' => 'POST', 
				'autocomplete' => 'off', 'enctype' => 'multipart/form-data', 'class' => 'form-material form-horizontal'])!!}
					<div class="form-group">
						{{ Form::label('lblOrder', 'Order of viewing') }}
						{{ Form::number('numOrder', '', ['class' => 'form-control', 'min' => '1']) }}					
					</div>
					<div class="form-group">
						{{ Form::label('lblNewsTitle', 'News Title') }}
						{{ Form::text('title', '', ['class' => 'form-control']) }}
					</div>
					<div class="form-group">
						{{ Form::label('lblNewsDesc', 'News Description') }}
						{{ Form::textarea('description', '', ['class' => 'form-control']) }}
					</div>
					<div class="form-group">
						<label class="col-sm-12">Image</label>
						<div class="col-sm-12">
							<div class="fileinput fileinput-new input-group" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
								<input type="file" name="fileNewsImg"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
							</div>
						</div>
					</div>			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Close</button>
				<button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
{{-- /Add news modal --}}
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
</script>
@endsection