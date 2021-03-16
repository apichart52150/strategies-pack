@extends('layouts.student_layout')


@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.plyr.io/3.6.3/plyr.css" />

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

                                        <div class="plyr__video-embed player">
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

                        @endif

                    @endif

                @endforeach

            </div> <!--End Row-->    

        </div> <!--end container-fluid-->
                    
    </div> <!--end content --> 

    <script src="https://cdn.plyr.io/3.6.3/plyr.js"></script>
    <script>
        const player = new Plyr('.player', {
            invertTime: true,
            controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'settings', 'fullscreen'],
            keyboard: {
                global: true
            },
            tooltips: { controls: true, seek: true },
            youtube: { noCookie: false, rel: 0, showinfo: 0, iv_load_policy: 3, modestbranding: 1 }
        });

        window.oncontextmenu = function(e) {
        	e.preventDefault()
        }
    </script>

@endsection