<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Strategies Pack</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('public/assets/images/web_logo-03.png') }}">

        <!-- App css -->
        <link rel="stylesheet" href="{{ asset('public/assets/libs/custombox/custombox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/app.min.css') }}">

    </head>

    <body>


         @yield('login')
                        

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
    
</html>