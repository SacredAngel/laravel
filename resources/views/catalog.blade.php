@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
        
          @foreach($qaz as $err)
      
<div class="col-md-3 d-flex">      
<div class="card img-tovar align-items-stretch justify-content-between">
  <div class="">
    <h5 class="card-title">{{$err->name}}</h5>
    <p class="card-text">{{$err->har}}</p>
    <p class="card-text"><small class="text-muted">{{$err->cena}}</small></p>
  </div>

  
  <img src="/storage/app/{{$err->img}}"   class="card-img-bottom pb-3 pt-3"    alt="Card image cap">
  <a href="/detali/{{$err->id}}" class="btn btn-primary">детали товара</a>
</div></div>
          @endforeach   
        
    </div>
</div>
@endsection
