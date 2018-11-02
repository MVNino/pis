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
                            <th colspan="2">Action</th>
                        <tr>
                    </thead>
                    <tbody>
                        @forelse($clinics as $clinic) 
                        @if($clinic->status == 0)
                        <tr>
                            <td>{{$clinic->clinic_contact}}</td>
                            <td>{{$clinic->clinic_location}}</td>
                            <td>{{\Carbon\Carbon::createFromFormat('H:i:s',$clinic->clinic_open_time)->format('g:i A')}}</td>
                            <td>{{\Carbon\Carbon::createFromFormat('H:i:s',$clinic->clinic_close_time)->format('g:i A')}}</td>
                            <td>{{$clinic->clinic_days}}</td>
                            <td align="center">
                                <a href="{{action('Maintenance\ClinicController@edit', $clinic->clinic_contact_id)}}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td align="center">
                                {!!Form::open(['action' => ['Maintenance\ClinicController@deleteClinic', $clinic->clinic_contact_id],'method' => 'POST', 'onsubmit' => "return confirm('Remove Clinic Details?')"])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" data-original-title="Delete">
                                        <i class="fa fa-times"></i>
                                    </button>
                                {!!Form::close()!!}
                            </td>
                        </tr>
                        @endif
                        @empty
                            <div class="alert alert-warning">
                                There is no record yet.
                            </div>
                        @endforelse
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
                <div align="center">
                    {{ $clinics->links() }}
                </div>
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
                {!! Form::open(['action' => 'Maintenance\ClinicController@addClinic', 'method' => 'POST', 'enctype' => 'multipart/form-data','class' => 'form-material' ,'autocomplete' => 'off'])!!}
                    <div class="form-group">
                        <label class="col-md-12">Contact</span></label>
                        <div class="col-md-12">
                            <input type="text" name="contact" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Location</span></label>
                        <input type="text" name="location" class="form-control col-md-12"/> 
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
                        <label class="col-md-12">Clinic Open Days</span></label>
                        <div class="col-md-12">
                            <input type="text" name="days" class="form-control"/> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Map Image</label>
                        <div class="col-md-12">
                            <div class="form-group">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                    <input type="file" name="fileMapImg"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
                            </div>
                        </div>
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

<!-- Modal -->
<div style="padding-top: 650px;" class="modal fade bd-example-modal-lg" id="manualClinic" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h3 id="exampleModalLongTitle"> &nbsp;<b>HELP</b> &nbsp;<i class="fa fa-question-circle"></i></h3>
		</div>
		<div class="modal-body">
			<h4 style="margin-bottom:0;" class="text-primary"><b>Clinic</b></h4>
			<p style="margin-top:0;">This part will discuss the Clinic module. It will show you how to manage the clinic information in the system.</p>
			<div style="padding:15px;">
				
				<label><b>Step 1 :</b>&nbsp;</label>
				Under “WEBSITE MAINTENANCE”, click [1] which will direct you to this page.<br><br>
				<img class="dynamic" src="{{asset('img/clinic/clinic.jpg')}}"><br><br>

				<p class="text-danger"><b><em>How to add a Clinic?</em></b>&nbsp;</p>

				<label><b>Step 1 :</b>&nbsp;</label>
				To add a new Clinic, click [2] which will direct you to this page.<br><br>
				<img class="dynamic" src="{{asset('img/clinic/clinic.jpg')}}"><br><br>
				
				<label><b>Step 2 :</b>&nbsp;</label>
				Input the contact, location, operating hours, and opening days of the new clinic.<br><br>

				<label><b>Step 3 :</b>&nbsp;</label>
				Select an image for your map. After selecting an image, you will be given an option to change or remove the image.<br><br>

				<label><b>Step 4 :</b>&nbsp;</label>
				To add your new clinic, click [5]. A message [6] will be shown that the adding of clinic is successful.<br><br>
				<img class="dynamic" src="{{asset('img/clinic/clinic2.jpg')}}"><br><br>

				<p class="text-danger"><b><em>How to delete a Clinic?</em></b>&nbsp;</p>

				<label><b>Step 1 :</b>&nbsp;</label>
                To delete a clinic, click [4]. Once you clicked the button, a confirmation message will appear to confirm your action.

				<img class="dynamic" src="{{asset('img/clinic/clinic3.jpg')}}"><br><br>
				<label><b>Step 2 :</b>&nbsp;</label>
			    Click [10] To remove the clinic. Click [11]. To disregard any changes. Once you deleted the clinic, a message [12] will appear that the clinic is removed successfully.<br><br>
				<img class="dynamic" src="{{asset('img/clinic/clinic4.jpg')}}"><br><br>
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
<!-- wysuhtml5 Plugin JavaScript -->
<script src="{{ asset('elite/js/tinymce.min.js') }}"></script>
<script>
$(document).ready(function() {

    if ($("#mymce").length > 0) {
        tinymce.init({
            selector: "textarea#mymce",
            theme: "modern",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
        });
    }
});

window.onhelp = function() {
    return false;
};
window.onkeydown = evt => {
    if (evt.keyCode == 112){
        $("#manualClinic").modal("show");
        
    }
    return false;
};
</script>
@endsection