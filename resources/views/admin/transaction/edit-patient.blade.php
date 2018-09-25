@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">News</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li>Transaction</li>
			<li>
				<a class="active" href="{{ route('maintenance.news') }}">All Patients</a>
			</li>
		</ol>
	</div>
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-light">Edit Medical Record</h3>    
        </div>
        <div class="card-body">
            <div class="container">
            <form class="form-material form-horizontal"><br>
                <div class="form-group">
                    <label class="col-md-12">Medical Treatment History</label>
                    <div class="col-md-12">
                        <select name="treatment" class="form-control" rows="5">
                            <option>October 02, 2016</option>
                            <option>September 10, 2016</option>
                            <option>November 11, 2016</option>
                        </select>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-12">Last Name</label>
                            <div class="col-md-12">
                                <input type="text" name="lastName" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-12">First Name</label>
                            <div class="col-md-12">
                                <input type="text" name="firstName" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-12">Middle Name</label>
                            <div class="col-md-12">
                                <input type="text" name="middleName" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-md-12">Birthdate</label>
                            <div class="col-md-12">
                                <input type="text" name="birthdate" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-md-12">Contact Number</label>
                            <div class="col-md-12">
                                <input type="text" name="contactNumber" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ableToEdit">   
                </div>
                <div align="right">
                    <button id="btnEdit" type="button" onclick="able()" class="btn btn-primary">
                        <i class="fa fa-edit"></i> Edit
                    </button>
                    <button id="btnSave" type="button" class="btn btn-info">
                        <i class="fa fa-fw fa-lg fa-check-circle"></i> Save
                    </button>
                    <button id="btnCancel" type="button" onclick="unable()" class="btn btn-inverse">
                        <i class="fa fa-close"></i> Cancel
                    </button>
                </div><br><hr>
                <div class="row">
                    <div class=col-md-4>
                        <div class="form-group">
                            <label class="col-md-12">Height</label>
                            <div class="col-md-12">
                                <input type="text" name="height" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class=col-md-4>
                        <div class="form-group">
                            <label class="col-md-12">Weight</label>
                            <div class="col-md-12">
                                <input type="text" name="height" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class=col-md-4>
                        <div class="form-group">
                            <label class="col-md-12">Temperature</label>
                            <div class="col-md-12">
                                <input type="text" name="height" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Treatment</label>
                    <div class="col-md-12">
                        <textarea name="treatment" class="form-control" rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Procedure</label>
                    <div class="col-md-12">
                        <textarea name="procudere" class="form-control" rows="5"></textarea>
                    </div>
                </div>
                <div align="right">
                    <button id="btnSave" type="button" class="btn btn-info">
                        <i class="fa fa-fw fa-lg fa-check-circle"></i> Save
                    </button>
                    <button id="btnCancel" type="button" class="btn btn-inverse" style="display: inline-block;">
                        <i class="fa fa-close"></i> Cancel
                        <a href="#"></a>
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('pg-specific-js')
<script>
    $( document ).ready(function() {
        $("#btnCancel").hide();
        $("#btnSave").hide();
    });

    function able() {
        let html = "<p class='text-success'>You can edit now!</p>";
        $("#ableToEdit").html(html);
        $("#btnCancel").show();
        $("#btnSave").show();
        $("#btnEdit").hide();
        $('input[name=lastName]').removeAttr("disabled");
        $('input[name=firstName]').removeAttr("disabled");
        $('input[name=middleName]').removeAttr("disabled");
        $('input[name=birthdate]').removeAttr("disabled");
        $('input[name=contactNumber]').removeAttr("disabled");
    }

    function unable() {
        let html = "<p class='text-danger'>Hindo ko alam hahahaha</p>";
        $("#ableToEdit").html(html);
        $("#btnCancel").hide();
        $("#btnSave").hide();
        $("#btnEdit").show();
        $('input[name=lastName]').attr("disabled", "");
        $('input[name=firstName]').attr("disabled", "");
        $('input[name=middleName]').attr("disabled", "");
        $('input[name=birthdate]').attr("disabled", "");
        $('input[name=contactNumber]').attr("disabled", "");
    }
</script>
@endsection