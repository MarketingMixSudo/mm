@props(['title','route'])

<li class="relative group dropdown">

    <button class=" -left-[30px] absolute">
        <x-lucide-chevron-down
            class="w-6  text-white  duration-500 stroke-1 dropdownBtn--js" />
    </button>
    <a href="{{route($route)}}"
        class="{{ request()->routeIs($route) ? 'text-font-light' : 'text-font-light' }} nav__item  hover:text-primary-200 duration-500  uppercase">{{$title}}</a>


    <ul class=" flex flex-col gap-3 overflow-hidden max-h-0 transition-all duration-300 ease-in-out dropdownUl--js">
        {{$slot}}
    </ul>
</li>