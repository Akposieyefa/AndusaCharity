<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="csrf-token" content="{{ csrf_token() }}">

       <link rel="shortcut icon" href="{{asset('favicon.jpg')}}">
       <title>{{ config('app.name', 'Laravel') }}</title>
       
       <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
       <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
       <link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
       <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
       <link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}">
       <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
       <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
       <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
       <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}">
       <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini layout-fixed">

       <div class="wrapper">
              <x-partials.app.nav />
               <x-partials.app.side_bar />
              @yield('content')
              <x-partials.app.footer />
       </div>

       <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
       <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
       <script>
              $.widget.bridge('uibutton', $.ui.button)

       </script>
       <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
       <script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
       <script src="{{ asset('assets/plugins/sparklines/sparkline.js') }}"></script>
       <script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
       <script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
       <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
       <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
       <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
       <script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
       <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
       <script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
       <script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
       <script src="{{ asset('assets/dist/js/pages/dashboard.js') }}"></script>
       <script src="{{ asset('assets/dist/js/demo.js') }} "></script>
</body>
</html>

