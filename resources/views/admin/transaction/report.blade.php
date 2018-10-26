@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Daily Cash Position</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li>Transaction</li>
			<li>
				<a class="active" href="#">Daily Cash Position</a>
			</li>
		</ol>
	</div>
@endsection

@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="white-box">
            <div id="calendar"></div>
        </div>
    </div>
</div>
<!-- BEGIN MODAL -->
<div class="modal fade" id="my-event">
    <div class="modal-dialog modal-dialog-centered" style="padding-top: 150px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><strong>Daily Cash Position</strong></h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</div>

@endsection