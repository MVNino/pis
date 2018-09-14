@extends('guest.layouts.app')

@section('content')
        <section class="aboutUs-area v2 v3 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="section-title">
                            <div class="page-title">
                                <h2>LATEST NEWS</h2>
                                <h3>events and happenings in the field of medicine</h3>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of department section -->
        <section class="get-quote-area" style="background-color: #79A7AC;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-left">
                        <div class="get-quate-content">
                            <h2>Giving our best service to our patients</h2>
                            <p>Subscribe to Hospital's news letter! Enter your e-mail to receive monthly news letters from us.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right">
                        <div class="get-btn">
                            <a href="#">SUBSCRIBE</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of get quote area -->
    </section>
    <!-- start about us section -->
    <section class="constructo-news-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    @foreach($news as $new)
                    <div class="single-news-post">
                        <div class="news-post-img">
                            <img src="/storage/images/news/{{ $new->news_picture }}" alt="theconstructo.com">
                        </div>
                        <div class="post-title">
                            <h2>{{ $new->news_title }}</h2>
                        </div>
                        <div class="date">
                            <p>Posted by : <span>Emma Walt</span> // On : <span>01 Jan, 2015</span></p>
                        </div>
                        <p>{{ $new->news_desc }}</p>
                        <a href="single.html" class="read-more">READ MORE</a>
                    </div>
                    @endforeach
                    {{ $news->links() }}
                    <!-- <div class="row">
                        <div class="col-xs-12 text-center">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li><a href="#" class="fa fa-angle-left"></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#" class="fa fa-angle-right"></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div> -->
                </div>
                <div class="col-sm-5 col-md-4">
                    <div class="sidebar-area">
                        <div class="single-sidebar">
                            <div class="widget-title text-center">
                                <h2> <span>RECENT</span> NEWS</h2>
                            </div>
                            <div class="widget-sider">
                                <span>
                                @foreach($recentNews as $news)
                                <div class="widget-sider">
                                    <div class="widget-single-slider">
                                        <a href="single.html">
                                            <img src="/storage/images/news/{{ $news->news_picture }}" alt="{{ $news->news_picture }}">
                                            <div class="widget-post-title">
                                                <p>{{ $news->news_title }}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </span>
                                <div class="widget-single-slider">
                                    <a href="single.html">
                                        <img src="{{ asset('medicre/img/w-2.png') }}" alt="theconstructo.com">
                                        <div class="widget-post-title">
                                            <p>From 0 To 14 Clients & $14,000 a Month Case Study</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="widget-single-slider">
                                    <a href="single.html">
                                        <img src="{{ asset('medicre/img/w-1.png') }}" alt="theconstructo.com">
                                        <div class="widget-post-title">
                                            <p>Put Your Content Syndication Strategy On Autopilot</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="widget-single-slider">
                                    <a href="single.html">
                                        <img src="{{ asset('medicre/img/w3.png') }}" alt="theconstructo.com">
                                        <div class="widget-post-title">
                                            <p>How To Rank In Google Maps Fast + Case Study</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="widget-single-slider">
                                    <a href="single.html">
                                        <img src="{{ asset('medicre/img/news-2.png') }}" alt="theconstructo.com">
                                        <div class="widget-post-title">
                                            <p>From 0 To 14 Clients & $14,000 a Month Case Study</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="widget-single-slider">
                                    <a href="single.html">
                                        <img src="{{ asset('medicre/img/news-3.png') }}" alt="theconstructo.com">
                                        <div class="widget-post-title">
                                            <p>Put Your Content Syndication Strategy On Autopilot</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar">
                            <div class="widget-title text-center">
                                <h2>DEPARTMENTS</h2>
                            </div>
                            <ul>
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Builders</a></li>
                                <li><a href="#">Metal Roofing</a></li>
                                <li><a href="#">Painting</a></li>
                                <li><a href="#">Marketing Plan</a></li>
                                <li><a href="#">Flooring</a></li>
                                <li><a href="#">Heavy Vehicles</a></li>
                                <li><a href="#">Diggin & Tiling</a></li>
                                <li><a href="#">Others</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start footer top section -->
    <section class="constructo-footer-top section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="footer-top-content">
                        <h2>Want to be updated on the latest news from us?</h2>
                        <p>Subscribe to our newsletter by giving us your e-mail!</p>
                        <a href="#" class="contat-usf">SUBSCRIBE</a>
                        <a href="#" class="learn-moref">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('pg-specific-js')
<script>
$("#navlink-news").addClass("current-menu-item");
</script>
@endsection