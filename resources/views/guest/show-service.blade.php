@extends('guest.layouts.app')

@section('content')

<section class="speacial-services-area section-padding">
<div class="row">
<<<<<<< HEAD
  <div class="container">
      <div class="col-sm-4">
          <div class="speacila-single-service">
              <div class="service-thumb">
                  <img src="/storage/images/service/specialty/{{ $service->spec_image_icon }}" alt="Pic" width="300" height="250">
              </div>
              <h4>{{ $service->spec_title }}</h4>
              <p>{{ $service->spec_desc }}</p>
          </div>
      </div>
      <div class="col-md-8">
          @foreach($service->specialtyServiceVids as $specialtyServiceVid)
          <iframe width="100%" height="400" 
          src="{{ $specialtyServiceVid->video }}" 
          frameborder="0" allowfullscreen>
          </iframe>
          @endforeach
      </div>
  </div>
=======
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
>>>>>>> 94caf3b269b2cae89a3dc0306e1ef4314cec1dd5
</div>
<div class="container">
  <h3 class="page-header" id="youtube-gallery">Watch more videos</h3>
  <div class="row">
    <a href="https://www.youtube.com/watch?v=hTz_rGP4v9Y"
       data-title="Xray"
       data-width="1024"
       data-toggle="lightbox" data-gallery="youtubevideos" class="col-sm-4 video">
      <button type="button" class="btn btn-play">
        <span class="fa fa-play-circle" style="font-size:300%;" aria-label="Play"></span> 
      </button>
      <img src="http://i3.ytimg.com/vi/hTz_rGP4v9Y/maxresdefault.jpg" class="img-responsive">
    </a>
    <a href="https://www.youtube.com/watch?v=KAHKlyWzXOQ" 
       data-title="ECG"
       data-width="1024"
       data-toggle="lightbox" data-gallery="youtubevideos" class="col-sm-4 video">
      <button type="button" class="btn btn-play">
        <span class="fa fa-play-circle" style="font-size:300%;" aria-label="Play"></span> 
      </button>
      <img src="http://i3.ytimg.com/vi/KAHKlyWzXOQ/maxresdefault.jpg" class="img-responsive">
    </a>
    <a href="https://www.youtube.com/watch?v=P1pwbnzbe7g"
       data-title=""
       data-width="1024"
       data-toggle="lightbox" data-gallery="youtubevideos" class="col-sm-4 video">
      <button type="button" class="btn btn-play">
        <span class="fa fa-play-circle" style="font-size:300%;" aria-label="Play"></span> 
      </button>
      <img src="http://i3.ytimg.com/vi/P1pwbnzbe7g/maxresdefault.jpg" class="img-responsive">
    </a>
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