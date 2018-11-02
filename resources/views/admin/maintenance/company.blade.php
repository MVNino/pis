    @extends('admin.layouts.app')

@section('breadcrumb')
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Company</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Maintenance</a></li>
            <li class="active">Company</li>
        </ol>
    </div>
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Company</h3>
            {!! Form::open(['action' => ['Maintenance\CompanyController@updateCompany', $company->company_id], 'method' => 'POST', 'enctype' => 'multipart/form-data','class' => 'form-material' ,'autocomplete' => 'off'])!!}
            @csrf
            {{Form::hidden('_method', 'PUT')}}
                <div class="form-group">
                    <label class="col-md-12">Name</span></label>
                    <div class="col-md-12">
                        <input type="text" name="name"  class="form-control" value="{{$company->company_name}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Company Logo</label>
                    <img src ="">
                </div>
                <div class="form-group">
                    <label class="col-sm-12">
                        <img src="/storage/images/logo/{{ $company->company_clinic_logo }}">
                        <br/>
                        <small>Current Image: <a target="_blank" href="/storage/images/company/{{ $company->company_clinic_logo }}">{{ $company->company_clinic_logo }}</a></small>
                    </label>
                    <div class="col-md-12">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                            <input type="file" name="fileCompanyLogo" data-default-file="/storage/summary/copyright/{{$company->company_clinic_logo}}"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
                        </div>
                        <small class="form-text text-muted" id="fileHelp">Accepted file types: png only</small>
                    </div>
                    <br/>
                </div> 
                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
            </form>
        </div>
    </div>
</div>
{!! Form::close() !!}

<!-- Modal -->
<div style="padding-top: 430px;" class="modal fade bd-example-modal-lg" id="manualCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h3 id="exampleModalLongTitle"> &nbsp;<b>HELP</b> &nbsp;<i class="fa fa-question-circle"></i></h3>
		</div>
		<div class="modal-body">
			<h4 style="margin-bottom:0;" class="text-primary"><b>Company</b></h4>
			<p style="margin-top:0;">This part will discuss the Company module. It will show you how to manage the company information for the website.</p>
			<div style="padding:15px;">

				<p class="text-danger"><b><em>How to edit the Company Information?</em></b>&nbsp;</p>

				<label><b>Step 1 :</b>&nbsp;</label>
				Under “WEBSITE MAINTENANCE”, click [1] which will direct you to this page.<br><br>
				<img class="dynamic" src="{{asset('img/company/company.jpg')}}"><br><br>
				
				<label><b>Step 2 :</b>&nbsp;</label>
				You will now be able to input the company name and select a new logo, at the same time edit it.<br><br>

				<label><b>Step 3 :</b>&nbsp;</label>
				To commit any changes, click [2]. A message [3] will appear that the changes were made successfully.<br><br>
				<img class="dynamic" src="{{asset('img/company/company2.jpg')}}"><br><br>

				<label class="text-danger"><b>Note :</b>&nbsp;</label>
				When selecting a company logo, only images with .png type will be accepted. In an attempt to upload an invalid image type, an error message [4] will be shown.<br><br>
				<img class="dynamic" src="{{asset('img/company/company2.jpg')}}"><br><br>
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
window.onhelp = function() {
    return false;
};
window.onkeydown = evt => {
    if (evt.keyCode == 112){
        $("#manualCompany").modal("show");
        
    }
    return false;
};
</script>
@endsection