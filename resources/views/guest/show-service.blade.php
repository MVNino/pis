@extends('guest.layouts.app')

@section('content')

<section class="speacial-services-area section-padding">
<div class="row">
    <div class="container">
        <div class="col-sm-4">
            <div class="speacila-single-service">
                <div class="service-thumb">
                    <img src="/storage/images/service/specialty/{{ $service->spec_image_icon }}" alt="Pic" width="300" height="250">
                </div>
                <h4>{{ $service->spec_title }}</h4>
                <p>{{ $service->spec_desc }}</p>
                 <p><a href="/services"> <i class="fa fa-chevron-circle-left"></i>Go back to Services</a></p>
            </div>
        </div>
        <div class="col-md-8">
            <iframe width="100%" height="400" 
            src="{{ $service->specialtyServiceVid->video }}" 
            frameborder="0" allowfullscreen>
            </iframe>
        </div>
    </div>
</div>
</section>
@endsection

@section('pg-specific-js')
<script>
$("#navlink-services").addClass("current-menu-item");
</script>
<script>
  $('#videoModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var video = button.data('vid')
      console.log(video)
  
      var modal = $(this)
      $('#videosample').attr('src', video);
      
      });
</script>
@endsection