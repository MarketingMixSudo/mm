<x-layouts.app title="O nas - Agencja Reklamowa MarketingMix"
    description="Kim jesteśmy? Zespół doświadczonych praktyków z różnych dziedzin marketingu W Marketing Mix podchodzimy do promocji marki całościowo. Pracujemy w branży …">


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
    "name": "O nas",
    "item": "https://marketingmix.pl/o-nas/"  
  }]
}
    </script>
    @endslot


    <x-hero title="O nas">
        <x-breadcrumbs.nav>
            <x-breadcrumbs.item href="{{route('about.index')}}" title="O nas" class="font-medium" />
        </x-breadcrumbs.nav>

    </x-hero>


    {{-- <section class="py-16">
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
    </section> --}}


    {{-- <section class="py-12">

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

    </section> --}}

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
                    <span class="text-primary-400 font-medium text-xl">Kim jesteśmy?</span>
                    <h2 class="text-5xl font-bold font-heading">Zespół doświadczonych praktyków z różnych dziedzin
                        marketingu</h2>
                    <p class="mt-12">W Marketing Mix podchodzimy do promocji marki całościowo. Pracujemy w branży
                        reklamowej już prawie 20 lat budując marki najbardziej znanych i rozpoznawalnych firm na
                        Podhalu, ale i poza nim. Dobrze rozumiemy, że reklama to wiele przenikających się tematów.
                        Planujemy i realizujemy to w ten sposób, aby wszystko ze sobą grało, było spójne i konsekwentne.

                    </p>
                    <hr class="w-[100px] border-primary-400 mt-12">
                </div>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="wrapper ">

            <x-heading-classic preheading="Warto pracować z nami"
                heading="Oszczędzisz czas, wysiłek <br>oraz uzyskasz lepsze wyniki" />

            <div class="grid grid-cols-3 gap-12 pt-12">

                <div
                    class="bg-primary-400  rounded-xl p-6 flex flex-col justify-center items-center gap-6 py-12 aspect-square text-center  text-font-light">




                    <div class="flex flex-col justify-center items-center">

                        <h3 class="text-2xl font-heading font-bold uppercase">Zlecisz nam <br>marketing</h3>
                    </div>
                    <p>Kompleksowo zajmiemy się promocją Twojej firmy. Nie ponosisz kosztów zatrudniania i wyposażania
                        działu marketingu.





                    </p>



                </div>

                <div
                    class="bg-primary-400  rounded-xl p-6 flex flex-col justify-center items-center gap-6 py-12 aspect-square text-center text-font-light">




                    <div class="flex flex-col justify-center items-center">


                        <h3 class="text-2xl font-heading font-bold uppercase">Twój dedykowany opiekun</h3>
                    </div>
                    <p>Do prowadzenia spraw Twojej firmy zostanie oddelegowany nasz pracownik, który zajmie się
                        komunikacją pomiędzy Tobą a zespołem.
                    </p>



                </div>

                <div
                    class="bg-primary-400  rounded-xl p-6 flex flex-col justify-center items-center gap-6 py-12 aspect-square text-center  text-font-light">




                    <div class="flex flex-col justify-center items-center">


                        <h3 class="text-2xl font-heading font-bold uppercase">Terminowa realizacja zadań</h3>
                    </div>
                    <p>Pilnujemy, aby deklarowane przez nas terminy były dotrzymane



                    </p>



                </div>





            </div>
        </div>
    </section>



    <section class="py-12">

        <div class="max-w-screen-xl mx-auto text-center">

            <h2 class="font-heading text-5xl font-semibold mb-6">Zaufali nam</h2>
            
            <x-logo-marquee :logos="$logos"/>
        </div>

    </section>

</x-layouts.app>