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
        <div class="col-lg-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Contact Us</h3>
                <div align="right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-plus"></i> Add Contact
                    </button><br><br>
                </div>
                <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Phone</th>
                                <th>Inquiry</th>
                                <th class="text-center">Action</th>
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
        
    </div>
 
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="exampleModalLabel">Add Contact</h4>
            </div>
    
            <h4 class="box-title">Contact Us</h4>
            {!! Form::open(['action' => 'Maintenance\ContactController@addContact', 'method' => 'POST', 
            'autocomplete' => 'off', 'enctype' => 'multipart/form-data', 'class' => 'form-material form-horizontal'])!!}
                <div class="modal-body">
                    <div class="form-group">
                        {{ Form::label('lblName', 'Name') }}
                        {{ Form::text('name', '', ['class' => 'form-control']) }}                 
                    </div>
                    <div class="form-group">
                        {{ Form::label('lblemail', 'Email Address') }}
                        {{ Form::text('email', '', ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('lblphone', 'Phone Number') }}
                        {{ Form::text('phone', '', ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('lblInquiry', 'Inquiry') }}
                        {{ Form::text('inquiry', '', ['class' => 'form-control']) }}
                    </div>         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Close</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection

@section('pg-specific-js')
<!-- wysuhtml5 Plugin JavaScript -->
<script src="{{ asset('elite/js/tinymce.min.js') }}"></script>
<script>
$(document).ready(function() {

    if ($("#mymce").length > 0) {
        tinymce.init({
            selector: "textarea#mymce",
            theme: "modern",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
        });
    }
});
</script>
@endsection