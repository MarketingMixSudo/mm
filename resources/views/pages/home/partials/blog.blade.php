<section class="py-12">
    <div class="grid grid-cols-12 items-center gap-4">

        <!-- Część tekstowa przesunięta do środka -->
        <div class="col-span-3 col-start-3 flex flex-col gap-2">
            <span class="text-primary-400 font-medium text-xl">Our blog</span>
            <h2 class="text-5xl font-bold font-heading">Explore recent publication</h2>
            <a href="{{route('blog.index')}}" class="flex justify-start items-center gap-2 group mt-12">
                <span class="group-hover:text-primary-400 duration-300">wszytkie posty</span>
                <x-lucide-arrow-right class="size-4 group-hover:text-primary-400 duration-300" />
            </a>
        </div>

        <!-- Swiper -->
        <div class="col-span-7 w-full swiper h-[500px] postsCarousel--js ">
            <div class="swiper-wrapper">


                @foreach ($posts as $post)

                <a href="{{route('blog.show',$post->slug)}}"
                    class=" !flex !flex-col-reverse rounded-xl relative overflow-hidden h-full group swiper-slide">
                    <!-- ustaw wysokość, np. h-64 -->
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

    </div>
</section>