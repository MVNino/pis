@extends('admin.layouts.app')

@section('breadcrumb')
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Account</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Maintenance</a></li>
            <li class="active">Account</li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <div id="pnlSecurity">
                <h3 class="box-title" id="security">Change Account Name</h3>
                {!! Form::open(['action' => ['Maintenance\AccountController@changeName', Auth::user()->id], 'method' => 'POST', 
                    'onsubmit' => "return confirm('Update Name?')", 'class' => 'form-material form-horizontal', 
                    'style' => 'padding-left:80px; padding-right:80px;']) !!}
                    {{ Form::hidden('_method', 'PUT') }}
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Current Name</label>
                            <div>
                                <input class="form-control" name="name" value="{{Auth::user()->name}} "required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Current Username</label>
                            <div>
                                <input class="form-control" name="username" value="{{Auth::user()->username}} "required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info waves-effect pull-right waves-light">
                        <i class="fa fa-fw fa-lg fa-check-circle"></i>Save Changes
                    </button><br><br>
                {!! Form::close() !!}
            </div>
            
            <div id="pnlSecurity">
                <h3 class="box-title" id="security">Change Account Picture</h3>
                {!! Form::open(['action' => ['Maintenance\AccountController@updateProfile', Auth::user()->id], 'method' => 'POST', 
                    'onsubmit' => "return confirm('Update Account Picture?')", 'class' => 'form-material form-horizontal', 
                    'style' => 'padding-left:80px; padding-right:80px;', 'enctype' => 'multipart/form-data']) !!}
                    {{ Form::hidden('_method', 'PUT') }}
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <a target="_blank" href="/storage/images/profile/{{Auth::user()->profile_image_code}}">
                                <img src="/storage/images/profile/{{Auth::user()->profile_image_code}}" style="width: 100%;">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="col-sm-12">Current Account Image</label>
                                <p>{{Auth::user()->profile_image_code}}</p>
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                        <span class="fileinput-filename"></span>
                                    </div>
                                    <span class="input-group-addon btn btn-default btn-file">
                                        <span class="fileinput-new">Select file</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="profileImage" accept=".jpg,.jpeg,.png">
                                    </span>
                                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info waves-effect pull-right waves-light">
                                <i class="fa fa-fw fa-lg fa-check-circle"></i>Save Changes
                            </button><br><br>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
            <div id="pnlSecurity">
                <h3 class="box-title" id="security">Change Account Password</h3>
                {!! Form::open(['action' => ['Maintenance\AccountController@changePassword', Auth::user()->id], 'method' => 'POST', 
                    'onsubmit' => "return confirm('Change your password?')", 'class' => 'form-material form-horizontal', 
                    'style' => 'padding-left:80px; padding-right:80px;']) !!}
                    @csrf
                    <div class="form-group">
                        <label class="col-md-12">Current Password</span></label>
                        <div class="col-md-12">
                            <input class="form-control" name="currentPassword" type="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">New Password</span></label>
                        <div class="col-md-12">
                            <input class="form-control" id="newPwd" name="newPassword" type="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Confirm Password</span></label>
                        <div class="col-md-12">
                            <input class="form-control" id="confirmPwd" name="confirmPassword" type="password" required>
                        </div>
                    </div>
                    {{ Form::hidden('_method', 'PUT') }}
                    <button type="submit" class="btn btn-info waves-effect pull-right waves-light">
                        <i class="fa fa-fw fa-lg fa-check-circle"></i>Save Changes
                    </button><br><br>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div style="padding-top: 850px;" class="modal fade bd-example-modal-lg" id="manualAppointment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h3 id="exampleModalLongTitle"> &nbsp;<b>HELP</b> &nbsp;<i class="fa fa-question-circle"></i></h3>
		</div>
		<div class="modal-body">
			<h4 style="margin-bottom:0;" class="text-primary"><b>Account Setting</b></h4>
                <div style="padding:15px;">
				
				<label><b>Step 1 :</b>&nbsp;</label>
                Click 'Account Setting' [4] on the drop down menu.<br><br>
				
                <p class="text-danger"><b><em>Edit Account name</em></b>&nbsp;</p>
				<img class="dynamic" src="{{asset('img/nav/nav10.JPG')}}"><br><br>

                <label><b>Step 1 :</b>&nbsp;</label>
				Update the current name and username.<br><br>

				<label><b>Step 2 :</b>&nbsp;</label>
				Click 'Save Changes' [14] to update the account name.<br><br>
				<img class="dynamic" src="{{asset('img/nav/nav11.JPG')}}"><br><br>
				
				<label><b>Step 3 :</b>&nbsp;</label>
				Click [15] to confirm the changes. A message will appear once the changes are successfully made.<br><br>
				<img class="dynamic" src="{{asset('img/nav/nav12.JPG')}}"><br><br>
                
                <p class="text-danger"><b><em>Edit Account Picture</em></b>&nbsp;</p>
				<img class="dynamic" src="{{asset('img/nav/nav10.JPG')}}"><br><br>

                <label><b>Step 1 :</b>&nbsp;</label>
				To change the account picture, click [16] to select an image.<br><br>
				<img class="dynamic" src="{{asset('img/nav/nav13.JPG')}}"><br><br>

				<label><b>Step 2 :</b>&nbsp;</label>
				Once the image is selected, click [17] to save the changes<br><br>
				<img class="dynamic" src="{{asset('img/nav/nav14.JPG')}}"><br><br>
				
				<label><b>Step 3 :</b>&nbsp;</label>
				Click [18] to confirm the changes. A message will appear once the changes are successfully made.<br><br>
				<img class="dynamic" src="{{asset('img/nav/nav12.JPG')}}"><br><br>
                
                <p class="text-danger"><b><em>Edit Account Password</em></b>&nbsp;</p>
				<img class="dynamic" src="{{asset('img/nav/nav10.JPG')}}"><br><br>

                <label><b>Step 1 :</b>&nbsp;</label>
				To change the password, input the current password, then input the new password.<br><br>
				<img class="dynamic" src="{{asset('img/nav/nav15.JPG')}}"><br><br>

				<label><b>Step 2 :</b>&nbsp;</label>
				Click [19] to save the changes.<br><br>
				<img class="dynamic" src="{{asset('img/nav/nav16.JPG')}}"><br><br>
				
				<label><b>Step 3 :</b>&nbsp;</label>
				Click [20] to confirm the changes. A message will appear once the changes are successfully made.<br><br>
				<img class="dynamic" src="{{asset('img/nav/nav17.JPG')}}"><br><br>


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
        $("#manualAppointment").modal("show");
    }
})
$('#confirmPwd').blur(() => {
    $newPwd = $('#newPwd').val();
    $confirmPwd = $('#confirmPwd').val();
    if($newPwd != $confirmPwd) {
        alert('Password did not matched!');
    }
});
</script>
@endsection