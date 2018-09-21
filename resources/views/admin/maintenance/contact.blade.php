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
                <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                    <thead>
                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Phone</th>
                        <th>Inquiry</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($contact as $row) 
                        <tr>
                            <td>{{ $row['contact_name'] }}</td>
                            <td>{{ $row['contact_email'] }}</td>
                            <td>{{ $row['contact_phone'] }}</td>
                            <td>{{$row['contact_inquiry']}} </td>

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

                <div align="right">
                    <button class="btn btn-info waves-effect waves-light m-r-10" type="button" data-toggle="collapse" data-target="#contactForm" aria-expanded="false" aria-controls="collapseExample">Add Contact</button>
                </div>

                <div class="collapse" id="contactForm">
                {!! Form::open(['action' => 'Maintenance\ContactController@addContact','class' => 'form-material' ,'autocomplete'=>'off' ,'method' => 'POST']) !!}
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
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Update</button>
                </form>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>