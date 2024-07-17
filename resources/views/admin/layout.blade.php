<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EECO Panel Administration</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('admin/assets/img/logoacp.png') }}" rel="icon">
  <link href="{{ asset('admin/assets/img/logoacp.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{ asset('https://fonts.gstatic.com') }}" rel="preconnect">
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet">

  <!-- icone -->
  <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css') }}">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>
  <link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css">
  <script src="https://unpkg.com/@jarstone/dselect/dist/js/dselect.js"></script>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ route('home.index') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('event/assets/img/logo.png') }}" alt="">
      </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <a class ="btn btn btn-primary new-consignateur m-5" href="{{ route('home.index') }}">Aller sur le site</a>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    
    <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav" style="width: 100%">

        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="bi bi-speedometer"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="bi bi-person"></i>
            <span>Utilisateur</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('evenement.index') }}">
            <i class="bi bi-person"></i>
            <span>Evènements</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('payement.inscription') }}">
            <i class="bi bi-person"></i>
            <span>Frais de d'inscription</span>
          </a>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('payement.formation') }}">
            <i class="bi bi-person"></i>
            <span>Frais de formation</span>
          </a>
        </li>
      </ul>
         
    </aside><!-- End Sidebar-->

      <main id="main" class="main">

        @yield('content')

      </main>

      <script>
        document.addEventListener("DOMContentLoaded", function() {
          const links = document.querySelectorAll('.sidebar-nav .nav-link');
          const currentUrl = window.location.href;
      
          links.forEach(link => {
            if (link.href === currentUrl) {
              link.classList.add('focus');
              link.classList.remove('collapsed');
            }
          });
        });
      </script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>

    {{-- Dynamc_fields File --}}
    
    <script src="{{ asset('admin/assets/js/dynamc_fields.js') }}"></script> 

    {{-- <script>
       dselect(document.querySelector('#dselect-example'), {
        search: true
        });
    </script> --}}

  </body>
</html>
