@props(['number','href','title','img','class'=>""])

<a href="{{$href}}" aria-label="{{$title}}"  class="{{$class}} flex flex-col md:flex-row justify-between items-start sm:items-center border-b hover:border-b-primary-400 duration-300 py-8 gap-8  group">

    <div class="flex  gap-4 justify-center items-center">

        <div
            class="border bg-primary-400 text-font-light py-1 px-2 font-medium rounded-md group-hover:bg-primary-600 duration-300">
           {{$number}}
        </div>

        <h3 class="font-heading text-4xl xs:text-5xl  group-hover:text-primary-400 duration-300">{{$title}}</h3>

    </div>

    <img src="{{$img}}" alt="{{$title}}" class="w-full sm:w-3/4 md:w-1/2 rounded-xl group-hover:scale-105 duration-300 min-h-[200px] object-cover" loading="lazy">
 
</a>