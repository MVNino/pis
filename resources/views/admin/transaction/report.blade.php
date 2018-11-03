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
			<form class="form-material form-horizontal" method="POST">
				<div class="modal-body">
					<div class="form-group">
						<label class="col-md-12">Frequencies of Reports</label>
						<div class="col-md-12">
							<select id="freqReports" class="form-control">
                                <option value="">...</option>
                                <option value="1">Daily</option>
                                <option value="2">Weekly</option>
                                <option value="3">Monthly</option>
                            </select> 
						</div>
                    </div>
                    <div class="collapse" id="collapseDaily">
                        <div class="form-group">
                            <label class="col-md-12">Date</label>
                            <div class="col-md-12">
                                <input type="date" name="date" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="collapseMonthly">
                        <div class="form-group">
                            <label class="col-md-12">Month</label>
                            <div class="col-md-12">
                                <select id="selectMonth"class="form-control">
                                    <option value="">...</option>
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
                        </div>
                    </div>
                    <div class="collapse" id="collapseWeekly">
                        <div class="form-group">
                            <label class="col-md-12">Month</label>
                            <div class="col-md-12">
                                <select id="selectMonth1"class="form-control">
                                    <option value="">...</option>
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
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Week</label>
                            <div class="col-md-12">
                                <select id="selectWeek"class="form-control">
                                    <option value="">...</option>
                                    <option value="1">1st</option>
                                    <option value="2">2nd</option>
                                    <option value="3">3rd</option>
                                    <option value="4">4th</option>
                                </select>
                            </div>
                        </div>
                    </div>
				</div>
                <div class="modal-footer">
                    <a role="button" target="_blank" href="{{ route('transaction.generatedReport') }}" class="btn btn-primary float-right">
                        <i class="fa fa-file"> Generate PDF</i>
                    </a>
                </div>
			</form>	
        </div>
    </div>
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