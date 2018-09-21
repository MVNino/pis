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
                            <th colspan="2">Action</th>
                        <tr>
                    </thead>
                    <tbody>
                        @foreach($contact as $row) 
                        <tr>
                            <td>{{ $row['contact_name'] }}</td>
                            <td>{{ $row['contact_email'] }}</td>
                            <td>{{ $row['contact_phone'] }}</td>
                            <td>{{$row['contact_inquiry']}} </td>

                            <td>
                            <a href="{{action('Maintenance\ContactController@edit', $row['contact_us_id'])}}" class="btn btn-sm btn-primary">
                                <i class="fa fa-edit"></i>
                            </a>
                            </td>
                            <td>
                            {!!Form::open(['action' => ['Maintenance\ContactController@deleteContact', $row['contact_us_id']],'method' => 'POST', 'onsubmit' => "return confirm('Remove Banner?')"])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" data-original-title="Delete">
                                        <i class="fa fa-times"></i>
                                        </button>
                            {!!Form::close()!!}
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
            </div>
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
            <div class="modal-body">
                {!! Form::open(['action' => 'Maintenance\ContactController@addContact','class' => 'form-material' ,'autocomplete'=>'off' ,'method' => 'POST']) !!}
                    <div class="form-group">
                        <label class="col-md-12">Name</span></label>
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Email Address</span></label>
                        <div class="col-md-12">
                            <input type="text" name="email" class="form-control"/> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Phone</span></label>
                        <div class="col-md-12">
                            <input type="text" name="phone" class="form-control"/> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Inquiry</span></label>
                        <div class="col-md-12">
                            <input type="text" name="inquiry" class="form-control"/> 
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                </div>
            </form>
		</div>
	</div>
</div>
@endsection