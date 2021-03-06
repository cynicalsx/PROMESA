<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url ('portal')}}">
    <div class="sidebar-brand-icon ">
      <img src="{{ asset('../img/blank.png')}}" alt="">
    </div>

  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-2">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link "{{Request::is('/'?'active' : '')}}"" href="{{url ('portal')}}">
      <i class="fas fa-home"></i>
      <span>Inicio</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <!-- <div class="sidebar-heading">
    Usuarios
  </div> -->

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-users"></i>
      <span>Usuarios</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item "{{Request::is('/'?'active' : '')}}"" href="{{url ('portal/alumnos')}}">Alumnos</a>
        <a class="collapse-item "{{Request::is('/'?'active' : '')}}"" href="{{url ('portal/aspirantes')}}">Aspirantes</a>
        <a class="collapse-item "{{Request::is('/'?'active' : '')}}"" href="{{url ('portal/docentes')}}">Docentes</a>
        <a class="collapse-item "{{Request::is('/'?'active' : '')}}"" href="{{url ('portal/personal')}}">Personal</a>
      </div>
    </div>
  </li>


  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link "{{Request::is('/'?'active' : '')}}"" href="{{url ('portal/materias')}}">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Materias</span></a>
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link "{{Request::is('/'?'active' : '')}}"" href="{{url ('portal/calificaciones')}}">
      <i class="fas fa-fw fa-table"></i>
      <span>Calificaciones</span></a>
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link "{{Request::is('/'?'active' : '')}}"" href="{{url ('portal/grupos')}}">
      <i class="fas fa-fw fa-table"></i>
      <span>Grupos</span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
