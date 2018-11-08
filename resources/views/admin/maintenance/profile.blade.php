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
            @if($res == 0)
                {!! Form::open(['action' => 'Maintenance\ProfileController@updateProfile', 'method' => 'POST', 'autocomplete' => 'off', 'enctype' => 'multipart/form-data', 'class' => 'form-material form-horizontal'])!!}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Name</label>
                                <input name="name" class="form-control" required>
                                <br/>
                                <label>Title</label>
                                <input name="title" class="form-control" required>
                                <br/>
                                <input style="display: none;" name="uploaded" value="">
                                <label>Profile Picture</label>
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
                            <textarea rows="10" name="introduction"  class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="profileTxt">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Skills and Specialities</label>
                                <textarea class="form-control" name="skill" type="text" rows="5"></textarea>
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
            @else
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
                                <label>Title</label>
                                <input name="title" class="form-control" value="{{$profile->title}}">
                                <br/>
                                <label>Uploaded Profile Picture</label>
                                    @if($profile->picture == "")
                                        <p>No Profile Image</p>
                                    @else
                                        <p>{{$profile->picture}}</p>
                                    @endif
                                <br/>
                                <input style="display: none;" name="uploaded" value="{{$profile->picture}}">
                                <label>Profile Picture</label>
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
            @endif
        </div>
    </div>
</div>
<!-- Modal -->
<div style="padding-top: 550px;" class="modal fade bd-example-modal-lg" id="manualProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h3 id="exampleModalLongTitle"> &nbsp;<b>HELP</b> &nbsp;<i class="fa fa-question-circle"></i></h3>
		</div>
		<div class="modal-body">
                <div style="padding:15px;">
				<label><b>Step 1 :</b>&nbsp;</label>
				Click her user profile [1] to view the drop down choices.<br><br>
				<img class="dynamic" src="{{asset('img/nav/nav1.JPG')}}"><br><br>
				
				<p class="text-danger"><b><em>My Profile</em></b>&nbsp;</p>
				<label><b>Step 1 :</b>&nbsp;</label>
				Click 'My Profile' [2] if you wish to update your profile.<br><br>
				<img class="dynamic" src="{{asset('img/nav/nav2.JPG')}}"><br><br>
				<img class="dynamic" src="{{asset('img/nav/nav3.JPG')}}"><br><br>

				<label><b>Step 2 :</b>&nbsp;</label>
				Edit/input the username, title, profile picture, introduction and skills and specialties.<br><br>

                <label><b>Step 3 :</b>&nbsp;</label>
				Click 'Update' [6] to save the record/changes. A message will be shown once the record/changes is updated.<br><br>
				<img class="dynamic" src="{{asset('img/nav/nav4.JPG')}}"><br><br>
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
        $("#manualProfile").modal("show");
    }
});
</script>
@endsection