       <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('/dist/img/Mahaputra.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Siswa</a>
        </div>
      </div>
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <li class="nav-item">
            <a href="{{ url('/student/extracurricular') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Daftar Ekstrakulikuler
                
              </p>
            </a>
          </li>
         
          

          <li class="nav-item">
            <a href="{{ url('/logout')}}" class="nav-link">
              <i class="fa fa-arrow-circle-left"></i>
              <p>
                Keluar
              </p>
            </a>

          </li>
    
        </ul>
      </nav>