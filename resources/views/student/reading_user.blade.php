@extends('layouts.student_layout')


@section('content')

    <div class="content">
                    
        <div class="container-fluid">
                                            
            <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Reading</h4>
                        </div>
                    </div>
            </div> 

            <!-- <center> <h1 style="color:#616161">Coming Soon . .</h1> -->
            <center>
            <div class="row">  

                @foreach ($users as $user)

                    @if($user->status == "active")

                        @if($user->topic == "reading")

                            <div class="col-lg-6"> <!--card 1-->
                                <div class="card-box ribbon-box">
                                    <div class="ribbon ribbon-primary float-left"> <i class="remixicon-eye-fill mr-1"></i>{{$user->title}}</div>
                                    <div class="ribbon-content">
                                            <div class="carousel-item active">
                                                <img src="{{ asset('public/assets/images/disablebanner.png') }}" alt="" height="60">
                                            </div>
                                            <iframe class="w-100" height="280" 
                                                src="{{$user->link.('?controls=0')}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                            </iframe>
                                            <h4>
                                                @if($user->file_path ==".")
                                            
                                                    <button class="btn btn-dark disabled">No sample answer</button>
                                                
                                                @else
        
                                                    <a download href ="{{ asset('storage/app/public/file/'.$user->file_path) }}" class="btn btn-icon waves-effect waves-light btn-primary"> <i class="fe-download"></i> Sample answer PDF </a>
                                            
                                                @endif
                                            </h4>
                                            
                                    </div>

                                </div>

                            </div>

                        @endif

                    @endif

                @endforeach

            </div> <!--End Row-->    

        </div> <!--end container-fluid-->
                    
    </div> <!--end content --> 

@endsection