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
                     <h5>MISSION</h5>
                     <p>Our mission is to promote the spirit of patriotism, networking and cooperation among Nigerians in the United States, for their individual and collective success, and to mobilize the vast resources of manpower and machinery toward building a greater Nigeria.</p>
                     <h5>VISION.</h5>
                     <p>The core vision of ANDUSA Americas, USA is deeply rooted in the organization's firm belief that Diaspora Nigerians can positively dominate their immediate environment while making significant contributions to accelerate Nigeria’s development. ANDUSA Americas USA, seeks to develop effective modes - through programs, policies, and advocacy for members to access opportunities for harnessing their talents, expertise, and resources for personal development and nation building.
                     <h5>OUR HISTORY</h5>
                     <p>In the late 1990s, there was a vibrant debate on the phenomenon of Brain-drain, the migration of skilled human resources for trade, education and greater opportunity mostly from developing countries to the West. This was the foreshadow of a series of deliberations between former Nigerian President, H.E. Olusegun Obasanjo, GCFR and Nigerian professionals in the United States, in Atlanta, Georgia. These discussions focused on how to harness the talent and resources of Nigerians in Diaspora toward the economic and social development of Nigeria. Hence, the birth of the Nigerian in Diaspora Organization Americas, ANDUSA. Assocition of Nigerians in Diaspora Organization Americas was incorporated as a non-profit organization. ANDUSA is the single representative body recognized by the Federal Government of Nigeria as the umbrella organization for Nigerians in the Diaspora. The Federal policy of Nigeria mandates all foreign missions overseas to support the development of the organization. ANDUSA provides a unique platform for intellectuals, technocrats, policy makers, workers and all Nigerians in Diaspora to present development propositions to the Government at all levels</p>
                     <h5>GENERAL PROVISIONS</h5>
                     <p>The National Boards of Directors shall be the highest governing body of the Organization at each country level. It shall be ultimately responsible for the administration of the Organization in the nation where the ANDUSA Organization is located.</p>
                     <div class="text-center">
                     </div>
              </div>
       </div>
</section>

<section id="activities-sec">
    <div class="container">
           <div class="text-center row">
                  <h1>WHAT WE DO?</h1>
                  <hr>
                  <h5>The core vision of ANDUSA Americas.</h5>
                  <div class="text-left">
                         <div class="clearfix col-md-4 top-off">
                                <div class="grid-content-left"><i class="fa fa-heart"></i></div>
                                <div class="grid-content-wrapper">
                                       <h4>Charity for Education</h4>
                                       <p>Harness the talent and resources of Nigerians in Diaspora.</p>
                                       <a href="activities.html" title="">Read More</a>
                                </div>
                         </div>
                         <div class="clearfix col-md-4 top-off">
                                <div class="grid-content-left"><i class="fa fa-cutlery"></i></div>
                                <div class="grid-content-wrapper">
                                       <h4>Feed for Hungry Child</h4>
                                       <p>Feed the less previlege and giving hopes.</p>
                                       <a href="activities.html" title="">Read More</a>
                                </div>
                         </div>
                         <div class="clearfix col-md-4 top-off">
                                <div class="grid-content-left"><i class="fa fa-home"></i></div>
                                <div class="grid-content-wrapper">
                                       <h4>Home for Homeless</h4>
                                       <p>Our goal is to alleviate poverty and bring structures that works for the needy and promote through donations.</p>
                                       <a href="activities.html" title="">Read More</a>
                                </div>
                         </div>
                         <div class="clearfix col-md-4 top-off">
                                <div class="grid-content-left"><i class="fa fa-tint"></i></div>
                                <div class="grid-content-wrapper">
                                       <h4>Bringing Clean Water</h4>
                                       <p>Our goal is to alleviate poverty and bring structures that works for the needy and promote through donations.</p>
                                       <a href="activities.html" title="">Read More</a>
                                </div>
                         </div>
                         <div class="clearfix col-md-4 top-off">
                                <div class="grid-content-left"><i class="fa fa-thumbs-up"></i></div>
                                <div class="grid-content-wrapper">
                                       <h4>Help Little Hands</h4>
                                       <p>Our goal is to alleviate poverty and bring structures that works for the needy.</p>
                                       <a href="activities.html" title="">Read More</a>
                                </div>
                         </div>
                         <div class="clearfix col-md-4 top-off">
                                <div class="grid-content-left"><i class="fa fa-money"></i></div>
                                <div class="grid-content-wrapper">
                                       <h4>Donate for Children</h4>
                                       <p>Our goal is to alleviate poverty and bring structures that works for the needy and promote through donations.</p>
                                       <a href="activities.html" title="">Read More</a>
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
                     <h5>We would like to introduce you to our Leadership team of Association of Nigerians in Diaspora Organization, USA. Our Leadership team is passionate about the collective progress of Nigerians in Diaspora and working together to build a greater Nigeria.</h5>
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

