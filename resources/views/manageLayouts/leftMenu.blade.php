
@section('content')
    
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('dashboard') }}" class="brand-link">
              <img src="{{ url('vendor') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
              <span class="brand-text font-weight-light">Admin VapeStore</span>
            </a>
        
            <!-- Sidebar -->
            <div class="sidebar">
              <!-- Sidebar user panel (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                  <img src="{{ url('vendor') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                  <a href="#" class="d-block">{{ Auth::user()->name }}</a>
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
                        <a href="pages/widgets.html" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                            Qu???n l?? s???n ph???m
                          </p>
                        </a>
                      </li>
                  <li class="nav-item">
                    <a href="{{ url('users') }}" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        Qu???n l?? ng?????i d??ng
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        Qu???n l?? th??ng s???
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        S???n ph???m
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="./index.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Vape Kit</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="./index2.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Pod</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="./index3.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Juice FreeBase</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ url('juices') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Juice Saltnic</p>
                        </a>
                      </li>
                    </ul>
                  </li>
              </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
          </aside>
   
