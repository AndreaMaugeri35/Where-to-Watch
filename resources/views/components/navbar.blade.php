<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage1')}}"><img class="logo rounded" src="/media/logo.png" alt=""></a>
      <button class="navbar-toggler  bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link @if(Route::is('homepage')) active @endif" aria-current="page" href="{{route('homepage')}}">I nostri film</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link @if(Route::is('cinema.index')) active @endif" href="{{route('cinema.index')}}">I nostri Cinema</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::is('cinema.create')) active @endif" href="{{route('cinema.create')}}">Aggiungi Cinema</a>
          </li>

          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ciao {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item btn btn-outline-warning" href="{{route('user.profile')}}">Profilo</a></li>
              <li><hr class="dropdown-divider bg-warning"></li>
              <li><a class="dropdown-item btn btn-outline-warning" href="#" onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Logout</a></li>
              <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
            </ul>
          </li>
          @else    
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ciao Ospite
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item btn btn-outline-warning" href="{{route('login')}}">Accedi</a></li>
              <li><hr class="dropdown-divider bg-warning"></li>
              <li><a class="dropdown-item btn btn-outline-warning" href="{{route('register')}}">Registrati</a></li>
            </ul>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>