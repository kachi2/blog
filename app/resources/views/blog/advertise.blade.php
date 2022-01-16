@extends('layouts.app')

@section('content')
<div class="clearfix"></div>
<div class="parallax page_header"  data-parallax-bg-image="{{asset('assets/img/370x300-1.jpg')}}" data-parallax-direction="left">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Advertise with Us</h3>
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
                                            <p>Over the years, CryptoNews has established itself as a leading news resource in the cryptocurrency industry with a global reach. The platform boasts of captive readership from various sections of the industry and also a huge interest in advertising options among the cryptocurrency businesses. In addition to regular crypto-businesses and projects, the publication has also run campaigns to play a pivotal role in many successful ICOs and crowdsales.
                                                To give a conservative glimpse of the publication’s readership, CryptoNews attracts over 1.5 million visitors monthly and 3 million sessions.</div>
                                       
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-form">
                                    <p>Interested in advertising on CryptoNews? Just drop an email to advertise@CrytoNews.blog for more information and any additional clarification if required.
                                    PLEASE BE AWARE THAT SCAMMERS ARE ACTIVE IN THIS SPACE. ALWAYS CONFIRM USING AN OFFICIAL COMPANY EMAIL ADDRESS (@cryptonews.blog ONLY) BEFORE SENDING PAYMENT
                                    </p>
                                   <form action="{{route('advertiseMail')}}" metho="post">
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
                                        <label for="website" class="col-sm-3 col-md-2 col-form-label">Advertise Size</label>
                                        <div class="col-sm-6 col-md-5">
                                            <select name="size" class="form-control"> 
                                            <option> 120 X 600 </option>
                                             <option> 300 X 250</option>
                                              <option> 728 X 90 (Top) </option>
                                               <option> 728 X 90(bottom) </option>
                                            
                                            </select>
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
                    <div class="height_30"></div>
                </div>


@endsection