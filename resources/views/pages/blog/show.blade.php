<x-layouts.app title="{{$post->getMetaTitle()}}" description="{{$post->getMetaDescription()}}">


    @slot('seo')
    @php
    $excerpt = Str::limit(strip_tags($post->content), 100);
    $schemaData = [
    "@context" => "https://schema.org",
    "@type" => "NewsArticle",
    "mainEntityOfPage" => [
    "@type" => "WebPage",
    "@id" => url("/aktualnosci/" . $post->slug),
    ],
    "headline" => $post->title,
    "description" => $post->description,
    "image" => asset('storage/' . $post->thumbnail),
    "author" => [
    "@type" => "Organization",
    "name" => "MarketingMix",
    "url" => "https://marketingmix.pl",
    ],
    "publisher" => [
    "@type" => "Organization",
    "name" => "MarketingMix",
    "logo" => [
    "@type" => "ImageObject",
    "url" => asset('assets/logo.webp'),
    ],
    ],
    "datePublished" => $post->created_at->format('Y-m-d'),
    ];

    $breadcrumbData = [
    "@context" => "https://schema.org/",
    "@type" => "BreadcrumbList",
    "itemListElement" => [
    [
    "@type" => "ListItem",
    "position" => 1,
    "name" => "Home",
    "item" => url('/'),
    ],
    [
    "@type" => "ListItem",
    "position" => 2,
    "name" => "Aktualności",
    "item" => url('/blog'),
    ],
    [
    "@type" => "ListItem",
    "position" => 3,
    "name" => $post->title,
    "item" => url('/blog/' . $post->slug),
    ],
    ],
    ];
    @endphp

    <script type="application/ld+json">
        {!! json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    <script type="application/ld+json">
        {!! json_encode($breadcrumbData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    @endslot


    <section class="pt-32 pb-12 max-w-screen-lg mx-auto">

        <div class="flex flex-col justify-center items-center text-center gap-6">

            <x-breadcrumbs.nav>
                <x-breadcrumbs.item href="{{route('blog.index')}}" title="Blog" class="font-medium" />
                <x-breadcrumbs.item href="{{route('blog.show',$post->slug)}}" title="{{$post->title}}" class="font-medium" />
            </x-breadcrumbs.nav>

            <h2 class="text-5xl font-bold leading-snug">{{$post->title}}</h2>

            <span>{{$post->getPublishedDate()}}</span>

            <img src="{{asset('storage/'.$post->thumbnail)}}" alt="{{$post->title}}" class="w-full rounded-2xl max-h-[500px] object-cover">


        </div>

    </section>

    <article class="prose__content wrapper  !max-w-screen-lg ">
        {!!$post->content!!}

    </article>

@if($latestPosts->count() > 0)
   <section class="py-12">
    <div class="grid grid-cols-12 items-center gap-4">

        <!-- Część tekstowa przesunięta do środka -->
        <div class="col-span-3 col-start-3 flex flex-col gap-2">
            <span class="text-primary-400 font-medium text-xl">Blog</span>
            <h2 class="text-5xl font-bold font-heading">Zobacz pozostałe artykuły</h2>
            <a href="{{route('blog.index')}}" class="flex justify-start items-center gap-2 group mt-12">
                <span class="group-hover:text-primary-400 duration-300">wszytkie posty</span>
                <x-lucide-arrow-right
                class="text-font-dark dark:text-font-light size-4 group-hover:text-primary-400 group-hover:translate-x-3 duration-300" />
            </a>
        </div>

        <!-- Swiper -->
        <div class="col-span-7 w-full swiper h-[500px] postsCarousel--js ">
            <div class="swiper-wrapper">


                @foreach ($latestPosts as $post )
                     <a href="{{route('blog.show',$post->slug)}}" class=" !flex !flex-col-reverse rounded-xl relative overflow-hidden h-full group swiper-slide">
                    <!-- ustaw wysokość, np. h-64 -->
                    <div class="absolute inset-0 z-0">
                        <img src="{{asset('storage/'.$post->thumbnail)}}" alt="{{$post->title}}" class="w-full h-full object-cover" loading="lazy"/>
                        <div class="absolute inset-0 bg-black/30"></div>
                    </div>

                    <div class="relative z-20 p-6 mt-auto">
                        <span class="text-white">{{$post->getPublishedDate()}}</span>
                        <h3 class="text-white text-xl font-bold group-hover:text-primary-400 duration-300">
                           {{$post->title}}
                        </h3>
                    </div>
                </a>
                @endforeach
               
              
                
              



               
            </div>
        </div>

    </div>
</section>
@endif
</x-layouts.app>