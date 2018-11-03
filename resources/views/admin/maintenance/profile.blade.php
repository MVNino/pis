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
            <form class="form-material form-horizontal">
                <div class="form-group">
                    <label class="col-md-12">Introduction</span></label>
                    <div class="col-md-12">
                        <textarea rows="10" name="introduction"  class="form-control"></textarea>
                    </div>
                </div>
                <div class="profileTxt">
                    <div class="form-group">
                        <div class="col-md-8">
                            <label>Skills and Specialities</label>
                            <input class="form-control" name="skill" type="text">
                        </div>
                        <div class="col-md-2">
                            <button type='button' onclick="addSkills()" 
                                style="margin-top:30px;" rel="tooltip" title="" class="btn btn-primary btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div><br><br>
                <button type="submit" class="btn btn-info waves-effect waves-light"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
            </form>
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
    let html = '<input type="text" class="form-control" name="' + boxName + '"">';
    let button = '<button name="' + buttonName + '"type="button" onclick ="deleteField(' + count + ')" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove"><i class="fa fa-close"></i></button>';
    let newDiv = "<div class='profileDiv" + count + " row'>" + "<div class='col-md-8'>" + html + "</div>"+"<div class='col-sm-2'>" + button + "</div>";

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