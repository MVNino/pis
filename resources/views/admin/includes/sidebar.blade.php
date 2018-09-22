<div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                                <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="{{ asset('elite/plugins/images/users/d1.jpg') }}" alt="user-img" class="img-circle">                            <span
                                class="hide-menu">Dr. {{ Auth::user()->name }}</span>
                        </a>
                    </li>
                    <li class="nav-small-cap m-t-10">--- Professional</li>
                    <li> <a href="doctor-schedule.html" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span class="hide-menu">
                            Appointment </span></a>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span class="hide-menu">
                            Patients <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="{{ route('transaction.patients') }}">All Patients</a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-chart p-r-10"></i> <span class="hide-menu">
                            Reports <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="payment-report.html">Daily Cash Position</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-inr p-r-10"></i> <span class="hide-menu">
                            Payments <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="payments.html">Billing</a></li>
                            <li> <a href="patient-invoice.html">Official Receipt</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="nav-small-cap">--- WEBSITE MAINTENANCE</li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i>
                            <span class="hide-menu">Maintenance<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="{{ route('maintenance.about') }}">About</a></li>
                            <li> <a href="{{ route('maintenance.banner') }}">Banner</a> </li>
                            <li> <a href="{{ route('maintenance.clinic') }}">Clinic</a> </li>
                            <li> <a href="{{ route('maintenance.company') }}">Company</a> </li>
                            <li> <a href="{{ route('maintenance.features') }}">Features</a> </li>
                            <li> <a href="{{ route('maintenance.faqs') }}">FAQs</a> </li>
                            <li> <a href="{{ route('maintenance.news') }}">News</a> </li>
                            <li> <a href="{{ route('maintenance.services') }}">Services</a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>