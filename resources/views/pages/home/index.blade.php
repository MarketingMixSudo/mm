<x-layouts.app title="title" description="desc">

    @slot('seo')

    <script type="application/ld+json">
        {
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "https://marketingmix.pl"  
  }]
}
    </script>

    @endslot



    @include('pages.home.partials.hero')

    <x-logo-marquee />

    @include('pages.home.partials.features-grid')

    @include('pages.home.partials.services')

    @include('pages.home.partials.projects')

    @include('pages.home.partials.testimonials')

    @include('pages.home.partials.blog')

    <x-text-marquee />

</x-layouts.app>