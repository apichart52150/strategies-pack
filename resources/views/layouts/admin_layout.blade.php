<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('public/assets/images/web_logo-03.png') }}">

        <link rel="stylesheet" href="{{ asset('public/assets/libs/custombox/custombox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/app.min.css') }}"> 

        <link rel="stylesheet" href="{{ asset('public/assets/libs/footable/footable.core.min.css') }}"> 

        <link rel="stylesheet" href="{{ asset('public/assets/libs/sweetalert2/sweetalert2.min.css') }}"> 

  
        
    </style>

    <body>

        <div id="wrapper"><!-- Begin page -->

            <div class="navbar-custom" style="background-color:#3B73DA">

                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">

                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        {{Auth::user()->name}}  <i class="mdi mdi-chevron-down"></i> 
                        </a>

                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <a href="{{route('userlogout')}}" class="dropdown-item notify-item">
                                <i class="remixicon-logout-box-line"></i>
                                <span>Logout</span>
                            </a>

                        </div>

                    </li>

                   

                </ul>


                <!-- LOGO -->        
                <div class="logo-box" style="background-color:#3B73DA">
                    <a href="#" class="logo text-center">

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
            

            @yield('content')

        </div>  

        
        <script src="public/assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <script src="public/assets/libs/peity/jquery.peity.min.js"></script>

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

        <!-- Modal-Effect -->
        <script src="public/assets/libs/custombox/custombox.min.js"></script>

        <!-- Sweet Alerts js -->
        <script src="public/assets/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- Sweet alert init js-->
        <!-- <script src="public/assets/js/pages/sweet-alerts.init.js"></script> -->

        <script src="public/assets/js/pages/sweet.init.js"></script>

    </body>

</html>