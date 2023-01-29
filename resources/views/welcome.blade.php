<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

          <!-- CSRF Token -->
          <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- @vite(['resources/css/app.css'])  --}}

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="{{ asset('vendors/iconic-fonts/font-awesome/css/all.min.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('vendors/iconic-fonts/flat-icons/flaticon.css') }}">

  <link rel="stylesheet" href="{{ asset('vendors/iconic-fonts/cryptocoins/cryptocoins.css') }}">

  <link rel="stylesheet" href="{{ asset('vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css') }}">

  <!-- Bootstrap core CSS -->

  <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- jQuery UI -->

  <link href="{{ asset('assets/css/jquery-ui.min.css') }}" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->

  <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
  <!-- medboard styles -->

  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

  <!-- Page Specific CSS (Morris Charts.css) -->

  <link href="{{ asset('assets/css/morris.css') }}" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">


  <!-- select2 css cdn -->

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <!-- Fonts -->
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>




    
    <body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">

        
         <div id="app"> 

          <router-view></router-view>

         </div>
        <!-- Sidebar Navigation Left -->
        
        <!-- Sidebar Right -->
       
        <!-- Main Content -->
     
        

{{-- @vite('resources/js/app.js') --}}



  

  <script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('assets/js/popper.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/js/perfect-scrollbar.js')}}"> </script>
  <script src="{{ asset('assets/js/jquery-ui.min.js')}}"> </script>
  <!-- Global Required Scripts End -->
  <script src="{{ asset('assets/js/d3.v3.min.js')}}"> </script>
  <script src="{{ asset('assets/js/topojson.v1.min.js')}}"> </script>
  <script src="{{ asset('assets/js/datamaps.all.min.js')}}"> </script>
  <!-- Page Specific Scripts Start -->
  <script src="{{ asset('assets/js/slick.min.js')}}"> </script>

  <script src="{{ asset('assets/js/moment.js')}}"> </script>

  <script src="{{ asset('assets/js/jquery.webticker.min.js')}}"> </script>

  <script src="{{ asset('assets/js/Chart.bundle.min.js')}}"> </script>

  <script src="{{ asset('assets/js/index-chart.js')}}"> </script>

  <!-- Page Specific Scripts Finish -->
  <script src="{{ asset('assets/js/calendar.js')}}"></script>
  <!-- medboard core JavaScript -->
  <script src="{{ asset('assets/js/framework.js')}}"></script>
  <!-- Settings -->
  <script src="{{ asset('assets/js/settings.js') }}"></script>

  <!-- select2 js cdn -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

 </body>
</html>
