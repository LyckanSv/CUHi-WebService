
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
          <th>Categoria</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($categories as $category)
        <tr>
          <td>{{$category->id}}</td>
          <td>{{$category->category}}</td>
          <td>
            <div class="form-inline" style="Display:inline">
              <button type="button" name="button" class="btn btn-warning"
              onclick="location.href='{{ action('CategoryController@edit', $category->id)}}'">
              <i class="fa fa-pencil"></i> Editar</button>
            </div>
          </td>
          <td>
            <form class="form-horizontal" action="{{action('CategoryController@destroy', $category->id)}}" method="post">
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
          <th>Categoria</th>
          <th>Opciones</th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>

@endsection
