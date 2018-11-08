@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Appointment</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li>Transaction</li>
			<li>
				<a class="active" href="#">Appointment</a>
			</li>
		</ol>
	</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">list of Appointment</h3>
            <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Date and Time</th>
                        <th class="text-center" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->full_name }}</td>
                    <td>{{ $appointment->email }}</td>
                    <td>{{ $appointment->contact_no }}</td>
                    <td>{{ $appointment->custom_appointment_date.' - '.$appointment->time }}</td>
                    <td class="text-center">
                        {!! Form::open(['action' => ['Transaction\AppointmentController@approveAppointment', $appointment->id], 'method' => 'POST', 'onsubmit' => "return confirm('Approve appointment?')"]) !!}
                            {{ Form::hidden('_method', 'PUT') }}
                            <button type="submit" class="btn btn-sm btn-success">Approve</button>
                        {!! Form::close() !!}
                    </td>
                    <td class="text-center">
                        {!! Form::open(['action' => ['Transaction\AppointmentController@rescheduleAppointment', $appointment->id], 'method' => 'POST', 'onsubmit' => "return confirm('Reschedule appointment?')"]) !!}
                            {{ Form::hidden('_method', 'PUT') }}
                            <button type="submit" class="btn btn-sm btn-warning">Reschedule</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @empty
                <div class="alert alert-warning">
                    There is no record yet.
                </div>
                <tfoot>
                </tfoot>
                @endforelse
                </tbody>
			</table>
        </div>
    </div>
</div>

<!-- Modal -->
<div style="padding-top: 350px;" class="modal fade bd-example-modal-lg" id="manualAppointment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h3 id="exampleModalLongTitle"> &nbsp;<b>HELP</b> &nbsp;<i class="fa fa-question-circle"></i></h3>
		</div>
		<div class="modal-body">
			<h4 style="margin-bottom:0;" class="text-primary"><b>Schedule</b></h4>
				<p class="text-danger"><b><em>Appointment</em></b>&nbsp;</p>
                <div style="padding:15px;">
				
				<label><b>Step 1 :</b>&nbsp;</label>
				Under Appointment, the list of pending appointments will be shown. To approve an appointment, click [1].<br><br>

				<label><b>Step 2 :</b>&nbsp;</label>
				To confirm the approval, click [2].<br><br>
				<img class="dynamic" src="{{asset('img/appointment/appointment1.JPG')}}"><br><br>
				<img class="dynamic" src="{{asset('img/appointment/appointment2.JPG')}}"><br><br>

				
				<label><b>Step 3 :</b>&nbsp;</label>
				To reschedule an appointment, click [3].<br><br>

				<label><b>Step 4 :</b>&nbsp;</label>
				To confirm the rescheduling, click [4].<br><br>
				<img class="dynamic" src="{{asset('img/appointment/appointment3.JPG')}}"><br><br>
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
	window.addEventListener("keydown",function (e) {
    if (e.keyCode === 112) { 
        e.preventDefault();
        $("#manualAppointment").modal("show");
    }
})
</script>
@endsection
