@extends('layouts.guest')
@section('content')
<div id="first-slider">
       <div id="carousel-example-generic" class="carousel slide carousel-fade">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              </ol>
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                     <!-- Item 1 -->
                     <div class="item active slide1">
                            <h2 data-animation="animated bounceInDown"><span>WELCOME TO ANDUSA USA </span></h2>
                            <h3 data-animation="animated bounceInDown">SERVICING NIGERIAN IN DIASPORA COMMUNITY IN THE UNITED STATES</h3>
                            <h4 data-animation="animated bounceInUp"><a href="{{ route('about') }}">WHO WE ARE</a></h4>
                     </div>
                     <!-- Item 2 -->
                     <div class="item slide2">
                            <h2 data-animation="animated bounceInDown"><span>WE CARE</span></h2>
                            <h3 data-animation="animated bounceInDown">COVID-19 INTERVENTION FUND!</h3>
                            <h4 data-animation="animated bounceInUp"><a href="{{ route('contact') }}">DONATE TODAY</a></h4>
                     </div>
                     <!-- Item 3 -->
                     <div class="item slide3">
                            <h2 data-animation="animated bounceInDown"><span>CONNECT WITH OTHER NIGERIANS</span></h2>
                            <h3 data-animation="animated bounceInDown">REGISTER TO BECOME A MEMBER OF ANDUSA USA!</h3>
                            <h4 data-animation="animated bounceInUp"><a href="{{ route('contact') }}">REGISTER HERE</a></h4>
                     </div>
                     <!-- Item 4 -->
                     <div class="item slide4">
                            <h2 data-animation="animated bounceInDown"><span>UPCOMING ANDUSA EVENTS</span></h2>
                            <h3 data-animation="animated bounceInDown">JOIN US FOR OUR NEXT EVENT.</h3>
                            <h4 data-animation="animated bounceInUp"><a href="{{ route('about') }}">FIND OUT MORE</a></h4>
                     </div>
                     <!-- End Item 4 -->
                     <!-- Item 5 -->
                     <div class="item slide4">
                        <h2 data-animation="animated bounceInDown"><span>PARTNER WITH ANDUSA</span></h2>
                        <h3 data-animation="animated bounceInDown">WORK WITH US TO MAKE NIGERIA A BETTER COUNTRY.</h3>
                        <h4 data-animation="animated bounceInUp"><a href="{{ route('contact') }}">LEARN MORE</a></h4>
                 </div>
                 <!-- End Item 5 -->

              </div>
              <!-- End Wrapper for slides-->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                     <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                     <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
              </a>
       </div>
</div>

<section id="about-sec">
       <div class="container">
              <div class="text-center row">
                     <h1>ABOUT ANDUSA USA</h1>
                     <hr>
                     <h5>MISSION</h5>
                     <p>Our mission is to promote the spirit of patriotism, networking and cooperation among Nigerians in the United States, for their individual and collective success, and to mobilize the vast resources of manpower and machinery toward building a greater Nigeria.</p>
                     <h5>ABOUT US</h5>
                     <p>Association of Nigerians in Diaspora Organization Americas was incorporated as a Non-Profit Organization in 2001 and is headquartered in Washington DC.</p>
                     <div class="text-center">
                            <a href="donate.html" class="btn1">donate now</a>
                            <a href="about-us.html" class="btn2">Read More</a>
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

<section id="video-sec">
       <div class="container">
              <div class="text-center row">
                     <h1>How can you help?</h1>
                     <hr>
                     <h5>Give us a brief description of the service that you are promoting.</h5>
                     <div class="text-left">
                            <div class="clearfix col-md-6 top-off">
                             <video width="400" controls>
                                    <source src="images/andusa_video.mp4" type="video/mp4">

                             </video>
                            </div>
                            <div class="clearfix col-md-6 top-off">
                                   <div class="media">
                                          <div class="media-image">
                                                 <img src="images/g1.jpg" class="attachment-full size-full" alt="g1"> </div>
                                          <div class="media-text">
                                                 <h5>BECOME A VOLUNTEER</h5>
                                                 <p>Give us a brief description of the service that you are promoting.</p>
                                          </div>
                                   </div>
                                   <div class="media">
                                          <div class="media-image">
                                                 <img src="images/g2.png" class="attachment-full size-full" alt="g1"> </div>
                                          <div class="media-text">
                                                 <h5>MAKE A GIFT</h5>
                                                 <p>Give us a brief description of the service that you are promoting.</p>
                                          </div>
                                   </div>
                                   <div class="media">
                                          <div class="media-image">
                                                 <img src="images/g1.jpg" class="attachment-full size-full" alt="g1"> </div>
                                          <div class="media-text">
                                                 <h5>GIVE A SCHOLASHIP</h5>
                                                 <p>Give us a brief description of the service that you are promoting.</p>
                                          </div>
                                   </div>
                            </div>
                     </div>
              </div>
       </div>
</section>

