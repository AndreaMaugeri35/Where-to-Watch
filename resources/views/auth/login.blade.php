
<x-layout header="Pagina di Accesso">

    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
            <form class="shadow p-5 bg-white rounded" action="{{route('login')}}" method="POST">

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
                <button type="submit" class="btn btn-primary">Accedi</button>
                <p class="mt-2">Non sei ancora registrato? Fai la <a href="{{route('register')}}">Registrazione</a></p> 
              </form>
            </div>
        </div>
    </div>

</x-layout>