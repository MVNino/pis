<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Home | Hospital </title>
   <!--  <link rel="icon" href="img/favicon.png" type="image/x-icon"/> -->
    <!-- google fonts lato -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!-- google fonts pt-Sans -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('medicre/css/bootstrap.min.css') }}">
    <!-- font-awesome -->
    <link rel="stylesheet" href="{{ asset('medicre/css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('medicre/css/animate.min.css') }}">
    <!-- slider custom effects -->
    <link rel="stylesheet" href="{{ asset('medicre/css/myslider.css') }}">
    <!-- magnific-popup -->
    <link rel="stylesheet" href="{{ asset('medicre/css/magnific-popup.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset('medicre/css/slick.css') }}">
    <!-- reset css -->
    <link rel="stylesheet" href="{{ asset('medicre/css/reset.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('medicre/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('medicre/css/responsive.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body class="js">
   <div id="preloader"></div>
    <section class="home-area v3">
        <!-- navbare area -->
        <nav class="navbar navbar-area">
            <div class="container">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="col-sm-3 col-md-4">
                        <div class="site-logo">
                        <img src="{{ asset('medicre/img/logo.png') }}" style="padding-top: 3px; padding-bottom: 3px;">
                    </div>
                </div>
                    <ul class="nav menu navbar-right navbar-nav">
                        <li class="current-menu-item"><a href="index.html"> Home </a></li>
                        <li><a href="about.html"> About </a></li>
                        <li><a href="Services.html"> Services </a></li>
                        <li><a href="News.html"> News </a></li>
                        <li><a href="Contact.html"> Contact </a></li>
                        <li><a href="faqs.html" title="FAQs"> <i class="fa fa-question-circle" style="font-size: 20px;"> </i> </a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end of navbare area -->
        @yield('content')
    <footer class="footer-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="footer-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-logo">
                                    <img src="{{ asset('medicre/img/logo.png') }}" alt="mdimran41">
                                </div>
                                <div class="footer-about">
                                    <p>Am interdum, nulla id sodales viverra, Nam interdum, nulla id sodales viverra, quam eros commodo est, quis aliquam lectus feugiat enim lorem quis nisl. Quisque ac arcu egestas, convallis risus vitae, gravida enim quam eros commodo est, quis aliquam lectus. Nam interdum, nulla id sodales viverra.</p>
                                    <p>Praesent iaculis ut lacus a mattis. Nam interdum, nulla id sodales viverra.</p>
                                    <a href="#"> <span class="fa fa-angle-right"></span>read more</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-recent-post">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object" src="{{ asset('medicre/img/recen-1.png') }}" alt="jigsawlab">
                                        </a>
                                        <div class="media-body">
                                            <a href="#"><h4 class="media-heading">Cosmology</h4></a>
                                            <p>Phasellus ut condimentum diam, eget tempus lorem...</p>
                                            <p>21 December, 2017</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object" src="{{ asset('medicre/img/recen-2.png') }}" alt="jigsawlab">
                                        </a>
                                        <div class="media-body">
                                            <a href="#"><h4 class="media-heading">Cancer Facts</h4></a>
                                            <p>Phasellus ut condimentum diam, eget tempus lorem...</p>
                                            <p>21 December, 2017</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object" src="{{ asset('medicre/img/recen-3.png') }}" alt="jigsawlab">
                                        </a>
                                        <div class="media-body">
                                            <a href="#"><h4 class="media-heading">Dental Services</h4></a>
                                            <p>Phasellus ut condimentum diam, eget tempus lorem...</p>
                                            <p>21 December, 2017</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="media-carea-contact">
                        <form action="http://www.kazierfan.com/themes/medicre/medicre/index.html">
                            <div class="single-form">
                                <input class="form-control" type="text" placeholder="Name">
                            </div>
                            <div class="single-form">
                                <input class="form-control" type="text" placeholder="Email">
                            </div>
                            <div class="single-form">
                                <input class="form-control" type="text" placeholder="Phone number">
                            </div>
                            <div class="single-text-area">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
                            </div>
                            <div class="single-submit">
                                <input class="form-control text-center" type="submit" value="submit now">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyriht-area">
        <div class="container">
            <div class="row">
                
                <div class="col-md-7 text-right">
                    <div class="copyright-text">
                        <p>Jigsawlab © All Rights Reserved </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jquery min js -->
    <script type="text/javascript" src="{{ asset('medicre/js/jquery.min.js') }}"></script>
    <!-- jquery easing js -->
    <script type="text/javascript" src="{{ asset('medicre/js/jquery.easing.1.3.js') }}"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="{{ asset('medicre/js/bootstrap.min.js') }}"></script>
    <!-- jquery mignific js -->
    <script type="text/javascript" src="{{ asset('medicre/js/magnific-popup.min.js') }}"></script>
    <!-- jquery slick js -->
    <script type="text/javascript" src="{{ asset('medicre/js/slick.min.js') }}"></script>
    <!-- jquery nicescroll -->
    <script type="text/javascript" src="{{ asset('medicre/js/jquery.nicescroll.min.js') }}"></script>
    <!-- jquery active js -->
    <script type="text/javascript" src="{{ asset('medicre/js/active.js') }}"></script>
 
    <script src="{{ asset('medicre/js/custom.min.js') }}"></script>
        <script src="{{ asset('medicre/plugins/bower_components/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('medicre/plugins/bower_components/owl.carousel/owl.custom.js') }}"></script>
    <!--Style Switcher -->
    <script src="{{ asset('medicre/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

</body>

</html>