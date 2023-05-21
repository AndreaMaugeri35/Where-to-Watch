<x-layout title="{{$cinema->name}}" header="{{$cinema->name}}">

    <div class="container my-5">
        <div data-aos="zoom-out" class=" row justify-content-center">
            <div class="col-12 col-md-7 glassEffect p-5">
                <div class="card border-0 bg-transparent text-white">
                    <img src="{{Storage::url($cinema->image)}}" class="card-img-top" alt="{{$cinema->name}}">
                    <figcaption class="card-text text-muted fst-italic p-2">{{$cinema->address}}</figcaption>
                    <div class="card-body">
                      <h5 class="card-title">{{$cinema->name}}</h5>
                      <p class="card-text">{{$cinema->description}}</p>
                      @if ($cinema->movies)
                      <hr>
                      <h6>Film disponibili</h6>
                          @foreach ($cinema->movies as $movie)
                              <p class="my-2">{{$movie->title}} <a href="{{route('movie.show',compact('movie'))}}" class="btn btn-sm btn-warning">Maggiori dettagli</a></p> 
                          @endforeach
                          <hr>
                      @endif
                      <a href="{{route('cinema.index')}}" class="btn btn-dark">Tutti i cinema</a>
                      <a href="{{route('cinema.edit', compact('cinema'))}}" class="btn btn-warning">Modifica</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>