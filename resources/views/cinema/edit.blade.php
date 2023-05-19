<x-layout title="Modifica il cinema" header="Modifica dati del cinema">
<div class="container my-5">
    <div data-aos="zoom-in" class="row justify-content-center">
        <div class="col-12 col-md-8">
            @livewire('cinema-form-edit', ['cinema' => $cinema])
        </div>
    </div>
</div>
   
    
</x-layout>