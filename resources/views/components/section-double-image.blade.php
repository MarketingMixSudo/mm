@props(['image','alt','reverse'=>false,'linkHref'=>null,'linkLabel'=>null])

<section class="section">
    <div class="wrapper space-y-12">
        <div class="flex flex-col lg:flex-row justify-center items-center w-full relative gap-24 lg:gap-12">

            <div
                class="flex items-center w-[90%] sm:w-3/4 lg:w-1/2 xl:w-[45%] {{$reverse ? 'lg:order-1 lg:mr-12' : ''}}">
                <div class="w-full h-[450px] relative group ">
                    <div
                        class="absolute top-4 sm:top-8 left-4 sm:left-8 w-full h-full bg-primary-400 rounded-xl z-0 transition-transform duration-500 group-hover:-translate-y-4 group-hover:-translate-x-4">
                    </div>

                    <img src="{{$image}}" alt="{{$alt}}"
                        class="w-full h-full object-cover rounded-xl transition duration-300 grayscale-0 hover:grayscale relative z-10"
                        loading="lazy" />
                </div>
            </div>

            <div
                class="flex flex-col justify-center gap-2 w-full lg:w-1/2 xl:w-[55%] {{$reverse ? 'lg:mr-12 xl:mr-23' : 'lg:ml-12 xl:ml-23'}}">
                {{$slot}}

                <hr class="w-[100px] border-primary-400 mt-6">

                @if($linkHref && $linkLabel)
                <x-link-btn href="{{route('about.index')}}" label="Dowiedz się więcej" class="self-start mt-6" />
                @endif
            </div>
        </div>
    </div>
</section>