@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Approved Appointment</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li>Transaction</li>
			<li>
				<a class="active" href="#">Approved Appointment</a>
			</li>
		</ol>
	</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="text-center"><b>LIST OF APPROVED APPOINTMENT</b></h3>
            <div style="padding-right:90px;"align="right">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addAppointment">
				<i class="fa fa-plus"></i> &nbsp;Add Appointment
				</button><br><br>
			</div>
            <div class="row">
                <div class = "offset-md-1 col-md-10">
                    {{-- Today --}}
                    <h5 class="text-right text-danger"><b>Today: {{ Carbon\Carbon::now()->format('F d, Y') }}</b></h5>
                    <div class="table-responsive m-t-40">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width:150px;"class="text-left">Time</th>
                                    <th>Patient Name</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($appointments as $appointment)
                                @if($appointment->custom_appointment_date == Carbon\Carbon::now()->format('F d, Y'))
                                    <tr>
                                        <td class="text-left">{{ $appointment->time }}</td>
                                        {{-- <td><a href="/admin/transaction/billing/{{ $appointment->patient_id }}">{{ $appointment->full_name }}</a></td> --}}
                                        <td><a href="#">{{ $appointment->full_name }}</a></td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table><hr>
                    </div>

                    {{-- Tomorrow --}}
                    <h5 class="text-right text-danger"><b>Tomorrow: {{ Carbon\Carbon::now()->addDay()->format('F d, Y') }}</b></h5>
                    <div class="table-responsive m-t-40">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width:150px;"class="text-left">Time</th>
                                    <th>Patient Name</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($appointments as $appointment)
                                @if($appointment->custom_appointment_date == Carbon\Carbon::now()->addDay()->format('F d, Y'))
                                    <tr>
                                        <td class="text-left">{{ $appointment->time }}</td>
                                        <td><a href="#">{{ $appointment->full_name }}</a></td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table><hr>
                    </div>

                    {{-- 3rd day --}}
                    <h5 class="text-right text-danger"><b>{{ Carbon\Carbon::now()->addDays(2)->format('l: F d, Y') }}</b></h5>
                    <div class="table-responsive m-t-40">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width:150px;"class="text-left">Time</th>
                                    <th>Patient Name</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($appointments as $appointment)
                                @if($appointment->custom_appointment_date == Carbon\Carbon::now()->addDays(2)->format('F d, Y'))
                                    <tr>
                                        <td class="text-left">{{ $appointment->time }}</td>
                                        <td><a href="#">{{ $appointment->full_name }}</a></td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table><hr>
                    </div>

                    {{-- 4th day --}}
                    <h5 class="text-right text-danger"><b>{{ Carbon\Carbon::now()->addDays(3)->format('l: F d, Y') }}</b></h5>
                    <div class="table-responsive m-t-40">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width:150px;"class="text-left">Time</th>
                                    <th>Patient Name</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($appointments as $appointment)
                                @if($appointment->custom_appointment_date == Carbon\Carbon::now()->addDays(3)->format('F d, Y'))
                                    <tr>
                                        <td class="text-left">{{ $appointment->time }}</td>
                                        <td><a href="#">{{ $appointment->full_name }}</a></td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table><hr>
                    </div>

                    {{-- 5th day --}}
                    <h5 class="text-right text-danger"><b>{{ Carbon\Carbon::now()->addDays(4)->format('l: F d, Y') }}</b></h5>
                    <div class="table-responsive m-t-40">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width:150px;"class="text-left">Time</th>
                                    <th>Patient Name</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($appointments as $appointment)
                                @if($appointment->custom_appointment_date == Carbon\Carbon::now()->addDays(4)->format('F d, Y'))
                                    <tr>
                                        <td class="text-left">{{ $appointment->time }}</td>
                                        <td><a href="#">{{ $appointment->full_name }}</a></td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table><hr>
                    </div>

                    {{-- 6th day --}}
                    <h5 class="text-right text-danger"><b>{{ Carbon\Carbon::now()->addDays(5)->format('l: F d, Y') }}</b></h5>
                    <div class="table-responsive m-t-40">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width:150px;"class="text-left">Time</th>
                                    <th>Patient Name</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($appointments as $appointment)
                                @if($appointment->custom_appointment_date == Carbon\Carbon::now()->addDays(5)->format('F d, Y'))
                                    <tr>
                                        <td class="text-left">{{ $appointment->time }}</td>
                                        <td><a href="#">{{ $appointment->full_name }}</a></td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table><hr>
                    </div>

                    {{-- 7th day --}}
                    <h5 class="text-right text-danger"><b>{{ Carbon\Carbon::now()->addDays(6)->format('l: F d, Y') }}</b></h5>
                    <div class="table-responsive m-t-40">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width:150px;"class="text-left">Time</th>
                                    <th>Patient Name</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($appointments as $appointment)
                                @if($appointment->custom_appointment_date == Carbon\Carbon::now()->addDays(6)->format('F d, Y'))
                                    <tr>
                                        <td class="text-left">{{ $appointment->time }}</td>
                                        <td><a href="#">{{ $appointment->full_name }}</a></td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table><hr>
                    </div>

                    <h3>Future Appointments</h3>
                    <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Patient Name</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($appointments as $appointment)
                            @if($appointment->appointment_date->diffInDays(Carbon\Carbon::now()) >= 6)
                                <td>{{ $appointment->custom_appointment_date }}</td>
                                <td>{{ $appointment->time }}</td>
                                <td>{{ $appointment->full_name }}</td>
                            @endif
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
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addAppointment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 id="exampleModalLabel">Add Appointment</h3>
            </div>
            {!! Form::open(['action' => 'Transaction\AppointmentController@addAnotherAppointment', 'method' => 'POST']) !!}
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-12">Patient Name</label>
                        <select name="patientId" class="form-control">
                            @foreach($appointments as $appointment)
                            <option value="{{ $appointment->patient_id }}">{{ $appointment->full_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Date</label>
                        <input type ="date" name="appointmentDate" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Time</label>
                        <input type ="time" name="appointmentTime" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btnSend" type="submit" class="btn btn-info">
                        <i class="fa fa-fw fa-lg fa-check-circle"></i> Send
                    </button>
                    <button type="button" class="btn btn-inverse" style="display: inline-block;" data-dismiss="modal">
                        <i class="fa fa-close"></i> Cancel
                    </a>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<!-- Modal -->
<div style="padding-top: 440px;" class="modal fade bd-example-modal-lg" id="manualApprovedAppointment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
				<p class="text-danger"><b><em>Approved Appointment</em></b>&nbsp;</p>
                <div style="padding:15px;">
				
				<label><b>Step 1 :</b>&nbsp;</label>
				Once an appointment is approved, the record will be shown under Future Appointments.<br><br>
				<img class="dynamic" src="{{asset('img/appointment/appointment4.JPG')}}"><br><br>

				<label><b>Step 2 :</b>&nbsp;</label>
				Other approved appointments will also be shown under List of Approved Appointments.<br><br>
				<img class="dynamic" src="{{asset('img/appointment/appointment5.JPG')}}"><br><br>

                <label><b>Step 3 :</b>&nbsp;</label>
				To create a follow-up appointment for fully-paid patients, click [7].<br><br>
				<img class="dynamic" src="{{asset('img/appointment/appointment6.JPG')}}"><br><br>

                <label><b>Step 4 :</b>&nbsp;</label>
				Select the patient’s name and select the desired date and time.<br><br>

                <label><b>Step 5 :</b>&nbsp;</label>
				Click [8] to confirm the follow-up appointment. A message will be shown once the follow-up appointment is set.<br><br>
				<img class="dynamic" src="{{asset('img/appointment/appointment7.JPG')}}"><br><br>
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
        $("#manualApprovedAppointment").modal("show");
    }
})
</script>
@endsection
