@extends('layouts.app')

@section('content')
<div class="clearfix"></div>
<div class="parallax page_header"  data-parallax-bg-image="{{asset('assets/img/370x300-1.jpg')}}" data-parallax-direction="left">
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
                                                    <div class="addon-text">support@CryptoNews.com<br>
                                                        Info@CryptoNews.com</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-form">
                                    <h3>Feedback</h3>
                                    
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 col-md-2 col-form-label">Name *</label>
                                        <div class="col-sm-6 col-md-5">
                                            <input class="form-control" id="name2" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 col-md-2 col-form-label">Email *</label>
                                        <div class="col-sm-6 col-md-5">
                                            <input class="form-control" id="email2" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="website" class="col-sm-3 col-md-2 col-form-label">Website</label>
                                        <div class="col-sm-6 col-md-5">
                                            <input class="form-control" id="website" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                     <label for="website" class="col-form-label">Notes</label>
                                        <textarea class="form-control" id="textarea" rows="5"></textarea>
                                    </div>
                                    <a href="#" class="btn link-btn">Submit ⇾</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="height_30"></div>
                </div>


@endsection