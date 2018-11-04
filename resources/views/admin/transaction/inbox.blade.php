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
            <!-- row -->
            <div class="row">
                <div class="col-lg-2 col-md-3  col-sm-12 col-xs-12 inbox-panel">
                    <div> 
                    <button data-toggle="modal" data-target="#composeMessage" class="btn btn-custom btn-block waves-effect waves-light">Compose</button>
                        <div class="list-group mail-list m-t-20"> 
                            <a href="{{route('transaction.inbox')}}" class="list-group-item active">Inbox <span class="label label-rouded label-info pull-right">55</span></a>
                            <a href="/admin/transaction/trash" class="list-group-item">Trash <span class="label label-rouded label-default pull-right">55</span></a> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12 mail_listing">
                    <div class="inbox-center">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $message)
                                @if($count > 0)
                                @if($message->status == 0)
                                <tr class="unread">
                                    <td>
                                        <div class="checkbox m-t-0 m-b-0">
                                            <input type="checkbox">
                                            <label for="checkbox0"></label>
                                        </div>
                                    </td>
                                    <td class="hidden-xs">{{$message->contact_name}}</td>
                                    <td class="max-texts"> <a href="/admin/transaction/inbox/{{$message->contact_us_id}}">{{ str_limit($message->contact_inquiry, $limit = 20, $end = '...') }}</a></td>
                                    </td>
                                    <td class="hidden-xs">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$message->created_at)->format('F j Y g:i A ')}}</a></td>
                                    <!-- <td>
                                        <div align="center">
                                            {!!Form::open(['action' => ['Transaction\InboxController@deleteMessage', $message->contact_us_id],'method' => 'POST', 'onsubmit' => "return confirm('Remove Message?')"])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                <button type="submit" class="fa fa-trash" data-toggle="tooltip" data-original-title="Delete">
                                                    <i class="ti-close" aria-hidden="true"></i>
                                                </button>
                                            {!!Form::close()!!}
                                        </div>
                                    </td> -->
                                </tr>
                                @endif
                                @else
                                    No messages
                                @endif    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="row">
                        <div class="col-xs-7 m-t-20"> Showing 1 - 15 of 200 </div>
                        <div class="col-xs-5 m-t-20">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></button>
                                <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
