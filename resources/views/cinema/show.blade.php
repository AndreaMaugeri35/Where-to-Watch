<x-layout title="{{$cinema->name}}" header="{{$cinema->name}}">

    <div class="container my-5">
        <div data-aos="zoom-out" class=" row justify-content-center">
            <div class="col-12 col-md-7">
                <div class="card">
                    <img src="{{Storage::url($cinema->image)}}" class="card-img-top" alt="{{$cinema->name}}">
                    <figcaption class="card-text text-muted fst-italic p-2">{{$cinema->address}}</figcaption>
                    <div class="card-body">
                      <h5 class="card-title">{{$cinema->name}}</h5>
                      <p class="card-text">{{$cinema->description}}</p>
                      @if ($cinema->movies)
                      <hr>
                      <h6>Film disponibili</h6>
                          @foreach ($cinema->movies as $movie)
                              <p class="my-1">{{$movie->title}}</p>
                          @endforeach
                          <hr>
                      @endif
                      <a href="{{route('cinema.index')}}" class="btn btn-outline-dark">Torna indietro</a>
                      <a href="{{route('cinema.edit', compact('cinema'))}}" class="btn btn-warning">Modifica</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>