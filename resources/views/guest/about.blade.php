@extends('guest.layouts.app')

@section('content')
<div class="single-page-title">
    <section class="home-area v3">
        <!--About Image-->
        <div class="page-title-cell"  style="background-image: url('/storage/images/aboutr/{{$about->about_image}}');">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>
    </section>
    <section class="get-quote-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-left">
                    <div class="get-quate-content">
                        <h2>{{$about->about_title}}</h2>
                        <p>{{$about->about_desc}}</p>
                    </div>
                </div>
                <div class="col-sm-4 text-right">
                    <div class="get-btn">
                        <a href="index-3.html">SCHEDULE AN APPOINTMENT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of get quote area -->
    <section class="mediacare-whychoose-us ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="best-feature-title">
                        <h2 class="text-uppercase">Why <span>Choose Us ?</span></h2>
                    </div>

                    <div class="whychoose-us-content">
                        <div class="single-chose">
                            <h4><span class="fa fa-heart-o"></span>HANDLE WITH PROFESSIONALISM</h4>
                            <p>It has always been a debate whether to buy new or used construction equipment. Small fleets prefer to buy used construction equipment as they attract less capital and what to investments.</p>
                        </div>
                        <div class="single-chose">
                            <h4><span class="fa fa-heart-o"></span>WE LOVE WHAT WE DO</h4>
                            <p>It has always been a debate whether to buy new or used construction equipment. Smaller fleets prefer to buy used construction equipment as they attract less capital how to do investments.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-6 text-left">
                    <div class="best-feature-title">
                        <h2 class="text-uppercase">best <span>features</span></h2>
                    </div>
                    <div class="best-features-accoudion">
                        <div class="panel-group" id="Abaccordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="AbheadingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#Abaccordion" href="#AbcollapseOne" aria-expanded="true" aria-controls="AbcollapseOne">
                                          PROFESSIONAL PLANNING
                                        </a>
                                    </h4>
                                </div>
                                <div id="AbcollapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="AbheadingOne">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. Nulla id dolor ut mauris tempor dapibus ut ac justo. consectetur adipiscing elit. Nulla id dolor ut mauris tempor dapibus ut ac justo.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="AbheadingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#Abaccordion" href="#AbcollapseTwo" aria-expanded="false" aria-controls="AbcollapseTwo">
                                          HOME MAINTENANCE
                                        </a>
                                    </h4>
                                </div>
                                <div id="AbcollapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="AbheadingTwo">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. Nulla id dolor ut mauris tempor dapibus ut ac justo. consectetur adipiscing elit. Nulla id dolor ut mauris tempor dapibus ut ac justo.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="AbheadingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#Abaccordion" href="#AbcollapseThree" aria-expanded="false" aria-controls="AbcollapseThree">
                                          EVERYTHING IN BUDGET
                                        </a>
                                    </h4>
                                </div>
                                <div id="AbcollapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="AbheadingThree">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. Nulla id dolor ut mauris tempor dapibus ut ac justo. consectetur adipiscing elit. Nulla id dolor ut mauris tempor dapibus ut ac justo.</p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. Nulla id dolor ut mauris tempor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of about us section -->


<!-- start client say section -->
</div>
<section class="client-say-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="section-title">
                        <h1><span>What Patients are Saying</span> About Us</h1>
                    </div>
                </div>
            </div>
            <div class="row testimonial-section">
                <div class="col-sm-6">
                    <div class="single-client wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="client-content">
                            <span class="fa fa-quote-left"></span>
                            <p>As soon as you can, use real and relevant words. If your site or application requires data input, enter the real deal. And actually type in the text. If your site or application requires data input, enter the real deal.</p>
                        </div>
                        <div class="client">
                            <div class="clien-photo">
                                <img src="{{ asset('medicre/img/client-1.png') }}" alt="Jigsawlab">
                            </div>
                            <div class="client-name">
                                <h4>Michael Brahm</h4>
                                <!-- <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="single-client wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="client-content">
                            <span class="fa fa-quote-left"></span>
                            <p>As soon as you can, use real and relevant words. If your site or application requires data input, enter the real deal. And actually type in the text. If your site or application requires data input, enter the real deal.</p>
                        </div>
                        <div class="client">
                            <div class="clien-photo">
                                <img src="{{ asset('medicre/img/client-2.png') }}" alt="Jigsawlab">
                            </div>
                            <div class="client-name">
                                <h4>Samuel Rockafeller</h4>
                               <!--  <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="single-client">
                        <div class="client-content">
                            <span class="fa fa-quote-left"></span>
                            <p>As soon as you can, use real and relevant words. If your site or application requires data input, enter the real deal. And actually type in the text. If your site or application requires data input, enter the real deal.</p>
                        </div>
                        <div class="client">
                            <div class="clien-photo">
                                <img src="{{ asset('medicre/img/client-1.png') }}" alt="Jigsawlab">
                            </div>
                            <div class="client-name">
                                <h4>Michael Brahm</h4>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of client say section -->
@endsection

@section('pg-specific-js')
<script>
$("#navlink-about").addClass("current-menu-item");
</script>
@endsection