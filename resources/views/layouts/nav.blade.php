
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="/">
      <img src="{{ asset('img/logo.png') }}" alt="" width="30" height="30" class="d-inline-block align-text-top">
      TU DO
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          
        </li>
        <li class="nav-item">
          
        </li>
        <li class="nav-item">
          
        </li>
      </ul>
      <div class="d-flex" style="list-style-type: none">
        @guest
        <li>
            <a href="{{ route('login') }}" type="button" class="btn cta bg"><ion-icon name="key"></ion-icon>Iniciar Sesión</a>
        </li>
        <li>
            <a href="{{ route('register') }}" type="button" class="btn "><ion-icon name="create"></ion-icon>Registro</a>
        </li>
        @else
        <div class="dropdown">
  <button class="btn cta bg" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
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
    <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a>
  </ul>
</div>
        @endguest
      </div>
    </div>
  </div>
</nav>




