       <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('/dist/img/Mahaputra.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">SMK MAHAPUTRA </a>
        </div>
      </div>
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


           

          <li class="nav-item">
            <a href="{{ url('/admin/extracurricular') }}" class="nav-link">
              <i class="fas fa-book" style="font-size: 20px;"></i>
              <p>
                Data Ekstrakulikuler
                
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{ url('/admin/achievement') }}" class="nav-link">
              <i class="fas fa-book" style="font-size: 20px;"></i>
              <p>
                Data Prestasi
                
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ url('/admin/coach') }}" class="nav-link">
              <i class="fas fa-book" style="font-size: 20px;"></i>
              <p>
                Data Pembina
                
              </p>
            </a>
          </li>


          <!-- <li class="nav-item">
            <a href="{{ url('/admin/student') }}" class="nav-link">
              <i class="fas fa-book" style="font-size: 20px;"></i>
              <p>
                Data Siswa
                
              </p>
            </a>
          </li> -->

           <li class="nav-item">
            <a href="{{ url('/admin/schedule') }}" class="nav-link">
              <i class="fas fa-book" style="font-size: 20px;"></i>
              <p>
                Jadwal Ekstrakulikuler
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/extracurricular/create') }}" class="nav-link">
              <i class="fas fa-plus-square" style="font-size: 20px;"></i>
              <p>
                Tambah Ekstrakulikuler
              </p>
            </a>

          </li>

            <li class="nav-item">
            <a href="{{ url('/admin/student/obligate') }}" class="nav-link">
              <i class="fas fa-book" style="font-size: 20px;"></i>
              <p>
              Data Anggota Wajib
                
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