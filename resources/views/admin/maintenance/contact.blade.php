@extends('admin.layouts.app')

@section('breadcrumb')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Contact Us</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Maintenance</a></li>
            <li class="active">Contact Us</li>
        </ol>
    </div>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Contact Us</h3>
                <form class="form-material form-horizontal" method ="POST">
                    <div class="form-group">
                        <label class="col-md-12">Name</span></label>
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Email Address</span></label>
                        <div class="col-md-12">
                            <input type="text" name="email" class="form-control"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Phone</span></label>
                        <div class="col-md-12">
                            <input type="text" name="phone" class="form-control"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Inquiry</span></label>
                        <div class="col-md-12">
                            <input type="text" name="inquiry" class="form-control"> </div>
                    </div>
                    
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection