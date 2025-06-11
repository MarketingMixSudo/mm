<section class="section">

    <div class="wrapper !max-w-screen-3xl">



        <div class=" flex flex-col gap-2 text-center">
            <span class="text-primary-400 font-medium text-xl">Od wizji do rzeczywistości</span>
            <h2 class="text-5xl font-bold font-heading">Zobacz nasze projekty</h2>

        </div>

        <div class="flex justify-start items-center gap-4 flex-wrap pt-16 ">


            <x-button data-title="" aria-label="Pokaż wszystkie realizacje" class="btn-active realisationFilterBtn-js">
                Wszystkie</x-button>



            @foreach ($categories as $category)
            <x-button data-title="{{ $category->slug }}" aria-label="Filtruj przez: {{ $category->title }}"
                class="realisationFilterBtn-js ">{{ $category->title }}</x-button>
            @endforeach

        </div>

        <!-- Swiper -->
        <div class=" w-full swiper   projectsCarousel--js mt-12">
            <div class="swiper-wrapper !h-[400px] xl:!h-[450px] 2xl:!h-[530px]">



                @foreach ($realisations as $realisation)
               

                <div class="swiper-slide  h-[400px] xl:h-[450px] 2xl:h-[530px] rounded-lg overflow-hidden relative flex justify-start items-end p-8 group  realisationItem-js "
                    data-title="{{ $realisation->realisationCategories->pluck('slug')->implode(', ') }}">

                    <img src="{{asset('storage/'.$realisation->thumbnail)}}"
                        alt="miniaturka realizacji {{$realisation->title}}"
                        class="absolute inset-0 w-full h-full object-cover -z-20 group-hover:scale-105 duration-300">

                    <div
                        class="absolute inset-0 w-full h-full object-cover -z-10 bg-black/10 group-hover:bg-black/20 duration-300">

                    </div>

                    <h3 class="font-heading text-3xl text-font-light font-medium">{{ $realisation->title }}</h3>


                </div>


                @endforeach






            </div>
        </div>

         <div class="flex justify-center items-center mt-16">

                <x-link-btn href="{{route('www.realisations')}}" label="Zobacz wszystkie" />
            </div>
        
    </div>
</section>