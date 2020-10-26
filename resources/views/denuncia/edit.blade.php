<!DOCTYPE html>
<html class="no-js" lang="pt-br">
<head>
    <meta charset="UTF-8">
   

 <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/pace.min.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>PAGINA DE EDIÇÃO DE DENUNCIA</title>
</head>
<body id="top">
    <h4 style="text-align: center">Painel de Edição de Registro de Denuncia</h4>   
   
    <form  id="cForm" action="{{ route('post.update', $posts->id) }}" method="POST" >
        <h3 style="text-align: center">Atualizar Informações.</h3>
        @method('PATCH')
        @csrf

   <div class="form-field">
       <label for="name">Nome:</label>     
   <input  id="cName" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  value="{{$posts->name}}" required autocomplete="name" >
           @error('name')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
       </div> 

   <div class="form-field">
       <label for="mensagem">Mensagem:</label>       
           <input  id="cName" type="text" class="form-control @error('mensagem') is-invalid @enderror" name="mensagem"  value="{{ $posts->mensagem }}" required autocomplete="mensagem" autofocus>
           @error('mensagem')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror       
   </div>

   <div class="form-field">
       <label for="arquivo">:</label>     
           <input  id="cName" type="file" class="form-control @error('arquivo') is-invalid @enderror" name="arquivo" autocomplete="arquivo" autofocus>
           @error('arquivo')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror       
   </div>

   <div class="form-field">
    <label for="users_id">usuario:</label>       
        <input  id="cName" type="text" class="form-control @error('users_id') is-invalid @enderror"  value="{{ $posts->users_id }}">
        @error('users_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror       
</div>
  



   <div class="form-field">
    <div class="form-group ml-2">
        <input type="submit" name="btnEnviar" class="btn btn-success py-3 px-4">
        <a href="{{ route('post.index') }}" class="btn btn-danger py-3 px-4">Cancelar</a>
      </div>
      
          {{-- <button type="submit" class="btn btn-primary">
               {{ __('Register') }}
           </button>
       --}}
   </div>

</form> 

@foreach ($posts as $post)                           
<div class="row">
    <img src="{{asset('storage/' . $posts->arquivo)}}"                                                                              alt="" style="height: 250px"/>
</div> 
@endforeach













     <!-- Java Script
    ================================================== -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>    
</body>
</html>