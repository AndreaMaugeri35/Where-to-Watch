<x-layout title="Il tuo profilo" header="Il tuo profilo">
    
    <div class="container">
        <div class="row justify-content-center blur">
            @forelse (Auth::user()->cinemas as $cinema)
            <div class="col-12 col-md-3 p-3">
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
            @if (count(Auth::user()->cinemas))
            <div class="col-8 d-flex justify-content-center">
                    
                <form action="{{ROUTE('cinema.profile.delete')}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger my-3">Elimina tutti i tuoi cinema</button>
                </form>            
            </div>
            @endif
            @empty
                <div class="col-12 col-md-8 d-flex justify-content-center">
                    <a href="{{route('cinema.create')}}" class="btn btn-warning ">Aggiungi cinema</a>
                </div>
            @endforelse
        </div>
    </div>  
    
</x-layout>