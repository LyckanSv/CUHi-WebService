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
      <p>{{$chapter->id}}</p>

      <h4>ID Historia</h4>
      <p>{{$chapter->history_id}}</p>

      <h4>Numero de Capitulo</h4>
      <p>{{$chapter->chapter}}</p>

      <h4>Direccion de la imagen</h4>
      <p>{{$chapter->image_url}}</p>

      <h4>Contenido del capitulo</h4>
      <p>{{$chapter->body}}</p>
      <br>


    </div>
    <div class="box-footer">
      <button type="button" name="button" class="btn btn-primary" onclick="location.href='{{ url('homes') }}'">Salir</button>
    </div>

  </div>

@endsection
