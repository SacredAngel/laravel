@extends('layouts.app')

@section('content')
<div class="container justify-content-center d-flex">
        <div class="row justify-content-center col-lg-6 ">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  
  <div class="carousel-inner d-flex align-items-center carousel-razmer">
    @foreach ($new as $img)
    @if($loop->first)
    <div class="carousel-item active">
      <div class="d-flex justify-content-center ">
        <img src="/storage/app/{{$img->img}}" class="d-block w-50" alt="...">
      </div>
      
    </div>
  @else

    <div class="carousel-item  ">
      <div class="d-flex justify-content-center">
      <img src="/storage/app/{{$img->img}}" class="d-block w-50" alt="...">
    </div>
    </div>
    @endif  
    @endforeach
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div>
    </div>
</div>
@endsection
