@extends('guest.layouts.app')

@section('content')
    <section class="home-sm">
        <!-- <section class="">
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
        </section> -->
        <!-- end of department section -->
        <!-- <section class="get-quote-area" style="background-color: #79A7AC;">
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
        </section> -->
        <!-- end of get quote area -->
    </section>
    <!-- start about us section -->
    <section class="constructo-news-post-area section-padding">
        <div class="container" style="margin-top: 5%;">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    @foreach($news as $new)
                    <div class="single-news-post">
                        <div class="news-post-img">
                            <img src="/storage/images/news/{{ $new->news_picture }}" alt="$new->news_title" >
                        </div>
                        <div class="post-title">
                            <h2>{{ $new->news_title }}</h2>
                        </div>
                        <p>{{ $new->news_desc }}</p>
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
                            <span>
                            <div class="widget-sider">
                            @foreach($recentNews as $news)
                                <div class="widget-single-slider">
                                    <a href="#" style="cursor:default">
                                        <img src="/storage/images/news/{{ $news->news_picture }}" alt="{{ $news->news_picture }}"
                                            >
                                        <div class="widget-post-title">
                                            <p>{{ $news->news_title }}</p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                            </div>
                            </span>
                        </div>
                    </div>
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

<div class="modal fade bd-example-modal-lg" id="manualNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header" style="background-color: #fff;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h3 id="exampleModalLongTitle"> &nbsp;<b>HELP</b> &nbsp;<i class="fa fa-question-circle"></i></h3>
        </div>
        <div class="modal-body" style="background-color: #fff;">
            <h4 style="margin-bottom:0;" class="text-primary"><b>News</b></h4>
            <div style="padding:15px;">

                <p style="margin-top:0;">This part will discuss News. This will contain the Recent News chosen by the clinic in relation to its medical services.</p><br>

                <label><b>Step 1 :</b>&nbsp;</label>
                From the navigation bar, click [1] to go to News which will display this page. The page will display a list of the recent news.<br><br>

                <!-- <img class="dynamic" src="{{asset('img/service/service1.jpg')}}"><br><br> -->
                
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
            $("#manualNews").modal("show");
            
        }
        return false;
    };
</script>

