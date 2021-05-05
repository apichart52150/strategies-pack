<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Strategies Pack</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('public/assets/images/web_logo-03.png') }}">

        <link rel="stylesheet" href="{{ asset('public/assets/libs/custombox/custombox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/app.min.css') }}"> 

        <link rel="stylesheet" href="{{ asset('public/assets/libs/footable/footable.core.min.css') }}"> 

       
    </head>

    

    <body>

        <div id="wrapper">

            <div class="navbar-custom" style="background-color:#3B73DA">

                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">

                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            {{auth('student')->user()->std_name}}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <a href="{{route('std_logout')}}" class="dropdown-item notify-item">
                                <i class="remixicon-logout-box-line"></i>
                                <span>Logout</span>
                            </a>

                        </div>

                    </li>

                </ul>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                        <i class="fe-menu"></i>
                        </button>
                    </li>
                </ul>

                <!-- LOGO -->        
                <div class="logo-box" style="background-color:#3B73DA">
                    <a href="{{url('strategies_home')}}" class="logo">
                        <span class="logo-lg">
                            <img src="{{ asset('public/assets/images/logo-nc-light.png') }}" alt="" height="50">
                            <!-- <span class="logo-lg-text-light">Xeria</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">X</span> -->
                            <img src="{{ asset('public/assets/images/logo-nc-light-s.png') }}" alt="" height="24">
                        </span>

                    </a>
                </div> <!-- end logo box -->


            </div><!-- end navbar-custom -->



            <div class="content-page">
            

                @yield('content')

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                              Strategies Pack by <a href="https://www.newcambridge.com/">New Cambridge</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="https://www.newcambridge.com/about/">About Us</a>
                                    <a href="https://www.newcambridge.com/contact/">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->


            </div> <!--end Content page-->

            
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


            <div class="left-side-menu">

                <div class="slimscroll-menu">
                   
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Strategies Pack</li>

                                <li>
                                    <a href="{{url('introduction')}}" class="waves-effect" style="color:#F672A7">
                                        <i class=" mdi mdi-view-dashboard"></i>
                                        <span> Introduction </span>
                                    </a>
                                </li>   
                                            
                                <li>
                                    <a href="{{url('listening_user')}}" class="waves-effect" style="color:#1ABC9C">
                                        <i class="remixicon-volume-up-fill"></i>
                                        <span> Listening </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('reading_user')}}" class="waves-effect" style="color:#37CDE6">
                                        <i class="remixicon-eye-fill"></i>
                                        <!-- <span class="badge badge-success badge-pill float-right"></span> -->
                                        <span> Reading </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('writing_user')}}" class="waves-effect" style="color:#F7B84B">
                                        <i class="remixicon-edit-2-fill"></i>
                                        <span> Writing </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('speaking_user')}}" class="waves-effect" style="color:#F1556C">
                                        <i class="mdi mdi-voice"></i>
                                        <span> Speaking </span>
                                    </a>
                                </li>                    
                                                    
                        </ul>

                    </div>  <!-- sidebar-menu -->
                   
                    <div class="clearfix"></div>

                </div> <!-- end slimscroll-menu -->                                                                     

            </div> <!--end Left Sidebar  -->

        </div>  <!-- end wraper -->

        <script src="public/assets/libs/jquery-knob/jquery.knob.min.js"></script>

        <script src="assets/libs/peity/jquery.peity.min.js"></script>

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="public/assets/js/vendor.min.js"></script>

        <!-- Footable js -->
        <script src="public/assets/libs/footable/footable.all.min.js"></script>

        <!-- Init js -->
        <script src="public/assets/js/pages/foo-tables.init.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.min.js"></script>

        <!-- Sparkline charts -->
        <script src="public/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- init js -->
        <script src="public/assets/js/pages/dashboard-1.init.js"></script>


    </body>

</html>