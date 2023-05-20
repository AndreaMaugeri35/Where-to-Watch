<x-layout title="Benvenuto!" header="Benvenuti sul nostro sito!">
    @if (session('emailError'))
    <div class="alert alert-danger text-center">
        {{session('emailError')}}
    </div>
    @endif
    
    @if (session('emailSent'))
    <div class="alert alert-success text-center">
        {{session('emailSent')}}
    </div>
    @endif

    @if (!$c)
    <div class="container" id="mygif">
        <div data-aos="zoom-in" class="row justify-content-center">
            <img class="" src="/media/countdown.gif" alt="">
        </div>
    </div>
    @endif

    <div class="container py-5">
        <div data-aos="zoom-in" class="row justify-content-center blur">
            @foreach($movies as $movie)
            <div data-aos="fade-down" class="col-12 col-md-3  p-3">
                <div class="card my-3 justify-content-evenly ">
                    <img src="{{$movie->poster}}" class="cardCustom card-img-top img-fluid" alt="{{$movie->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <p class="card-text">{{$movie->genre}}</p>
                        <a href="{{route('movie.show',compact('movie'))}}" class="btn btn-warning">Maggiori dettagli</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


</x-layout>