<x-layout title="Benvenuto!" header="Benvenuti sul nostro sito!">
    <div class="container" id="mygif">
        <div data-aos="zoom-in" class="row justify-content-center">
            <img class="" src="/media/countdown.gif" alt="">
        </div>
    </div>


    <script>
        document.getElementById("mygif").style.display = "block";
        setTimeout(function() {
            document.getElementById("mygif").classList.add("fade-out");
        }, 2000);
        setTimeout(function() {
            document.getElementById("mygif").style.display = "none";
        }, 5000)
    </script>

</x-layout>