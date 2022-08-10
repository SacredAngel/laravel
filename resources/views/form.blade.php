@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Новый товар</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <form enctype="multipart/form-data" method="post" class="form-control" >
                  @csrf
                  <input type="text" name="name" placeholder="Наименование" class="form-control" ><br>
                  <input type="text" name="cena" placeholder="Цена" class="form-control" ><br>
               
                  <input type="text" name="har" placeholder="Характеристики" class="form-control" ><br>
                  <input type="text" name="strana" placeholder="Страна" class="form-control" ><br>
                  <input type="text" name="year" placeholder="Год выпуска" class="form-control" ><br>
                  <input type="text" name="model" placeholder="Модель" class="form-control" ><br>
                  <input type="file" name="img" class="form-control" ><br>

                  <input type="submit">
                  </form>
                  </div>
                  </div>
                  </div>
    <div class="col-md-3  card">
                <div class="card-header">Категория</div>

                <div class="card-body">
              

                  <form method="post" class="form-control" action="/cat " >
                  @csrf
                  <input type="text" name="cat" placeholder="Название категории" class="form-control" ><br>
                 
                  <input type="submit">
                  </form>
                  @foreach($qwer as $err)
                  {{$err->cat}}
                  <a href="http://ivuntxaa-m1.wsr.ru/corzina/{{$err->id}}" class="btn btn-primary">категории </a>
                  @endforeach
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
