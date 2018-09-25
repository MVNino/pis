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
			<li>
                <a href="/admin/maintenance/specialty-service/{{ $specialtyServiceVid->specialty_service_id }}/edit">
                    {{ $specialtyServiceVid->specialtyService->spec_title }}
                </a>
            </li>
            <li>
                <a class="active" href="/admin/maintenance/main-service/{{ $specialtyServiceVid->video_id }}/edit-video">
                    Video
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
                    {!! Form::open(['action' => ['Maintenance\ServiceController@updateSpecialtyServiceVid', $specialtyServiceVid->video_id], 'method' => 'POST', 'autocomplete' => 'off', 'class' => 'form-material form-horizontal']) !!}
                        @csrf
                        <div class="form group">
                            <label class="col-md-12">Current Video</label>
                            <div>
                                <iframe src="{{ $specialtyServiceVid->video }}"></iframe>
                            </div><br>
                            <label class="col-md-12">Video Link</label>
                            <div class="col-md-12">
                                <input type="text" name="txtVideoLink" class="form-control" value="{{ $specialtyServiceVid->video }}"> 
                            </div>
                            <div align="right">
                                {{ Form::hidden('_method', 'PUT') }}
                                <button id="btnSave" type="submit" class="btn btn-info">
                                    <i class="fa fa-fw fa-lg fa-check-circle"></i> Save
                                </button>
                                <a href="/admin/maintenance/main-service/{{ $specialtyServiceVid->video_id }}/edit-video" role="button" id="btnCancel" type="button" class="btn btn-inverse" style="display: inline-block;">
                                    <i class="fa fa-close"></i> Cancel
                                </a>
					        </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
