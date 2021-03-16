@extends('layouts.student_layout')

{{-- <meta http-equiv="Content-Security-Policy" 
content="frame-src https://docs.google.com;"> --}}

@section('content')


    <div class="content">
                    
        <div class="container-fluid">
                                            
            <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Listening</h4>
                        </div>
                    </div>
            </div> 
            
            <!-- <center> <h1 style="color:#616161">Coming Soon . .</h1> -->
            <center>
            <div class="row">  

                @foreach ($users as $user)

                    @if($user->status == "active")

                        @if($user->topic == "listening")
                            <div class="col-lg-6"> 
                                <div class="card-box ribbon-box">
                                    <div class="ribbon ribbon-success float-left"><i class="remixicon-volume-up-fill mr-1"></i>{{$user->title}}</div>
                                        <div class="ribbon-content">

                                            <div class="plyr__video-embed" id="player">
                                                <iframe
                                                    src="{{$user->link}}"
                                                    allowfullscreen
                                                    allowtransparency
                                                    allow="autoplay"
                                                >
                                                </iframe>
                                            </div>
                                            <h4>
                                                @if($user->file_path ==".")
                                                
                                                    <button class="btn btn-dark disabled mt-2">No sample answer</button>
                                                    
                                                @else

                                                    <a download href ="{{ asset('storage/app/public/file/'.$user->file_path) }}" class="btn btn-icon waves-effect waves-light btn-primary mt-2"> <i class="fe-download"></i> Sample answer PDF </a>
                                                
                                                @endif
                                            </h4>

                                        </div>
                                    </div>    

                                </div>

                            </div>

                        @endif

                    @endif
                
                @endforeach

            </div> 

     
        </div> <!--end container-fluid-->
        
               
    </div> <!--end content --> 


    

@endsection