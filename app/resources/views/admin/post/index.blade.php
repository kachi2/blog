@extends('layouts.admin')

@section('content')

    <main class="main-content">

        <div class="page-header">
            <div class="container-fluid d-sm-flex justify-content-between">
                <h4>Blog</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Lists</li>
                    </ol>
                </nav>
            </div>
        </div>
<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                     <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">Blog List</h6>
                                <div>
                                    <a href="#" class="mr-3">
                                        <i class="fa fa-refresh"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead>
                                            <tr>
                                                <th class="text-left">Blog Title</th>
                                                <th>Image</th>
                                                <th>Views</th>
                                                <th>Date Posted</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                  
                                        @if(count($blogs) > 0)
                                        @foreach ($blogs as  $blog)
                                            <tr>
                                                <td>
                                                    <a href="#">{{$blog->title}}</a>
                                                </td>
                                                <td>
                                                    <a href="#"><img src="{{asset('/images/'.$blog->image)}}" width="50px" height="50px">  </a>
                                                </td>
                                                <td>
                                                    <a href="#">{{$blog->views}}</a>
                                                </td>
                                                <td>{{$blog->created_at}}</td>]
                    
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right ">
                                                            <a href="{{route('admin.blog.edit',encrypt($blog->id))}}" class="dropdown-item text-danger">Edit Post</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                              @endforeach
                                              @else 
                                              <tr>
                                              <td> No data available </td>
                                              </tr>
                                              @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                 </div>
                  </div>
@endsection