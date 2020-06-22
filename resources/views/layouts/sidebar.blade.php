<div class="wrapper">
  <!-- Sidebar Holder -->
  <nav id="sidebar">
    <div class="sidebar-header">
      <img src="/images/logo_blanco.png">
    </div>
    <div class="menu">
      <ul class="list-unstyled components">
        <li>
          <a href="{{url('/materias')}}">Materias</a>
        </li>
        <li>
          <a href="{{url('/selectTareas')}}">Tareas</a>
        </li>
        <li>
          <a href="#añadir" data-toggle="collapse" aria-expanded="false">Añadir<i class="fas fa-chevron-down float-right"></i></a>
          <ul class="collapse list-unstyled" id="añadir">
            <li><a href="{{url('/createMateria')}}">Materia</a></li>
            <li><a href="{{url('/createTarea')}}">Tarea</a></li>
          </ul>
        </li>
        <div class="cerrarSesion">

        <li class="text-center mt-3 mb-4">__________________________</li>

          <li>
            <a href="#cerrarSesion" data-toggle="collapse" aria-expanded="false"><i class="fas fa-user"></i>{{ Auth::user()->name }}<i class="fas fa-chevron-down float-right"></i></a>
            <ul class="collapse list-unstyled" id="cerrarSesion">
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">{{ __('Cerrar sesión') }}</a></li>
            </ul>
          </li>
          <li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>         
          <li>
          <a href="{{url('/comoUsar')}}">¿Cómo usar?</a>
        </li>
        </div>
      </ul>
    </div>
  </nav>