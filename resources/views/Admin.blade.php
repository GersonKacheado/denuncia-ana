<h3>ADMIN1</h3>


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
