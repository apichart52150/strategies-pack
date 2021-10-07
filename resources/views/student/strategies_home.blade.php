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

        
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">

                        <div class="card-body">
                                
                            <div class="text-center w-75 m-auto">
                                <h2 style="color:#3B73DA">
                                    <span class="logo-lg-text-light">Strategies Pack</span>
                                </h2>
                            </div>
                                    
                            <a href="{{url('introduction')}}" class="btn btn-block btn-lg btn-pink waves-effect waves-light">Introduction</a>
                            <a href="{{url('listening_user')}}" class="btn btn-block btn-lg btn-success waves-effect waves-light">Listening</a>
                            <a href="{{url('reading_user')}}" class="btn btn-block btn-lg btn-primary waves-effect waves-light">Reading</a>
                            <a href="{{url('writing_user')}}" class="btn btn-block btn-lg btn-warning waves-effect waves-light">Writing</a>
                            <a href="{{url('speaking_user')}}" class="btn btn-block btn-lg btn-danger waves-effect waves-light">Speaking</a>
                            <a href="{{url('overview')}}" class="btn btn-block btn-lg btn-info waves-purple waves-light">IELTS OVERVIEW</a>
                                    
                                        
                        </div>

                        <div class="card-body">
                            <center><a href="{{route('std_logout')}}" class="btn btn-secondary btn-rounded width-md waves-effect">Logout</a>
                        </div>

                    </div> 
                        <!-- end card-body -->

                </div> 
                    <!-- end card -->

            </div>
                <!-- end row -->

            <footer class="footer footer-alt">
                Strategies Pack &copy; Create by <a href="" class="text-muted">Newcambridge Thailand</a> 
            </footer>

        </div>
        <!-- end container -->

        
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