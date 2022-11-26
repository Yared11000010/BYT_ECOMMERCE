<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Dashboard - Admin Bootstrap Template</title>
      <meta name="robots" content="noindex, nofollow">
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">  

      <link href="{{asset('backend/img/favicon.png')}}" rel="icon">
      <link href="{{asset('backend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('backend/css/bootstrap-icons.css')}}" rel="stylesheet">
      <link href="{{asset('backend/css/boxicons.min.css')}}" rel="stylesheet">
      <link href="{{asset('backend/css/quill.snow.css')}}" rel="stylesheet">
      <link href="{{asset('backend/css/quill.bubble.css')}}" rel="stylesheet">
      <link href="{{asset('backend/css/remixicon.css')}}" rel="stylesheet">
      <link href="{{asset('backend/css/simple-datatables.css')}}" rel="stylesheet">
      <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
      @notifyCss

   </head>
   <body>
    
    @include('admindashboard.header')
    @include('admindashboard.leftsidebar')
    <main id="main" class="main" style="background-color:rgb(225, 226, 227)">
    @yield('dashboard')
    </main>
    @include('admindashboard.footer')
         <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>  
            <script src="{{asset('backend/js/apexcharts.min.js')}}"></script>
            <script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('backend/js/chart.min.js')}}"></script>
            <script src="{{asset('backend/js/echarts.min.js')}}"></script>
            <script src="{{asset('backend/js/quill.min.js')}}"></script>
            <script src="{{asset('backend/js/simple-datatables.js')}}"></script>
            <script src="{{asset('backend/js/tinymce.min.js')}}"></script>
            <script src="{{asset('backend/js/validate.js')}}"></script>
            <script src="{{asset('backend/js/main.js')}}"></script> 
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            @yield('jquery')
            @notifyJs
            //add this into main layouts
           @yield('script')
          
   </body>
</html>