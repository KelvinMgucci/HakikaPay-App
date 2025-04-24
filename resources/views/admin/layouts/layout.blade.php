<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('admin_page_title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('admin_asset/assets/vendor/bootstrap/css/bootstrap.min.css') }}"rel="stylesheet">
  <link href="{{ asset('admin_asset/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('admin_asset/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin_asset/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('admin_asset/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('admin_asset/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('admin_asset/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('admin_asset/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">HakikaPay</span>
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

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('admin_asset/assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
            <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="dropdown-item d-flex align-items-center" style="all: unset; width: 100%; padding: 10px 15px; display: flex; align-items: center; cursor: pointer;">
        <i class="bi bi-box-arrow-right me-2"></i>
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
      <a class="nav-link {{ request()->routeIs('admin') ? '' : 'collapsed' }}" href="{{ route('admin') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link {{ request()->routeIs('admin.users.*') ? '' : 'collapsed' }}" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-people"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="users-nav" class="nav-content collapse {{ request()->routeIs('admin.users.*') ? 'show' : '' }}">
        <li>
          <a href="{{ route('admin.users.viewuserdetails') }}" class="{{ request()->routeIs('admin.users.viewuserdetails') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>View Users</span>
          </a>
        </li>
        <li>
          <a href="{{ route('admin.users.usermanagement') }}" class="{{ request()->routeIs('admin.users.usermanagement') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>Manage Users</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link {{ request()->routeIs('admin.transactions.*') ? '' : 'collapsed' }}" data-bs-target="#transactions-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-currency-exchange"></i><span>Transactions</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="transactions-nav" class="nav-content collapse {{ request()->routeIs('admin.transactions.*') ? 'show' : '' }}">
        <li>
          <a href="{{ route('admin.transactions.viewtransactions') }}" class="{{ request()->routeIs('admin.transactions.viewtransactions') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>View Transactions</span>
          </a>
        </li>
        <li>
          <a href="{{ route('admin.transactions.releasefund') }}" class="{{ request()->routeIs('admin.transactions.releasefunds') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>Release Funds</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link {{ request()->routeIs('admin.disputes.*') ? '' : 'collapsed' }}" data-bs-target="#disputes-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-exclamation-triangle"></i><span>Disputes</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="disputes-nav" class="nav-content collapse {{ request()->routeIs('admin.disputes.*') ? 'show' : '' }}">
        <li>
          <a href="{{ route('admin.disputes.viewdisputes') }}" class="{{ request()->routeIs('admin.disputes.viewdisputes') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>View Disputes</span>
          </a>
        </li>
        <li>
          <a href="{{ route('admin.disputes.solvedisputes') }}" class="{{ request()->routeIs('admin.disputes.solvedisputes') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>Solve Disputes</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link {{ request()->routeIs('admin.payouts.viewpayouts') ? '' : 'collapsed' }}" href="{{ route('admin.payouts.viewpayouts') }}">
        <i class="bi bi-cash-coin"></i><span>Payouts</span>
      </a>
    </li>



    <li class="nav-item">
      <a class="nav-link {{ request()->routeIs('admin.delivery.*') ? '' : 'collapsed' }}" data-bs-target="#delivery-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-truck"></i><span>Delivery</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="delivery-nav" class="nav-content collapse {{ request()->routeIs('admin.delivery.*') ? 'show' : '' }}">
        <li>
          <a href="{{ route('admin.delivery.manage') }}" class="{{ request()->routeIs('admin.delivery.manage') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>Manage Delivery</span>
          </a>
        </li>
        <li>
          <a href="{{ route('admin.delivery.track') }}" class="{{ request()->routeIs('admin.delivery.track') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>Track Delivery</span>
          </a>
        </li>
      </ul>
    </li>



    <li class="nav-item">
      <a class="nav-link {{ request()->routeIs('admin.notifications.viewnotifications') ? '' : 'collapsed' }}" href="{{ route('admin.notifications.viewnotifications') }}">
        <i class="bi bi-bell"></i><span>Notifications</span>
      </a>
    </li>



    <li class="nav-item">
      <a class="nav-link {{ request()->routeIs('admin.reports.viewreports') ? '' : 'collapsed' }}" href="{{ route('admin.reports.viewreports') }}">
        <i class="bi bi-bar-chart-line"></i><span>Reports</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link {{ request()->routeIs('admin.settings.viewsettings') ? '' : 'collapsed' }}" href="{{ route('admin.settings.viewsettings') }}">
        <i class="bi bi-gear"></i><span>Settings</span>
      </a>
    </li>



  </ul>
</aside>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    @yield('admin_layout')



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('admin_asset/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('admin_asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('admin_asset/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{ asset('admin_asset/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{ asset('admin_asset/assets/vendor/quill/quill.js')}}"></script>
  <script src="{{ asset('admin_asset/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{ asset('admin_asset/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ asset('admin_asset/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>