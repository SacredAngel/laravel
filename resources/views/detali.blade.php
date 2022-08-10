@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
        <div class="col-md-3">
      
      
      
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$qwer->name}}</h5>
          <p class="card-text">{{$qwer->har}}</p>
          <p class="card-text"><small class="text-muted">{{$qwer->cena}}</small></p>
        </div>
      
        
        <img src="/storage/app/{{$qwer->img}}"   class="card-img-bottom pb-3 pt-3"    alt="Card image cap">
    
      </div>
      <a href="/add/{{$qwer->id}}" class=  "btn btn-primary">Добавить товар в корзину </a>

             
              </div>
          </div>
    </div>
</div>
@endsection
