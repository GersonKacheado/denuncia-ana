{{--@extends('layouts.user')
@section('content') --}}
<!DOCTYPE html>
<html class="no-js" lang="pt-br">
<head>
    <meta charset="UTF-8">
   

 
</head>
<body id="top">
    <h1>Exibindo usuario</h1>
 
{{-- <a href="{{route('user.create')}}" class="btn btn-primary">CADASTRAR</a>--}}
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
                          {{-- <a href="{{route('user.show', $user->id)}}">Detalhes</a>--}} 
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


 








    

 <!-- Java Script
    ================================================== -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>    
</body>
</html>

{{--@endsection --}}
  