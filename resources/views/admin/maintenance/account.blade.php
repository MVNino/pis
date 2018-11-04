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
            <h3 class="box-title">Account</h3>
            {!! Form::open(['action' => ['Maintenance\AccountController@updateProfile', Auth::user()->id], 'method' => 'POST', 
                'enctype' => 'multipart/form-data', 'onsubmit' => "return confirm('Update your account?')", 'class' => 'form-material form-horizontal', 'style' => 'padding-left:80px; padding-right:80px;']) !!}
                @csrf
                <div class="form-group">
                    <img class="" src="/storage/images/profile/{{ auth()->user()->profile_image_code }}" alt="preveiw of Uploaded Profile Picture" height="100" width="80"><br>
                    <label class="col-sm-12">Profile Picture</label>
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i>
                            <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                        <input type="hidden"><input type="file" name="profileImage" accept=".jpg,.jpeg,.png"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">User Name</span></label>
                    <div class="col-md-12">
                        <input class="form-control" name="txtUsername" type="text" value="{{ Auth::user()->username }}" placeholder="Enter username">
                    </div>
                </div>
                {{ Form::hidden('_method', 'PUT') }}
                <button type="submit" class="btn btn-info waves-effect pull-right waves-light">
                    <i class="fa fa-fw fa-lg fa-check-circle"></i>Save Changes
                </button>
            {!! Form::close() !!}
            <br><br><br>

            <a href="#" role="button" id="security" class="btn btn-primary">Security Settings</a>
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
@endsection

@section('pg-specific-js')
<script>
$(() => {
    $('#pnlSecurity').hide();
});
$('#security').click(() => {
    $('#pnlSecurity').toggle();
});

$('#confirmPwd').blur(() => {
    $newPwd = $('#newPwd').val();
    $confirmPwd = $('#confirmPwd').val();
    if($newPwd != $confirmPwd) {
        alert('Password did not matched!');
    }
});
</script>
@endsection