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
                {!! Form::open(['action' => 'Maintenance\ContactController@addContact', 'method' => 'POST']) !!}
                    <div class="form-group">
                        <label class="col-md-12">Name</span></label>
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control" placeholder="Input Full Name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Email Address</span></label>
                        <div class="col-md-12">
                            <input type="text" name="email" class="form-control" placeholder="Input Email" /> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Phone</span></label>
                        <div class="col-md-12">
                            <input type="text" name="phone" class="form-control" placeholder="Input Phone Number"  /> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Inquiry</span></label>
                        <div class="col-md-12">
                            <input type="text" name="inquiry" class="form-control" placeholder="Input Inquiry" /> 
                        </div>
                    </div>

                    
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>

                    
                     <br><br>

                        <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Phone</th>
                                <th>Inquiry</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($contact as $row) 
                        <tr>
                            <td>{{$row['contact_name']}}</td>
                            <td>{{$row['contact_email']}}</td>
                            <td>{{$row['contact_phone']}}</td>
                            <td>{{$row['contact_inquiry']}} </td>

                            <td>

                            <a href="{{action('Maintenance\ContactController@edit', $row['contact_us_id'])}}" class="btn btn-warning">Edit</a>
                       
                            
                            {!!Form::open(['action' => ['Maintenance\ContactController@deleteContact', $row['contact_us_id']],'method' => 'POST', 'onsubmit' => "return confirm('Remove Contact?')"])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                <button type="button" class="btn btn-warning">Delete</button> 

                            {!! Form::close() !!}
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
        {!! Form::close() !!}
    </div>


@endsection