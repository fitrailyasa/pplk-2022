<!DOCTYPE html>
<html lang="id">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="UTF-8" />
        <meta name="theme-color" content="#09f" />
        <meta name="description" content="Program Pengenalan Lingkungan Kampus (PPLK) merupakan acara pesta penyambutan terbesar untuk mahasiswa baru yang diselenggarakan setiap tahunnya di Institut Teknologi Sumatera (ITERA). PPLK ITERA hadir sebagai akses utama bagi mahasiswa baru untuk mengawali gerbang perkuliahan, yang berupa kaderisasi awal terpusat yang diselenggarakan oleh Keluarga Mahasiswa Institut Teknologi Sumatera (KM ITERA) untuk menyambut mahasiswa baru." />
        <meta name="keywords" content="PPLK, Program Pengenalan Lingkungan Kampus, PPLK ITERA 2022, KM-ITERA" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="author" content="Fitra Ilyasa" />
        <meta name="copyright" content="PPLK 2022" />
        <meta name="robots" content="follow" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:type" content="cms website" />
        <meta property="og:title" content="CMS Website PPLK 2022" />
        <meta property="og:url" content="URL" />
        <link rel="manifest" href="./manifest.webmanifest" />

        <title>@yield('title') - PPLK 2022</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon-16x16.png') }}">

        <!-- Sans Pro Backup -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Theme Style -->
        <link rel="stylesheet" href="{{ asset('assets/css/adminlte.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fix-cms.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    </head>
    <body class="hold-transition sidebar-mini">
      <div class="wrapper">

      @include('layouts.admin.menu')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">

            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- ./Content Header -->

        @yield('content')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
          <div class="p-3">
            <h5>Shortcut Link</h5>
            <a href="#" class="text-decoration-none">Content</a>
          </div>
        </aside>
        <!-- /.Control Sidebar -->

        <!-- Footer -->
        <br><br><br>
        <footer class="main-footer fixed-bottom">
          <!-- Tagline PPLK 2022 -->
          <div class="float-right d-none d-sm-inline">
            <i>#Merakit_Cita_Dari_Kita_Untuk_Sumatera</i>
          </div>
          <!-- Copyright href ke page Our Team -->
          <strong>Copyright &copy; 2022 <a href="#" class=" text-decoration-none">ARDHAMES PPLK-2022</a>.</strong> All rights reserved.
        </footer>
        <!-- ./Footer -->
      </div>
      <!-- ./wrapper -->

      <!-- Tempat Scripts -->
      <script>
        function openCMS(evt, menuName) {
          var i, tabitem, tabcontents, tablinks;
          tabitem = document.getElementsByClassName("tabitem");
          tabcontents = document.getElementsByClassName("tabcontents");
          for (i = 0; i < tabcontents.length; i++) {
            tabcontents[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(menuName).style.display = "block";
          evt.currentTarget.className += " active";
        }
      </script>
      @yield('script')

      <!-- jQuery -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <!--Table update prodi-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.3/angular.min.js" integrity="sha512-KZmyTq3PLx9EZl0RHShHQuXtrvdJ+m35tuOiwlcZfs/rE7NZv29ygNA8SFCkMXTnYZQK2OX0Gm2qKGfvWEtRXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.6/ui-bootstrap-tpls.min.js" integrity="sha512-+qNXcNMBMY6Vx1oKJbdSsPsKS+bcB2yrprqb2jysz8bYC+vPJQsNBapHpq8zvf7oNGEhCgkFLKAsIeUXSkThHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-utils/0.1.1/angular-ui-utils.min.js" integrity="sha512-pGKhFBs4i3bMt4VGtmtCexI/LVANKvWSswVWJfBt7GNnlRTIqTPR6t8sO4U35zpGsUTkf+OaW6Wmf9aVQ4rP0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net/1.12.1/jquery.dataTables.min.js" integrity="sha512-MOsicOaJyNWPgwMOE1q4sTPZK6KuUQTMBhkmzb0tFVSRxgx3VnGTwIyRme/IhBJQdWJkfTcIKozchO11ILrmSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs5/1.12.1/dataTables.bootstrap5.min.js" integrity="sha512-nfoMMJ2SPcUdaoGdaRVA1XZpBVyDGhKQ/DCedW2k93MTRphPVXgaDoYV1M/AJQLCiw/cl2Nbf9pbISGqIEQRmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <!-- AdminLTE App js-->
      <script src="{{ asset('assets/js/adminlte.js') }}"></script>
      <script src="{{ asset('assets/js/adminlte.js.map') }}"></script>
      <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
      <script src="{{ asset('assets/js/fix-cms.js') }}"></script>
    </body>
</html>
