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