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
<!-- Modal -->
<div style="padding-top: 580px;" class="modal fade bd-example-modal-lg" id="manualReport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h3 id="exampleModalLongTitle"> &nbsp;<b>HELP</b> &nbsp;<i class="fa fa-question-circle"></i></h3>
		</div>
		<div class="modal-body">
			<h4 style="margin-bottom:0;" class="text-primary"><b>Reports</b></h4>
                <div style="padding:15px;">

				<p class="text-danger"><b><em>Generate Daily Reports</em></b>&nbsp;</p>
                <label><b>Step 1 :</b>&nbsp;</label>
				To select the frequency of reports, choose 'Daily' from the dropdown [1].<br><br>

                <label><b>Step 2 :</b>&nbsp;</label>
				Select the date of choice.<br><br>
				<img class="dynamic" src="{{asset('img/reports/report1.JPG')}}"><br><br>

                <label><b>Step 3 :</b>&nbsp;</label>
				Click generate PDF [2] to generate the reports.<br><br>

                <p class="text-danger"><b><em>Generate Monthly Reports</em></b>&nbsp;</p>
                <label><b>Step 1 :</b>&nbsp;</label>
				To select the frequency of reports, choose Monthly from the dropdown [1].<br><br>
				<img class="dynamic" src="{{asset('img/reports/report2.JPG')}}"><br><br>
                
                <label><b>Step 2 :</b>&nbsp;</label>
				Select a month from the dropdown [2]<br><br>

                <label><b>Step 3 :</b>&nbsp;</label>
				Click 'Generate PDF' [3] to generate the reports.<br><br>

                Once Generate Reports is clicked, the report of the chosen frequency will be shown in PDF format.<br><br>
				<img class="dynamic" src="{{asset('img/reports/report3.JPG')}}"><br><br>
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
        $("#manualReport").modal("show");
    }
})
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