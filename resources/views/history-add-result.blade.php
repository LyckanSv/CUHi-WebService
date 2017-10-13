@extends('layout/panel-base')

@section('page-header')
  Datos del capitulo
  <small></small>
@endsection

@section('main-content')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Capitulo</h3>
    </div>

    <div class="container">

      <h4>ID</h4>
      <p>{{$history->id}}</p>

      <h4>Nombre del autor</h4>
      <p>{{$history->author_name}}</p>

      <h4>Titulo</h4>
      <p>{{$history->title}}</p>

      <h4>Categoria</h4>
      <p>{{$history->category}}</p>

      <h4>Ruta de la imagen</h4>
      <p>{{$history->url_image}}</p>

      <h4>Numero de capitulos</h4>
      <p>{{$history->chapters}}</p>

      <h4>Descripcion</h4>
      <p>{{$history->description}}</p>

      <h4>Fecha</h4>
      <p>{{$history->date}}</p>

      
      <br>
    </div>
    <div class="box-footer">
      <button type="button" name="button" class="btn btn-primary" onclick="location.href='{{ url('homes') }}'">Salir</button>
    </div>

  </div>

@endsection
