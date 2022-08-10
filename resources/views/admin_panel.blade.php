 @extends('layouts.app')

@section('content')
<div class="tovar justify-content-center d-flex pb-4">
  <a href="http://ivuntxaa-m1.wsr.ru/form" class="btn btn-primary ">Опубликовать новый товар</a>
</div>
<div class="container">
  <div class="row justify-content-center">  
  @foreach($new as $arr)   
    <div class="col-md-3 d-flex">      
      <div class="card img-tovar align-items-stretch justify-content-between">
        <div class="card ">
          <div class="card-body">
            <h5 class="card-title">{{$arr->name}}</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
          <img src="/storage/app/{{$arr->img}}"   class="card-img-bottom pb-3 pt-3"    alt="Card image cap">
        </div>
        <div class="d-flex flex-column">
          <a href="http://ivuntxaa-m1.wsr.ru/redect/{{$arr->id}}"class="btn btn-primary">Редактировать</a>
          <a href="http://ivuntxaa-m1.wsr.ru/delet/{{$arr->id}}" class="btn btn-primary">удалить товар </a>
          </div>
        </div>
      </div>
      @endforeach
      </div>
      </div>
    
       
  

@endsection

     
   