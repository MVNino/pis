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
            <form class="form-material form-horizontal">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-12">Patient Name</label>
                        <select name="patientName" class="form-control">
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Date</label>
                        <input type ="date" name="date" class="form-control">
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
            </form>
        </div>
    </div>
</div>
@endsection
