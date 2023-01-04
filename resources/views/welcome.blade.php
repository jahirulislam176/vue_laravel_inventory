<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

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
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

        
         <!-- Setting Panel -->
  <div class="ms-toggler ms-settings-toggle ms-d-block-lg">
    <i class="flaticon-gear"></i>
  </div>

  <div class="ms-settings-panel ms-d-block-lg">
    <div class="row">
      <div class="col-xl-4 col-md-4 ">
        <h4 class="section-title">Customize</h4>

        <div>
          <label class="ms-switch">
            <input type="checkbox" id="dark-mode">
            <span class="ms-switch-slider round"></span>
          </label>
          <span> Dark Mode </span>
        </div>
      </div>
      <div class="col-xl-4 col-md-4">
        <h4 class="section-title">Keyboard Shortcuts</h4>
        <p class="ms-directions mb-0"><code>Esc</code> Close Quick Bar</p>
        <p class="ms-directions mb-0"><code>Alt + (1 -> 6)</code> Open Quick Bar Tab</p>
        <p class="ms-directions mb-0"><code>Alt + Q</code> Enable Quick Bar Configure Mode</p>
      </div>
    </div>
  </div>
  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-bs-target="#ms-side-nav" data-bs-toggle="slideLeft"></div>

  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-bs-target="#ms-recent-activity" data-bs-toggle="slideRight"></div>


  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">

<a class="ps-0 ms-0" href="index.php"> <img src="../assets/img/logo/logo2.png" alt="logo" width="80px"> 
  <span class="h4 text-white"><strong>INVEN</strong><b>TORY</b></span>
</a>
      <a href="#" class="text-center ms-logo-img-link"> <img src="assets/img/dashboard/doctor-3.jpg" alt="logo"></a>
      <h5 class="text-center text-white mt-2">jahid</h5>
      <h6 class="text-center text-white mb-3">Employee</h6>
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <!-- /Dashboard -->

       {{-- <li class="menu-item">
        <a href="">
          <span><i class="fas fa-warehouse"></i>WareHouse</span>
        </a>
      </li>  --}}

      <li class="menu-item">
        <router-link :to="{ name:'login'}">
          <span><i class="fas fa-warehouse"></i>WareHouse</span>
        </router-link>
      </li>

    <li class="menu-item">
        <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#staff" aria-expanded="false" aria-controls="doctor">
          <span><i class="fas fa-users"></i>Staff</span>
        </a>
        <ul id="staff" class="collapse" aria-labelledby="doctor" data-bs-parent="#side-nav-accordion">
          <li> <a href="">Add Staff</a></li>
          <li> <a href="">All Staff</a></li>
        </ul>
      </li>

         <li class="menu-item">
        <a href="supplier.php">
          <span><i class="fas fa-parachute-box"></i>Supplier</span>
        </a>
      </li> 

     
      <!-- /Notice -->
    </ul>

  </aside>




  <!-- Sidebar Right -->
  <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">
    <div class="ms-aside-header">
      <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
        <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active" role="tab" data-bs-toggle="tab">Activity Log</a></li>
        <li role="presentation" class="fs-12"><a href="#recentPosts" aria-controls="recentPosts" role="tab" data-bs-toggle="tab"> Settings </a></li>
        <li><button type="button" class="close ms-toggler text-center" data-bs-target="#ms-recent-activity" data-bs-toggle="slideRight"><span aria-hidden="true">&times;</span></button></li>
      </ul>
    </div>
    <div class="ms-aside-body">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active fade show" id="activityLog">
          <ul class="ms-activity-log">
            <li>
              <div class="ms-btn-icon btn-pill icon btn-light">
                <i class="flaticon-gear"></i>
              </div>
              <h6>Update 1.0.0 Pushed</h6>
              <span> <i class="material-icons">event</i>1 January, 2022</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-success">
                <i class="flaticon-tick-inside-circle"></i>
              </div>
              <h6>Profile Updated</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-warning">
                <i class="flaticon-alert-1"></i>
              </div>
              <h6>Your payment is due</h6>
              <span> <i class="material-icons">event</i>1 January, 2022</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-danger">
                <i class="flaticon-alert"></i>
              </div>
              <h6>Database Error</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-info">
                <i class="flaticon-information"></i>
              </div>
              <h6>Checkout what's Trending</h6>
              <span> <i class="material-icons">event</i>1 January, 2022</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-secondary">
                <i class="flaticon-diamond"></i>
              </div>
              <h6>Your Dashboard is ready</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
          </ul>
          <a href="#" class="btn btn-primary d-block"> View All </a>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="recentPosts">
          <h6>General Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Location Tracking</span>
            <label class="ms-switch float-end">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Allow Notifications</span>
            <label class="ms-switch float-end">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Allow Popups</span>
            <label class="ms-switch float-end">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <h6>Log Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Enable Logging</span>
            <label class="ms-switch float-end">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Audit Logs</span>
            <label class="ms-switch float-end">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>

          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Error Logs</span>
            <label class="ms-switch float-end">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>

          <h6>Advanced Settings</h6>

          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Enable Logging</span>
            <label class="ms-switch float-end">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Audit Logs</span>
            <label class="ms-switch float-end">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Error Logs</span>
            <label class="ms-switch float-end">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
        </div>
      </div>
    </div>
  </aside>



