<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.includes.head-content')
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <!-- Left navbar-header -->
        @include('admin.includes.navbar')
        <!-- Left navbar-header end -->
        @include('admin.includes.sidebar')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    @yield('breadcrumb')
                    <!-- /.col-lg-12 -->
                </div>
                @include('admin.includes.messages')
                @yield('content')
                <!-- .right-sidebar -->
                @include('admin.includes.right-sidebar')
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('elite/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('elite/bootstrap/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('elite/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('elite/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js') }}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('elite/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('elite/js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('elite/js/waves.js') }}"></script>
    <!--Morris JavaScript -->
    <script src="{{ asset('elite/plugins/bower_components/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('elite/plugins/bower_components/morrisjs/morris.js') }}"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="{{ asset('elite/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- jQuery peity -->
    <script src="{{ asset('elite/plugins/bower_components/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('elite/plugins/bower_components/peity/jquery.peity.init.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('elite/js/custom.min.js') }}"></script>
    <script src="{{ asset('elite/js/dashboard1.js') }}"></script>
    <!--Style Switcher -->
    <script src="{{ asset('elite/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

    @yield('pg-specific-js')
</body>

</html>