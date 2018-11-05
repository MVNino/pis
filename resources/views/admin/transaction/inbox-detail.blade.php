@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Inbox</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li>Transaction</li>
			<li>
				<a class="active" href="#">Inbox</a>
			</li>
		</ol>
	</div>
@endsection

@section('content')
<div class="row">
    <!-- Left sidebar -->
    <div class="col-md-12">
        <div class="white-box">
            <div class="row">
                <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12 inbox-panel">
                    <div> 
                        <button data-toggle="modal" data-target="#composeMessage" class="btn btn-custom btn-block waves-effect waves-light">Compose</button>
                        <div class="list-group mail-list m-t-20"> 
                        <a href="{{ route('transaction.inbox') }}" class="list-group-item active">Inbox <span class="label label-rouded label-info pull-right">{{$count}}</span></a> 
                        <a href="{{ route('transaction.trash') }}" class="list-group-item">Trash</a> </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 mail_listing">
                    <div class="media m-b-30 p-t-20">
                        <a class="pull-left" href="#"> <img class="media-object thumb-sm img-circle" src="../plugins/images/users/pawandeep.jpg" alt=""> </a>
                        <div class="media-body"> <span class="media-meta pull-right">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$message->created_at)->format('F j Y g:i A ')}}</span>
                            <h4 class="text-danger m-0">{{$message->contact_name}}</h4> <small class="text-muted">From: {{$message->contact_email}}</small> </div>
                    </div>
                    <p>{{$message->contact_inquiry}}</p>
                    <form class="form-material form-horizontal">
                        <div class="form-group">
                            <textarea class="form-control" rows="7"></textarea><br>
                            <div align="right">
                                <button id="btnSend" type="submit" class="btn btn-primary">
                                    <i class="fa fa-fw fa-lg fa-check-circle"></i> Send
                                </button>
                                <a href="{{ route('transaction.inbox') }}" role="button" id="btnCancel" type="button" class="btn btn-inverse" style="display: inline-block;">
                                    <i class="fa fa-close"></i> Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
