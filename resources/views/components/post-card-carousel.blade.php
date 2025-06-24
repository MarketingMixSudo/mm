@props(['post'])

<a href="{{route('blog.show',$post->slug)}}" aria-label="{{$post->title}}"
    class=" !flex !flex-col-reverse rounded-xl relative overflow-hidden h-full group swiper-slide">

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