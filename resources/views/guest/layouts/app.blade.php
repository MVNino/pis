<!DOCTYPE html>
<html lang="en">
<head>
    @include('guest.includes.head-content')
</head>

<body class="js">
   <div id="preloader"></div>
    <section class="home-sm home-area v3">
        <!-- navbare area -->
        @include('guest.includes.navbar')
        @include('guest.includes.messages')
        <!-- end of navbare area -->
        @yield('content')
    <footer class="footer-area section-padding">
        <div class="container">
        
                    <div class="footer-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-logo">
                                    <img src="{{ asset('medicre/img/logo1.png') }}" alt="logo" style="width: 300px; height: 50px;">
                                </div>
                                <div class="footer-about">
                                    <p>A <strong>Vascular Surgery Consultant</strong> at the National Kidney and Transplant Institute. She is currently pursuing her MS in Physiology at the University of the Philippines - College of Medicine.</p>
                                    <p><a href="/about">Read More <i class="fa fa-chevron-circle-right"></i></a></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                               
                                 <p style="font-size: 200%;"><strong>Visit my Social Media sites</strong></p>
                                 <hr/>
                                <a href="http://facebook.com"><i class="fa fa-facebook-square" style="font-size: 300%;"></i></a>&ensp;
                                <a href="http://twitter.com"> <i class="fa fa-twitter-square" style="font-size: 300%;"></i></a>&ensp;
                                <a href="http://ph.linkedin.com/in/joy-gali-73894364"> <i class="fa fa-linkedin-square" style="font-size: 300%;"></i></a>   
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
    @yield('pg-specific-js')
</body>

</html>