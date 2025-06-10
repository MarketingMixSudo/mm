 @props(['image','alt','reverse'=>false])
 
 <section class="py-16">
    <div class="max-w-screen-xl mx-auto space-y-12">
        <div class="flex w-full relative gap-12">
        
            <div class="w-[45%] min-h-[450px] relative {{$reverse ? "order-1" : ""}}">
                
                <div class="absolute top-8 left-8 w-full h-full bg-primary-400 rounded-xl z-0"></div>

                <img src={{$image}} alt="{{$alt}}"
                    class="w-full h-full object-cover rounded-xl transition duration-300 grayscale-0 hover:grayscale relative z-10" loading="lazy" />
            </div>

            <div class="flex flex-col gap-2 w-[55%] {{$reverse ? "mr-23" : "ml-23"}}">
               {{$slot}}
                <hr class="w-[100px] border-primary-400 mt-12">
            </div>
        </div>
    </div>
</section>