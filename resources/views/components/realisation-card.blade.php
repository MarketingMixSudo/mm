{{-- add <a> or <div> --}}

@props(['realisation','class'=>''])

<div class="{{$class}} h-[400px] xl:h-[450px] 2xl:h-[530px] rounded-lg overflow-hidden relative flex justify-start items-end p-8 group  realisationItem-js"
    data-title="{{ $realisation->realisationCategories->pluck('slug')->implode(', ') }}">

    <img src="{{asset('storage/'.$realisation->thumbnail)}}" alt="miniaturka realizacji {{$realisation->title}}"
        class="absolute inset-0 w-full h-full object-cover -z-20 group-hover:scale-105 duration-300">

    <div class="absolute inset-0 w-full h-full object-cover -z-10 bg-black/10 group-hover:bg-black/20 duration-300">

    </div>

    <h3 class="font-heading text-3xl text-font-light font-medium">{{ $realisation->title }}</h3>


</div>