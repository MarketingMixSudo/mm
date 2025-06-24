@props (['headingH2'=>null,'headingH3'=>null,'text'])

<div class="relative w-full md:w-[48%] xl:w-[31%] flex items-strech justify-center overflow-hidden group rounded-xl ">
    <div
        class=" bg-primary-400  p-6 flex flex-col justify-center items-center gap-6 py-12 min-h-[350px] text-center text-font-light w-full relative transition-all duration-300 ease-out cursor-pointer rounded-xl overflow-hidden tiltCard--js">

        <div
            class=" absolute inset-0 rounded-xl opacity-0 pointer-events-none transition-opacity duration-300 z-0 overflow-hidden tiltCardGlow--js">
        </div>


        <div class=" relative z-10 flex flex-col items-center tiltCardContent--js">
            {{$slot}}

            @if($headingH2)
            <span class="text-2xl font-heading font-bold uppercase">{{$headingH2}}</span>
            @else
            <span class="text-2xl font-heading font-bold uppercase">{{$headingH3}}</span>
            @endif
        </div>

        <p class="relative z-10">
            {{$text}}
        </p>
    </div>
</div>