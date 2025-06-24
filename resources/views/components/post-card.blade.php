@props(['post'])

<div class="w-full group">
    <a href="{{route('blog.show',$post->slug)}}" class="overflow-hidden block rounded-2xl">



        <img src="{{asset('storage/'.$post->thumbnail)}}" alt="{{$post->title}}"
            class="w-full rounded-2xl min-h-[330px] max-h-[500px] object-cover group-hover:grayscale duration-300 group-hover:scale-105">
    </a>

    <div class="space-y-2 mt-5">

        <a href="{{route('blog.show',$post->slug)}}" class="space-y-2">

            <h2 class="text-2xl font-semibold text-primary-400">{{$post->title}}</h2>
            <p class="line-clamp-3">{{$post->description}}</p>
        </a>

        <a href="{{route('blog.show',$post->slug)}}"
            class="text-primary-400 font-medium text-lg pt-4 flex justify-start items-center gap-2">Czytaj


            <x-lucide-arrow-right
                class="text-font-dark dark:text-font-light size-4 group-hover:text-primary-400 group-hover:translate-x-3 duration-300" />
        </a>
    </div>
</div>