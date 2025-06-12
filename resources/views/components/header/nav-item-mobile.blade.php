{{-- completed --}}

@props(['href', 'activeRoute' => [], 'label'])

@php
    $isActive = request()->routeIs(is_array($activeRoute) ? $activeRoute : [$activeRoute]);
@endphp

<li>
    <a href="{{ $href }}" aria-label="{{ $label }}"
       class="{{ $isActive ? 'nav__item--active' : '' }} uppercase  xl:font-medium tracking-wide hover:xl:text-primary-400 duration-300 link-hover--light " >
        {{ $label }}
    </a>
</li>