@extends('layouts.admin_layout')


@section('content')

<!-- row -->
<div class="row">


    @if (session('status'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('status') }}
    </div>
    @endif

    @if(session()->has('message'))
	{!!session()->get('message')!!}
	@endif 

    <div class="col-12">
        <div class="card-box">
            <h4 class="header-title">Admin</h4>
            <p class="sub-header">
               Successfully.
            </p>
                                
            <div class="mb-2">
                <div class="row" >
                    <div class="col-12 text-sm-center form-inline">
                        <div class="form-group mr-2">
                            <button id="demo-btn" class="btn btn-primary"data-toggle="modal" data-target="#con-close-modal"><i class="mdi mdi-plus-circle mr-2"></i> Add New Row</button>                                 
                        </div>  

                        <div class="form-group mr-2">
                            <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                <option value="">Show all</option>
                                <option value="active">Active</option>
                                <option value="disabled">Disabled</option>
                                <option value="suspended">Suspended</option>
                                <option value="introduction">Introduction</option>
                                <option value="listening">Listening</option>
                                <option value="reading">Reading</option>
                                <option value="writing">Writing</option>
                                <option value="speaking">Speaking</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
                        </div>

                    </div>

                </div>

            </div>
                                    
            <div class="table-responsive">
                <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-2" data-page-size="20" style="text-align: center">
                    <thead>
                        <tr>
                            <th>Topic</th>
                            <th data-toggle="true">Title</th>
                            <th>Authur</th>
                            <th>Link</th>
                            <th data-hide="phone, tablet">PDF</th>
                            <th data-hide="phone, tablet">Status</th>
                            <th data-hide="phone, tablet">Date</th>
                            <th data-hide="phone, tablet">Edit</th>
                        </tr>

                    </thead>

                    <tbody>

                        @foreach ($users as $user)
                            <tr>
                                <!-- topic -->
                                    <td>
                                        <?php 
                                            switch($user->topic){
                                                case 'listening':
                                                    echo '<span class="badge label-table badge-success">Listening</span>';
                                                break;

                                                case 'reading':
                                                    echo '<span class="badge label-table badge-primary">Reading</span>';
                                                break;

                                                case 'writing':
                                                    echo '<span class="badge label-table badge-warning">writing</span>';
                                                break;

                                                case 'speaking':
                                                    echo '<span class="badge label-table badge-danger">speaking</span>';
                                                break;

                                                case 'introduction':
                                                    echo '<span class="badge label-table badge-pink">introduction</span>';
                                                break;
                                            }
                                        ?>
                                    </td>

                                <!-- title -->
                                    <td>{{$user->title}}</td>

                                <!-- title -->
                                    <td>{{$user->authur}}</td>

                                <!-- link youtube -->
                                    <td>
                                    <a href="{{ $user->link }}" class="btn btn-success btn-xs" target="_blank">Link Video</i></a>
                                    </td>

                                <!-- link download -->
                                    <td>
                                        @if($user->file_path == ".")
                                            <p>none</p>
                                        @else
                                            <a href="{{ asset('storage/app/public/file/'.$user->file_path) }}" target="_blank">
                                                <img src="{{ asset('public/assets/images/file-icons/pdf.svg') }}" height="30" alt="icon" class="mr-2">
                                            </a>
                                        @endif
                                    </td>

                                <!-- status -->
                                    <td>
                                        <?php
                                            switch($user->status){      
                                                case 'active':
                                                    echo '<span class="badge label-table badge-success">Active</span>';
                                                break;

                                                case 'disabled':
                                                    echo '<span class="badge label-table badge-secondary">Disabled</span>';
                                                break;

                                                case 'suspended':
                                                    echo '<span class="badge label-table badge-danger">Suspended</span>';
                                                break;
                                            }
                                        ?>
                                    </td>
                                <!-- timestamp -->
                                    <td>{{$user->updated_at}}</td>

                                <!-- button -->
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#con-edit-modal{{ $user->id }}"><i class="fe-edit"></i></button>
                                        <!-- <a href="destroy{{ $user->id }}" class="btn btn-danger btn-xs"><i class="fe-x"></i></a> -->
                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#con-delete-modal{{ $user->id }}"><i class="fe-x"></i></button>
                                    </td>
                            </tr>    

                        @endforeach     

                    </tbody>    
                      
                    <tfoot>
                        <tr class="active">
                            <td colspan="8">
                                <div class="text-right">
                                    <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
                                </div>
                             </td>
                        </tr>
                    </tfoot>                                 
       
                </table>
            
            </div> <!-- end .table-responsive-->

        </div> <!-- end card-box -->

    </div> <!-- end col -->

