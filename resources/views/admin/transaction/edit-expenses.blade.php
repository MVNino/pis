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
                <form class="form-material">
                    <div class="form-group">
                        <label class="col-md-12">Date</label>
                        <div class="col-md-12">
                            <input type="date" name="date" class="form-control"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Purpose of Expense</label>
                        <div class="col-md-12">
                            <textarea name = "expenses" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
						<label class="col-md-12">Amount</label>
						<div class="col-md-12">
							<input type="number" name="amount" class="form-control"> 
						</div>
					</div>
                    <div align="right">
                        <button id="btnSave" type="button" class="btn btn-info">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i> Save
                        </button>
                        <a href="{{ route('transaction.expenses') }}" role="button" id="btnCancel" type="button" class="btn btn-inverse" style="display: inline-block;">
                            <i class="fa fa-close"></i> Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection