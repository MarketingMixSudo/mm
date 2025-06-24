<section class="relative pb-32 pt-[270px] px-2">

  <img src="{{ asset('dummy/about_hero_bg.png') }}" alt="" class="inset-0 absolute w-full h-full object-cover object-center ">

  <div class="relative flex flex-col items-center justify-center h-full text-white text-center ">
      <h1 class="text-4xl xs:text-5xl sm:text-6xl font-bold mb-4 max-w-screen-xl mx-uto">{{$title}}</h1>
      {{$slot}}
  </div>

</section>