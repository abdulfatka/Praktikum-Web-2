  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../admin/" class="brand-link">
          <img src="{{ asset('assets/img/LogoNurulFikri.png') }}" alt="Nurul Fikri Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light"><span> {{ strtoupper(Auth::user()->role) }} </span></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('assets/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">{{ strtoupper(Auth::user()->name) }}</a>
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
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="../admin/" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  
                  <li class="nav-item">
                      <a href="{{ url('/admin/prodi') }}" class="nav-link">
                          <i class="nav-icon fa fa-table"></i>
                          <p>
                              Program Studi
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ url('/admin/dosen') }}" class="nav-link">
                          <i class="nav-icon fa fa-table"></i>
                          <p>
                              Dosen
                          </p>
                      </a>
                  </li>
                 

                  <li class="nav-item">
                      <a href="../admin/mahasiswa" class="nav-link">
                          <i class="nav-icon fa fa-table"></i>
                          <p>
                              Mahasiswa
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="../admin/rombongan_belajar" class="nav-link">
                          <i class="nav-icon fa fa-table"></i>
                          <p>
                              Rombongan Belajar
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ url('/dashboard') }}" class="nav-link">
                          <i class="nav-icon fas"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                  <path fill="#b1bdc9" d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                              </svg></i>
                          <p>
                              Kembali
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>