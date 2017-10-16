  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">Opciones</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="{{url('homes')}}"><i class="fa fa-home"></i> <span>Inicio</span></a></li>


    <!-- Histories -->
    <li class="treeview">
      <a href="#"><i class="fa fa-bookmark"></i> <span>Historias</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{url('historyadd')}}"><i class="fa fa-plus"></i>Agregar historia</a></li>
        <li><a href="{{url('historyoption')}}"><i class="fa fa-refresh"></i>Opciones historia</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="#"><i class="fa fa-bookmark"></i> <span>Categorias</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{url('categoryadd')}}"><i class="fa fa-plus"></i>Agregar categoria</a></li>
        <li><a href="{{url('categoryoption')}}"><i class="fa fa-refresh"></i>Opciones Categoria</a></li>
      </ul>
    </li>

    <!-- Chapters -->
    <li class="treeview">
      <a href="#"><i class="fa fa-bookmark"></i> <span>Capitulos</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{url('chapteradd')}}"><i class="fa fa-plus"></i>Agregar capitulo</a></li>
        <li><a href="{{url('chapterselector')}}"><i class="fa fa-refresh"></i>Opciones capitulo</a></li>
      </ul>
    </li>
  </ul>
