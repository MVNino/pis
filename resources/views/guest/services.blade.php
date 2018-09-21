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
                    <div class="col-sm-4 text-center">
                        <div class="single-features">
                            <div class="features-icon">
                                <img src="/storage/images/service/other/{{ $service->other_image }}" alt="jigsawlab">
                            </div>
                            <h4>{{ $service->other_title }}</h4>
                            <p>{{ $service->other_desc }}</p>
                            <a href="#" class="service-link">READ MORE +</a>
                        </div>
                    </div>      
                @empty
                @endforelse
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
               
                <div class="col-sm-4">
                    <div class="speacila-single-service">
                        <div class="service-thumb">
                            <img src="{{ asset('medicre/img/news-3.png') }}" alt="Pic" style="width: 100%" >
                        </div>
                       <a class="button" style="padding-bottom: 1%" data-toggle="modal" data-target="#videoModal" data-vid="https://www.youtube.com/embed/M54aHpm1TWc">Link ng Video </a>
                        <h4>X-ray</h4>
                        <p>Ayos na ang buto buto </p>
                    </div>
                </div>
                <!--MODAL-->
                 <div class="col-sm-4">
                    <div class="speacila-single-service">
                        <div class="service-thumb">
                            <img src="{{ asset('medicre/img/news-2.png') }}" alt="jigsawlab">
                        </div>
                        <h4>George QUICK</h4>
                        <p>Our construction management professio nals organize, lead, and manage the people, materials, and processes of construction utilizing the latest techno logies.</p>
                        <a href="single.html">READ MORE +</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="speacila-single-service">
                        <div class="service-thumb">
                            <img src="{{ asset('medicre/img/news-1.png') }}" alt="jigsawlab">
                        </div>
                        <h4>Jeremy hendixson</h4>
                        <p>Our construction management professio nals organize, lead, and manage the people, materials, and processes of construction utilizing the latest techno logies.</p>
                        <a href="single.html">READ MORE +</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="speacila-single-service">
                        <div class="service-thumb">
                            <img src="{{ asset('medicre/img/news-1.png') }}" alt="jigsawlab">
                        </div>
                        <h4>Jeremy hendixson</h4>
                        <p>Our construction management professio nals organize, lead, and manage the people, materials, and processes of construction utilizing the latest techno logies.</p>
                        <a href="single.html">READ MORE +</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="speacila-single-service">
                        <div class="service-thumb">
                            <img src="{{ asset('medicre/img/news-2.png') }}" alt="jigsawlab">

                        </div>
                        <h4>{{ $service->spec_title }}</h4>
                        <p>{{ $service->spec_desc }}</p>
                        <a href="">READ MORE +</a>
                    </div>
                </div>
                @empty
                
                @endforelse
            </div> 
            <div align="center">
                {{ $specialtyServices->links() }}
            </div>
        </div>
    </section>
                <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
                  <div class="modal-dialog">

                    <div class="modal-content">
                    <div class="modal-heading">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<div class="modal-title" style="padding-left: 2%; padding-top: 2%;">
    <h3><strong>Video Title</h3<strong></h3></div>
                        
                    </div>
                      <div class="modal-body">
                        
                        <div>
                          <iframe id="videosample" width="100%" height="350" src="">
                          </iframe>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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