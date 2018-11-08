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
                            <a href="{{route('transaction.inbox')}}" class="list-group-item active">Inbox<span class="label label-rouded label-info pull-right">{{$count}}</span></a>
                            <a href="/admin/transaction/trash" class="list-group-item">Trash</a> 
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12 mail_listing">
                    <div id="forDeletion"></div>
                    <div class="inbox-center">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $message)
                                @if($count > 0)
                                @if($message->status == 1)
                                <tr class="unread">
                                    <td class="hidden-xs">{{$message->contact_name}}</td>
                                    <td class="max-texts"> <a href="/admin/transaction/inbox/{{$message->contact_us_id}}">{{ str_limit($message->contact_inquiry, $limit = 20, $end = '...') }}</a></td>
                                    </td>
                                    <td class="hidden-xs text-right">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$message->created_at)->format('F j Y g:i A ')}}</a></td>
                                    <td class="text-right">
                                        <div align="center">
                                            {!!Form::open(['action' => ['Transaction\InboxController@deleteMessage', $message->contact_us_id],'method' => 'POST', 'onsubmit' => "return confirm('Remove Message?')"])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                <button type="submit" class="btn-sm btn-danger fa fa-trash" data-toggle="tooltip" data-original-title="Delete">
                                                </button>
                                            {!!Form::close()!!}
                                        </div>
                                    </td>
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

<!-- Modal -->
<div style="padding-top: 840px;" class="modal fade bd-example-modal-lg" id="manualInbox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h3 id="exampleModalLongTitle"> &nbsp;<b>HELP</b> &nbsp;<i class="fa fa-question-circle"></i></h3>
		</div>
		<div class="modal-body">
                <div style="padding:15px;">
				<label><b>Step 1 :</b>&nbsp;</label>
				Click her user profile [1] to view the drop down choices.<br><br>
				<img class="dynamic" src="{{asset('img/nav/nav1.JPG')}}"><br><br>
				
				<p class="text-danger"><b><em>Inbox</em></b>&nbsp;</p>
				<label><b>Step 1 :</b>&nbsp;</label>
				Click 'Inbox' [3] on the drop down menu.<br><br>

				<label><b>Step 2 :</b>&nbsp;</label>
				Click 'Inbox' [7] to view received messages.<br><br>
				<img class="dynamic" src="{{asset('img/nav/nav5.JPG')}}"><br><br>

                <label><b>Step 3 :</b>&nbsp;</label>
				To view a message, click [8].<br><br>
				<img class="dynamic" src="{{asset('img/nav/nav6.JPG')}}"><br><br>

                <label><b>Step 4 :</b>&nbsp;</label>
				To delete a message, click [9]. Click OK on the confirmation message that will appear.<br><br>
				<img class="dynamic" src="{{asset('img/nav/nav7.JPG')}}"><br><br>
                
                <label><b>Step 5 :</b>&nbsp;</label>
				To delete a message, click [9]. Click OK on the confirmation message that will appear.<br><br>
				<img class="dynamic" src="{{asset('img/nav/nav8.JPG')}}"><br><br>

                <label><b>Step 6 :</b>&nbsp;</label>
				To compose a message, click 'Compose' [11] button.<br><br>
				<img class="dynamic" src="{{asset('img/nav/nav9.JPG')}}"><br><br>
                
                <label><b>Step 7 :</b>&nbsp;</label>
				Input email and message.<br><br>
                
                <label><b>Step 8 :</b>&nbsp;</label>
				Click 'Send' [12] to send the message or click 'Cancel' [13] to cancel sending.<br><br>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>
		</div>
		</div>
	</div>
</div>
@endsection

@section('pg-specific-js')
<script>
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 112) { 
        e.preventDefault();
        $("#manualInbox").modal("show");
    }
});
</script>
@endsection

