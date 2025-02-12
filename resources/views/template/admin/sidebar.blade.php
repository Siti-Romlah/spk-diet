<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: black !important; ">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{url('/')}}/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Admin</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{url('/')}}/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">MAKANAN DIET</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview ">
          <a href="{{ url('/base/home') }}" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview ">
          <a href="{{url('base/makanan')}}" class="nav-link ">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Data makanan
            </p>
          </a>
        </li>
        <!-- <li class="nav-item has-treeview">
          <a href="{{url('base/pengguna')}}" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              pengguna
            </p>
          </a>
        </li> -->
        <!-- <li class="nav-item has-treeview">
          <a href="{{ url('base/hasil') }}" class="nav-link ">
            <i class="nav-icon fas  fa-list"></i>
            <p>
              hasil akhir
            </p>
          </a>
        </li> -->
        <li class="nav-item has-treeview">
          <a href="{{ url('base/user') }}" class="nav-link ">
            <i class="nav-icon fas  fa-list"></i>
            <p>
              Users
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>