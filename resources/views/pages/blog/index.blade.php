<x-layouts.app title="Blog o marketingu i reklamie | MarketingMix.pl"
    description="Porady, inspiracje i nowości ze świata marketingu i reklamy. Sprawdź, jak skutecznie promować firmę z MarketingMix.pl.">

    @slot('seo')

    @if ($posts->onFirstPage() === false)
    <link rel="prev" href="{{ $posts->currentPage() === 2 ? route('blog.index') : $posts->previousPageUrl() }}">
    @endif

    @if ($posts->hasMorePages())
    <link rel="next" href="{{ $posts->nextPageUrl() }}">
    @endif

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
    "name": "Blog",
    "item": "https://marketingmix.pl/blog/"  
  }]
}
    </script>
    @endslot


    <x-hero title="Blog">
        <x-breadcrumbs.nav>
            <x-breadcrumbs.item href="{{route('blog.index')}}" title="Blog" class="font-medium" />
        </x-breadcrumbs.nav>

    </x-hero>


    <section class="section">

        <div class="wrapper !max-w-screen-lg">

            @php
            $firstPost = $posts->first();
            $otherPosts = $posts->skip(1);
            @endphp

            <x-post-card :post="$firstPost"/>


            @if($otherPosts->count() > 0)
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-10">

                @foreach ($otherPosts as $post )
               <x-post-card :post="$post"/>
                @endforeach





            </div>

            @endif

            {{ $posts->links('vendor.pagination.tailwind') }}
        </div>

    </section>


</x-layouts.app>