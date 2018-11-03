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
                            <a href="{{ route('transaction.inbox') }}" class="list-group-item active">Inbox <span class="label label-rouded label-info pull-right">55</span></a>
                            <a href="{{ route('transaction.trash') }}" class="list-group-item">Trash <span class="label label-rouded label-default pull-right">55</span></a> 
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
                                <tr class="unread">
                                    <td>
                                        <div class="checkbox m-t-0 m-b-0">
                                            <input type="checkbox">
                                            <label for="checkbox0"></label>
                                        </div>
                                    </td>
                                    <td class="hidden-xs">Hritik Roshan</td>
                                    <td class="max-texts"> <a href="{{action('Transaction\InboxController@viewDetail')}}">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                    </td>
                                    <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                    <td class="text-right"> 12:30 PM </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox m-t-0 m-b-0">
                                            <input type="checkbox">
                                            <label for="checkbox0"></label>
                                        </div>
                                    </td>
                                    <td class="hidden-xs">Ritesh Deshmukh</td>
                                    <td class="max-texts"><a href="{{action('Transaction\InboxController@viewDetail')}}">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                    <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                    <td class="text-right"> May 09 </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 m-t-20"> Showing 1 - 15 of 200 </div>
                        <div class="col-xs-5 m-t-20">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></button>
                                <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
