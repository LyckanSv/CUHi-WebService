
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
          <th>Opciones</th>
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
          <td>
            <div class="form-inline" style="Display:inline">
              <button type="button" name="button" class="btn btn-warning"
              onclick="location.href='{{ action('HistoryController@edit', $history->id)}}'">
              <i class="fa fa-pencil"></i> Editar</button>
            </div>
          </td>
          <td>
            <form class="form-horizontal" action="{{action('HistoryController@destroy', $history->id)}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
            </form>
          </td>
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
          <th>Opciones</th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>

@endsection
