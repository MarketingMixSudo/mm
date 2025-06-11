@props(['number','href','title','img','class'=>""])

<a href="{{$href}}" class="{{$class}} flex justify-between items-center border-b py-8 group">

    <div class="flex gap-4 justify-center items-center">

        <div
            class="border bg-primary-400 text-font-light py-1 px-2 font-medium rounded-md group-hover:bg-primary-600 duration-300">
           {{$number}}
        </div>

        <h3 class="font-heading text-5xl link-hover">{{$title}}</h3>

    </div>

    <img src="{{$img}}" alt="{{$title}}" class="w-1/2 rounded-xl group-hover:scale-105 duration-300">

</a>