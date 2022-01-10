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
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                                Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at 
                                                Hampden-Sydney College in Virginia.</p>
                                        </div>
                                        <div class="address-info">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img src="assets/img/icon/agenda.png" class="img-responsive" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="addon-title">Address</h4>
                                                    <div class="addon-text"> 1355 Market Street, Suite 900<br>
                                                        San Francisco, CA 94103</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="address-info">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img src="assets/img/icon/email.png" class="img-responsive" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="addon-title">Email Address</h4>
                                                    <div class="addon-text">support@osrunews.com<br>
                                                        Info@osrunews.com</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="address-info">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img src="assets/img/icon/phone.png" class="img-responsive" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="addon-title">Phone Number</h4>
                                                    <div class="addon-text">Support: +123 456 789<br>
                                                        Sales: +098 765 4321</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-form">
                                    <h3>Feedback</h3>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                        Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at 
                                        Hampden-Sydney College in Virginia.</p>
                                    <div class="form-group">
                                        <textarea class="form-control" id="textarea" rows="5"></textarea>
                                    </div>
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
                                    <a href="#" class="btn link-btn">Submit ⇾</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="height_30"></div>
                </div>


@endsection