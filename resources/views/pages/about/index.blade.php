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
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Projektowanie",
    "item": "https://marketingmix.pl/projektowanie/"  
  }]
}
    </script>
    @endslot


    <x-hero title="O nas">
        <x-breadcrumbs.nav>
            <x-breadcrumbs.item href="{{route('photoVideo.index')}}" title="Zdjęcia hoteli, apartamentów, restauracji
" class="font-medium" />
        </x-breadcrumbs.nav>

    </x-hero>


    <section class="py-16">
        <div class="max-w-screen-xl mx-auto space-y-12">

            <div class="flex w-full ">


                <div class=" flex flex-col gap-2 w-[60%] mr-52">
                    <span class="text-primary-400 font-medium text-xl">Our blog</span>
                    <h2 class="text-5xl font-bold font-heading">Explore recent publication</h2>
                    <p class="mt-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. At consequuntur, accusamus
                        impedit repudiandae tenetur saepe distinctio perferendis maiores, officia pariatur voluptatem
                        voluptas est dignissimos molestias sint aperiam non nulla quidem? Lorem ipsum dolor, sit amet
                        consectetur adipisicing elit. Aspernatur ea iure perferendis dicta temporibus ratione
                        voluptatibus ipsum veniam fugiat incidunt!</p>

                    <hr class="w-[100px] border-primary-400 mt-12">
                </div>

                <img src="{{ asset('dummy/service.jpg') }}" alt=""
                    class="w-[40%] min-h-[450px] object-cover rounded-xl transition duration-300 grayscale-0 hover:grayscale " />

            </div>

            <div class="flex justify-between w-full ">


                <img src="{{asset('dummy/service.jpg')}}" alt=""
                    class="w-[57%] min-h-[450px] object-cover rounded-xl transition duration-300 grayscale-0 hover:grayscale">

                <img src="{{asset('dummy/service.jpg')}}" alt=""
                    class="w-[40%] min-h-[450px] object-cover rounded-xl transition duration-300 grayscale-0 hover:grayscale">

            </div>

        </div>
    </section>


    <section class="py-12">

        <div class="bg-background-dark-800 rounded-xl max-w-screen-xl mx-auto  py-12 px-20 flex justify-between gap-12">

            <div class="w-[40%]">

                <h2 class="text-3xl font-heading font-bold mb-4">Our fun fact</h2>
                <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam
                    rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
            </div>

            <div class="w-[60%] grid grid-cols-2 grid-rows-2 gap-x-6 gap-y-12">

                <div class="flex justify-start items-center  gap-4">
                    <span class="font-bold text-6xl">40K</span>
                    <div class="flex flex-col justify-start items-start leading-none">
                        <span class="text-primary-400 text-2xl font-bold block">+</span>
                        <span class="block">Happy Clients</span>
                    </div>
                </div>
                <div class="flex justify-start items-center  gap-4">
                    <span class="font-bold text-6xl">40K</span>
                    <div class="flex flex-col justify-start items-start leading-none">
                        <span class="text-primary-400 text-2xl font-bold block">+</span>
                        <span class="block">Happy Clients</span>
                    </div>
                </div>
                <div class="flex justify-start items-center  gap-4">
                    <span class="font-bold text-6xl">40K</span>
                    <div class="flex flex-col justify-start items-start leading-none">
                        <span class="text-primary-400 text-2xl font-bold block">+</span>
                        <span class="block">Happy Clients</span>
                    </div>
                </div>
                <div class="flex justify-start items-center  gap-4">
                    <span class="font-bold text-6xl">40K</span>
                    <div class="flex flex-col justify-start items-start leading-none">
                        <span class="text-primary-400 text-2xl font-bold block">+</span>
                        <span class="block">Happy Clients</span>
                    </div>
                </div>
            </div>

        </div>

    </section>

   <section class="py-16">
    <div class="max-w-screen-xl mx-auto space-y-12">
        <div class="flex w-full relative gap-12">
            <!-- Kontener na obrazek i tło -->
            <div class="w-[45%] min-h-[450px] relative">
                <!-- Tło (wystające spod obrazka) -->
                <div class="absolute top-8 left-8 w-full h-full bg-primary-400 rounded-xl z-0"></div>

                <!-- Obrazek -->
                <img src="{{ asset('dummy/service.jpg') }}" alt=""
                    class="w-full h-full object-cover rounded-xl transition duration-300 grayscale-0 hover:grayscale relative z-10" />
            </div>

            <!-- Tekst -->
            <div class="flex flex-col gap-2 w-[55%] ml-32">
                <span class="text-primary-400 font-medium text-xl">Our blog</span>
                <h2 class="text-5xl font-bold font-heading">Explore recent publication</h2>
                <p class="mt-12">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore, assumenda velit quos facilis eaque ea architecto veritatis vitae alias, commodi veniam animi autem! Maiores corporis accusantium earum nam deleniti voluptates, eveniet eligendi possimus animi vero tempore, ratione necessitatibus. A veritatis aut ipsum architecto distinctio quos!</p>
                <hr class="w-[100px] border-primary-400 mt-12">
            </div>
        </div>
    </div>
</section>


<section class="py-12">

    <div class="max-w-screen-xl mx-auto text-center">

        <h2 class="font-heading text-5xl font-semibold mb-6">Zaufali nam</h2>
        {{-- <x-logo-marquee /> --}}
    </div>

</section>

</x-layouts.app>