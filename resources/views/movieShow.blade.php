<x-layout title="{{$movie->title}}" header="{{$movie->title}}">

    <div class="container my-5">
        <div data-aos="zoom-out" class=" row justify-content-center">
            <div class="col-12 col-md-9 d-flex">
                <div class="w-50">
                    
                    <img src="{{$movie->poster}}" class="card-img-top img-fluid" alt="{{$movie->title}}">

                </div>
                
                <div class="card w-50">
                    <img src="{{$movie->cover}}" class="card-img-top" alt="{{$movie->title}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$movie->title}}</h5>
                      <p class="card-text text-muted">{{$movie->genre}}</p>
                      <p class="card-text">{{$movie->description}}</p>
                      <a href="{{route('homepage1')}}" class="btn btn-outline-dark">Torna indietro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>