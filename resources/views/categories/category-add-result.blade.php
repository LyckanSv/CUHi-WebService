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
      <p>{{$category->id}}</p>

      <h4>Categoria creada</h4>
      <p>{{$category->category}}</p>


      <br>
    </div>
    <div class="box-footer">
      <button type="button" name="button" class="btn btn-primary" onclick="location.href='{{ url('homes') }}'">Salir</button>
    </div>

  </div>

@endsection
