<section class="section">
    <div class="grid grid-cols-1 xl:grid-cols-12 items-center gap-12 xl:gap-4 wrapper !max-w-screen-3xl">

        <!-- Część tekstowa przesunięta do środka -->
        <div class="xl:col-span-3 xl:col-start-1 2xl:col-start-2 flex flex-col justify-center xl:justify-start items-center xl:items-start text-center xl:text-left gap-2 xl:pl-6">
            <span class="section__preheading !text-base ">Wiedza, inspiracje <br/> i porady marketingowe</span>
            <h2 class="section__heading">Nasz blog o marketingu i reklamie</h2>
            <a href="{{route('blog.index')}}" aria-label="wszytkie artykuły" class="hidden xl:flex justify-start items-center gap-2 group mt-12">
                <span class="group-hover:text-primary-400 duration-300">wszytkie artykuły</span>
                <x-lucide-arrow-right class="size-4 group-hover:text-primary-400 duration-300" />
            </a>
        </div>

        <!-- Swiper -->
        <div class="xl:col-span-9 2xl:col-span-8 w-full swiper h-[500px] postsCarousel--js ">
            <div class="swiper-wrapper">


                @foreach ($posts as $post)

                <a href="{{route('blog.show',$post->slug)}}" aria-label="{{$post->title}}"
                    class=" !flex !flex-col-reverse rounded-xl relative overflow-hidden h-full group swiper-slide">
                    
                    <div class="absolute inset-0 z-0">
                        <img src="{{asset('storage/'.$post->thumbnail)}}" alt="{{$post->title}}" class="w-full h-full object-cover" />
                        <div class="absolute inset-0 bg-black/30"></div>
                    </div>

                    <div class="relative z-20 p-6 mt-auto">
                        <span class="text-white">{{$post->getPublishedDate()}}</span>
                        <h3 class="text-white text-xl font-bold group-hover:text-primary-400 duration-300">
                           {{$post->title}}
                        </h3>
                    </div>
                </a>

                @endforeach







            </div>
        </div>

        <div class="flex xl:hidden justify-center items-center">

            <x-link-btn :href="route('blog.index')" label="wszytkie artykuły" />
            
        </div>
    </div>
</section>