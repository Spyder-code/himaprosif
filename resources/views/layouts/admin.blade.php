<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Admin</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('fontawesome/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('css/mdb.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/mdb.lite.css')}}">
  <link href="{{asset('css/mdtimepicker.css')}}" rel="stylesheet">
<!-- Core Stylesheet -->
<link rel="stylesheet" href="{{asset('css/evo-calender/evo-calendar.css')}}" />
<!-- Optional Themes -->
<link rel="stylesheet" href="{{asset('css/evo-calender/evo-calendar.midnight-blue.css')}}" />
<!-- JavaScript -->

  <!-- my css -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/selectize.css')}}">
  <link rel="icon" href="{{asset('images/logo.png')}}">

    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/standalone/selectize.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/mdtimepicker.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/evo-calendar/evo-calendar.js')}}"></script>

</head>

<body id="page-top">
   <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar static-top shadow" style="background-image: linear-gradient(to right, #74ebd5 0%, #9face6 100%);">
          <img src="{{asset('images/logo.png')}}" class="rounded-circle mr-sm-2" style="width: 40px; height: 40px;">
        <a class="navbar-brand" href="home.html">Admin</a>

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

         <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-light-600">{{Auth::user()->name}}</span>
                <img class="img-profile rounded-circle mr-5" src="{{asset('images/')}}/@yield('img')" style="width: 60px; height: 60px; ">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

  <!-- Page Wrapper -->
  <div id="wrapper">


    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-image: linear-gradient(to top, #37ecba 0%, #72afd3 100%);">

      <!-- Nav Item - Charts -->
      <li class="nav-item @yield('profil')">
        <a class="nav-link" href="{{url('/home')}}">
          <i class="fas fa-user fa-sm fa-fw"></i>
          <span>Profil</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item @yield('register')">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-list-ul"></i>
          <span>Pendaftran</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{url('register-angkatan')}}">Angkatan</a>
              <a class="collapse-item" href="{{url('register-ifest')}}">I-fest</a>
              <a class="collapse-item" href="{{url('register-hima')}}">Himaprosif</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item @yield('berita')">
        <a class="nav-link" href="{{url('/berita')}}">
          <i class="fas fa-fw fa-plus-circle"></i>
          <span>Berita</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item @yield('acara')">
        <a class="nav-link" href="{{url('acara')}}">
          <i class="fas fa-fw fa-calendar-alt"></i>
          <span>Acara</span></a>
      </li>

      <li class="nav-item @yield('pesan')">
        <a class="nav-link" href="{{url('pesan')}}">
          <i class="fas fa-fw fa-message"></i>
          <span>Pesan</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        @yield('main')

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; Your Website 2019</span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="{{url('logout')}}">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->

<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin-2.min.js')}}"></script>

</body>

</html>
