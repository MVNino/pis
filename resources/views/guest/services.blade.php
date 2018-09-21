@extends('guest.layouts.app')

@section('content')
<section class="features-area singlepageservice section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="section-title">
                    <h1><span> Medical</span> Services </h1>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse($otherServices as $service)
                <div class="col-sm-4 col-md-4 text-center">
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="/storage/images/service/other/{{ $service->other_image }}" alt="jigsawlab">
                        </div>
                        <h4><a href="/other-service/{{ $service->other_services_id }}">{{ $service->other_title }}</a></h4>
                        <p>{{ str_limit($service->other_desc, $limit = 80, $end = '...') }}</p>
                        <a href="#" class="service-link">READ MORE +</a>
                    </div>
                </div>      
            @empty
            @endforelse
        </div>
        <div align="center">
            {{ $otherServices->links() }}
        </div>
    </div>
</section>
<!-- end of features area -->
<!-- start speacial services area -->
<section class="speacial-services-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="section-title">
                    <h1> <span>special</span> Services</h1>
                    <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially</p>
                    <p>specimen book unchanged.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($specialtyServices as $service) 
            <div class="col-md-4 col-sm-4">
                <div class="speacila-single-service">
                    <div class="service-thumb">
                        <img src="/storage/images/service/specialty/{{ $service->spec_image_icon }}" alt="Pic" width="300" height="250">
                    </div>
                    <h4><a href="/service/{{ $service->spec_service_id }}">{{ $service->spec_title }}</a></h4>
                    <p>{{ str_limit($service->spec_desc, $limit = 40, $end = '...') }}</p>
                </div>
            </div>
            @endforeach
        </div> 
        <div align="center">
            {{ $specialtyServices->links() }}
        </div>
    </div>
</section>  
<!--End of Modal-->
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