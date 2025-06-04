@props(['href'=>'','text'])

<li class="flex justify-start items-center gap-4 pb-4">
    <div class="p-1.5 bg-primary-400  rounded-full">

        <x-lucide-check class="size-4 text-font-light" />
    </div>

    @if($href)
    <a href={{$href}} class="text-base font-medium link-hover">{{$text}}</a>
    @else
    <span class="text-base font-medium ">{{$text}}</span>
    @endif
</li>