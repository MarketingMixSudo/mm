<section class="section">

    <div class="wrapper !max-w-screen-3xl 2xl:!px-6">



        <div class=" flex flex-col gap-2 text-center">
            <span class="section__preheading">Od wizji do rzeczywistości</span>
            <h2 class="section__heading">Zobacz nasze projekty</h2>

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


              <x-realisation-card :realisation="$realisation" class="swiper-slide " />


                @endforeach


            </div>
        </div>

        <div class="flex justify-center items-center mt-16">

            <x-link-btn href="{{route('www.realisations')}}" label="Zobacz wszystkie" />
        </div>

    </div>
</section>