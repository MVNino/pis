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
            <form style="padding-left:80px; padding-right:80px;" class="form-material form-horizontal">
                <div class="form-froup">
                    <img class="dynamic" src="" alt="preveiw of Uploaded Profile Picture"><br>
                    <label class="col-sm-12">Profile Picture</label>
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i>
                            <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                        <input type="hidden"><input type="file" name="bannerImage" accept=".jpg,.jpeg,.png"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">User Name</span></label>
                    <div class="col-md-12">
                        <input class="form-control" name="username" type="text">
                    </div>
                </div>
                <button type="submit" class="btn btn-info waves-effect pull-right waves-light"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Changes</button>
            </form><br><br><br>
            <h3 class="box-title">Security</h3>
            <form style="padding-left:80px; padding-right:80px;" class="form-material form-horizontal">
                <div class="form-group">
                    <label class="col-md-12">Current Password</span></label>
                    <div class="col-md-12">
                        <input class="form-control" name="curPassword" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">New Password</span></label>
                    <div class="col-md-12">
                        <input class="form-control" name="newPassword" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Confirm Password</span></label>
                    <div class="col-md-12">
                        <input class="form-control" name="conPassword" type="password">
                    </div>
                </div>
                <button type="submit" class="btn btn-info waves-effect pull-right waves-light"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Changes</button><br><br>
            </form>
        </div>
    </div>
</div>

@endsection
