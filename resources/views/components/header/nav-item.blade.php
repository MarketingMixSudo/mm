@props(['href','activeRoute'=>'#','label'])

<li>
    <a href={{$href}}
        class="{{ request()->routeIs($activeRoute) ? 'nav__item--active' : '' }} uppercase font-medium tracking-wide hover:text-primary-400 duration-300 link-hover">{{$label}}</a>
</li>