<div>
    <form class="p-5 border bg-white form-control" wire:submit.prevent="update">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('cinemaUpdate'))
            <div class="alert alert-success text-center">
                {{ session('cinemaUpdate') }}
            </div>
        @endif

        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome cinema</label>
            <input type="text" wire:model="name" class="form-control" id="name">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Indirizzo cinema</label>
            <input type="text" wire:model="address" class="form-control" id="address">
        </div>

        <div class="mb-3 text-center">
            <label for="image" class="form-label">Immagine attuale</label><br>
            <img width="250" src="{{ Storage::url($old_image) }}" alt="Foto di {{ $cinema->name }}">
        </div>

        @if ($image)
            <div class="mt-3 text-center">
                Anteprima immagine:<br>
                <img width="250" src="{{ $image->temporaryUrl() }}">
            </div>
        @endif

        <div class="mb-3">
            <label for="image" class="form-label">Foto libreria</label>
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
            <label for="description" class="form-label">Piccola descrizione</label>
            <textarea wire:model="description" id="description" cols="30" rows="7" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-warning">Aggiorna</button>
        <a href="{{ route('cinema.show', compact('cinema')) }}" class="mx-3 btn btn-outline-dark">Torna indietro</a>
        @if ($cinema->user_id == Auth::user()->id)
            <button type="button" class="btn btn-danger" wire:click="destroy">Cancella</button>
        @endif
    </form>
</div>
