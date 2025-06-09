<section class="py-12">


    <div class="max-w-screen-2xl mx-auto">

        <h2 class="font-heading text-7xl font-bold uppercase">Testimonials</h2>
        <hr class="border-primary-400 pb-12">



        <!-- Swiper -->
        <div class=" w-full swiper  testimonialsCarousel--js ">
            <div class="swiper-wrapper">

                @foreach ($testimonials as $testimonial)
                <div class="rounded-xl border border-primary-400 p-8 testimonial-card-js swiper-slide ">

                    <div class="flex justify-start items-center gap-4 border-b pb-8 border-white/10">

                        <x-lucide-quote class="text-primary-400 size-8" />
                        <span class="text-2xl font-medium font-heading">{{$testimonial->name}}</span>
                    </div>

                    <div class="flex justify-start items-start gap-12 pt-8">
                         <img src="{{asset('storage/'.$testimonial->logo)}}" alt="{{$testimonial->name}}"class="w-[120px]">
                        <p class="text-lg">{{$testimonial->content}}</p>
                        </p>
                    </div>


                </div>
                @endforeach






            </div>
        </div>
    </div>

</section>