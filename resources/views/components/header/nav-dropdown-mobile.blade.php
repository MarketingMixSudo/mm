{{-- completed --}}

@props(['title','activeRoute'=>'#','route'])

<li class="relative group dropdown ">

    <button class=" -left-[30px] absolute">
        <x-lucide-chevron-down class="w-6  text-white  duration-500 stroke-1 dropdownBtn--js" />
    </button>
    @php
    $isActive = request()->routeIs($activeRoute);
    @endphp

    <a href="{{ route($route) }}"
        class="nav__item hover:text-primary-200 duration-500 uppercase link-hover--light {{ $isActive ? 'font-bold' : '' }}">
        {{ $title }}
    </a>


    <ul class=" flex flex-col gap-3 pb-1 overflow-hidden max-h-0 transition-all duration-300 ease-in-out dropdownUl--js">
        {{$slot}}
    </ul>
</li>