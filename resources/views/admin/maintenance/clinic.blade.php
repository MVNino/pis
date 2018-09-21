@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Clinic</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Maintenance</a></li>
			<li class="active">Clinic</li>
		</ol>
	</div>
@endsection

@section('content')
<div class="row">
        <div class="col-lg-12">
            <div class="white-box">
            <div align="right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-plus"></i> Clinic Information
                </button><br><br>
            </div>
                <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                    <thead>
                        <tr>
                            <th>Contact</th>
                            <th>Location</th>
                            <th>Opening Time</th>
                            <th>Closing Time</th>
                            <th>Clinic Days</th>
                            <th>Email Address</th>
                            <th colspan="2">Action</th>
                        <tr>
                    </thead>
                    <tbody>
                        @foreach($clinic as $row) 
                        <tr>
                            <td>{{$row['clinic_contact']}}</td>
                            <td>{{$row['clinic_location']}}</td>
                            <td>{{$row['clinic_open_time']}}</td>
                            <td>{{$row['clinic_close_time']}} </td>
                            <td>{{$row['clinic_days']}} </td>
                            <td>{{$row['clinic_email']}} </td>


                            <td>
                            <a href="{{action('Maintenance\ClinicController@edit', $row['clinic_contact_id'])}}" class="btn btn-sm btn-primary">
                                <i class="fa fa-edit"></i>
                            </a>
                            </td>
                            <td>
                            {!!Form::open(['action' => ['Maintenance\ClinicController@deleteClinic', $row['clinic_contact_id']],'method' => 'POST', 'onsubmit' => "return confirm('Remove Clinic Details?')"])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" data-original-title="Delete">
                                        <i class="fa fa-times"></i>
                                        </button>
                            {!!Form::close()!!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="text-right">
                                    <ul class="pagination"> </ul>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
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
                <h4 class="modal-title" id="exampleModalLabel">Add Details</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['action' => 'Maintenance\ClinicController@addClinic','class' => 'form-material' ,'autocomplete'=>'off' ,'method' => 'POST']) !!}
                    <div class="form-group">
                        <label class="col-md-12">Contact</span></label>
                        <div class="col-md-12">
                            <input type="text" name="contact" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Location</span></label>
                        <div class="col-md-12">
                            <input type="text" name="location" class="form-control"/> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-6">Clinic Opening Time</span></label>
                        <label class="col-md-6">Clinic Closing Time</span></label>
                        <div class="col-md-6">
                            <input type="time" name="open" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <input type="time" name="close" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Clinic Days</span></label>
                        <div class="col-md-12">
                            <input type="text" name="days" class="form-control"/> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Email Address</span></label>
                        <div class="col-md-12">
                            <input type="text" name="email" class="form-control"/> 
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                </div>
                {!!Form::close()!!}
            </form>
        </div>
    </div>
</div>
@endsection
