<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <title>{{$title}}</title>
</head>
<body>
    <x-navbar>
    </x-navbar>

    <x-header  header="{{$header}}">
    </x-header>

    <div class="min-vh-100">
        {{$slot}}
    </div>


    <x-footer>
    </x-footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
    @livewireScripts
</body>
</html>