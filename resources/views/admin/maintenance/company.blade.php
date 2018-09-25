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
                            <label class="col-md-12">Current Logo</label>
                            <img src ="">
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Company Logo
                                <small>Current Image: <a target="_blank" href="/storage/images/company/{{ $company->company_clinic_logo }}">{{ $company->company_clinic_logo }}</a></small>
                            </label>
                            <div class="col-md-12">
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                    <input type="file" name="fileCompanyLogo"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
                                </div>
                                <small class="col-sm-12">only accepts .png</small>
                            </div>

                        </div> 
                        <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Update</button>
                    </form>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
@endsection