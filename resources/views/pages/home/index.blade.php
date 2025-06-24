<x-layouts.app title="Identyfikacja wizualna i tworzenie wizerunku firmy i marki | MarketingMix"
  description="Zajmujemy się tworzenie wizerunku marki i identyfikacją wizualną firmy. Kompleksowo prowadzimy kampanie oraz zajmiemy się obecnością firmy w Internecie.">

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

  @include('pages.home.partials.hero-marquee')

  @include('pages.home.partials.features-grid')

  @include('pages.home.partials.about')

  @include('pages.home.partials.services')

  @include('pages.home.partials.projects')

  @include('pages.home.partials.about-second')

  @include('pages.home.partials.testimonials')

  @include('pages.home.partials.blog')



</x-layouts.app>