<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Area de Administrador</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
     
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
     <H4>ADMIN</H4>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Listagem de Usuario</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
             <li><a href="{{route('user.index')}}" class="dropdown-item">Listagem</a> </li>
             
            

        </ul>
        
      </ul>
      <ul class="navbar-nav">
         
        <li class="nav-item dropdown">
          <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Listagem de Denuncia</a>
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
            <li><a href="{{route('post.index')}}" class="dropdown-item">Listagem </a></li>
              

      </ul>
      
    </ul>
    <ul>
      <a   class="nav-link dropdown-toggle"  href="{{ route('index') }}"
      onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
       {{ __('Sair') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
       @csrf
    </form> 
    </ul>
    </div>

   
  </nav>

  

  <!-- /.navbar -->
 

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>


{{--@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboar</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 
                    You are loggesss in como administrador!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
