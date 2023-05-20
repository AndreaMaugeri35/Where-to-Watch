<x-layout title="{{$movie->title}}" header="{{$movie->title}}">

    <div class="container my-5">
        <div data-aos="zoom-out" class=" row justify-content-center">
            <div id="colCustom" class="col-12 col-md-10 d-flex p-5 ">
                <div class="w-50">
                    
                    <img src="{{$movie->poster}}" class="card-img-top img-fluid" alt="{{$movie->title}}">

                </div>
                
                <div class="card  bg-transparent w-50">
                    <img src="{{$movie->cover}}" class="card-img-top" alt="{{$movie->title}}">
                    <div class="card-body">
                      <h5 class="card-title text-white">{{$movie->title}}</h5>
                      <p class="card-text text-muted">{{$movie->genre}}</p>
                      <p class="card-text text-white">{{$movie->description}}</p>
                      <a href="{{route('homepage1')}}" class="btn btn-outline-warning">Torna indietro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>