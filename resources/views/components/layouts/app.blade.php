@props(['title', 'description', 'noFollow' => false,'ogImage'=>null])

<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

   

    @include('partials.meta')
    @include('partials.fonts')
    @include('partials.favicon')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

  
</head>

<body>
  

    {{-- <x-preloader /> --}}

    <header>
        
        <x-header.navbar />
        {{-- <x-header.navbar-scroll />
        <x-header.menu /> --}}
    </header>


    <main class="min-h-[600px]">
        {{ $slot }}
    </main>

    <x-footer />

</body>

</html>