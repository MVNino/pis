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
    {!! Form::open(['action' => 'Maintenance\CompanyController@addCompany', 'method' => 'POST', 'enctype' => 'multipart/data', 'autocomplete' => 'off'])!!}
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">Company</h3>
                    <form class="form-material form-horizontal" method ="POST">
                        <div class="form-group">
                            <label class="col-md-12">Name</span></label>
                            <div class="col-md-12">
                                <input type="text" name="name" placeholder="Company Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Description</label>
                            <div class="col-md-12">
                                <input name ="description" placeholder="Company Description" class="form-control" rows="3"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Company Logo</label>
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
                        <br><br>

                        <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Logo</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($company as $row) 
                        <tr>
                            <td>{{$row['company_name']}}</td>
                            <td>{{$row['company_desc']}}</td>
                            <td>{{$row['company_clinic_logo']}} </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Edit"><i
                                        class="ti-pencil-alt" aria-hidden="true"></i></button>
                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i
                                        class="ti-close" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        @endforeach

                       
                    </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    <div class="text-right">
                                        <ul class="pagination"> </ul>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                        </table>
                    </form>
                </div>

            </div>
        </div>
    {!! Form::close() !!}
@endsection