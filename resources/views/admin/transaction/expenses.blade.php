@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Clinic Expenses</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li>Transaction</li>
			<li>
				<a class="active" href="#">Clinic Expenses</a>
			</li>
		</ol>
	</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
		<div class="container">
			<div class="white-box">
			
				<div align="right">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						<i class="fa fa-plus"></i> Add Expenses
					</button>
				</div><br>
				<table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
					<thead>
						<tr>
							<th>Date</th>
							<th>Purpose of Expense</th>
							<th colspan="2" class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>    
							<td>10/12/1998</td>
							<td>Buying new Medicine Equipment</td>
							<td class="text-center">
								<a href="{{action('Transaction\ReportController@editExpenses')}}" class="btn btn-sm btn-primary">
									<i class="fa fa-edit"></i>
								</a>
							</td>
							<td class="text-center">
								<button type="submit" class="btn btn-sm btn-icon btn-danger delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
									<i class="ti-close" aria-hidden="true"></i>
								</button>
							</td>
						</tr>
					</tbody>
					<tfoot>
					</tfoot>
				</table>
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
			<form class="form-material form-horizontal" method="POST">
				<div class="modal-body">
					<div class="form-group">
						<label class="col-md-12">Date</label>
						<div class="col-md-12">
							<input type="date" name="date" class="form-control"> 
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Purpose of Expenses</label>
						<div class="col-md-12">
							<textarea name ="expenses" class="form-control" rows="3"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Amount</label>
						<div class="col-md-12">
							<input type="number" name="amount" class="form-control"> 
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-info"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
				</div>
			</form>	
		</div>
	</div>
</div>
@endsection
