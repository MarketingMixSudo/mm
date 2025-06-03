@props(['route','title'])

<li class="mt-3 ml-8"><a href="{{route($route)}}"
        class="{{ request()->routeIs($route) ? 'text-font-light' : 'text-font-light' }}  hover:text-primary-200 duration-500 link-hover">{{$title}}</a>
</li>