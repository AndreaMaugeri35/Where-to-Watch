<x-layout title="Il tuo profilo" header="Il tuo profilo">
    
    <div class="container py-3">
        @if (count(Auth::user()->cinemas))
            <div class="col-12 d-flex justify-content-end">
                    
                <form action="{{ROUTE('cinema.profile.delete')}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger my-3">Elimina tutti i tuoi cinema</button>
                </form>            
            </div>
        @endif
        <div data-aos="zoom-in" class="row justify-content-center blur my-4">
            @forelse (Auth::user()->cinemas as $cinema)
            <div data-aos="fade-down" data-aos-delay="{{100*$loop->index}}"  class="col-12 col-md-3 p-3">
                <div class="card my-3 justify-content-evenly">
                    <img src="{{Storage::url($cinema->image)}}" class="cardCustom card-img-top img-fluid" alt="{{$cinema->name}}">
                    <p class="card-text text-muted fst-italic p-2">{{$cinema->address}}</p>
                    <div class="card-body">
                        <h5 class="card-title">{{$cinema->name}}</h5>
                        <p class="card-text">{{$cinema->description}}</p>
                        <a href="{{route('cinema.show',compact('cinema'))}}" class="btn btn-warning">Maggiori dettagli</a>
                    </div>
                </div>
            </div>
            @empty
                <div class="col-12 col-md-8 d-flex justify-content-center">
                    <a href="{{route('cinema.create')}}" class="btn btn-warning ">Aggiungi cinema</a>
                </div>
            @endforelse
        </div>
    </div>  

    <div class="container py-5">
        <div data-aos="zoom-in" class="row justify-content-center blur">
            @foreach(Auth::user()->movies as $movie)
            <div class="col-12 col-md-3  p-3">
            <div class="card bg-transparent cardCustom my-3 justify-content-evenly   ">
                <div class="d-flex position-relative">
                    <img src="{{$movie->poster}}" class="imgCustom card-img-top img-fluid" alt="{{$movie->title}}">
                    <div class="w-100 position-absolute btnCustom d-flex  justify-content-center h-100 align-items-center">
                        <a href="{{route('movie.show',compact('movie'))}}" class="h-100 w-100"></a>
                        <a href="https://www.youtube.com/" class="position-absolute align-self-end mb-5 aCustom d-none"><button class="btn btn-outline-warning">Guarda il Trailer</button></a> 
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-white">{{$movie->title}}</h5>
                    <p class="card-text text-white">{{$movie->genre}}</p>
                    <a href="{{route('movie.show',compact('movie'))}}" class="btn btn-warning">Maggiori dettagli</a>
                </div>
            </div>
        </div>
            @endforeach
        </div>
    </div>


</x-layout>