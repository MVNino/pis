    @extends('admin.layouts.app')

@section('breadcrumb')
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Profile</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Maintenance</a></li>
            <li class="active">Profile</li>
        </ol>
    </div>
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Profile</h3>
            {!! Form::open(['action' => 'Maintenance\ProfileController@updateProfile', 'method' => 'POST', 'autocomplete' => 'off', 'enctype' => 'multipart/form-data', 'class' => 'form-material form-horizontal'])!!}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <a target="_blank" href="/storage/images/profile/{{$profile->picture}}">
                                <img src="/storage/images/profile/{{$profile->picture}}" style="width: 100%;">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <label>Username</span></label>
                            <input name="name" class="form-control" value="{{$profile->name}}" required>
                            <br/>
                            <label>Title</span></label>
                            <input name="title" class="form-control" value="{{$profile->title}}">
                            <br/>
                            <label>About Uploaded Picture</label>
                            <p>{{$profile->picture}}</p>
                            <input style="display: none;" name="uploaded" value="{{$profile->picture}}">
                            <label>About Picture</label
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file">
                                <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                <input type="file" name="profilepic" accept=".jpg,.jpeg,.png"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <label class="col-md-12">Introduction</span></label>
                    <div class="col-md-12">
                        <textarea rows="10" name="introduction"  class="form-control">{{$profile->introduction}}</textarea>
                    </div>
                </div>
                <div class="profileTxt">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Skills and Specialities</label>
                            <textarea class="form-control" name="skill" type="text" rows="5">{{$profile->skills}}</textarea>
                        </div>
                        <!--div class="col-md-2">
                            <button type='button' onclick="addSkills()" 
                                style="margin-top:30px;" rel="tooltip" title="" class="btn btn-primary btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove"><i class="fa fa-plus"></i>
                            </button>
                        </div-->
                    </div>
                </div><br><br>
                <button type="submit" class="btn btn-info waves-effect waves-light"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection

@section('pg-specific-js')
<script>
let count = 0;
let target = $(".profileTxt");
let targetBtn = $("#responseButton");

function addSkills() {

    let boxName = "skills" + count;
    let buttonName = "button" + count;
    let html = '<input type="text" class="form-control" name="skill" + boxName + '"">';
    let button = '<button name="' + buttonName + '"type="button" onclick ="deleteField(' + count + ')" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove"><i class="fa fa-close"></i></button>';
    let newDiv = "<div class='profileDiv" + count + " row'>" + "<div class='col-md-10'>" + html + "</div>"+"<div class='col-sm-2'>" + button + "</div>";

    target.append(newDiv);
    count++;
}

function deleteField(count) {
    $('input[name=skills' + count + ']').remove();
    $('button[name=button' + count + ']').remove();
    $('.profileDiv' + count).remove();
    count--;
}
</script>
@endsection