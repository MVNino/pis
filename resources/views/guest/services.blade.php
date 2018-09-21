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
               @forelse($specialtyServices as $service) 
                <div class="col-sm-4">
                    <div class="speacila-single-service">
                        <div class="service-thumb">
                            <img src="/storage/images/service/specialty/{{ $service->spec_image_icon }}" alt="jigsawlab" height="200" width="300">
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
@endsection

@section('pg-specific-js')
<script>
$("#navlink-services").addClass("current-menu-item");
</script>
@endsection
