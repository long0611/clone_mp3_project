  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{auth()->user()->username}} </a>
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
                <a href="{{route('songs')}}" class="{{ Request::routeIs('songs') ? 'nav-link active' : 'nav-link' }}">
                  <i class="nav-icon fas fa-columns"></i>
                  <p>
                    Quản lý bài hát
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('genres')}}" class="{{ Request::routeIs('genres') ? 'nav-link active' : 'nav-link' }}">
                  <i class="nav-icon fas fa-columns"></i>
                  <p>
                    Quản lý thể loại
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('playlists')}}" class="{{ Request::routeIs('playlists') ? 'nav-link active' : 'nav-link' }}">
                  <i class="nav-icon fas fa-columns"></i>
                  <p>
                    Quản lý playlist
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('albums')}}" class="{{ Request::routeIs('albums') ? 'nav-link active' : 'nav-link' }}">
                  <i class="nav-icon fas fa-columns"></i>
                  <p>
                    Quản lý album
                  </p>
                </a>
              </li>
    
              <li class="nav-item">
                <a href="{{route('topics')}}" class="{{ Request::routeIs('topics') ? 'nav-link active' : 'nav-link' }}">
                  <i class="nav-icon fas fa-columns"></i>
                  <p>
                    Quản lý chủ đề
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('ads')}}" class="{{ Request::routeIs('ads') ? 'nav-link active' : 'nav-link' }}">
                  <i class="nav-icon fas fa-columns"></i>
                  <p>
                    Quản lý quảng cáo
                  </p>
                </a>
              </li>
    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>