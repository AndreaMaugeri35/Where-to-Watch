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
                      @if ($movie->cinemas)
                      <hr>
                        <h6 class="text-white fs-5">Disponibile presso i seguenti cinema:</h6>
                        @foreach ($movie->cinemas as $cinema)
                              <p class="text-white my-1">{{$cinema->name}}</p>
                        @endforeach
                          <hr>
                      @endif
                      @auth
                        <form method="POST" action="{{route('like',compact('movie'))}}">
                            @method('put')
                            @csrf
                            
                            @if ($movie->user->contains('id', Auth::user()->id))
                            <div class="btn btn-primary my-3">{{$movie->like}} Mi piace</div>
                            <button  type="submit" class="btn btn-danger my-3">{{$movie->like}}Non mi piace</button>
                            @else
                            <button  type="submit" class="btn btn-primary my-3">{{$movie->like}} Mi piace</button>
                            @endif
                        </form>
                       @else
                       <a href="{{route('login')}}" class="btn btn-primary my-3">{{$movie->like}} Mi piace</a>
                      @endauth
                      <a href="{{route('homepage1')}}" class="btn btn-outline-warning">Torna alla Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>