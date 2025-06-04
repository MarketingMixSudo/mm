@props(['title','activeRoute'=>'#','route'])

<li class="relative group flex justify-center items-center gap-1 z-50">

    @if($route)
    <a href='{{$route}}' class="{{ request()->routeIs($activeRoute) ? 'nav__item--active' : '' }} uppercase font-medium tracking-wide hover:text-primary-400 duration-300">
        {{ $title }}
    </a>
    @else
    <span class="{{ request()->routeIs($activeRoute) ? 'nav__item--active' : '' }} uppercase font-medium tracking-wide hover:text-primary-400 duration-300">
        {{ $title }}
    </span>
    @endif

    <x-iconpark-down class="w-4" />
    <div
        class="absolute top-full left-1/2 transform -translate-x-1/2 min-w-[300px] pt-5 opacity-0 group-hover:opacity-100 duration-500 transition-opacity pointer-events-none group-hover:pointer-events-auto shadow-lg z-50" >
        <ul class="flex flex-col text-center bg-primary-400 py-3 rounded-xl z-50">
            {{$slot}}
        </ul>
    </div>
</li>