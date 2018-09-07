@extends('guest.layouts.app')

@section('content')
<!-- start slider section -->
        <div class="Modern-Slider">
            <!-- Item -->
            <div>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{ asset('medicre/img/banner.jpg') }}" alt="Los Angeles" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="{{ asset('medicre/img/v3home.png') }}" alt="Chicago" style="width:100%;">
                        </div>
                        
                        <div class="item">
                            <img src="{{ asset('medicre/img/ny.jpg') }}" alt="New york" style="width:100%;">
                        </div>
                    </div>
                    <!-- Left and right controls -->
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
                        <h1>The <span>Hospital Name</span></h1>
                    </div>
                        <h4><span class="fa fa-check"></span>Handle With Professionalism</h4>
                        <p>Maecenas scelerisque felis ornare placer tempus. In turpis nisi, viverra hendrerit dolo veal, auctor ablandit sapien. Aenean quis ven natis felis, adipiscing pretium nunc. Maecenas scelerisque felis ornare placer tempus. In turpis nisi, viverra hendrerit dolo veal.</p>
                        <h4><span class="fa fa-check"></span>We Love What We Do</h4>
                        <p>Which replenish a forth green, him every over subdue won't give them there them. Can't had upon. Which midst. Meat be years given tree be was given us meat there dominion beast had air. Said open land form moved air his signs moveth creepeth appear appear it. Said open land form moved air his signs moveth creepeth appear appear it.</p>

                        <a href="services-1.html" class="about-btn">VIEW SERVICES</a>
                    </div>
                </div>
                 <div class="col-sm-6">
                     <div class="about-form">
                             <div class="form-title text-center">
                                <h2>SCHEDULE AN APPOINTMENT</h2>
                            </div>
                            <div class="v2-about-input">
                                <input type="text"  placeholder="Patient's Name" >
                            </div>
                            <div class="v2-about-input mr0">
                              <input type="email" placeholder="Email">
                            </div>
                            <div class="v2-about-input">
                                <input type="text" placeholder="Phone">
                            </div>
                        <div class="v2-about-input mr0">
                            <div class="v2-about-select">
                                 <select>
                                       <option value="Preferred Date & Time">Preferred Date & Time</option>
                                         <option value="Preferred Date & Time">Preferred Date & Time</option>
                                         <option value="Preferred Date & Time">Preferred Date & Time</option>
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
                <div class="col-sm-4 text-center">
                    <div class="v2 single-features">
                        <div class="features-icon">
                            <img src="{{ asset('medicre/img/v2f1.png') }}" alt="theimran.com">
                            <div class="hover-features">
                                <img src="{{ asset('medicre/img/service-3.png') }}" alt="theimran.com">
                            </div>
                        </div>
                        <h4>Qualified Doctors</h4>
                        <p>If you need a doctor for to consectetuer Lorem </p>
                        <p>ipsum dolor, consectetur adipiscing elit Lorem </p>
                        <p>ipsum dolor, consectetur Ut volutpat eros.</p>
                        
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="v2 single-features">
                        <div class="features-icon">
                            <img src="{{ asset('medicre/img/v2f2.png') }}" alt="theimran.com">
                            <div class="hover-features">
                                <img src="{{ asset('medicre/img/service-1.png') }}" alt="theimran.com">
                            </div>
                        </div>
                        <h4>Operation Theater</h4>
                        <p>If you need a doctor for to consectetuer Lorem </p>
                        <p>ipsum dolor, consectetur adipiscing elit Lorem </p>
                        <p>ipsum dolor, consectetur Ut volutpat eros.</p>
                        
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="v2 single-features">
                        <div class="features-icon">
                            <img src="{{ asset('medicre/img/v2f3.png') }}" alt="theimran.com">
                            <div class="hover-features">
                                <img src="{{ asset('medicre/img/service-2.png') }}" alt="theimran.com">
                            </div>
                        </div>
                        <h4>Emergency Services</h4>
                        <p>If you need a doctor for to consectetuer Lorem </p>
                        <p>ipsum dolor, consectetur adipiscing elit Lorem </p>
                        <p>ipsum dolor, consectetur Ut volutpat eros.</p>
                      
                    </div>
                </div>
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
                <div class="col-sm-4">
                    <a href="single.html">
                        <div class="single-news-v3">
                            <div class="news-thumb">
                                <img src="{{ asset('medicre/img/news-1.png') }}" alt="jigsawlab">
                            </div>
                            <h4 class="news-title text-uppercase">George QUICK</h4>
                            <h4>27th Feb, 2016</h4>
                            <p>Our construction management professio nals organize, lead, and manage the people, materials, and processes of construction utilizing the latest techno logies.</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="single.html">
                        <div class="single-news-v3">
                            <div class="news-thumb">
                                <img src="{{ asset('medicre/img/news-2.png') }}" alt="jigsawlab">
                            </div>
                            <h4 class="news-title text-uppercase">SAMANTHA FOX</h4>
                            <h4>27th Feb, 2016</h4>
                            <p>Our construction management professio nals organize, lead, and manage the people, materials, and processes of construction utilizing the latest techno logies.</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="single.html">
                        <div class="single-news-v3">
                            <div class="news-thumb">
                                <img src="{{ asset('medicre/img/news-3.png') }}" alt="jigsawlab">
                            </div>
                            <h4 class="news-title text-uppercase">Jeremy hendixson</h4>
                            <h4>27th Feb, 2016</h4>
                            <p>Our construction management professio nals organize, lead, and manage the people, materials, and processes of construction utilizing the latest techno logies.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="view-alldoctors">
                        <a href="news-3.html" class="read-more">view all news</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of latest news event section -->
@endsection