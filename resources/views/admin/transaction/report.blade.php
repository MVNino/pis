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
{!! Form::open(['action' => 'Transaction\ReportController@rangedReport', 'method' => 'GET', 'autocomplete' => 'off']) !!}
    @csrf
<div class="row">
    <div class="col-md-8">
        <div class="white-box">
            <div id="calendar"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="white-box">
			<form class="form-material form-horizontal" method="POST">
				<div class="">
                    <label>Start Date</label>
                    <input class="form-control" name="dateStart" id="demoDate" type="date" placeholder="Select Date">
                </div>
                <div class="">
                    <label>End Date</label>
                    <input class="form-control" name="dateEnd" id="demoDate2" type="date" placeholder="Select Date" value="{{ Carbon\Carbon::now()->format('Y-m-d') }}" required>    
                </div>
                <div class="col-md-2">
                    <br>
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i>Search</button> 
                </div>
                <div class="modal-footer">
                    <a role="button" target="_blank" href="{{ route('transaction.generatedReport') }}" class="btn btn-primary float-right">
                        <i class="fa fa-file"> Generate PDF</i>
                    </a>
                </div>
			</form>	
        </div>
    </div>
    {!! Form::close() !!}
</div>
<!-- BEGIN MODAL -->
<div class="modal fade" id="my-event">
    <div class="modal-dialog modal-dialog-centered" style="padding-top: 150px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><strong>Daily Cash Position</strong></h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Okay</button>
            </div>
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
        }
        else if(selected == 1){
            console.log("Daily");  
            $("#collapseDaily").collapse({toggle: true}).collapse('show');
            $("#collapseMonthly").collapse({toggle: false}).collapse('hide'); 
            $("#collapseWeekly").collapse({toggle: false}).collapse('hide'); 
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