@extends('admin.layouts.app')

@section('breadcrumb')
@endsection


@section('content')
    {!! Form::open(['action' => 'Maintenance\CompanyController@addCompany', 'method' => 'POST', 'enctype' => 'multipart/data', 'autocomplete' => 'off'])!!}
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">Company</h3>
                    <form class="form-material form-horizontal" method ="POST">
                        <div class="form-group">
                            <label class="col-md-12">Name</span></label>
                            <div class="col-md-12">
                                <input type="text" name="name" placeholder="{{$company->company_name}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Description</label>
                            <div class="col-md-12">
                                <input name ="description" placeholder="{{$company->company_desc}}" class="form-control" rows="3"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Clinic Logo</label>
                            <div class="col-sm-12">
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                        <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file">
                                    <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                        <input type="file" name="logo"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                        data-dismiss="fileinput">Remove</a> </div>
                            </div>
                        </div> 
                        <!-- MAP DITO -->
                        <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
@endsection