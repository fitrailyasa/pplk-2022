  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" id="main-navbar">
    <!-- Left navbar links -->
    <ul class="navbar-nav align-items-center">
        <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-sm-inline-block">
          <div href="#" class="brand-link text-decoration-none d-flex align-items-center p-1" id="logo-dan-judul">
            <img src="../assets/logo-pplk-minified.png" alt="Logo PPLK" class="pplk-logo">
            <div>
              <span class="brand-link" id="judul-pplk">PPLK 2022</span>
            </div>
          </div>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Fullscreen and Rightbar -->
      <li class="nav-item" id="icon-fullscreen">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" role="button" style="color:red;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="fa-solid fa-arrow-right-to-bracket"></i>
        </a>
        <li class="nav-item d-none d-sm-inline-block">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                @csrf
            </form>
        </li>
      </li>
    </ul>
  </nav>
  <!-- ./navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" id="left-sidebar">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-decoration-none d-flex justify-content-center">
      <span class="brand-text font-weight-light">
        C<span style="font-size:.8rem;">ontent</span>
        M<span style="font-size:.8rem;">anagement</span>
        S<span style="font-size:.8rem;">ystem</span>
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
        <div class="image">
          @if (auth()->user()->fotoProfil == Null)
            <img src="{{ asset('assets/profile') }}/default.png" class="img-circle elevation-2" alt="User Image">
          @else
            <img src="{{ asset('assets/profile') }}/{{ auth()->user()->fotoProfil }}" class="img-circle elevation-2" alt="User Image">
          @endif
        </div>
        <div class="info">
          <a href="#" class="d-block text-decoration-none">{{ auth()->user()->nama }}</a>
          <a class="d-block text-decoration-none">{{ auth()->user()->email }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!--Pakai class active utk mengaktifkan button-->
          <!--Sama class menu-open supaya dropdown otomatis terbuka di awal load page-->

          @if(auth()->user()->roles_id == 1)
          <!--Dashboard-->
            <li class="nav-item">
                <a href="/cms-super" onclick="openCMS(event, 'dashboard')" class="nav-link tablinks ">
                    <i class="fas fa-rocket nav-icon"></i>
                    <p>
                    Dashboard
                    </p>
                </a>
            </li>
            <!--./Dashboard-->

            <!--Beranda-->
            <li class="nav-item">
                <a href="/beranda" class="nav-link">
                    <i class="fa-solid fa-earth-asia nav-icon"></i>
                    <p>
                    Home PPLK 2022
                    </p>
                </a>
            </li>
            <!--./Beranda-->

          <!--UPT ITERA-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="fa-solid fa-building nav-icon"></i>
              <p>
                ITERA
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('adminUpt.create') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah UPT</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('adminUpt.index') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Data UPT</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./UPT ITERA-->

          <!--Prodi-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="nav-icon fa-solid fa-satellite"></i>
              <p>
                Prodi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('adminProdi.create') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Prodi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('adminProdi.index') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Data Prodi</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./Prodi-->

          <!--Himpunan-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="nav-icon fa-solid fa-people-roof"></i>
              <p>
                Himpunan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('adminHimpunan.create') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Himpunan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('adminHimpunan.index') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="font-size:0.9rem;">Kelola Data Himpunan</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./Himpunan-->

          <!--UKM/Komunitas-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="nav-icon fa-solid fa-people-carry-box"></i>
              <p>
                UKM/Komunitas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('adminUkm.create') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="font-size:0.8rem;">Tambah UKM/Komunitas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('adminUkm.index') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="font-size:0.8rem;">Kelola UKM/Komunitas</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./UKM/Komunitas-->

          <!--Funfact-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="nav-icon fa-solid fa-newspaper"></i>
              <p>
                Funfact
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('adminFunfact.create') }} " class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Funfact</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('adminFunfact.index') }} " class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Data funfact</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./Funfact-->

          <!--Begalin-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="nav-icon fa-brands fa-evernote"></i>
              <p>
                Begalin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('adminBegalin.create') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Begalin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('adminBegalin.index') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Data Begalin</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./Begalin-->

          <!--Kamus Gaul-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="nav-icon fa-brands fa-rocketchat"></i>
              <p>
                Kamus Gaul
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('adminKamusgaul.create') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Kamus</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('adminKamusgaul.index') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Kamus Gaul</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./Kamus Gaul-->

          <!--Games-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="nav-icon fa-solid fa-gamepad"></i>
              <p>
                Games
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a onclick="openCMS(event, 'tambah-redeem')" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="font-size:0.8rem;">Tambah Redeem Code</p>
                </a>
              </li>
              <li class="nav-item">
                <a onclick="openCMS(event, 'kelola-redeem')" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="font-size:0.8rem;">Kelola Redeem Code</p>
                </a>
              </li>
              <li class="nav-item">
                <a onclick="openCMS(event, 'tambah-tebak')" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="font-size:0.8rem;">Tambah Tebak Bangunan</p>
                </a>
              </li>
              <li class="nav-item">
                <a onclick="openCMS(event, 'kelola-tebak')" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="font-size:0.8rem;">Kelola Tebak Bangunan</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./Games-->

          <!--Booklet-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="nav-icon fa-solid fa-book-open"></i>
              <p>
                Booklet
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a onclick="openCMS(event, 'tambah-booklet')" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Booklet</p>
                </a>
              </li>
              <li class="nav-item">
                <a onclick="openCMS(event, 'kelola-booklet')" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Data Booklet</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./Booklet-->

          <!--Scanner-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="nav-icon fa-solid fa-camera"></i>
              <p>
                Scanner
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="/polling" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Scanner Polling</p>
                  </a>
              </li>
              <li class="nav-item">
                <a href="/scanner" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Scanner Panitia</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/presensiMaba" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Scanner Maba</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./Scanner-->

          @elseif(auth()->user()->roles_id == 2)
          <!--Dashboard-->
          <li class="nav-item">
            <a href="/cms-dapmen" onclick="openCMS(event, 'dashboard')" class="nav-link tablinks ">
                <i class="fas fa-rocket nav-icon"></i>
                <p>
                Dashboard
                </p>
            </a>
          </li>
          <!--./Dashboard-->

          <!--Beranda-->
          <li class="nav-item">
            <a href="/beranda" class="nav-link">
                <i class="fa-solid fa-earth-asia nav-icon"></i>
                <p>
                Home PPLK 2022
                </p>
            </a>
          </li>
          <!--./Beranda-->

          <!--UPT ITERA-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="fa-solid fa-building nav-icon"></i>
              <p>
                ITERA
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('adminUpt.create') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah UPT</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('adminUpt.index') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Data UPT</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./UPT ITERA-->

          <!--Funfact-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="nav-icon fa-solid fa-newspaper"></i>
              <p>
                Funfact
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('adminFunfact.create') }} " class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Funfact</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('adminFunfact.index') }} " class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Data funfact</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./Funfact-->

          <!--Begalin-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="nav-icon fa-brands fa-evernote"></i>
              <p>
                Begalin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('adminBegalin.create') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Begalin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('adminBegalin.index') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Data Begalin</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./Begalin-->

          <!--Kamus Gaul-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="nav-icon fa-brands fa-rocketchat"></i>
              <p>
                Kamus Gaul
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('adminKamusgaul.create') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Kamus</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('adminKamusgaul.index') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Kamus Gaul</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./Kamus Gaul-->

          <!--Games-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="nav-icon fa-solid fa-gamepad"></i>
              <p>
                Games
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a onclick="openCMS(event, 'tambah-redeem')" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="font-size:0.8rem;">Tambah Redeem Code</p>
                </a>
              </li>
              <li class="nav-item">
                <a onclick="openCMS(event, 'kelola-redeem')" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="font-size:0.8rem;">Kelola Redeem Code</p>
                </a>
              </li>
              <li class="nav-item">
                <a onclick="openCMS(event, 'tambah-tebak')" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="font-size:0.8rem;">Tambah Tebak Bangunan</p>
                </a>
              </li>
              <li class="nav-item">
                <a onclick="openCMS(event, 'kelola-tebak')" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="font-size:0.8rem;">Kelola Tebak Bangunan</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./Games-->

          <!--Booklet-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="nav-icon fa-solid fa-book-open"></i>
              <p>
                Booklet
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a onclick="openCMS(event, 'tambah-booklet')" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Booklet</p>
                </a>
              </li>
              <li class="nav-item">
                <a onclick="openCMS(event, 'kelola-booklet')" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Data Booklet</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./Booklet-->

          @elseif(auth()->user()->roles_id == 3)
          <!--Dashboard-->
          <li class="nav-item">
            <a href="/cms-dapmen" onclick="openCMS(event, 'dashboard')" class="nav-link tablinks ">
                <i class="fas fa-rocket nav-icon"></i>
                <p>
                Dashboard
                </p>
            </a>
          </li>
          <!--./Dashboard-->

          <!--Beranda-->
          <li class="nav-item">
            <a href="/beranda" class="nav-link">
                <i class="fa-solid fa-earth-asia nav-icon"></i>
                <p>
                Home PPLK 2022
                </p>
            </a>
          </li>
          <!--./Beranda-->

          <!--Prodi-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="nav-icon fa-solid fa-satellite"></i>
              <p>
                Prodi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('adminProdi.create') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Prodi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('adminProdi.index') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Data Prodi</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./Prodi-->

          <!--Himpunan-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="nav-icon fa-solid fa-people-roof"></i>
              <p>
                Himpunan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('adminHimpunan.create') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Himpunan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('adminHimpunan.index') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="font-size:0.9rem;">Kelola Data Himpunan</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./Himpunan-->

          @elseif(auth()->user()->roles_id == 4)
          <!--UKM/Komunitas-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="nav-icon fa-solid fa-people-carry-box"></i>
              <p>
                UKM/Komunitas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('adminUkm.create') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="font-size:0.8rem;">Tambah UKM/Komunitas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('adminUkm.index') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="font-size:0.8rem;">Kelola UKM/Komunitas</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./UKM/Komunitas-->

          <!--Scanner-->
          <li class="nav-item">
            <a href="/polling" class="nav-link">
              <i class="nav-icon fa-solid fa-camera"></i>
              <p>
                Scanner Polling
              </p>
            </a>
          </li>
          <!--./Scanner-->

          @elseif(auth()->user()->roles_id == 5)
          <!--Dashboard-->
          <li class="nav-item">
            <a href="/cms-dapmen" onclick="openCMS(event, 'dashboard')" class="nav-link tablinks ">
                <i class="fas fa-rocket nav-icon"></i>
                <p>
                Dashboard
                </p>
            </a>
           </li>
           <!--./Dashboard-->

          <!--Beranda-->
          <li class="nav-item">
            <a href="/beranda" class="nav-link">
                <i class="fa-solid fa-earth-asia nav-icon"></i>
                <p>
                Home PPLK 2022
                </p>
            </a>
          </li>
          <!--./Beranda-->

          <!--Gform-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="nav-icon fa-solid fa-receipt"></i>
              <p>
                Link Gform
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a onclick="openCMS(event, 'kelola-gform')" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Link Gform</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./Gform-->

          <!--Scanner-->
          <li class="nav-item">
            <a href="/scanner" class="nav-link">
              <i class="nav-icon fa-solid fa-camera"></i>
              <p>
                Scanner Staff
              </p>
            </a>
          </li>
          <!--./Scanner-->

          @elseif(auth()->user()->roles_id == 6)
           <!--Dashboard-->
           <li class="nav-item">
            <a href="/cms-dapmen" onclick="openCMS(event, 'dashboard')" class="nav-link tablinks ">
                <i class="fas fa-rocket nav-icon"></i>
                <p>
                Dashboard
                </p>
            </a>
           </li>
           <!--./Dashboard-->

          <!--Beranda-->
          <li class="nav-item">
            <a href="/beranda" class="nav-link">
                <i class="fa-solid fa-earth-asia nav-icon"></i>
                <p>
                Home PPLK 2022
                </p>
            </a>
          </li>
          <!--./Beranda-->

          <!--User-->
          <li class="nav-item">
            <a class="nav-link tabitem">
              <i class="nav-icon fa-solid fa-user-astronaut"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('dapmenUser.create') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('dapmenUser.index') }}" class="nav-link tablinks">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Data User</p>
                </a>
              </li>
            </ul>
          </li>
          <!--./User-->

          <!--Scanner-->
          <li class="nav-item">
            <a href="/presensiMaba" class="nav-link">
              <i class="nav-icon fa-solid fa-camera"></i>
              <p>
                Scanner Maba
              </p>
            </a>
          </li>
          <!--./Scanner-->

          @endif

        </ul>
      </nav>
      <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->

  </aside>
  <!-- ./Main Sidebar Container -->
