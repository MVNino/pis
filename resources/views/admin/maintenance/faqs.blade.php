@extends('admin.layouts.app')

@section('breadcrumb')
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
	<h4 class="page-title">FAQs</h4>
</div>
<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i></a></li>
		<li>Maintenance</li>
		<li><a class="active" href="{{ route('maintenance.faqs') }}">FAQs</a></li>
	</ol>
</div>
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<div align="right">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					<i class="fa fa-plus"></i> Add FAQs
				</button>
			</div><br>
			<table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
				<thead>
					<tr>
						<th>Questions</th>
						<th>Answer</th>
						<th>Category</th>
						<th>Status</th>
						<th colspan="2" class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td> Why Maganda Leki? </td>
						<td> Di ko din alam </td>
						<td> Others </td>
						<td><span class="label label-table label-success">Active</span></td>
						<td>
							<!-- for href="edit-faqs" -->
							<a role="button" class="btn btn-sm btn-primary" href="">
								<i class="fa fa-edit"></i>
							</a>
						</td>
						<td>
							<a role="button" class="btn btn-sm btn-danger">
								<i class="fa fa-times"></i>
							</a>
						</td>
					</tr>
				</tbody>
				<tfoot>
				</tfoot>
			</table>
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
			<div class="modal-body">	
			<form class="form-material form-horizontal">
					<div class="form-group">
						<label class="col-md-12">Question</label>
						<div class="col-md-12">
							<input type="text" name="question" class="form-control"> </div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Answer</label>
						<div class="col-md-12">
							<textarea name = "answer" class="form-control" rows="3"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Category</label>
						<div class="col-md-12">
							<select class="custom-select" name="category">
								<option selected>Select category</option>
								<option value="surgery">Surgery</option>
								<option value="service">Service</option>
								<option value="recovery">Recovery</option>
								<option value="appointment">Appointments</option>
								<option value="payments">Payments</option>
								<option value="others">Others</option>
							</select>
						</div>
					</div>
				</form>	
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-info"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
			</div>
		</div>
	</div>
</div>
@endsection