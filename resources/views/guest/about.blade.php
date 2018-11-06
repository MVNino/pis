@extends('guest.layouts.app')

@section('content')

    <!-- end of get quote area -->
    <section class="mediacare-whychoose-us" style="padding-top: 10%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="best-feature-title">
                        <h2 class="text-uppercase">Why <span>Choose Us ?</span></h2>
                    </div>

                    <div class="whychoose-us-content">
                        <div class="single-chose">
                            <h4><span class="fa fa-heart-o"></span>HANDLE WITH PROFESSIONALISM</h4>
                            <p>
                                As a doctor, my task is always to put up patients’ needs first and our jobs comes at second, and this will always be dedicated to the people who needs my expertise.
                            </p>
                        </div>
                        <div class="single-chose">
                            <h4><span class="fa fa-heart-o"></span>I LOVE WHAT I DO</h4>
                            <p>
                                Treating people drives my wheel and curing them will always be my pleasure because helping people in need of my expertise puts my education and skills into good use.
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-6 text-left">
                    <div class="best-feature-title">
                        <h2 class="text-uppercase">our <span>features</span></h2>
                    </div>
                    <div class="best-features-accoudion">
                        @foreach($features as $feature)
                        <div class="panel-group" id="Abaccordion{{ $feature->features_id }}" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="AbheadingOne{{ $feature->features_id }}">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#Abaccordion{{ $feature->features_id }}" href="#AbcollapseOne{{ $feature->features_id }}" aria-expanded="true" aria-controls="AbcollapseOne{{ $feature->features_id }}">
                                            {{ $feature->feature_title }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="AbcollapseOne{{ $feature->features_id }}" class="panel-collapse collapse out" role="tabpanel" aria-labelledby="AbheadingOne{{ $feature->features_id }}">
                                    <div class="panel-body">
                                        <p>{{ $feature->feature_description }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of about us section -->
        <!-- end of client say section -->
        <section class="client-say-area section-padding">
        <div class="container">
            <div class="section-title">
                <center><h1><span>Know More About</span> {{$profile->name}}</h1></center>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-speacialist">
                        <div class="specialist-img">
                            <a target="_blank" href="/storage/images/profile/{{$profile->picture}}">
                                <img src="/storage/images/profile/{{$profile->picture}}" style="width: 100%;">
                            </a>
                        </div>
                        <h4 style="margin-left: 2%">{{$profile->name}}</h4>
                        <p style="margin-left: 2%">{{$profile->title}} </p>       
                    </div>
                </div> 
                <div class="col-md-8">
                    <div class="whychoose-us-content">
                        <h4><strong>Introduction</strong></h4>
                        <br>
                        <p align="justify" style="text-indent: 8%; white-space: pre;
                        white-space: pre-line;">
                            {{$profile->introduction}}
                        </p>
                
                        <br>
                        <h4><strong>Her Skills and Specialties</strong> </h4>
                        <br>
                        <div class="row" style="margin-left: 3%; color: #61625D;">
                            <p align="justify" style="text-indent: 8%; white-space: pre;
                            white-space: pre-line;">
                                {{$profile->skills}}
                            </p>
                        <!--div class="col-md-6">
                            <ul style="list-style-type:disc">
                            <li>Angiography</li>
                            <li>Vascular Surgery</li>
                            <li> Vascular Diseases </li>
                            <li> Angioplasty</li>
                            <li>Endovascular Surgery</li>
                            <li>Endoleak</li>
                            <li>Duplex Ultrasonography</li>
                            <li>Digital Subtraction Angiography</li>
                            <li>Phlebology</li>
                        </ul>
                        </div-->
                
                        <!--div class="col-md-6">
                            <ul style="list-style-type:disc">
                            <li>Vascular Imaging</li>
                            <li>Atherosclerotic Vascular Diseases</li>
                            <li>Vascular Physiology</li>
                            <li>Carotid Endarterectomy</li>
                            <li>Endovascular Procedures</li>
                            <li>Chronic Venous Insufficiency</li><li>Blood Flow Velocity</li>
                            <li>Deep Vein Thrombosis</li>
                            <li>Limb Salvage</li>
                        </ul>
                        </div-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection

@section('pg-specific-js')
    <script>
        $("#navlink-about").addClass("current-menu-item");
    </script>
@endsection