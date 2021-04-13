<!-- Side-Nav -->
    <div
      class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column"
      id="sidebar"
    >
      <ul class="nav flex-column text-white w-100">
        <a href="/" class="nav-link h3 text-white my-2">
          <img src="{{ asset('img/logo.png') }}" alt="" width="30" height="30" class="d-inline-block align-text-top">
            TU DO
        </a>
        <a href="{{ route('home') }}" class="nav-link text-white">
          <i class="bx bxs-home-smile"></i>
          <span class="mx-2">Inicio</span>
        </a>
        <a href="{{ route('proyectos.index') }}" class="nav-link text-white">
          <i class="bx bx-book"></i>
          <span class="mx-2">Proyectos</span>
        </a>
        <a href="{{ route('tareas.index') }}" class="nav-link text-white">
          <i class="bx bx-check-circle"></i>
          <span class="mx-2">Tareas</span>
        </a>
        <a href="{{ route('logout') }}"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();" class="nav-link text-white">
          <i class="bx bx-power-off"></i>
          <span class="mx-2">Cerrar sesión</span>
    </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        </form>
      </ul>

      <span href="#" class="nav-link h4 w-100 mb-5">
        <a href=""><i class="bx bxl-instagram-alt text-white"></i></a>
        <a href=""><i class="bx bxl-twitter px-2 text-white"></i></a>
        <a href=""><i class="bx bxl-facebook text-white"></i></a>
      </span>
    </div>