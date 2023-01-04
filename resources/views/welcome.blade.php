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
        
    </head>
    <body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">

        
         <!-- Setting Panel -->
         <div class="ms-toggler ms-settings-toggle ms-d-block-lg">
          <i class="flaticon-gear"></i>
        </div>
        <div class="ms-settings-panel ms-d-block-lg">
          <div class="row">
            <div class="col-xl-4 col-md-4">
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
        <!-- Preloader -->
        <div id="preloader-wrap">
          <div class="spinner spinner-8">
            <div class="ms-circle1 ms-child"></div>
            <div class="ms-circle2 ms-child"></div>
            <div class="ms-circle3 ms-child"></div>
            <div class="ms-circle4 ms-child"></div>
            <div class="ms-circle5 ms-child"></div>
            <div class="ms-circle6 ms-child"></div>
            <div class="ms-circle7 ms-child"></div>
            <div class="ms-circle8 ms-child"></div>
            <div class="ms-circle9 ms-child"></div>
            <div class="ms-circle10 ms-child"></div>
            <div class="ms-circle11 ms-child"></div>
            <div class="ms-circle12 ms-child"></div>
          </div>
        </div>
        <!-- Overlays -->
        <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-bs-target="#ms-side-nav" data-bs-toggle="slideLeft"></div>
        <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-bs-target="#ms-recent-activity" data-bs-toggle="slideRight"></div>
        <!-- Sidebar Navigation Left -->
        <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
          <!-- Logo -->
          <div class="logo-sn ms-d-block-lg">
            <a class="ps-0 ms-0 text-center" href="index.html"> <img src="assets/img/medboard-logo-216x62.png" alt="logo"> </a>
            <a href="#" class="text-center ms-logo-img-link"> <img src="assets/img/dashboard/doctor-3.jpg" alt="logo"></a>
            <h5 class="text-center text-white mt-2">Dr.Samuel</h5>
            <h6 class="text-center text-white mb-3">Admin</h6>
          </div>
          <!-- Navigation -->
          <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
              </a>
              <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-bs-parent="#side-nav-accordion">
                <li> <a href="index.html">Docfindboard</a> </li>
              </ul>
            </li>
            <!-- /Dashboard -->
            <!-- Doctor -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#doctor" aria-expanded="false" aria-controls="doctor">
                <span><i class="fas fa-stethoscope"></i>Doctor</span>
              </a>
              <ul id="doctor" class="collapse" aria-labelledby="doctor" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/doctor/add-doctor.html">Add Doctor</a> </li>
                <li> <a href="pages/doctor/doctor-list.html">Doctor List</a> </li>
              </ul>
            </li>
            <!-- Doctor -->
            <!-- Patient -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#patient" aria-expanded="false" aria-controls="patient">
                <span><i class="fas fa-user"></i>Patient</span>
              </a>
              <ul id="patient" class="collapse" aria-labelledby="patient" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/patient/add-patient.html">Add Patient</a> </li>
                <li> <a href="pages/patient/patient-list.html">Patient List</a> </li>
              </ul>
            </li>
            <!-- /Patient -->
            <!-- Department -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#department" aria-expanded="false" aria-controls="department">
                <span><i class="fas fa-sitemap"></i>Department</span>
              </a>
              <ul id="department" class="collapse" aria-labelledby="department" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/department/add-department.html">Add Department</a> </li>
                <li> <a href="pages/department/department-list.html">Department List</a> </li>
              </ul>
            </li>
            <!-- /Department -->
            <!-- Schedule -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#schedule" aria-expanded="false" aria-controls="schedule">
                <span><i class="fas fa-list-alt"></i>Doctor Schedule</span>
              </a>
              <ul id="schedule" class="collapse" aria-labelledby="schedule" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/doctor-schedule/add-schedule.html">Add Schedule</a> </li>
                <li> <a href="pages/doctor-schedule/schedule-list.html">Schedule List</a> </li>
              </ul>
            </li>
            <!-- /Schedule -->
            <!-- Appointment -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#appointment" aria-expanded="false" aria-controls="appointment">
                <span><i class="far fa-check-square"></i>Appointment</span>
              </a>
              <ul id="appointment" class="collapse" aria-labelledby="appointment" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/appointment/add-appointment.html">Add Appointment</a> </li>
                <li> <a href="pages/appointment/appointment-list.html">Appointment List</a> </li>
              </ul>
            </li>
            <!-- /Appointment -->
            <!-- Payment -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#payment" aria-expanded="false" aria-controls="payment">
                <span><i class="fas fa-credit-card"></i>Payment</span>
              </a>
              <ul id="payment" class="collapse" aria-labelledby="payment" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/payment/add-payment.html">Add Payment</a> </li>
                <li> <a href="pages/payment/payment-list.html">Payment List</a> </li>
                <li> <a href="pages/payment/payment-invoice.html">Payment Invoice</a> </li>
              </ul>
            </li>
            <!-- /Payment -->
            <!-- Report -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#report" aria-expanded="false" aria-controls="report">
                <span><i class="fas fa-file-alt"></i>Report</span>
              </a>
              <ul id="report" class="collapse" aria-labelledby="report" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/report/patient-report.html">Patient Wise Report</a> </li>
                <li> <a href="pages/report/doctor-report.html">Doctor Wise Report</a> </li>
                <li> <a href="pages/report/total-report.html">Total Report</a> </li>
              </ul>
            </li>
            <!-- /Report -->
            <!-- Human Resource -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#human-resource" aria-expanded="false" aria-controls="human-resource">
                <span><i class="far fa-user-circle"></i>Human Resource</span>
              </a>
              <ul id="human-resource" class="collapse" aria-labelledby="human-resource" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/human-resource/add-employee.html">Add Employee</a> </li>
                <li> <a href="pages/human-resource/employee-list.html">Employee List</a> </li>
                <li> <a href="pages/human-resource/add-nurse.html">Add Nurse</a> </li>
                <li> <a href="pages/human-resource/nurse-list.html">Nurse List</a> </li>
                <li> <a href="pages/human-resource/add-pharmacist.html">Add Pharmacist</a> </li>
                <li> <a href="pages/human-resource/pharmacist-list.html">Pharmacist List</a> </li>
                <li> <a href="pages/human-resource/add-representative.html">Add Representative</a> </li>
                <li> <a href="pages/human-resource/representative-list.html">Representative List</a> </li>
              </ul>
            </li>
            <!-- /Human Resource -->
            <!-- Bed -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#bed" aria-expanded="false" aria-controls="bed">
                <span><i class="fas fa-bed"></i>Bed Manager</span>
              </a>
              <ul id="bed" class="collapse" aria-labelledby="bed" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/bed-manager/add-bed.html">Add Bed</a> </li>
                <li> <a href="pages/bed-manager/bed-list.html">Bed List</a> </li>
              </ul>
            </li>
            <!-- /Bed-->
            <!-- Notice -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#notice" aria-expanded="false" aria-controls="notice">
                <span><i class="far fa-file-alt"></i>Notice</span>
              </a>
              <ul id="notice" class="collapse" aria-labelledby="notice" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/notice/add-notice.html">Add Notice</a> </li>
                <li> <a href="pages/notice/notice-list.html">Notice List</a> </li>
              </ul>
            </li>
            <!-- /Notice -->
            <li class="menu-item">
              <a href="pages/widgets.html">
                <span><i class="material-icons fs-16">widgets</i>Widgets</span>
              </a>
            </li>
            <!-- Basic UI Elements -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#basic-elements" aria-expanded="false" aria-controls="basic-elements">
                <span><i class="material-icons fs-16">filter_list</i>Basic UI Elements</span>
              </a>
              <ul id="basic-elements" class="collapse" aria-labelledby="basic-elements" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/ui-basic/accordions.html">Accordions</a> </li>
                <li> <a href="pages/ui-basic/alerts.html">Alerts</a> </li>
                <li> <a href="pages/ui-basic/buttons.html">Buttons</a> </li>
                <li> <a href="pages/ui-basic/breadcrumbs.html">Breadcrumbs</a> </li>
                <li> <a href="pages/ui-basic/badges.html">Badges</a> </li>
                <li> <a href="pages/ui-basic/cards.html">Cards</a> </li>
                <li> <a href="pages/ui-basic/progress-bars.html">Progress Bars</a> </li>
                <li> <a href="pages/ui-basic/preloaders.html">Pre-loaders</a> </li>
                <li> <a href="pages/ui-basic/pagination.html">Pagination</a> </li>
                <li> <a href="pages/ui-basic/tabs.html">Tabs</a> </li>
                <li> <a href="pages/ui-basic/typography.html">Typography</a> </li>
              </ul>
            </li>
            <!-- /Basic UI Elements -->
            <!-- Advanced UI Elements -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#advanced-elements" aria-expanded="false" aria-controls="advanced-elements">
                <span><i class="material-icons fs-16">code</i>Advanced UI Elements</span>
              </a>
              <ul id="advanced-elements" class="collapse" aria-labelledby="advanced-elements" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/ui-advanced/draggables.html">Draggables</a> </li>
                <li> <a href="pages/ui-advanced/sliders.html">Sliders</a> </li>
                <li> <a href="pages/ui-advanced/modals.html">Modals</a> </li>
                <li> <a href="pages/ui-advanced/rating.html">Rating</a> </li>
                <li> <a href="pages/ui-advanced/tour.html">Tour</a> </li>
                <li> <a href="pages/ui-advanced/cropper.html">Cropper</a> </li>
                <li> <a href="pages/ui-advanced/range-slider.html">Range Slider</a> </li>
              </ul>
            </li>
            <!-- /Advanced UI Elements -->
            <li class="menu-item">
              <a href="pages/animation.html">
                <span><i class="material-icons fs-16">format_paint</i>Animations</span>
              </a>
            </li>
            <!-- Form Elements -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <span><i class="material-icons fs-16">input</i>Form Elements</span>
              </a>
              <ul id="form-elements" class="collapse" aria-labelledby="form-elements" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/form/form-elements.html">Form Elements</a> </li>
                <li> <a href="pages/form/form-layout.html">Form Layouts</a> </li>
                <li> <a href="pages/form/form-validation.html">Form Validation</a> </li>
                <li> <a href="pages/form/form-wizard.html">Form Wizard</a> </li>
              </ul>
            </li>
            <!-- /Form Elements -->
            <!-- Charts -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#charts" aria-expanded="false" aria-controls="charts">
                <span><i class="material-icons fs-16">equalizer</i>Charts</span>
              </a>
              <ul id="charts" class="collapse" aria-labelledby="charts" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/charts/chartjs.html">Chart JS</a> </li>
                <li> <a href="pages/charts/morris-charts.html">Morris Chart</a> </li>
              </ul>
            </li>
            <!-- /Charts -->
            <!-- Tables -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#tables" aria-expanded="false" aria-controls="tables">
                <span><i class="material-icons fs-16">tune</i>Tables</span>
              </a>
              <ul id="tables" class="collapse" aria-labelledby="tables" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/tables/basic-tables.html">Basic Tables</a> </li>
                <li> <a href="pages/tables/data-tables.html">Data tables</a> </li>
              </ul>
            </li>
            <!-- /Tables -->
            <!-- Popups -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#popups" aria-expanded="false" aria-controls="popups">
                <span><i class="material-icons fs-16">message</i>Popups</span>
              </a>
              <ul id="popups" class="collapse" aria-labelledby="popups" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/popups/sweet-alerts.html">Sweet Alerts</a> </li>
                <li> <a href="pages/popups/toast.html">Toast</a> </li>
              </ul>
            </li>
            <!-- /Popups -->
            <!-- Icons -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#icons" aria-expanded="false" aria-controls="icons">
                <span><i class="material-icons fs-16">border_color</i>Icons</span>
              </a>
              <ul id="icons" class="collapse" aria-labelledby="icons" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/icons/fontawesome.html">Fontawesome</a> </li>
                <li> <a href="pages/icons/flaticons.html">Flaticons</a> </li>
                <li> <a href="pages/icons/materialize.html">Materialize</a> </li>
              </ul>
            </li>
            <!-- /Icons -->
            <!-- Maps -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#maps" aria-expanded="false" aria-controls="maps">
                <span><i class="material-icons fs-16">map</i>Maps</span>
              </a>
              <ul id="maps" class="collapse" aria-labelledby="maps" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/maps/google-maps.html">Google Maps</a> </li>
                <li> <a href="pages/maps/vector-maps.html">Vector Maps</a> </li>
              </ul>
            </li>
            <!-- /Maps -->
            <!-- Pages -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#pages" aria-expanded="false" aria-controls="pages">
                <span><i class="material-icons fs-16">insert_drive_file</i>Pages</span>
              </a>
              <ul id="pages" class="collapse" aria-labelledby="pages" data-bs-parent="#side-nav-accordion">
                <li class="menu-item">
                  <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#authentication" aria-expanded="false" aria-controls="authentication">Authentication</a>
                  <ul id="authentication" class="collapse" aria-labelledby="authentication" data-bs-parent="#pages">
                    <li> <a href="pages/prebuilt-pages/default-login.html">Default Login</a> </li>
                    <li> <a href="pages/prebuilt-pages/modal-login.html">Modal Login</a> </li>
                    <li> <a href="pages/prebuilt-pages/default-register.html">Default Registration</a> </li>
                    <li> <a href="pages/prebuilt-pages/modal-register.html">Modal Registration</a> </li>
                    <li> <a href="pages/prebuilt-pages/lock-screen.html">Lock Screen</a> </li>
                  </ul>
                </li>
                <li> <a href="pages/prebuilt-pages/coming-soon.html">Coming Soon</a> </li>
                <li> <a href="pages/prebuilt-pages/error.html">Error Page</a> </li>
                <li class="menu-item"> <a href="pages/prebuilt-pages/faq.html"> FAQ </a> </li>
                <li class="menu-item"> <a href="pages/prebuilt-pages/portfolio.html"> Portfolio </a> </li>
                <li class="menu-item"> <a href="pages/prebuilt-pages/user-profile.html"> User Profile </a> </li>
                <li class="menu-item"> <a href="pages/prebuilt-pages/invoice.html"> Invoice </a> </li>
              </ul>
            </li>
            <!-- /Pages -->
            <!-- Bonus Pages -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#bonus" aria-expanded="false">
                <span><i class="material-icons fs-16">dashboard</i>Bonus Pages </span>
              </a>
              <ul id="bonus" class="collapse" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/dashboard/web-analytics.html"> Web Analytics </a> </li>
                <li> <a href="pages/dashboard/social-media.html">Social Media Management</a> </li>
                <li> <a href="pages/dashboard/project-management.html">Department Management</a> </li>
                <li> <a href="pages/dashboard/client-management.html">Patient Management</a> </li>
              </ul>
            </li>
            <!-- /Bonus Pages -->
            <!-- Apps -->
            <li class="menu-item">
              <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#apps" aria-expanded="false" aria-controls="apps">
                <span><i class="material-icons fs-16">phone_iphone</i>Apps</span>
              </a>
              <ul id="apps" class="collapse" aria-labelledby="apps" data-bs-parent="#side-nav-accordion">
                <li> <a href="pages/apps/chat.html">Chat</a> </li>
                <li> <a href="pages/apps/email.html">Email</a> </li>
                <li> <a href="pages/apps/to-do-list.html">To-do List</a> </li>
              </ul>
            </li>
            <!-- /Apps -->
          </ul>
        </aside>
        <!-- Sidebar Right -->
        <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">
          <div class="ms-aside-header">
            <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
              <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active" role="tab" data-bs-toggle="tab"> Activity Log</a></li>
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
        <!-- Main Content -->
        <main class="body-content">
          <!-- Navigation Bar -->
          <nav class="navbar ms-navbar">
            <div class="ms-aside-toggler ms-toggler ps-0" data-bs-target="#ms-side-nav" data-bs-toggle="slideLeft">
              <span class="ms-toggler-bar bg-white"></span>
              <span class="ms-toggler-bar bg-white"></span>
              <span class="ms-toggler-bar bg-white"></span>
            </div>
            <div class="docfind-logo d-none d-xl-block">
              <a class="sigma_logo" href="../index-2.html">
                <img src="assets/img/docfind-logo.png" alt="logo">
              </a>
            </div>
            <div class="logo-sn logo-sm ms-d-block-sm">
              <a class="ps-0 ms-0 text-center navbar-brand me-0" href="index.html"><img src="assets/img/medboard-logo-84x41.png" alt="logo"> </a>
            </div>
            <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
      
              <li class="ms-nav-item  ms-d-none">
                <a href="#mymodal" class="text-white" data-bs-toggle="modal"><i class="flaticon-spreadsheet me-2"></i> Make an appointment</a>
              </li>
      
              <li class="ms-nav-item ms-d-none">
                <a href="#prescription" class="text-white" data-bs-toggle="modal"><i class="flaticon-pencil me-2"></i> Write a prescription</a>
              </li>
      
              <li class="ms-nav-item ms-d-none">
                <a href="#report1" class="text-white" data-bs-toggle="modal"><i class="flaticon-list me-2"></i> Generate Report</a>
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
                    <a class="media fs-14 p-2" href="pages/prebuilt-pages/default-login.html"> <span><i class="flaticon-shut-down me-2"></i> Logout</span> </a>
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

          <!-- Body Content Wrapper -->

          
        <div id="app"></div>

        <h1>Hello</h1>

        <router-view></router-view>
        
        </main>

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
