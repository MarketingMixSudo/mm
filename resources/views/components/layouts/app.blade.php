@props(['title', 'description','seo'=>false])

<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    @include('partials.meta')
    @include('partials.fonts')
    @include('partials.favicon')
    @include('partials.seo')

        {!! $seo ?? '' !!}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>


    {{--
    <x-preloader /> --}}

    <header>

        <x-header.navbar />
        {{--
        <x-header.navbar-scroll />--}}
        <x-header.menu />
    </header>


    <main class="min-h-[600px]">
        {{ $slot }}
    </main>

    <x-scroll-to-top />
    <x-footer />





</body>

</html>