{{-- completed --}}

@props(['href', 'activeRoute' => [], 'label'=>''])

<li class="bg-primary-400  duration-150 hover:bg-primary-600 hover:border-bg-gray-200 p-4 flex justify-start items-start text-left text-font-light">
    <a href="{{ $href }}" class="{{ request()->routeIs($activeRoute) ? 'font-semibold underline' : '' }}" aria-label="{{ $label }}">
        {{ $label }}  
    </a>
</li>