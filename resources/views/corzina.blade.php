@extends('layouts.app')

@section('content')

<div class="container">

        <div class="row justify-content-center">
        @foreach($new as $err)
   
     
<div class="col-md-3 d-flex" >      
<div class="card img-tovar align-items-stretch justify-content-between  razmer  ">
  <div class="">
    <h5 class="card-title"></h5>
    <p class="card-text">Название товара</p>
    <img src="/storage/app/{{$err->img}}" alt=""  class="card-img-bottom pb-3 pt-3"    alt="Card image cap">
    <a href="http://ivuntxaa-m1.wsr.ru/corzina/{{$err->id}}" class="btn btn-primary">удалить товар </a>
  </div>


</div></div>
@endforeach
        
    </div>

</div>

@endsection
