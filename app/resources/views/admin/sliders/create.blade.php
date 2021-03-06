@extends('layouts.admin')
@section('content')
 <div class="main-content">

        <!-- begin::page-header -->
        <div class="page-header">
            <div class="container-fluid d-sm-flex justify-content-between">
                <h4>Slider</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Create Slider</li>
                    </ol>
                </nav>
            </div>
        </div>

 <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                {{Form::open(['action' => 'AdminController@storeSlider', 'method'=>'post', 'enctype' => 'multipart/form-data'])}}
                <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Create Sliders</h6>
                            <div class="row">
                                <div class="col-md-12">
                                 
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
                                 
                                        <div class="form-group">
                                        <select type="text" name="category"  value="{{old('category')}}" class="form-control @error('Category') is-invalid @enderror" 
                                                   aria-describedby="emailHelp" placeholder="Category">
                                                   @foreach ($category as  $cat)
                                                <option>  </option>
                                                   @endforeach

                                                   </select>
                                            <small id="emailHelp" class="form-text text-muted">Slider Category
                                            </small>
                                            @error('title')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                     
                                </div>
                                 <div class="col-md-6">
                                 
                                        <div class="form-group">
                                        <select type="text" name="position"  value="{{old('position')}}" class="form-control @error('position') is-invalid @enderror" 
                                                   aria-describedby="emailHelp" placeholder="position">
                                                 
                                                <option value="center"> Center </option>
                                                  <option value="right"> Right  </option>

                                                   </select>
                                            <small id="emailHelp" class="form-text text-muted">Slider Position
                                            </small>
                                            @error('title')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                     
                                </div>
                                    <div class="col-md-6">
                                  <div class="custom-file">
                                            <input type="file"name="image" class="custom-file-input  @error('image') is-invalid @enderror" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose Image</label>
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted">Upload Slider Image
                                            </small>
                                              @error('image')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                         </div>

                                         <div class="col-md-12">
                                
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