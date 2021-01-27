		<!DOCTYPE html>
		<html>
		<head>
		  <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <title>SMK MAHAPUTRA</title>
		  <!-- Tell the browser to be responsive to screen width -->
		  <meta name="viewport" content="width=device-width, initial-scale=1">

		  <!-- Font Awesome -->
		  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
		  <!-- Ionicons -->
		  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		  <!-- icheck bootstrap -->
		  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
		  <!-- Theme style -->
		  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
		  <!-- Google Font: Source Sans Pro -->
		  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
		</head>
		<body class="hold-transition register-page">
		<div class="register-box">
		  <div class="register-logo">
		    <a href="../../index2.html">EKSTRAKULIKULER</a>
		  </div>

		  <div class="card">
		    <div class="card-body register-card-body">
		      <p class="login-box-msg">Register</p>

		      <form action="{{route('register')}}" method="post">
		      @csrf
		        <div class="input-group mb-3">
		          <input id="usr_name" type="text" class="form-control @error('usr_name') is-invalid @enderror" name="usr_name" value="{{ old('usr_name') }}" autocomplete="usr_name" autofocus placeholder="Name">
						@error('usr_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
		          <div class="input-group-append">
		            <div class="input-group-text">
		              <span class="fas fa-user"></span>
		            </div>
		          </div>
		        </div>
		        <div class="input-group mb-3">
		          <input id="usr_email" type="email" class="form-control @error('usr_email') is-invalid @enderror" name="usr_email" value="{{ old('usr_email') }}" autocomplete="usr_email" placeholder="Email">
						@error('usr_email')
                            <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                            </span>
                        @enderror
		          <div class="input-group-append">
		            <div class="input-group-text">
		              <span class="fas fa-envelope"></span>
		            </div>
		          </div>
		        </div>
		        <div class="input-group mb-3">
		          <input id="usr_phone" value="{{ old('usr_phone') }}" type="text" class="form-control @error('usr_phone') is-invalid @enderror" name="usr_phone" autocomplete="off" placeholder="No.Phone">
							@error('usr_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
		          <div class="input-group-append">
		            <div class="input-group-text">
		              <span class="fas fa-lock"></span>
		            </div>
		          </div>
		        </div>
		        <div class="input-group mb-3">
		           <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Password">
						@error('usr_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
		          <div class="input-group-append">
		            <div class="input-group-text">
		              <span class="fas fa-lock"></span>
		            </div>
		          </div> 
		        </div>
		       <div class="input-group mb-3">
		           <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Confir Password">
						
		          <div class="input-group-append">
		            <div class="input-group-text">
		              <span class="fas fa-lock"></span>
		            </div>
		          </div> 
		        </div>
		          <div class="input-group-append">
		            <div class="input-group-text">
		              <span class="fas fa-lock"></span>
		            </div>
		          </div> 
		        </div>
		        <div class="row">
		          <div class="col-8">
		            
		          </div>
		          <!-- /.col -->
		          <div class="col-4">
		            <button type="submit" class="btn btn-primary btn-block">Register</button>
		          </div>
		          <!-- /.col -->
		        </div>
		      </form>

		      <div class="social-auth-links text-center">
		        
		      </div>

		      <a href="{{URL('login')}}" class="text-center">LOG IN </a>
		    </div>
		    <!-- /.form-box -->
		  </div><!-- /.card -->
		</div>
		<!-- /.register-box -->

		<!-- jQuery -->
		<script src="{{ URL::to('assets/plugins/jquery/jquery.min.js') }}"></script>
		<!-- Bootstrap 4 -->
		<script src="{{ URL::to('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- AdminLTE App -->
		<script src="{{ URL::to('dist/js/adminlte.min.js') }}"></script>
		</body>
		</html>