<section id="projects-sec">
       <div class="container">
              <div class="text-center row">
                     <h1>OUR PROJECTS</h1>
                     <hr>
                     <h5>ANDUSA ongoing and completed projects.</h5>
                     <div class="text-center">
                            <div class="clearfix col-md-4 top-off">
                                   <div class="grid-image"><img src="images/test1.jpg"></div>
                                   <div class="post-content">
                                          <h3>Charity for Education</h3>
                                          <hr>
                                          <p>Education charities make learning possible for students of all ages, from pre-school to graduate school. They also provide other educational services and opportunities that help make schools more effective and more accessible to students of all backgrounds.</p>
                                          <a href="projects.html" title="">View Project</a>
                                   </div>
                            </div>
                            <div class="clearfix col-md-4 top-off">
                                   <div class="grid-image"><img src="images/test2.jpg"></div>
                                   <div class="post-content">
                                          <h3>Clean Water Initiative</h3>
                                          <hr>
                                          <p>The Clean Water Initiative (CWI) aims to reduce wastage of water, make clean and potable water affordable in areas it is inaccessible, and improve levels of sanitation and hygiene there. Nearly one-third of all countries currently face medium to high levels of water stress.</p>
                                          <a href="projects.html" title="">View Project</a>
                                   </div>
                            </div>
                            <div class="clearfix col-md-4 top-off">
                                   <div class="grid-image"><img src="images/test3.jpg"></div>
                                   <div class="post-content">
                                          <h3>Covid-19 Intervention</h3>
                                          <hr>
                                          <p>The adverse economic effects of COVID-19 are a global phenomenon which in reality is not peculiar to Nigeria. However, the handling of the economy in response to, Nearly one-third of all countries currently face medium to high levels of Covid19 lockdown.</p>
                                          <a href="projects.html" title="">View Project</a>
                                   </div>
                            </div>
                     </div>
              </div>
       </div>
</section>
{{--
<section id="gallery-sec">
       <div class="container">
              <div class="text-center row">
                     <h1>OUR GALLERY</h1>
                     <hr>
                     <h5>On this page, you will also find curated pictures from past ANDUSA events and programs. For the sake of ease, all pictures have been categorized based on Event names and dates. To view an album, simply click on any of the Album images below..</h5>
                     <ul class="clearfix">

                            <li>
                                   <a href="images/gallery1.jpg" class="swipebox" title="My Caption">
                                          <div class="image"><img src="images/gallery1.jpg">
                                                 <div class="overlay"><i class="fa fa-search-plus"></i></div>
                                          </div>
                                   </a>
                            </li>
                            <li>
                                   <a href="images/gallery2.jpg" class="swipebox" title="My Caption">
                                          <div class="image"><img src="images/gallery2.jpg">
                                                 <div class="overlay"><i class="fa fa-search-plus"></i></div>
                                          </div>
                                   </a>
                            </li>

                            <li>
                                   <a href="images/gallery3.jpg" class="swipebox" title="My Caption">
                                          <div class="image"><img src="images/gallery3.jpg">
                                                 <div class="overlay"><i class="fa fa-search-plus"></i></div>
                                          </div>
                                   </a>
                            </li>

                            <li>
                                   <a href="images/gallery4.jpg" class="swipebox" title="My Caption">
                                          <div class="image"><img src="images/gallery4.jpg">
                                                 <div class="overlay"><i class="fa fa-search-plus"></i></div>
                                          </div>
                                   </a>
                            </li>
                            <li>
                                   <a href="images/gallery5.jpg" class="swipebox" title="My Caption">
                                          <div class="image"><img src="images/gallery5.jpg">
                                                 <div class="overlay"><i class="fa fa-search-plus"></i></div>
                                          </div>
                                   </a>
                            </li>
                            <li>
                                   <a href="images/gallery6.jpg" class="swipebox" title="My Caption">
                                          <div class="image"><img src="images/gallery6.jpg">
                                                 <div class="overlay"><i class="fa fa-search-plus"></i></div>
                                          </div>
                                   </a>
                            </li>
                            <li>
                                   <a href="images/gallery7.jpg" class="swipebox" title="My Caption">
                                          <div class="image"><img src="images/gallery7.jpg">
                                                 <div class="overlay"><i class="fa fa-search-plus"></i></div>
                                          </div>
                                   </a>
                            </li>
                            <li>
                                   <a href="images/gallery8.jpg" class="swipebox" title="My Caption">
                                          <div class="image"><img src="images/gallery8.jpg">
                                                 <div class="overlay"><i class="fa fa-search-plus"></i></div>
                                          </div>
                                   </a>
                            </li>
                     </ul>
                     <div class="text-center">
                            <a href="gallery.html" class="btn1">View More</a>
                     </div>
              </div>
       </div>
</section> --}}

<section id="projects-sec">
       <div class="container">
              <div class="text-center row">
                     <h1>Latest Post</h1>
                     <hr>
                     <h5>Get latest trends and update about ANDUSA USA.</h5>
                     <div class="text-center">
                     @foreach(posts() as $post)
                            <div class="clearfix col-md-4 top-off">
                                   <div class="grid-image"><img src="images/test1.jpg"></div>
                                   <div class="post-content">
                                          <h3>{{ $post->title }}</h3>
                                          <hr>
                                          <p class="text-justify">
                                                 @php
                                                     $body =  \Illuminate\Support\Str::limit($post->body,300)
                                                 @endphp
                                                 {!! $body !!}
                                          </p>
                                          <a href="{{ route('blog-post', $post->id) }}" title="">Read More</a>
                                   </div>
                            </div>
                     @endforeach
                     </div>
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
