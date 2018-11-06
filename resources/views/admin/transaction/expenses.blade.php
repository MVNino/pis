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
						<th>Amount</th>
						<th colspan="2" class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($expenses as $expense)
						<tr>    
							<td>{{\Carbon\Carbon::createFromFormat('Y-m-d', $expense->expense_date)->format('F j, Y')}}</td>
							<td>{{$expense->name}}</td>
							<td>PHP {{$expense->cost}}</td>
							<td class="text-center">
								<a href="/admin/transaction/editExpenses/{{$expense->expense_id}}" class="btn btn-sm btn-primary">
									<i class="fa fa-edit"></i>
								</a>
							</td>
							<td class="text-center">
								{!!Form::open(['action' => ['Transaction\ReportController@deleteExpense', $expense->expense_id],'method' => 'POST', 'onsubmit' => "return confirm('Remove Expense?')"])!!}
									{{Form::hidden('_method', 'DELETE')}}
									<button type="submit" class="btn btn-sm btn-icon btn-danger delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
										<i class="ti-close" aria-hidden="true"></i>
									</button>
								{!!Form::close()!!}
							</td>
						</tr>
					@endforeach
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
				<h4 class="modal-title" id="exampleModalLabel">Add Expenses</h4>
			</div>
			{!! Form::open(['action' => 'Transaction\ReportController@addExpense', 'method' => 'POST', 'autocomplete' => 'off', 'enctype' => 'multipart/form-data', 'class' => 'form-material form-horizontal'])!!}
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
			{!! Form::close() !!}
		</div>
	</div>
</div>

<!-- Modal -->
<div style="padding-top: 400px;" class="modal fade bd-example-modal-lg" id="manualExpenses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h3 id="exampleModalLongTitle"> &nbsp;<b>HELP</b> &nbsp;<i class="fa fa-question-circle"></i></h3>
		</div>
		<div class="modal-body">
			<h4 style="margin-bottom:0;" class="text-primary"><b>Clinic Expenses</b></h4>
			<div style="padding:15px;">
				
				<p class="text-danger"><b><em>How to add a expense record?</em></b>&nbsp;</p>

				<label><b>Step 1 :</b>&nbsp;</label>
				To view the existing clinic expenses, click [1] from the navigation bar.<br><br>

				<img class="dynamic" src="{{asset('img/expense/expense1.jpg')}}"><br><br>


				<label><b>Step 2 :</b>&nbsp;</label>
				To add a new record of clinic expense, click [2], which will direct you to this page.<br><br>
				<img class="dynamic" src="{{asset('img/expense/expense2.jpg')}}"><br><br>
				
				<label><b>Step 3 :</b>&nbsp;</label>
				Input the date, purpose, and amount of the expense.<br><br>

				<label><b>Step 4 :</b>&nbsp;</label>
				Click [3] to save the record.<br><br>

				<p class="text-danger"><b><em>How to delete an expense record?</em></b>&nbsp;</p>

				<label><b>Step 1 :</b>&nbsp;</label>
				To delete an expense record, click [5] from the clinic expenses page.<br><br>
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
	window.onhelp = function() {
		return false;
	};
	window.onkeydown = evt => {
		if (evt.keyCode == 112){
			$("#manualExpenses").modal("show");
			
		}
		return false;
	};
</script>
@endsection
