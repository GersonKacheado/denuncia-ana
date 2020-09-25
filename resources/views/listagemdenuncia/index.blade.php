
<!DOCTYPE html>
<html class="no-js" lang="pt-br">
<head>
    <meta charset="UTF-8">
   
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
 
    <title>lista de denuncias</title>
</head>
<body id="top">
    <h1>Listagem de denuncia</h1>
 
{{-- <a href="{{route('user.create')}}" class="btn btn-primary">CADASTRAR</a>--}}
    <div >
        <div class="subscribe-form">
            <Table>
                <thead>
                    <th scope="col">CÓDIGO</th>
                    <th scope="col">email</th>
                    <th scope="col">mensagem</th>
                    <th width="100px" scope="col">arquivo</th>
                    <th></th>                
                    <th scope="col">GERENCIAR REGISTRO</th>
                </thead>
                <Tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->email}}</td>
                        <td>{{$post->mensagem}}</td>
                        <td width="100px">{{$post->arquivo}}</td>
                        
                       
                        
                      
                     
                    </tr>
                   
                    @endforeach
                    <td>
                        <a  class="btn btn-outline-warning">Editar</a>
                        <a  class="btn btn-outline-success">+ Criar Novo</a>
                        <a  class="btn btn-outline-info">Voltar</a>
                        <a   class="btn btn-outline-info">mais</a>

                    </td>
                    <td>
                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Apagar</button>                        
                        </form>
                    </td>     
                </tr>
                
             </Tbody>
            </Table>
    </div>
</div>
<div class="col-12">
    <div class="card card-primary">
      <div class="card-header">
        <div class="card-title">
            Midias de Denuncias
        </div>
      </div>
      <div class="card-body">
        <div>
          <div class="btn-group w-100 mb-2">
            <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items </a>
            <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Category 1 (WHITE) </a>
            <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Category 2 (BLACK) </a>
            <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Category 3 (COLORED) </a>
            <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Category 4 (COLORED, BLACK) </a>
          </div>
          <div class="mb-2">
            <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle items </a>
            <div class="float-right">
              <select class="custom-select" style="width: auto;" data-sortOrder>
                <option value="index"> Sort by Position </option>
                <option value="sortData"> Sort by Custom Data </option>
              </select>
              <div class="btn-group">
                <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
                <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class=" row mb-3">
           @foreach ($posts as $post)
           
            <div class="filtr-item col-sm-3 " data-category="1" data-sort="white sample">
            {{-- <a href="" data-toggle="lightbox" data-title=""> --}}
            <img src="{{asset('storage/'.$post->arquivo)}}" class="img-thumbnail " alt="" />
              {{-- </a> --}}
            </div>
            
           
          
           @endforeach
          </div> 
         

            
         
        </div>

      </div>
    </div>
  </div>

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