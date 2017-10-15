@extends('layout/panel-base')

@section('page-header')
  Nuevas capirulo
  <small>Continua donde de quedaste</small>
@endsection

@section('main-content')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Formulario de capitulos</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->

    <form role="form" method="POST" action="{{url('chapteraddpost')}}" enctype="multipart/form-data" >
      {{csrf_field()}}
      <div class="box-body">
        @if(count($errors))
          <div class="alert alert-danger container-fluid">
            <div class="col-md-6">
              <h2><strong>Alto ahi rufian!!!</strong></h2>
              <p><strong>Tienes cosas pendientes que hacer</strong></p>
              <br/>
              <ul class="">
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            <div class="col-md-6 text-right">
              <img src="img/stop-police.png" width="130px" class="center image-responsive">
            </div>

          </div>
        @endif

        @if (\Session::get('success'))
          <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
          </div>
        @endif


        <div class="form-group{{ $errors->has('history_id') ? 'has-error':'' }}">
          <label>Historia</label>
          <select class="form-control select2" style="width: 100%;" name="history_id" id="category">
            @foreach ($histories as $history)
              <option>{{ $history->id . "-".$history->title . " - Capitulos: ". $history->chapters}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
          <label for="content">Contenido del Capitulo</label>
          <textarea rows="10" class="form-control" id="content" name="body" ></textarea>
        </div>


        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
          <label for="exampleInputFile">Imagen del Capitulo </label>
          <input type='file' id="image" name="image" class="inputImage" />
          <br>
          <img id="" class="image_upload_preview " src="img/placeholder-image.png" alt="your image" width="200px" />

          <p class="help-block">Seleccione la imagen en formato jpg/png/svg</p>
        </div>


      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-info">Enviar</button>
      </div>


      <!-- MODAL -->
      <div class="modal modal-info fade" id="modal-info">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Enviar historia?</h4>
              </div>
              <div class="modal-body">
                <p>
                  Todos los campos seran enviados y publicados en CUHi. Desea guardar los cambios?
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Salir</button>
                <button type="submit" class="btn btn-outline">Guardar</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /MODAL -->

      </form>
    </div>
  @endsection
