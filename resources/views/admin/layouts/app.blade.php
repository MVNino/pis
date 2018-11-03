<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.includes.head-content')
    @yield('pg-specific-css')
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
            <!-- Modal -->
            <div class="modal fade" id="composeMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h3 id="exampleModalLabel">Compose a Message</h3>
                        </div>
                        <form style="padding:20px;"class=" form-horizontal">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type ="text" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type ="text" name="subject" class="form-control" placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <textarea type ="text" name="subject" class="form-control" rows="10 "placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button id="btnSend" type="submit" class="btn btn-primary">
                                    <i class="fa fa-fw fa-lg fa-check-circle"></i> Send
                                </button>
                                <button type="button" class="btn btn-inverse" style="display: inline-block;" data-dismiss="modal">
                                    <i class="fa fa-close"></i> Cancel
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
    <!-- Calendar JavaScript -->
    <script src="{{ asset('elite/plugins/bower_components/calendar/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('elite/plugins/bower_components/moment/moment.js') }}"></script>
    <script src="{{ asset('elite/plugins/bower_components/calendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('elite/plugins/bower_components/calendar/dist/jquery.fullcalendar.js') }}"></script>
    <script src="{{ asset('elite/plugins/bower_components/calendar/dist/cal-init.js') }}"></script>
    <!--Style Switcher -->
    <script src="{{ asset('elite/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

    <script src="{{ asset('elite/js/jasny-bootstrap.js') }}"></script>
    <script src="{{ asset('elite/js/multiple-select.js') }}"></script>
    <script src="{{ asset('elite/js/shortcuts.js') }}"></script>

    @yield('pg-specific-js')
</body>
</html>