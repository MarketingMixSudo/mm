<x-layouts.app title="Realizacje - Agencja Reklamowa MarketingMix"
    description="Nasze realizacje Świadczyliśmy nasze usługi dla takich firm Hotele i apartamenty Sklepy internetowe">

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
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Realizacje",
    "item": "https://marketingmix.pl/realizacje"  
  }]
}
    </script>
    @endslot


    <x-hero title="Realizacje
">
        <x-breadcrumbs.nav>

            <x-breadcrumbs.item href="{{route('www.ecommerce')}}" title="Realizacje
" class="font-medium" />
        </x-breadcrumbs.nav>

    </x-hero>


    <section class="section">

        <div class="wrapper  !max-w-screen-2xl">


            <x-heading-classic preheading="Nasze realizacje" heading="Zobacz firmy które nam zaufały"/>

            <div class="flex justify-start items-center gap-4 flex-wrap pt-16">


                <x-button data-title="" aria-label="Pokaż wszystkie realizacje" class="btn-active realisationFilterBtn-js">
                    Wszystkie</x-button>



                @foreach ($categories as $category)
                <x-button data-title="{{ $category->slug }}" aria-label="Filtruj przez: {{ $category->title }}"
                    class="realisationFilterBtn-js ">{{ $category->title }}</x-button>
                @endforeach

            </div>


            <div class=" grid grid-cols-1 md:grid-cols-2  gap-7 pt-6 md:pt-12">

                @foreach ($realisations as $realisation)

                <x-realisation-card :realisation="$realisation" />

                @endforeach



            </div>



        </div>
    </section>









</x-layouts.app>