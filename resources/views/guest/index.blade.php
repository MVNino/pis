@extends('guest.layouts.app')

@section('content')
<!-- start slider section -->
    <section class="home-area v3">
        <div class="Modern-Slider">
            <!-- Item -->
            <div>
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
                    <!--Indicators-->
                    <!-- <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol> -->
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        @foreach($banners as $banner)
                            <div class="item">
                                <img src="/storage/images/banner/{{$banner->banner_picture}}" 
                                    alt="banner" style="object-fit: cover; height: 700px; width: 100%;">
                            </div>
                        @endforeach
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- // Item -->
        </div>
        <!-- end of slider section -->
    </section>
    <section class="aboutUs-area v2 section-padding">
        <div class="container">
            <div class="row">
                <div class="aboutUs-contant">
                    <div class="col-sm-6">
                        <div class=" about-title">
                        <h1>Dra. <span>Joy Gali</span></h1>
                    </div>
                        <h4><span class="fa fa-check"></span>Handle With Professionalism</h4>
                        <p>As a doctor, my task is always to put up patients’ needs first and our jobs comes at second, and this will always be dedicated to the people who needs my expertise.</p>
                        <h4><span class="fa fa-check"></span>I Love What I Do</h4>
                        <p> Treating people drives my wheel and curing them will always be my pleasure because helping people in need of my expertise puts my education and skills into good use. </p>

                    <a href="{{ route('services') }}" class="about-btn">VIEW SERVICES</a>
                    </div>
                </div>
                 <div class="col-sm-6">
                    <div class="about-form">
                        <div class="form-title text-center">
                            <h2>SCHEDULE AN APPOINTMENT</h2>
                        </div>
                        <div class="v2-about-input">
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="v2-about-input mr0">
                            <input type="text" placeholder="Middle Name">
                        </div>
                        <div class="v2-about-input">
                            <input type="text"  placeholder="Last Name" >
                        </div>
                        <div class="v2-about-input mr0">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="v2-about-input">
                            <input type="text" placeholder="Contact Number">
                        </div>
                        <div class="v2-about-input mr0">
                            <div class="v2-about-select">
                                <select>
                                    <option value="">Location</option>
                                    <option value="">Quezon City</option>
                                    <option value="">Marikina City</option>
                                    <option value="">Makati City</option>
                                </select>
                            </div>
                        </div>
                        <div class="v2-about-input">
                            <div class="v2-about-select">
                                <select>
                                    <option value="">Preferred Date</option>
                                    <option value="">November 1, 2018</option>
                                </select>
                            </div>
                        </div>
                        <div class="v2-about-input mr0">
                            <div class="v2-about-select">
                                <select>
                                    <option value="">Preferred Time</option>
                                    <option value="">8:00AM - 9:00AM</option>
                                </select>
                            </div>
                        </div>
                        <div class="v2-about-textarea">
                             <textarea name="message" id="message2" cols="30" rows="10" placeholder="Write your message here..."></textarea>
                        </div>
                        <div class="v2-about-submit">
                            <input type="submit" value="SUBMIT">
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>

     <section class="features-area v2 section-padding">
        <div class="container">
            <div class="row">
                @foreach($otherServices as $otherService)
                <div class="col-sm-4 text-center">
                    <div class="v2 single-features">
                        <div class="features-icon">
                            <img src="/storage/images/service/other/{{ $otherService->other_image }}" alt="theimran.com">
                            <div class="hover-features">
                                <img src="{{ asset('medicre/img/logo1.png') }}" alt="theimran.com">
                            </div>
                        </div>
                        <h4>{{ $otherService->other_title }}</h4>
                        <p>{{ str_limit($otherService->other_desc, $limit = 140, $end = '...') }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section> 
    <!-- end of features area -->

    <!-- start latest news event section -->
    <section class="latest-news-event-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="section-title">
                        <h1><span>Latest</span> News &amp; Events</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($news as $new)
                <div class="col-sm-4">
                    <a href="single.html">
                        <div class="single-news-v3">
                            <div class="news-thumb">
                                <img src="/storage/images/news/{{ $new->news_picture }}" alt="jigsawlab" width="400" height="300">
                            </div>
                            <h4 class="news-title text-uppercase">{{ $new->news_title }}</h4>
                            {{-- <h4>27th Feb, 2016</h4> --}}
                            <p>{{ $new->news_desc }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="view-alldoctors">
                        <a href="{{ route('news') }}" class="read-more">view all news</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of latest news event section -->
@endsection

@section('pg-specific-js')
    <script>
        $("#navlink-index").addClass("current-menu-item");
        
        //add active to first banner
        document.querySelector('.item').classList.add("active");
        //document.getElementsByClassName('item')[0].classList.add("active");
    </script>
@endsection