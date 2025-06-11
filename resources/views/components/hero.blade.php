<section class="relative pb-32 pt-[270px] ">

  <img src="{{ asset('dummy/about_hero_bg.png') }}" alt="" class="inset-0 absolute w-full h-full object-cover object-center ">

  <div class="relative flex flex-col items-center justify-center h-full text-white text-center ">
      <h1 class="text-6xl font-bold mb-4 ">{{$title}}</h1>
      {{$slot}}
  </div>

</section>