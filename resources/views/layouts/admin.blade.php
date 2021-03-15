<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('backadmin/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('backadmin/vendors/puse-icons-feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('backadmin/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('backadmin/vendors/morris.js/morris.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('backadmin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('backadmin/images/favicon.png')}}" />
  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body class="sidebar-fixed">
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    @include('includes.adminNavbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->

      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close mdi mdi-close"></i>
        <div class="d-flex align-items-center justify-content-between border-bottom">
          <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
        </div>
        <ul class="chat-list">
          <li class="list active">
            <div class="profile"><img src="https://placehold.it/100x100" alt="image"><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
            <small class="text-muted my-auto">19 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="https://placehold.it/100x100" alt="image"><span class="offline"></span></div>
            <div class="info">
              <div class="wrapper d-flex">
                <p>Catherine</p>
              </div>
              <p>Away</p>
            </div>
            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
            <small class="text-muted my-auto">23 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="https://placehold.it/100x100" alt="image"><span class="online"></span></div>
            <div class="info">
              <p>Daniel Russell</p>
              <p>Available</p>
            </div>
            <small class="text-muted my-auto">14 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="https://placehold.it/100x100" alt="image"><span class="offline"></span></div>
            <div class="info">
              <p>James Richardson</p>
              <p>Away</p>
            </div>
            <small class="text-muted my-auto">2 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="https://placehold.it/100x100" alt="image"><span class="online"></span></div>
            <div class="info">
              <p>Madeline Kennedy</p>
              <p>Available</p>
            </div>
            <small class="text-muted my-auto">5 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="https://placehold.it/100x100" alt="image"><span class="online"></span></div>
            <div class="info">
              <p>Sarah Graves</p>
              <p>Available</p>
            </div>
            <small class="text-muted my-auto">47 min</small>
          </li>
        </ul>
      </div>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
       @include('includes.sidebar')
      <!-- partial -->
    @yield('content')
      <!-- main-panel ends -->
 
  
    </div>
  
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  
  <script src="{{asset('backadmin/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('backadmin/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('backadmin/vendors/raphael/raphael.min.js')}}"></script>
  <script src="{{asset('backadmin/vendors/morris.js/morris.min.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('backadmin/js/off-canvas.js')}}"></script>
  <script src="{{asset('backadmin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('backadmin/js/misc.js')}}"></script>
  <script src="{{asset('backadmin/js/settings.js')}}"></script>
  <script src="{{asset('backadmin/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('backadmin/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>
