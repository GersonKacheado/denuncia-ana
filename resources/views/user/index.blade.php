{{--@extends('layouts.user')
@section('content') --}}
<!DOCTYPE html>
<html class="no-js" lang="pt-br">
<head>
    <meta charset="UTF-8">
   <title>listagem de usuarios</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
<!-- Ekko Lightbox -->
<link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

 
</head>
<body >
    
    <div >
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Listagem de Usuários</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
    
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Exibindo Listagem</h3>
    
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
               {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>---}}
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table table-striped projects">
                  <tbody>
                    <thead>
                        <tr>
                            <th style="width: 5%">
                              CÓDIGO
                            </th>
                            <th style="width: 20%">
                              NOME
                            </th>
                            <th style="width: 10%">
                              IDADE
                            </th>
                            <th style="width: 15%" >
                              CONTATO
                            </th>
                            <th style="width: 15%">
                              EMAIL
                            </th>
                            <th style="width: 35%">
                              GERENCIAR REGISTRO
                              </th>
                           
                        </tr>
                        

                  </tbody>
    
                          @foreach ( $user as $user )
                          <tr>
                              <td>{{ $user->id }}</td>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->idade }}</td>
                              <td>{{ $user->contato }}</td>
                              <td>{{ $user->email }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{route('user.show', $user->id)}}">
                                  
                                   Mais detalhes
                               </a>
                               <a class="btn btn-warning btn-sm" href="{{ route('user.edit', $user->id) }}">
                                 
                                   Editar
                               </a>
                             
                               
                                <a class="btn btn-danger btn-sm">
                               
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Apagar</button>                        
                                    </form>
                                
                                </a>
                              </td>
                           </tr>
                           




                          
                      </thead>
                     
                      @endforeach

                        
                        
                     
                         
   {{-- <h1>Exibindo usuario</h1>
 
{{-- <a href="{{route('user.create')}}" class="btn btn-primary">CADASTRAR</a>

    <div >
        <div class="subscribe-form">
            <Table>
                <thead>
                    <th scope="col">CÓDIGO</th>
                    <th scope="col">NOME</th>
                    <th scope="col">IDADE</th>
                    <th scope="col">CONTATO</th>
                    <th scope="col">EMAIL</th> 
                    <th></th>                
                    <th scope="col">GERENCIAR REGISTRO</th>
                </thead>
                <Tbody>
                    @foreach ( $user as $user )
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->idade }}</td>
                        <td>{{ $user->contato }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                          {{-- <a href="{{route('user.show', $user->id)}}">Detalhes</a>

                        </td>
                        <td>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-outline-warning">Editar</a>
                            <a href="{{ route('user.create') }}" class="btn btn-outline-success">+ Criar Novo</a>
                            <a href="{{ route('user.index') }}" class="btn btn-outline-info">Voltar</a>
                            <a href="{{route('user.show', $user->id)}}"  class="btn btn-outline-info">mais</a>
    
                        </td>
                        <td>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Apagar</button>                        
                            </form>
                        </td>     
                    </tr>
                    @endforeach
                 </Tbody>
                </Table>
        </div>
    </div>
---}}

 








  <!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Ekko Lightbox -->
<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Filterizr-->
<script src="../plugins/filterizr/jquery.filterizr.min.js"></script>  

 
</body>
</html>

{{--@endsection --}}
  