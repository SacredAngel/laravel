@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Редактирование товара  </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <form enctype="multipart/form-data" method="post" class="form-control" >
                  @csrf
                  <input type="text" name="name" placeholder="Наименование" class="form-control" value="{{$qwer->name}}"><br>
                  <input type="text" name="cena" placeholder="Цена" class="form-control" value="{{$qwer->cena}}" ><br>
               
                  <input type="text" name="har" placeholder="Характеристики" class="form-control" value="{{$qwer->har}}"><br>
                  <input type="text" name="strana" placeholder="Страна" class="form-control" value="{{$qwer->strana}}"><br>
                  <input type="text" name="year" placeholder="Год выпуска" class="form-control" value="{{$qwer->year}}"><br>
                  <input type="text" name="model" placeholder="Модель" class="form-control" value="{{$qwer->model}}"><br>
                  <input type="file" name="img" class="form-control" value="{{$qwer->img}}" ><br>

                  <input type="submit">
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