</div>
<!-- end row -->


<!--Add Modal -->
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Add Content</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>

            <div class="modal-body p-4">

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/submit') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Title</label>
                                <input type="text" class="form-control" id="field-1" placeholder="listening" name="title" required>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Topic</label>
                                    <select id="demo-foo-filter-status" class="custom-select custom-select" name="topic">
                                        <option value="introduction">Introduction</option>
                                        <option value="listening">Listening</option>
                                        <option value="reading">reading</option>
                                        <option value="writing">writing</option>
                                        <option value="speaking">speaking</option>
                                    </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Status</label>
                                <select id="demo-foo-filter-status" class="custom-select custom-select" name="status">
                                    <option value="active">Active</option>
                                    <option value="disabled">Disabled</option>
                                    <option value="suspended">Suspended</option>
                                </select>
                            </div>
                        </div>

                    </div>       

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Link Youtube</label>
                                <input type="text" class="form-control" id="field-3" placeholder="link" name="link" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                             <div class="form-group">
                                <input type="file" class="upload" name="file_path"> 
                             </div>
                        </div>
                    </div>
    
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>

                </form>
   
            </div>

        </div>

    </div>  

</div>
<!--End Add Modal-->

@foreach ($users as $user)
<div id="con-edit-modal{{ $user->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Row</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>

            <div class="modal-body p-4">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/edit') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $user->id }}">
                <input type="hidden" name="updated_at" value="{{$user->updated_at}}">
                <input type="hidden" name="authur" value="{{ $user->authur }}">

                <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Title</label>
                                <input type="text" class="form-control" id="field-1" placeholder="Title" name="title" value="{{$user->title}}">
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Topic</label>
                                    <select id="demo-foo-filter-status" class="custom-select custom-select" name="topic">
                                    <option value="{{$user->topic}}">{{$user->topic}}</option>
                                        <option value="introduction">Introduction</option>
                                        <option value="listening">Listening</option>
                                        <option value="reading">reading</option>
                                        <option value="writing">writing</option>
                                        <option value="speaking">speaking</option>
                                    </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Status</label>
                                <select id="demo-foo-filter-status" class="custom-select custom-select" name="status">
                                    <option value="{{$user->status}}">{{$user->status}}</option>
                                    <option value="active">Active</option>
                                    <option value="disabled">Disabled</option>
                                    <option value="suspended">Suspended</option>
                                </select>
                            </div>
                        </div>

                    </div>       

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Link Youtube</label>
                                <input type="text" class="form-control" id="field-3" placeholder="Link Youtube" name="link" value="{{$user->link}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                             <div class="form-group">
                                <input type="file" class="upload" name="file_path">
                             </div>
                        </div>
                    </div>
    
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>

                </form>

            </div>     

        </div>

    </div>

</div><!-- /modal edit -->
@endforeach 

@foreach ($users as $user)
<!--Add Modal -->
<div id="con-delete-modal{{ $user->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Confirm Delete !!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-4">

                <form class="form-horizontal" role="form" action="destroy/{{ $user->id }}">

                    <!-- <p>delete</p> -->
                    <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                   

                </form>
   
            </div>

        </div>

    </div>  

</div>
@endforeach 
<!--End Add Modal-->



                       
@endsection