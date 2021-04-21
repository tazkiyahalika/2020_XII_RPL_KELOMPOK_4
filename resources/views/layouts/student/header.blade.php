  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
     
        <div class="image">
       <li class="nav-item">
            <a href="{{ url('account/profile') }}">
            <img class="align-self-start mr-3" style="width:40px; height:40px;" src="{{url('/dist/img/avatar-new.png')}}"
            alt="user avatar">
            </a>
       </li>
            </div>
            <div>
          <li style="margin-top:10px; margin-right:15px">
            <h6 class="mt-2 user-title" >{{ Auth::user()->usr_name}}</h6>
          </li>
          </div>
        
    </ul>
  </nav>
  <!-- /.navbar -->




