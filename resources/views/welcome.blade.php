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

    <div class="min-vh-100">

    </div>


</x-layout>