@extends('guest.layouts.app')

@section('content')
<section class="features-area singlepageservice section-padding">
    <div class="container" style="margin-top: 5%;">
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
                        <!--<a href="#" class="service-link">READ MORE +</a>-->
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
                        <img src="/storage/images/service/specialty/{{ $service->spec_image_icon }}" alt="Pic" width="400" height="250">
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

<div class="modal fade bd-example-modal-lg" id="manualServices" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header" style="background-color: #fff;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h3 id="exampleModalLongTitle"> &nbsp;<b>HELP</b> &nbsp;<i class="fa fa-question-circle"></i></h3>
        </div>
        <div class="modal-body" style="background-color: #fff;">
            <h4 style="margin-bottom:0;" class="text-primary"><b>Services</b></h4>
            <div style="padding:15px;">

                <p style="margin-top:0;">This part will discuss Services. This will contain the Services of the clinic, which includes the Specialty services and Other services.</p><br>

                <label><b>Step 1 :</b>&nbsp;</label>
                From the navigation bar, click [1] to go to Services which will display this page. The page will display a list of the different Medical services of the clinic.<br><br>

                <!-- <img class="dynamic" src="{{asset('img/service/service1.jpg')}}"><br><br> -->

                <label><b>Step 2 :</b>&nbsp;</label>
                To view a medical service, click [2]. The page will display the medical service information and its corresponding video.<br><br>

                <!-- <img class="dynamic" src="{{asset('img/service/service2.jpg')}}"><br><br> -->

                <label><b>Step 3 :</b>&nbsp;</label>
                To go back to the previous page, click [3].<br><br>

                <!-- <img class="dynamic" src="{{asset('img/service/service3.jpg')}}"><br><br> -->

                <label><b>Step 4 :</b>&nbsp;</label>
                The page will also display the special services of the clinic. To view a specific specialty service, click [4].<br><br>

                <label><b>Step 5 :</b>&nbsp;</label>
                The page will also display the specialty service information and its corresponding video. To back to the previous page, click [5].<br><br>

                <!-- <img class="dynamic" src="{{asset('img/service/service4.jpg')}}"><br><br> -->
 
            </div>
        </div>
        <div class="modal-footer" style="background-color: #fff;" >
            <button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>
        </div>
        </div>
    </div>
</div>

@section('pg-specific-js')
<script>
    window.onhelp = function() {
        return false;
    };
    window.onkeydown = evt => {
        if (evt.keyCode == 112){
            $("#manualServices").modal("show");
            
        }
        return false;
    };
</script>