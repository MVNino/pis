@extends('admin.layouts.app')

@section('breadcrumb')
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
	<h4 class="page-title">Expenses</h4>
</div>
<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i></a></li>
		<li>Transaction</li>
		<li><a href="{{ route('maintenance.faqs') }}">Edit Expenses</a></li>
	</ol>
</div>
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-light">Edit Expenses</h3>
        </div>
        <div class="card-body">
            <div class="container">
                {!!Form::open(['action' => ['Transaction\ReportController@updateExpense', $expense->expense_id], 'method' => 'POST', 'class' => 'form-material form-horizontal'])!!}
                    {{Form::hidden('_method', 'PUT')}}
                    <div class="form-group">
                        <label class="col-md-12">Date</label>
                        <div class="col-md-12">
                            <input type="date" name="date" class="form-control" value="{{$expense->expense_date}}"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Purpose of Expense</label>
                        <div class="col-md-12">
                            <textarea name = "expenses" class="form-control" rows="3">{{$expense->name}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
						<label class="col-md-12">Amount</label>
						<div class="col-md-12">
							<input type="number" name="amount" class="form-control" value="{{$expense->cost}}"> 
						</div>
					</div>
                    <div align="right">
                        <button id="btnSave" type="submit" class="btn btn-info">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i> Save
                        </button>
                        <a href="{{ route('transaction.expenses') }}" role="button" id="btnCancel" type="button" class="btn btn-inverse" style="display: inline-block;">
                            <i class="fa fa-close"></i> Cancel
                        </a>
                    </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div style="padding-top: 240px;" class="modal fade bd-example-modal-lg" id="manualEditExpenses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
				
				<p class="text-danger"><b><em>How to edit an expense record?</em></b>&nbsp;</p>

				<label><b>Step 1 :</b>&nbsp;</label>
				To edit an expense record, click [4] from the Clinic Expenses page.<br><br>

				<img class="dynamic" src="{{asset('img/expense/expense3.jpg')}}"><br><br>


				<label><b>Step 2 :</b>&nbsp;</label>
				You may now edit the date purpose and amount of the expense.<br><br>
				
				<label><b>Step 3 :</b>&nbsp;</label>
				Click [6] to save the changes.<br><br>
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
			$("#manualEditExpenses").modal("show");
			
		}
		return false;
	};
</script>
@endsection