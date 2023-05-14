<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Dashboard - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="{{asset('dist/css/tabler.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/tabler-flags.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/tabler-payments.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/tabler-vendors.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/demo.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/tab.css')}}" rel="stylesheet">

    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
    </style>
  </head>
  <body >
    <script src="{{asset('dist/js/demo-theme.min.js')}}"></script>

    @include('AdminPanel.header')

    @yield('content')

    @include('AdminPanel.footer')

    <script src="{{asset('dist/js/tab.js')}}" ></script>
    <script src="{{asset('dist/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{asset('dist/libs/jsvectormap/dist/js/jsvectormap.min.js')}}" ></script>
    <script src="{{asset('dist/libs/jsvectormap/dist/maps/world.js')}}" ></script>
    <script src="{{asset('dist/libs/jsvectormap/dist/maps/world-merc.js')}}"></script>
    <!-- Tabler Core -->
    <script src="{{asset('dist/js/tabler.min.js')}}" ></script>
    <script src="{{asset('dist/js/demo.min.js')}}"></script>
    
  </body>
</html> 