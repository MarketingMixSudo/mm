<div class="group w-full h-[400px] [perspective:1000px]">
    <div
        class="relative w-full h-full transition-transform duration-700 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">

        <!-- Front side -->
        <div
            class="absolute w-full h-full rounded-xl overflow-hidden [backface-visibility:hidden] flex justify-end items-end  text-white">
            <img src="{{$img}}" alt="{{$title}}" class="absolute inset-0 w-full h-full object-cover -z-10" loading="lazy">

            <div class="bg-black w-full text-center py-4">

                <h2 class="z-10 text-2xl font-semibold font-heading">{{$title}}</h2>
            </div>
        </div>

        <!-- Back side -->
        <div
            class="absolute w-full h-full rounded-xl overflow-hidden [backface-visibility:hidden] [transform:rotateY(180deg)] flex flex-col gap-4 justify-center items-center bg-primary-400 text-font-light p-4">
            <h2 class="z-10 text-2xl font-semibold text-center">{{$title}}</h2>
            <p class="text-center text-lg">{{$slot}}</p>
        </div>

    </div>
</div>