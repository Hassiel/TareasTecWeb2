<header class="px-3 py-2 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
        <ion-icon name="headset"></ion-icon>
        NOTION 2.0
      </a>
      @guest
      
      @else
      <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
        <li>
          <a href="{{ route('home') }}" class="nav-link text-secondary">
            <ion-icon name="planet"></ion-icon>
            Inicio
          </a>
        </li>
        <li>
          <a href="{{ route('proyectos.index') }}" class="nav-link text-white">
            <ion-icon name="folder-open"></ion-icon>
            Proyectos
          </a>
        </li>
        <li>
          <a href="{{ route('tareas.index') }}" class="nav-link text-white">
            <ion-icon name="checkmark"></ion-icon>
            Tareas
          </a>
        </li>
        @endguest
        @guest
        <li>
            <a href="{{ route('login') }}" type="button" class="btn btn-light text-dark me-2"><ion-icon name="key"></ion-icon>Iniciar Sesión</a>
        </li>
        <li>
            <a href="{{ route('register') }}" type="button" class="btn btn-primary"><ion-icon name="create"></ion-icon>Registro</a>
        </li>
        @else
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    {{ Auth::user()->name }}
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
     <a class="dropdown-item" href="{{ route('logout') }}"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
       {{ __('Logout') }}
      </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
     @csrf
    </form>
  </ul>
</div>
        @endguest
      </ul>
    </div>
  </div>
</header>
