@extends('layouts.admin')
@section('content')
 <div class="main-content">

        <!-- begin::page-header -->
        <div class="page-header">
            <div class="container-fluid d-sm-flex justify-content-between">
                <h4>Blogs</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Create Blog</li>
                    </ol>
                </nav>
            </div>
        </div>

 <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                {{Form::open(['action' => 'AdminController@storeBlog', 'method'=>'post', 'enctype' => 'multipart/form-data'])}}
                <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Create Blog Post</h6>
                            <div class="row">
                                <div class="col-md-6">
                                 
                                        <div class="form-group">
                                            <input type="text" name="title"  value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Blog Title">
                                            <small id="emailHelp" class="form-text text-muted">Blog Title eg. Blog headline
                                            </small>
                                            @error('title')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                     
                                </div>
                                    <div class="col-md-6">
                                  <div class="custom-file">
                                            <select name="category" class="form-control @error('category') is-invalid @enderror" id="customFile">
                                                
                                                <option>  Select Category </option>
                                                @foreach ($category as $cat )
                                                    <option value="{{$cat->id}}"> {{$cat->name}} </option>
                                                @endforeach
                                            </select>
                                                
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted">Select Category
                                            </small>
                                              @error('category')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                         </div>

                                         <div class="col-md-12">
                                  <div class="form-group">
                                    
                                    <textarea  id="summernote" class="form-control @error('content') is-invalid @enderror"  name="content" >{{old('content')}}</textarea>
                                     <small id="emailHelp" class="form-text text-muted">Write Blog Content
                                            </small>
                                                                    
                                            @error('content')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                    </div>
                                         </div>
                                         <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="file" name="image"  value="{{old('image')}}" class="form-control @error('image') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Blog Image">
                                            <small id="emailHelp" class="form-text text-muted">Blog Image
                                            </small>
                                            @error('image')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                           
                            </div> 
                        </div>
                         
                    </div>

                         <div class="card">
                        <div class="card-body">
                        <div class="row">
                          <div class="col-md-4">
                          </div>
                          <div class="col-md-4">
                        <div class="p-5">
                        @if(Session::has('success'))
                            <a href="{{route('blog.index')}}" class="btn btn-primary w-100 p-3">Return Home</a>
                        @else
                             <button type="submit" class="btn btn-primary w-100 p-3">Create Post</button>
                             @endif
                           </div>
                           </div>
                           </div>
                        </div>
                        </div>
                    {{Form::close()}}

    </div>
                        </div>
                    </div>
                   

@endsection
@section('script')
<script>

$(document).ready(function() {
  $('#summernote').summernote();
});

$('.clockpicker-example').clockpicker({
    autoclose: true
});

$('input[name="date"]').daterangepicker({
  singleDatePicker: true,
  showDropdowns: true
});

let message = {!! json_encode(Session::get('message')) !!};
let msg = {!! json_encode(Session::get('alert')) !!};
//alert(msg);
toastr.options = {
        timeOut: 3000,
        progressBar: true,
        showMethod: "slideDown",
        hideMethod: "slideUp",
        showDuration: 200,
        hideDuration: 200
    };
if(message != null && msg == 'success'){
toastr.success(message);
}else if(message != null && msg == 'error'){
    toastr.error(message);
}
</script>
@endsection