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
    <title>Document</title>
</head>
<body id="top">

<h1>REGISTRO DE DENUNCIA</h1>
<div class="col-five md-full end s-footer__subscribe">
 <div class="subscribe-form">
    <table>
        <thead>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">MENSAGEM</th>
            <th scope="col">ARQUIVO</th>
          
            {{--<th scope="col">SENHA</th>--}}
            <th colspan="2">GERENCIAR REGISTRO</th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->mensagem }}</td>
                <td>{{ $post->arquivo }}</td>
               
              {{--  <td>{{ $user->password }}</td>--}}
              <td>
                <a href="{{route('')}} " class="btn btn-outline-info">voltar</a>
              </td>
              
                <td>
                    <form action="{{ route('') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Apagar</button>                        
                    </form>
                </td>                      
            </tr>
        </tbody>
    </table>

 </div>
   
</div>













 <!-- Java Script
    ================================================== -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>    
</body>
</html>


