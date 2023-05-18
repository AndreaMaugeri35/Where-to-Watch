<x-layout header="Tutti i nostri Cinema">

    @if (session()->has('cinemaUpdated'))
        <div class="alert alert-success text-center">
            {{ session('cinemaUpdated') }}
        </div>
    @endif

    @if (session()->has('cinemaDeleted'))
        <div class="alert alert-success text-center">
            {{ session('cinemaDeleted') }}
        </div>
    @endif

    @if (session()->has('cinemaCreated'))
        <div class="alert alert-success text-center">
            {{ session('cinemaCreated') }}
        </div>
    @endif

    @forelse($cinemas as $cinema)
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="{{Storage::url($cinema->image)}}" class="card-img-top" alt="{{$cinema->name}}">
                        <p class="card-text text-muted fst-italic p-2">{{$cinema->address}}</p>
                        <div class="card-body">
                          <h5 class="card-title">{{$cinema->name}}</h5>
                          <p class="card-text">{{$cinema->description}}</p>
                          <a href="{{route('cinema.show',compact('cinema'))}}" class="btn btn-warning">Maggiori dettagli</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    @empty
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h2 class="text-center display-1 text-warning fw-bold">Non ci sono Cinema salvati</h2>
                <a href="{{route('cinema.create')}}" class="btn btn-warning">Aggiungi cinema</a>
            </div>
        </div>
    </div>
    @endforelse
</x-layout>