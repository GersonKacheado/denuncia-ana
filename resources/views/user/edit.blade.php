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
    <title>PAGINA DE EDIÇÃO DO USUARIO</title>
</head>
<body id="top">
    <h4>Painel de Edição de Registro {{$id}}</h4>   

    <form  id="cForm" method="POST" action="{{ route('user.update',  $id) }}">
        <h3>RECADASTRE-SE.</h3>
    @method('PUT')
   @csrf

   <div class="form-field">
       <label for="name">Nome:</label>

     
           <input  id="cName" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

           @error('name')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
       </div>
   

   <div class="form-field">
       <label for="idade">Idade:</label>

       
           <input  id="cName" type="integer" class="form-control @error('idade') is-invalid @enderror" name="idade" value="{{ old('idade') }}" required autocomplete="idade" autofocus>

           @error('idade')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
       
   </div>

   <div class="form-field">
       <label for="contato">Contato:</label>

     
           <input  id="cName" type="text" class="form-control @error('contato') is-invalid @enderror" name="contato" value="{{ old('contato') }}" required autocomplete="contato" autofocus>

           @error('contato')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
       
   </div>

  

   <div class="form-field">
       <label for="email">Email:</label>


       
           <input  id="cWebsite" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

           @error('email')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
       
   </div>

   <div class="form-field">
       <label for="email">Digite sua Senha:</label>

       
           <input id="cWebsite" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

           @error('password')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
       
   </div>

   <div class="form-field">
       <label for="email">Confirme sua Senha:</label>
       

       
           <input id="cWebsite" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
       
   </div>

   <div class="form-field">
       
           <button type="submit" class="btn btn-primary">
               {{ __('Register') }}
           </button>
       
   </div>

</form> 













     <!-- Java Script
    ================================================== -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>    
</body>
</html>
