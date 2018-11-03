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
                        <a href="{{ route('transaction.inbox') }}" class="list-group-item active">Inbox <span class="label label-rouded label-info pull-right">5</span></a> 
                        <a href="{{ route('transaction.trash') }}" class="list-group-item">Trash <span class="label label-rouded label-default pull-right">55</span></a> </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 mail_listing">
                    <div class="media m-b-30 p-t-20">
                        <h4 class="font-bold m-t-0">Your message title goes here</h4>
                        <hr>
                        <a class="pull-left" href="#"> <img class="media-object thumb-sm img-circle" src="../plugins/images/users/pawandeep.jpg" alt=""> </a>
                        <div class="media-body"> <span class="media-meta pull-right">07:23 AM</span>
                            <h4 class="text-danger m-0">Pavan kumar</h4> <small class="text-muted">From: jonathan@domain.com</small> </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                    <p>enean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,</p>
                    <hr>
                    <h4> <i class="fa fa-paperclip m-r-10 m-b-10"></i> Attachments <span>(3)</span> </h4>
                        <p class="text-info" style="padding-left:50px;">Leki.docx</p>
                    <hr>
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
