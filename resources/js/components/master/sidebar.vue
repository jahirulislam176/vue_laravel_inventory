<template>

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
      <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-bs-target="#ms-side-nav" data-bs-toggle="slideLeft" ></div>
      <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-bs-target="#ms-recent-activity" data-bs-toggle="slideRight"></div>

    <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left" v-show="$route.path === '/' || $route.path==='/register' || $route.path==='/forgot' ? false:true ">
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
              <li> <router-link to="home">Docfindboard</router-link> </li>
            </ul>
          </li>
          <!-- /Dashboard -->
          <!-- Doctor -->
          <li class="menu-item">
            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#doctor" aria-expanded="false" aria-controls="doctor">
              <span><i class="fas fa-stethoscope"></i>Employee</span>
            </a>
            <ul id="doctor" class="collapse" aria-labelledby="doctor" data-bs-parent="#side-nav-accordion">
              <li> <router-link to='/employee'>Add Employee</router-link> </li>
              <li> <a href="pages/doctor/doctor-list.html">Show Employee</a> </li>
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
       
          <!-- /Department -->
          <!-- Schedule -->
         
          <!-- /Schedule -->
          <!-- Appointment -->
          
          <!-- /Appointment -->
          <!-- Payment -->
      
          <!-- /Payment -->
          <!-- Report -->
     
          <!-- /Report -->
          <!-- Human Resource -->
         
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
    
          <!-- /Notice -->
         
          <!-- Basic UI Elements -->
    
          <!-- /Basic UI Elements -->
          <!-- Advanced UI Elements -->
         
          <!-- /Advanced UI Elements -->
          <li class="menu-item">
            <a href="javascript:void(0)">
              <span><i class="material-icons fs-16">format_paint</i>Animations</span>
            </a>
          </li>
          <!-- Form Elements -->
      
          <!-- /Form Elements -->
          <!-- Charts -->
       
          <!-- /Charts -->
          <!-- Tables -->
    
          <!-- /Tables -->
          <!-- Popups -->
    
          <!-- /Popups -->
          <!-- Icons -->
    
          <!-- /Icons -->
          <!-- Maps -->
     
          <!-- /Maps -->
          <!-- Pages -->
        
          <!-- /Pages -->
          <!-- Bonus Pages -->
     
          <!-- /Bonus Pages -->
          <!-- Apps -->
     
          <!-- /Apps -->
        </ul>
      </aside>

        <!-- Sidebar Right -->
        <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable" v-show="$route.path=== '/' || $route.path==='/register' || $route.path==='/forgot' ?false:true">
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

          <main class="body-content" >
            <!-- Navigation Bar -->
            
            <nav class="navbar ms-navbar"  v-show="$route.path=== '/' || $route.path==='/register'|| $route.path==='/forgot' ?false:true">
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
  
                    
  
  
                    <li class="dropdown-divider"></li>
                   
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
                    <!-- {{-- <li class="dropdown-menu-footer">
                      <a class="media fs-14 p-2" href="pages/prebuilt-pages/lock-screen.html"> <span><i class="flaticon-security me-2"></i> Lock</span> </a>
                    </li> --}} -->
  
                    <li class="dropdown-menu-footer">
  
                    
                      <router-link  to="/logout"> <span><i class="flaticon-shut-down me-2"></i><a >Logout</a></span> </router-link>
  
  
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

   
            <router-view></router-view>
 
  
          </main>
     
</template>

<script>

export default{

    name:"sidebar"
}

</script>