{{-- completed --}}

@props(['route','title'])

<li class="mt-3 ml-8"><a href="{{route($route)}}" aria-label="{{$title}}"
        class="{{ request()->routeIs($route) ? 'font-medium underline ' : 'link-hover--light' }}  hover:text-primary-200 duration-500 ">{{$title}}</a>
</li>