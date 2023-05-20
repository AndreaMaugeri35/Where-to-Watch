<x-layout title="Benvenuto!" header="I Film del momento">
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
    <div class="d-flex justify-content-center" id="mygif">
            <img class="gifCustom" src="/media/GifCinema.gif" alt="">
    </div>
    @endif

    <div class="container py-5">
        <div data-aos="zoom-in" class="row justify-content-center blur">
            @foreach($movies as $movie)
            <div class="col-12 col-md-3  p-3">
                <div class="card bg-transparent cardCustom my-3 justify-content-evenly   ">
                    <div class="d-flex position-relative">
                        <img src="{{$movie->poster}}" class="imgCustom card-img-top img-fluid" alt="{{$movie->title}}">
                        <div class="w-100 position-absolute btnCustom d-flex justify-content-center h-50 align-items-center">
                            <a class="aCustom d-none"><button class="btn btn-outline-warning">Guarda il Trailer</button></a> 
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

    {{-- <script>
        
let btns = document.querySelectorAll('.aCustom');
let cards = document.querySelectorAll('.cardCustom');

cards.forEach ((card, i) => {
    console.log(cards);

    card.addEventListener('mouseenter', ()=>{

        btns[i].classList.remove('d-none');

    })

    card.addEventListener('mouseleave', ()=>{

        btns[i].classList.add('d-none');

    })
    
});
    </script> --}}

   

</x-layout>