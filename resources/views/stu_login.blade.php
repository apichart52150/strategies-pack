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

                                <form class="form-horizontal m-t-20" method="post" action="{{ route('fn_login') }}" autocomplete="off">
                                    {{ csrf_field() }}

                                    <div class="form-group mb-3">
                                        <label for="username">Username</label>
                                        <input class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" type="text" id="username" name="username" required="" placeholder="Enter your username" value="{{ old('username') }}">
                                        <span class="invalid-feedback">
                                            {{ $errors->first('username') }}
                                        </span>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" required="" id="password" placeholder="Enter your password">
                                        <span class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </span>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Log In </button>
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