<nav class="navbar ms-navbar">
    <div class="ms-aside-toggler ms-toggler ps-0" data-bs-target="#ms-side-nav" data-bs-toggle="slideLeft">
      <span class="ms-toggler-bar bg-white"></span>
      <span class="ms-toggler-bar bg-white"></span>
      <span class="ms-toggler-bar bg-white"></span>
    </div>
    <div class="docfind-logo d-none d-xl-block">
     <!--  <a class="sigma_logo" href="../index-2.html">
        <img src="" alt="logo">
      </a> -->
    </div>
    <div class="logo-sn logo-sm ms-d-block-sm">
      
      <a class="ps-0 ms-0 text-center navbar-brand me-0" href="index.html"><img src="assets/img/medboard-logo-84x41.png" alt="logo"> </a>
    </div>
    <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">

      <li class="ms-nav-item  ms-d-none">
        <a href="#mymodal" class="text-white" data-bs-toggle="modal"><i class="flaticon-spreadsheet me-2"></i> Inventory</a>
      </li>

      <li class="ms-nav-item ms-d-none">
        <a href="#prescription" class="text-white" data-bs-toggle="modal"><i class="flaticon-pencil me-2"></i>Inventory</a>
      </li>

      <li class="ms-nav-item ms-d-none">
        <a href="#report1" class="text-white" data-bs-toggle="modal"><i class="flaticon-list me-2"></i>Inventory</a>
      </li>

      <li class="ms-nav-item dropdown">
        <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-bell"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown">
          <li class="dropdown-menu-header">
            <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notifications</span></h6>
            <span class="badge rounded-pill badge-info">4 New</span>
          </li>
          <li class="dropdown-divider"></li>
          <li class="ms-scrollable ms-dropdown-list">
            <a class="media p-2" href="#">
              <div class="media-body">
                <span>12 ways to improve your crypto dashboard</span>
                <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
              </div>
            </a>
            <a class="media p-2" href="#">
              <div class="media-body">
                <span>You have newly registered users</span>
                <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 45 minutes ago</p>
              </div>
            </a>
            <a class="media p-2" href="#">
              <div class="media-body">
                <span>Your account was logged in from an unauthorized IP</span>
                <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 2 hours ago</p>
              </div>
            </a>
            <a class="media p-2" href="#">
              <div class="media-body">
                <span>An application form has been submitted</span>
                <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 1 day ago</p>
              </div>
            </a>
          </li>
          <li class="dropdown-divider"></li>
          <li class="dropdown-menu-footer text-center">
            <a href="#">View all Notifications</a>
          </li>
        </ul>
      </li>
      <li class="ms-nav-item ms-nav-user dropdown">
        <a href="#" id="userDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-end" src="assets/img/dashboard/doctor-3.jpg" alt="people"> </a>
        <ul class="dropdown-menu dropdown-menu-end user-dropdown" aria-labelledby="userDropdown">
          <li class="dropdown-menu-header">
            <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, Dr Samuel Deo</span></h6>
          </li>
          <li class="dropdown-divider"></li>
          <li class="ms-dropdown-list">
            <a class="media fs-14 p-2" href="pages/prebuilt-pages/user-profile.html"> <span><i class="flaticon-user me-2"></i> Profile</span> </a>
            <a class="media fs-14 p-2" href="pages/apps/email.html"> <span><i class="flaticon-mail me-2"></i> Inbox</span> <span class="badge rounded-pill badge-info">3</span> </a>
            <a class="media fs-14 p-2" href="pages/prebuilt-pages/user-profile.html"> <span><i class="flaticon-gear me-2"></i> Account Settings</span> </a>
          </li>
          <li class="dropdown-divider"></li>
          <li class="dropdown-menu-footer">
            <a class="media fs-14 p-2" href="pages/prebuilt-pages/lock-screen.html"> <span><i class="flaticon-security me-2"></i> Lock</span> </a>
          </li>
          <li class="dropdown-menu-footer">
            <a class="media fs-14 p-2" href="logout.php"> <span><i class="flaticon-shut-down me-2"></i> Logout</span> </a>
          </li>
        </ul>
      </li>
    </ul>
    <div class="ms-toggler ms-d-block-sm pe-0 ms-nav-toggler" data-bs-toggle="slideDown" data-bs-target="#ms-nav-options">
      <span class="ms-toggler-bar bg-white"></span>
      <span class="ms-toggler-bar bg-white"></span>
      <span class="ms-toggler-bar bg-white"></span>
    </div>
  </nav>

  <div id="app"></div>

  @vite('resources/js/app.js')

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
