<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ env('APP_NAME', 'PROPERTY TRUST GROUP') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/logo1.jpg') }}" rel="icon">
  <link href="{{ asset('img/logo1.jpg') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  {{-- <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}
  <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
  <!-- Vendor CSS Files -->
  <link href="{{ asset('admin_assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('admin_assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('admin_assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('admin_assets') }}/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{ asset('admin_assets') }}/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{ asset('admin_assets') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('admin_assets') }}/vendor/simple-datatables/style.css" rel="stylesheet">

  {{-- Image uploader css file --}}
  <link href="{{ asset('image_uploader/image-uploader.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('admin_assets') }}/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    .line-clamp {
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
  </style>
</head>

<body class="bg-white">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{route('rest.dashboard')}}" class="logo d-flex align-items-center">
        <img src="{{ asset('img/logo1.jpg') }}" alt="">
        <span class="d-none d-lg-block">PTG</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('img/logo1.jpg') }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('rest.profile') }}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form action="{{route('logout')}}" method="post">@csrf
                <button class="dropdown-item d-flex align-items-center" type="submit">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </button>
              </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('rest.dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('rest.categories.index') }}">
              <i class="bi bi-circle"></i><span>All Categories</span>
            </a>
          </li>
          <li>
            <a href="{{ route('rest.categories.create') }}">
              <i class="bi bi-circle"></i><span>Add Category</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('rest.services.create') }}">
              <i class="bi bi-circle"></i><span>New Service</span>
            </a>
          </li>
          <li>
            <a href="{{ route('rest.services.index') }}">
              <i class="bi bi-circle"></i><span>All Services</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Property</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('rest.assets.index') }}">
              <i class="bi bi-circle"></i><span>All Property</span>
            </a>
          </li>
          <li>
            <a href="{{ route('rest.statistics.assets') }}">
              <i class="bi bi-circle"></i><span>Property Statistics</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Projects</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('rest.projects.index') }}">
              <i class="bi bi-circle"></i><span>All Projects</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Events</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('rest.events.create') }}">
              <i class="bi bi-circle"></i><span>Create Event</span>
            </a>
          </li>
          <li>
            <a href="{{ route('rest.events.index') }}">
              <i class="bi bi-circle"></i><span>Up-coming Events</span>
            </a>
          </li>
          <li>
            <a href="{{ route('rest.events.acheived') }}">
              <i class="bi bi-circle"></i><span>Past Events</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#more-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>More</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="more-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('rest.team.index') }}">
              <i class="bi bi-circle"></i><span>Our Team</span>
            </a>
          </li>
          {{-- <li>
            <a href="{{ route('rest.info.index') }}">
              <i class="bi bi-circle"></i><span>Public Pages</span>
            </a>
          </li>
          <li>
            <a href="{{ route('rest.schedules.index') }}">
              <i class="bi bi-circle"></i><span>Schedules</span>
            </a>
          </li>
          <li>
            <a href="{{ route('rest.statistics.index') }}">
              <i class="bi bi-circle"></i><span>Statistics</span>
            </a>
          </li> --}}
        </ul>
      </li><!-- End Icons Nav -->

      <hr />

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('rest.profile') }}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('rest.faqs') }}">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav --> --}}
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main bg-white">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('rest.dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">{{ $title ?? 'Dashboard' }}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    @if (session()->has('success'))
      <div class="alert alert-success text-center">{{ session()->get('success') }}</div>
    @elseif (session()->has('message'))
      <div class="alert alert-info text-center">{{ session()->get('message') }}</div>
    @elseif (session()->has('error'))
      <div class="alert alert-danger text-center">{{ session()->get('error') }}</div>
    @endif

    <section class="section dashboard">
      @yield('section')
      
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Property Trust Group</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('admin_assets') }}/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('admin_assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('admin_assets') }}/vendor/chart.js/chart.min.js"></script>
  <script src="{{ asset('admin_assets') }}/vendor/echarts/echarts.min.js"></script>
  <script src="{{ asset('admin_assets') }}/vendor/quill/quill.min.js"></script>
  <script src="{{ asset('admin_assets') }}/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ asset('admin_assets') }}/vendor/tinymce/tinymce.min.js"><script>
  <script src="{{ asset('admin_assets') }}/vendor/php-email-form/validate.js"></script>

  {{-- masonry layout plugin --}}
  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>


  {{-- image uploader script --}}
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('image_uploader/image-uploader.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('admin_assets') }}/js/main.js"></script>
    @yield('script')
</body>

</html>