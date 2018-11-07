@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Daily Cash Position</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li>Transaction</li>
			<li>
				<a class="active" href="#">Daily Cash Position</a>
			</li>
		</ol>
	</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="white-box">
            <div id="calendar"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="white-box">
        {!! Form::open(['action' => 'Transaction\ReportController@listDailyReport', 'method' => 'POST', 'autocomplete' => 'off', 'onsubmit' => "return confirm('Generate PDF?')"]) !!}
            @csrf
            <form class="form-material form-horizontal" method="POST">
                <div class="form-group">
                    <select class="form-control" name="" id="freqReports">
                        <option value="0">...</option>
                        <option value="1">Daily</option>
                        <option value="3">Monthly</option>
                    </select>
                </div>
                
                <div class="collapse" id="collapseDaily">
                    <div class="form-group">
                        <input class="form-control" name="dateStart" id="demoDate" type="date" placeholder="Select Date" value ="{{ Carbon\Carbon::now()->format('Y-m-d') }}" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary float-right"><i class="fa fa-file"></i> Generate PDF</button>
                    </div>
                </div>
            </form> 
        {!! Form::close() !!}

    {!! Form::open(['action' => 'Transaction\ReportController@listMonthlyReport', 'method' => 'POST', 'autocomplete' => 'off', 'onsubmit' => "return confirm('Generate PDF?')"]) !!}
        @csrf
    <div class="collapse" id="collapseMonthly">
            <div class="form-group">
                <select name="dateStart" id="demoDate" class="form-control">
                    <option value="0">...</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary float-right"><i class="fa fa-file"></i> Generate PDF</button>
            </div>
    </div>
    {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection

@section('pg-specific-js')

<script>
    function getSelected() {
        let selected = $("#freqReports").val();
        //console.log(selected);

        if(selected == ""){
            console.log("...");   
            $("#collapseDaily").collapse({toggle: false}).collapse('hide');
            $("#collapseMonthly").collapse({toggle: false}).collapse('hide');   
            $("#collapseWeekly").collapse({toggle: false}).collapse('hide'); 
            $("#btnDaily").show();
        }
        else if(selected == 1){
            console.log("Daily");  
            $("#collapseDaily").collapse({toggle: true}).collapse('show');
            $("#collapseMonthly").collapse({toggle: false}).collapse('hide'); 
            $("#collapseWeekly").collapse({toggle: false}).collapse('hide'); 
            $("#btnDaily").show();
        }
        else if(selected == 2){
            console.log("Weekly"); 
            $("#collapseWeekly").collapse({toggle: true}).collapse('show');
            $("#collapseDaily").collapse({toggle: false}).collapse('hide'); 
            $("#collapseMonthly").collapse({toggle: false}).collapse('hide'); 
        }
        else if(selected == 3){
            $("#collapseMonthly").collapse({toggle: true}).collapse('show');   
            $("#collapseDaily").collapse({toggle: false}).collapse('hide'); 
            $("#collapseWeekly").collapse({toggle: false}).collapse('hide'); 
        }
    }
 
$( "select" ).change(getSelected);
getSelected();
</script>

@endsection