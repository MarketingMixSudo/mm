<x-layouts.app title="title" description="desc">

    @include('pages.home.partials.hero')

    <x-logo-marquee />

    @include('pages.home.partials.features-grid')

    @include('pages.home.partials.services')

    @include('pages.home.partials.projects')

    @include('pages.home.partials.testimonials')

    @include('pages.home.partials.blog')

    <x-text-marquee />

</x-layouts.app>