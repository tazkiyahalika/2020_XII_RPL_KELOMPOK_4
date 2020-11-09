<!DOCTYPE html>
<html>
<head>
@include('layouts.coach.head')
</head>
<body class="hold-transition skin-blue sedebar-mini">
<div class="wrapper"> 
  @include('layouts.coach.header')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  @include('layouts.coach.sidebar-coach')
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

@include('layouts.coach.script')


@yield('scripts')
</body>
</html>