<!doctype html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Denuncia</title>
    <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
 
    <header>
      <div class="navbar navbar-dark bg-dark shadow-sm">
          <a href="#" class="navbar-brand d-flex align-items-center">                                                                                                                                                                                                                                                                            
            <strong>Faça sua Denuncia</strong>
          </a>
      </div>
    </header>
    
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Registre aqui sua Denuncia</h1>
          <div class="col-xl-10 col-lg-0 offset-xl-1 offset-lg-1">
            @include('flash::message')
        </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
          <form method="POST" action="/enviadenuncia" enctype="multipart/form-data">
            @csrf
            <div class="form-group text-left">
              <label for="email">Digite Seu Nome</label>
              <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Digite seu nome" value="{{Auth::user()->name}}">
              @if($errors->has('name'))
              <div class="invalid-feedback">
                  {{$errors->has('first')}}
              </div>
          @endif
    
          @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
  
            </div>
           
            <div class="form-group text-left">
              <label for="mensagem">Sua mensagem</label>
              <textarea class="form-control @error('mensagem') is-invalid @enderror" id="mensagem" name="mensagem" rows="3"></textarea>
              @if($errors->has('mensagem'))
              <div class="invalid-feedback">
                  {{$errors->has('first')}}
              </div>
          @endif
    
          @error('mensagem')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div>
           

            <div class="custom-file">
              <input type="file" class="form-control @error('arquivo') is-invalid @enderror" id="arquivo" name="arquivo">
              <label class="custom-file-label" for="arquivo">Escolha um arquivo</label>
              @if($errors->has('arquivo'))
              <div class="invalid-feedback">
                  {{$errors->has('first')}}
              </div>
          @endif
    
          @error('arquivo')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div>
          
            <p>
              <button type="submit" class="btn btn-primary my-2">Enviar</button>
              <button type="reset" class="btn btn-secondary my-2">Cancelar</button>
            </p>
        
              
            
              
           
          </form>
          
      

          <a  href="{{ route('index') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           {{ __('Sair') }}
       </a>
       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           @csrf
       </form> </button>
        

          


{{--      <div class="album py-5 bg-light">
         <div class="container">
           <div class="row">
            @foreach($posts as $c)           
            <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top figure-img img-fluid rounded" src="/storage/{{$c->arquivo}}">
              <div class="card-body">
                <p class="card-text">{{$c->email}}</p>
                <p class="card-text">{{$c->mensagem}}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <!--button type="button" class="btn btn-sm btn-outline-secondary">Download</button-->
                    <a type="button" class="btn btn-sm btn-outline-secondary" href="/download/{{$c->id}}">Download</a>
                    <form method="post" action="/{{$c->id}}">
                      @csrf
                      <input type="hidden" name="_method" value="delete">
                      <button type="submit" class="btn btn-sm btn-outline-danger">Apagar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
           </div>
         </div>
       </div> --}}




          
         {{---<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>

---}}



        </div>
      </section>

{{--    <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            @foreach ($posts as $post)
                
        
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <img class="card-img-top figure-img img-fluid rounded" src="/storage/{{$post->arquivo}}">
                    <div class="card-body">
                      <p class="card-text">{{$post->email}}</p>
                      <p class="card-text">{{$post->mensagem}}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <!--button type="button" class="btn btn-sm btn-outline-secondary">Download</button-->
                          <a type="button" class="btn btn-sm btn-outline-secondary" href="/download/{{$post->id}}">Download</a>
                          <form method="post" action="/{{$post->id}}">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="btn btn-sm btn-outline-danger">Apagar</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
          </div>
        </div>
      </div>--}}

    </main>
    <!-- jQuery -->

<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
   
</body>
</html>



