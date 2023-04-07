  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="bx bxs-grid"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      {{-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> --}}
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          {{ (Auth::user())?Auth::user()->username:'Login' }}
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="{{ route('index.my.profil') }}" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> My Profil
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a type="button" href="{{ route('logout') }}" onclick="confirm('Anda akan dikeluarkan dari sesi.')" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Log Out
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light elevation-4">
    <!-- Brand Logo -->
    <div class="row justify-content-center">
      <a href="{{ url('/') }}" class="text-center">
        <img style="width: 140px;position: absolute;left: 50px;" src="{{ url('assets/img/logo.png') }}" alt="AdminLTE Logo" class="" style="opacity: .8">
      </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <div class="nav-header">MENU USER</div>
          <li class="nav-item">
            <a href="{{ route('index.beranda') }}" class="nav-link {{ ($title==='Beranda')?'active':'' }}">
              <i class="bx bxs-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('index.status.pengajuan') }}" class="nav-link {{ ($title==='Status Pengajuan')?'active':'' }}">
              <i class="bx bxs-search"></i>
              <p>
                Status Pengajuan
              </p>
            </a>
          </li>
          <div class="nav-header">MENU FORMULIR</div>
          <li class="nav-item">
            <a href="{{ route('index.penerbitan.simaksi') }}" class="nav-link {{ ($title==='Formulir Penerbitan SIMAKSI')?'active':'' }}">
              <i class="bx bxs-edit-alt"></i>
              <p>
                Penerbitan SIMAKSI
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('index.perpanjangan.simaksi') }}" class="nav-link {{ ($title==='Formulir Perpanjangan SIMAKSI')?'active':'' }}">
              <i class="bx bxs-edit-alt"></i>
              <p>
                Perpanjangan SIMAKSI
              </p>
            </a>
          </li>
          <div class="nav-header">MENU ADMIN</div>
          <li class="nav-item">
            <a href="{{ route('index.dashboard') }}" class="nav-link {{ ($title==='Dashboard'?'active':'') }}">
              <i class="bx bxs-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <div class="nav-header">MANAJEMEN SIMAKSI</div>
          <li class="nav-item">
            <a href="{{ route('index.pengajuan.masuk') }}" class="nav-link {{ ($title==='Pengajuan Masuk')?'active':'' }}">
              <i class="bx bxs-archive-in"></i>
              <p>
                Pengajuan Masuk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('index.pengajuan.diproses') }}" class="nav-link {{ ($title==='Pengajuan Diproses')?'active':'' }}">
              <i class="bx bxs-detail"></i>
              <p>
                Pengajuan Diproses
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('index.pengajuan.ditolak') }}" class="nav-link {{ ($title==='Pengajuan Ditolak')?'active':'' }}">
              <i class="bx bxs-minus-circle"></i>
              <p>
                Pengajuan Ditolak
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('index.pengajuan.disetujui') }}" class="nav-link {{ ($title==='Pengajuan Disetujui')?'active':'' }}">
              <i class="bx bx-check-double"></i>
              <p>
                Pengajuan Disetujui
              </p>
            </a>
          </li>

          <div class="nav-header">MANAJEMEN USER</div>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="bx bxs-user-badge"></i>
              <p>
                Data Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('index.data.user') }}" class="nav-link {{ ($title==='Data User')?'active':'' }}">
              <i class="bx bxs-user-detail"></i>
              <p>
                Data User
              </p>
            </a>
          </li>
          <div class="nav-header">Lainnya</div>
          <li class="nav-item">
            <a href="{{ route('index.pengumuman') }}" class="nav-link {{ ($title==='Data Pengumuman')?'active':'' }}">
              <i class="bx bxs-user-rectangle"></i>
              <p>
                Data Pengumuman
              </p>
            </a>
          </li>
          
          {{-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>