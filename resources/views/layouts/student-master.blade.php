<!DOCTYPE html>
<html>
<head>
@include('layouts.student.head')
</head>
<body class="hold-transition skin-blue sedebar-mini">
<div class="wrapper"> 
  @include('layouts.student.header')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  @include('layouts.student.sidebar-student')
</aside>

<div class="content-wrapper">
<section class="content">
  <div class="row">
    <div class="col-md-12">
<div class="pull-right"> 
</div> 
</div> 
</div> 

@yield('content')


</section> 
</div>
</div>


@include('layouts.student.script')

@yield('scripts')
</body>
</html>