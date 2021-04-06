<!DOCTYPE HTML>
<html class="no-js" lang="de">
<head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta name="description" content="">
       <meta name="keywords" content="">
       <meta name="robots" content="index,follow">

       <meta name="csrf-token" content="{{ csrf_token() }}">

       <title>{{ config('app.name', 'Laravel') }}</title>

       <link href="{{ asset('css/font-awesome.min.css') }} " rel="stylesheet">
       <link href="{{ asset('css/animate.css') }} " rel="stylesheet">
       <link href="{{ asset('css/bootsnav.css') }} " rel="stylesheet">
       <link href="{{ asset('css/bootstrap.css') }} " rel="stylesheet">
       <link href="{{ asset('css/style.css') }} " rel="stylesheet">
       <link rel="stylesheet" href="{{ asset('') }} css/swipebox.css">

       <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
       <x-partials.guest.nav />
        @yield('content')
       <x-partials.guest.footer />

       <script type="text/javascript" src="{{ asset('js/jquery.min.js') }} "></script>
       <script src="{{ asset('js/bootstrap.js') }} "></script>
       <script src="{{ asset('js/bootsnav.js') }}"></script>
       <script src="{{ asset('js/banner.js') }} "></script>
       <script src="{{ asset('js/jquery.swipebox.js') }}"></script>
       <script type="text/javascript">
              $(document).ready(function() {
                     /* Basic Gallery */
                     $('.swipebox').swipebox();

                     /* Video */
                     $('.swipebox-video').swipebox();

                     /* Dynamic Gallery */
                     $('#gallery').click(function(e) {
                            e.preventDefault();
                            $.swipebox([{
                                          href: 'http://swipebox.csag.co/mages/image-1.jpg'
                                          , title: 'My Caption'
                                   }
                                   , {
                                          href: 'http://swipebox.csag.co/images/image-2.jpg'
                                          , title: 'My Second Caption'
                                   }
                            ]);
                     });

              });

       </script>
       <script src="js/script.js"></script>
              <div class="bwt-footer-copyright">
              <div class="container">
                     <div class="row">
                            <div class="col-md-6 copyright">
                                   <div class="left-text">Copyright &copy; ANDUSA Hope 2021. All Rights Reserved</div>
                            </div>
                            <div class="col-md-6">
                                   <div class="right-text">Design &amp; Developed for: <a href="https://www.andusa.org/" target="_blank"><strong>ANDUSA</strong> USA</a></div>
                            </div>
                     </div>
              </div>
       </div>
</footer>

</body>
</html>
