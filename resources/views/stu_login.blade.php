@extends('layouts.login_layout')

@section('login')

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-2">
                                
                                <div class="text-center w-85 m-auto">
                                    <h2 style="color:#3B73DA">
                                        <span class="logo-lg-text-light">Strategies Pack</span>
                                    </h2>
                                    <p class="text-muted mb-4 mt-3" >Enter your username and password to access Strategies Pack</p>
                                </div>

                                @if(session()->has('message'))
                                 <div class="alert alert-warning alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="zmdi zmdi-close"></i>
                                    </button>
                                    <strong>
                                        <i class="zmdi zmdi-close-circle"></i> Error!</strong> {{session('message')}}</div>
                                @endif

                                <form class="form-horizontal m-t-20" method="post" action="user_login_fc" autocomplete="off">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="emailaddress">Username</label>
                                        <input class="form-control" type="text"  name="txtname" placeholder="Username" autocomplete="off" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password"  name="password" placeholder="Password." autocomplete="off" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
            
                                    <div class="form-group mb-0 text-center" >
                                    <button type="submit" class="btn btn-primary waves-effect waves-light w-100" style="background-color:#3B73DA">Log in</button>
                                    </div>

                                </form>

            

                            </div> 
                            <!-- end card-body -->
                        </div> 
                        <!-- end card -->

                        

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

    <footer class="footer footer-alt">
        Strategies Pack &copy; Create by <a href="" class="text-muted">Newcambridge Thailand</a> 
    </footer>

@endsection