@extends('layouts.app')

@section('content')
<div class="clearfix"></div>
<div class="parallax page_header"  data-parallax-bg-image="{{asset('assets/img/ex.jpg')}}" data-parallax-direction="left">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Contact Us</h3>
            </div>
        </div>
    </div>
</div>



 <div class="page-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="contact-info">
                                    <div class="contact-address">
                                        <div class="contact-text">
                                            <h3>Contact Info</h3>
                                            <p>Have feedback? Questions? Cool information? Get in touch with CryptoNews.

                                            We are happy to read about your projects, so don’t be shy about sending them along..</p>
                                        </div>
                                        <div class="address-info">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img src="assets/img/icon/email.png" class="img-responsive" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="addon-title">Email Address</h4>
                                                    <div class="addon-text">support@CryptonewsUpdate24.com<br>
                                                      </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-form">
                                    <h3>Feedback</h3>
                                   <form action="{{route('contactUs')}}" metho="post">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 col-md-2 col-form-label">Name *</label>
                                        <div class="col-sm-6 col-md-5">
                                            <input class="form-control"  name="name" id="name2" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 col-md-2 col-form-label">Email*</label>
                                        <div class="col-sm-6 col-md-5">
                                            <input class="form-control" name="email" id="email2" type="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="website" class="col-sm-3 col-md-2 col-form-label">Website</label>
                                        <div class="col-sm-6 col-md-5">
                                            <input class="form-control" name="website" id="website" type="text"  required>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                      <label for="website" class="">Additional Notes</label>
                                        <textarea class="form-control" name="note" id="textarea" rows="5"  required></textarea>
                                    </div>
                                    <button  class="btn link-btn">Submit ⇾</button>
                                    @if(Session::has('message'))
                                        <span class="alert alert-success" role='alert'> {{Session::get('message')}}
                                    @endif
                                </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="height_30"></div>
                </div>


@endsection