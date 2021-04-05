@extends('layouts.guest')
@section('content')<section id="inner-banner">
       <div class="overlay">
              <div class="container">
                     <div class="row">
                            <div class="col-sm-6">
                                   <h1>CONTACT US</h1>
                            </div>
                            <div class="col-sm-6">
                                   <h6 class="breadcrumb"><a href="{{ route('index') }}">Home</a> / Contact us</h6>
                            </div>
                     </div>
              </div>
       </div>
</section>

<div class="google-maps">
       <iframe src="https://maps.google.com/maps?q=1000 Duluth, Hwy lawrenceville%20of%20san%20Geogia&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<section id="about-sec">
       <div class="container">
              <div class="text-center row" style=" margin-top:-20px;">
                     <div class="col-md-4" style=" margin-top:20px;">
                            <div class="con-box">
                                   <div class="fancy-box-icon">
                                          <i class="fa fa-mobile-phone"></i>
                                   </div>
                                   <h3>PHONE</h3>
                                   <div class="fancy-box-content">
                                          <p>Phone 01: +1-310-341-3870<br>
                                                 Phone 02: +1-310-341-387</p>
                                   </div>
                            </div>
                     </div>
                     <div class="col-md-4" style=" margin-top:20px;">
                            <div class="con-box" style="background:#2f3191;">
                                   <div class="fancy-box-icon">
                                          <i class="fa fa-map-marker"></i>
                                   </div>
                                   <h3>ADDRESS</h3>
                                   <div class="fancy-box-content">
                                          <p>1000 Duluth, Hwy lawrenceville<br>
                                                 Geogia </p>
                                   </div>
                            </div>
                     </div>
                     <div class="col-md-4" style=" margin-top:20px;">
                            <div class="con-box">
                                   <div class="fancy-box-icon">
                                          <i class="fa fa-envelope-o"></i>
                                   </div>
                                   <h3>EMAIL</h3>
                                   <div class="fancy-box-content">
                                          <p>contact@andusa.com<br>
                                          contact@andusa.com</p>
                                   </div>
                            </div>
                     </div>
                     <div class="clearfix"></div>
                     <h2>IF YOU GOT ANY QUESTIONS<br>
                            PLEASE DO NOT HESITATE TO SEND US A MESSAGE.</h2>
                     <x-alerts.success />
                     <form class="clearfix con-form" method="post" action="{{ route('create-contact') }}">
                            @csrf
                            <div class="col-md-4">
                                   <input type="text" name="name" size="40" class="@error('name') is-invalid @enderror" id="name" aria-required="true" aria-invalid="false" placeholder="Your Name*">
                                   @error('name')
                                   <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                   </span>
                                   @enderror
                            </div>
                            <div class="col-md-4">
                                   <input type="email" name="email" size="40" class="@error('email') is-invalid @enderror" aria-required="true" aria-invalid="false" placeholder="Your Email*">
                                   @error('email')
                                   <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                   </span>
                                   @enderror
                            </div>
                            <div class="col-md-4">
                                   <input type="text" name="subject" size="40" class="@error('subject') is-invalid @enderror" id="subject" aria-invalid="false" placeholder="Subject">
                                   @error('subject')
                                   <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                   </span>
                                   @enderror
                            </div>
                            <div class="col-md-12">
                                   <textarea name="message" cols="40" rows="5" class="@error('message') is-invalid @enderror" id="message" aria-invalid="false" placeholder="Message"></textarea>
                                   @error('message')
                                   <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                   </span>
                                   @enderror
                            </div>
                            <div class="col-xs-12 submit-button">
                                   <input type="submit" value="send message" class="btn2" id="sub" style="border:none; margin: 20px 0 0 0">
                            </div>
                     </form>
              </div>
       </div>
</section>

<div class="callout">
       <div class="container">
              <div class="row">
                     <div class="col-md-6">
                            <h2>Change Their World. Change Yours. This changes everything.</h2><!-- /.callout-title -->
                     </div><!-- /.columns large-6 -->

                     <div class="col-md-6">
                            <div class="callout-actions">
                                   <a href="{{ route('contact') }}" class="button">Become Volunteer</a>

                                   <span class="callout-separator">
                                          <span>Or</span>
                                   </span>

                                   <a href="#" class="button">Donate For Cause</a>
                            </div><!-- /.callout-actions -->
                     </div><!-- /.columns large-6 -->
              </div><!-- /.row -->
       </div>
</div>
@endsection

