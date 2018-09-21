@extends('admin.layouts.app')

@section('breadcrumb')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Contact Us</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Maintenance</a></li>
            <li><a href="/admin/maintenance/contact">Contact Us</a></li>
            <li class="active">Edit Contact</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Contact Us</h3>
                {!!Form::open(['action' => ['Maintenance\ContactController@editContact', $contact->contact_us_id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'PUT')}}
                @csrf
                    <div class="form-group">
                        <label class="col-md-12">Name</span></label>
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control" value="{{$contact->contact_name}}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Email Address</span></label>
                        <div class="col-md-12">
                            <input type="text" name="email" class="form-control" value="{{$contact->contact_email}}" /> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Phone</span></label>
                        <div class="col-md-12">
                            <input type="text" name="phone" class="form-control" value="{{$contact->contact_phone}}"  /> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Inquiry</span></label>
                        <div class="col-md-12">
                            <input type="text" name="inquiry" class="form-control" value="{{$contact->contact_inquiry}}" /> 
                        </div>
                    </div>
                   
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Update</button>
                {!!Form::close()!!}
@endsection