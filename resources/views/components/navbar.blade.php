<nav class="navbar navbar-expand-lg bg-transparent navbar-dark fixed-top fs-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage1')}}"><img class="logo rounded" src="/media/logo.png" alt=""></a>
      <button class="navbar-toggler  bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link @if(Route::is('movies')) active @endif " aria-current="page" href="{{route('movies')}}"><span class="text-warning dividerCustom">|</span>  I nostri film <span class="text-warning dividerCustom">|</span></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link @if(Route::is('cinema.index')) active @endif" href="{{route('cinema.index')}}">I nostri Cinema <span class="text-warning dividerCustom">|</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @if(Route::is('cinema.create')) active @endif" href="{{route('cinema.create')}}">Aggiungi Cinema <span class="text-warning dividerCustom">|</span></a>
          </li>
        </ul>
        <ul class="navbar-nav">
          @auth
          
          <li class="nav-item dropdown">
            <div class="dropstart">
              <button type="button" class="btn btn-warning" data-bs-toggle="dropdown" aria-expanded="false">
                Ciao {{Auth::user()->name}}
              </button>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item btn btn-outline-warning" href="{{route('user.profile')}}">Profilo</a></li>
              <li><hr class="dropdown-divider bg-warning"></li>
              <li><a class="dropdown-item btn btn-outline-warning" href="#" onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Logout</a></li>
              <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
            </ul>
          </li>
        </div>
          @else    
          <div class="dropstart">
            <button type="button" class="btn btn-warning" data-bs-toggle="dropdown" aria-expanded="false">
              Ciao ospite
            </button>
            <ul class="dropdown-menu dropdown-menu-dark wcust">
              
              
              <form class="shadow p-5 bg-dark text-white rounded dropdown" action="{{route('login')}}" method="POST">

                <p class="display-6">Accedi!</p>

                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3">
                  <label for="email" class="form-label">Indirizzo Email</label>
                  <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="mb-3 form-check">
                    <label class="form-check-label"  for="remember">Ricordami</label>
                    <input type="checkbox" name="remember" class="form-check-input" id="remember">
                </div>
                <button type="submit" class="btn btn-warning">Accedi</button> 
              </form>

              <li><hr class="dropdown-divider bg-warning"></li>
              <li><a class="dropdown-item btn btn-outline-warning" href="{{route('register')}}">Registrati</a></li>
            </ul>
          </li>
          </div>
          @endauth
        </ul>
      </div>
    </div>
  </nav>