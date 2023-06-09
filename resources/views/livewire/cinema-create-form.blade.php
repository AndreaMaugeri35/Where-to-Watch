<div>
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
            <form class="shadow p-5 bg-white rounded" wire:submit.prevent="store">

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

                @if (session()->has('cinemaCreated'))
                    <div class="alert alert-success text-center">
                        {{session('cinemaCreated')}}
                    </div>
                @endif

                
                <div class="mb-3">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome del cinema</label>
                    <input type="text" wire:model="name" class="form-control" id="name">
                </div>
                  <label for="address" class="form-label">Indirizzo</label>
                  <input type="text" wire:model="address" class="form-control" id="address">
                </div>
                @if ($image)
                    <div class="mt-3 text-center">
                        Anteprima immagine: <br>
                        <img width="250" src="{{$image->temporaryUrl()}}" alt="Anteprima Immagine">
                    </div>
                @endif
                <div class="mb-3">
                    <label for="image" class="form-label">Inserisci la tua immagine</label>
                    <input type="file" wire:model="image" class="form-control" id="image">
                </div>
                <hr>
                <div class="mb-3">
                  <label for="avaible_movies" class="form-label">Film Disponibili</label><br>
                  @foreach($movies as $movie)
                      <div class="d-flex">
                          <input id="movie_{{$movie->id}}" type="checkbox" wire:model="avaible_movies" value="{{$movie->id}}">
                          <label for="movie_{{$movie->id}}"  class="ms-3">{{$movie->title}}</label>
                      </div>
                  @endforeach
                </div>
                <hr>
                <div class="mb-3">
                  <label for="description" class="form-label">Descrizione</label>
                  <textarea wire:model="description" id="description" cols="30" rows="7" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-warning">Aggiungi Cinema</button>
              </form>
            </div>
        </div>
    </div>
</div>
