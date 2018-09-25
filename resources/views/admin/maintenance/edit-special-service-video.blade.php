@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Specialty Service</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li>Maintenance</li>
			<li><a href="{{ route('maintenance.services') }}">Services</a></li>
			<li class="active">
				<a class="active" href="/admin/maintenance/specialty-service/{{ $specialtyService->spec_service_id }}/edit">
					{{ $specialtyService->spec_title }}
				</a>
			</li>
		</ol>
	</div>
@endsection

@section('content')
<div class="row">
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="text-light"><!-- Video link --></h3>
            </div>
            <div class="card-body">
                <div class="container">
                    <form class="form-material">
                        <div class="form group">
                            <label class="col-md-12">Current Video</label>
                            <div>
                                <!-- Division for video -->
                            </div>
                            <label class="col-md-12">Video Link</label>
                            <div class="col-md-12">
                                <input type="text" name="txtVideoLink" class="form-control"> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
