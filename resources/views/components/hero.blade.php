<section class="relative py-32">

    {{-- BACKGROUND IMAGE --}}
    <img src="{{ asset('dummy/about_hero_bg.png') }}" alt="" class="inset-0 absolute w-full h-full object-cover object-center z-0">

    {{-- OVERLAY --}}
    {{-- <div class="absolute top-0 right-0 left-0 bottom-0 bg-black opacity-30 z-10"></div> --}}

    {{-- CONTENT --}}
    <div class="relative z-20 flex flex-col items-center justify-center h-full text-white text-center">
        <h1 class="text-6xl font-bold mb-4">{{$title}}</h1>

      {{$slot}}
    </div>

</section>