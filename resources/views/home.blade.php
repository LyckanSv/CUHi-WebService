
@extends('layout/panel-base')

@section('page-header')
  Inicio
  <small>Bienvenido</small>
@endsection

@section('main-content')

  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Historias en CUHi</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>id</th>
          <th>Autor</th>
          <th>Titulo</th>
          <th>Genero</th>
          <th>Capitulos</th>
          <th>Puntaje</th>
          <th>Fecha</th>
        </tr>
        </thead>


        <tbody>
          @foreach ($histories as $history)
            <tr>
              <td>{{$history->id}}</td>
              <td>{{$history->author_name}}</td>
              <td>{{$history->title}}</td>
              <td>{{$history->category}}</td>
              <td>{{$history->chapters}}</td>
              <td>{{$history->rating}}</td>
              <td>{{$history->date}}</td>
            </tr>
        @endforeach
        </tbody>


        <tfoot>
        <tr>
          <th>id</th>
          <th>Autor</th>
          <th>Titulo</th>
          <th>Genero</th>
          <th>Capitulos</th>
          <th>Puntaje</th>
          <th>Fecha</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>




















@endsection
