<div class="rounded-xl border border-primary-400 p-8 testimonial-card-js swiper-slide ">

    <div class="flex justify-start items-center gap-4 border-b  border-black/40 dark:border-white/10 pb-2">
        <img src="{{asset('storage/'.$testimonial->logo)}}" alt="{{$testimonial->name}}" class="xl:hidden w-[80px]">
        <x-lucide-quote class="text-primary-400 size-8" />
        <span class="text-2xl font-medium font-heading">{{$testimonial->name}}</span>
    </div>

    <div class="flex justify-start items-start  pt-8">
        <img src="{{asset('storage/'.$testimonial->logo)}}" alt="{{$testimonial->name}}"
            class="hidden xl:block w-[120px]">
        <p class="text-lg xl:ml-12">{{$testimonial->content}}</p>
        </p>
    </div>


</div>