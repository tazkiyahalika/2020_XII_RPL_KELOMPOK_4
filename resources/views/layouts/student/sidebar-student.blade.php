       <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('/dist/img/Mahaputra.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('/student/dashboard') }}" class="d-block">SMK MAHAPUTRA </a>
        </div>
      </div>
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item has-treeview">
            <li class="nav-item">
            <a href="{{ url('/student/schedule') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Jadwal Ekstrakulikuler
                
              </p>
            </a>
          </li>
               
          <li class="nav-item has-treeview">
            <li class="nav-item">
            <a href="{{ url('/student/extracurricular') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Daftar Ekstrakulikuler
                
              </p>
            </a>
          </li>

           <li class="nav-item has-treeview">
            <li class="nav-item">
            <a href="{{ url('student/achievement') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Data Prestasi
                
              </p>
            </a>
          </li>
         

          <li class="nav-item has-treeview">
            <li class="nav-item">
            <a href="{{ url('student/extracurricular/list') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Ekskul Yang Diikuti
                
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