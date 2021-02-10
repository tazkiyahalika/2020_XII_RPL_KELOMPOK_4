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
              <p class="login-box-msg">CHOOSE ROLE</p>

              <a href="register-student" class="form-control btn btn-primary">SISWA</a>
              <center><p >atau</p></center>
              <a href="register-coach" class="form-control btn btn-primary">PEMBINA</a>
              <div class="social-auth-links text-center">
                
              </div>

              <a href="{{URL('login')}}" class="text-center">LOG IN</a>
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























