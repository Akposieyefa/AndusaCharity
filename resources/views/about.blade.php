@extends('layouts.guest')
@section('content')
<section id="inner-banner">
       <div class="overlay">
              <div class="container">
                     <div class="row">
                            <div class="col-sm-6">
                                   <h1>ABOUT US</h1>
                            </div>
                            <div class="col-sm-6">
                                   <h6 class="breadcrumb"><a href="{{ route('index') }}">Home</a> / About us</h6>
                            </div>
                     </div>
              </div>
       </div>
</section>

<section id="about-sec">
       <div class="container">
              <div class="text-center row">
                     <h1>ABOUT ANDUSA</h1>
                     <hr>
                     <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                     <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
                     <div class="text-center">
                     </div>
              </div>
       </div>
</section>

<section id="help">
       <div class="container">
              <div class="text-center row">
                     <h1>WAYS TO HELP</h1>
                     <hr>
                     <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
                     <div class="text-left">
                            <div class="clearfix col-md-6 top-off">
                                   <div class="icon_circle"><i class="fa fa-heartbeat">&nbsp;</i></div>
                                   <div class="help-text">
                                          <h4>Donate</h4>
                                          <div class="line line-50"></div>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                   </div>
                            </div>
                            <div class="clearfix col-md-6 top-off">
                                   <div class="icon_circle"><i class="fa fa-user-plus">&nbsp;</i></div>
                                   <div class="help-text">
                                          <h4>Participate</h4>
                                          <div class="line line-50"></div>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                   </div>
                            </div>
                            <div class="clearfix col-md-6 top-off">
                                   <div class="icon_circle"><i class="fa fa-usd">&nbsp;</i></div>
                                   <div class="help-text">
                                          <h4>Fundraise</h4>
                                          <div class="line line-50"></div>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                   </div>
                            </div>
                            <div class="clearfix col-md-6 top-off">
                                   <div class="icon_circle"><i class="fa fa-credit-card">&nbsp;</i></div>
                                   <div class="help-text">
                                          <h4>Contribute</h4>
                                          <div class="line line-50"></div>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                   </div>
                            </div>
                     </div>
              </div>
       </div>
</section>

<section id="team">
       <div class="container">
              <div class="text-center row">
                     <h1>MEET OUR TEAM</h1>
                     <hr>
                     <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
                     @foreach(trustees() as $trustee)
                            <div class="member col-xs-6 col-md-3">
                                   <div class="inner">
                                          <div class="avatar-inner"><img src="{{asset('storage/uploads/'.$trustee->passport) }}"></div>
                                          <div class="info">
                                                 <div class="name"><a href="{{ route('biography',$trustee->id) }}"> {{ $trustee->name }} </a></div>
                                                 <div class="regency">Volunteer</div>
                                          </div>
                                   </div>
                            </div>
                     @endforeach
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

