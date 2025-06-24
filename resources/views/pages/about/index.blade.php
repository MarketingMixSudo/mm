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

    <x-section-double-image image="/dummy/service.jpg" alt="Stworzymy pozytywny wizerunek Twojej firmy">
        <span class="section__preheading">Kim jesteśmy?</span>
        <h2 class="section__heading">Zespół doświadczonych praktyków z różnych dziedzin
            marketingu</h2>
        <p class="section__text">W Marketing Mix podchodzimy do promocji marki całościowo. Pracujemy w branży
            reklamowej już prawie 20 lat budując marki najbardziej znanych i rozpoznawalnych firm na
            Podhalu, ale i poza nim. Dobrze rozumiemy, że reklama to wiele przenikających się tematów.
            Planujemy i realizujemy to w ten sposób, aby wszystko ze sobą grało, było spójne i konsekwentne.</p>



    </x-section-double-image>


    <section class="section ">
        {{-- wrapper --}}
        <div class="wrapper ">

            <x-heading-classic preheading="Warto pracować z nami"
                heading="Oszczędzisz czas, wysiłek <br>oraz uzyskasz lepsze wyniki" />

            {{-- container --}}
            <div class="flex flex-wrap justify-center items-strech  gap-6 2xl:gap-12 pt-12">

                {{-- card --}}
                <x-tilt-card headingH3="Zlecisz nam <br>marketing" text="Kompleksowo zajmiemy się promocją Twojej firmy. Nie ponosisz kosztów zatrudniania i wyposażania
                        działu marketingu." />
                {{-- card --}}
                <x-tilt-card headingH3="Twój dedykowany<br> opiekun" text="Do prowadzenia spraw Twojej firmy zostanie oddelegowany nasz pracownik, który zajmie się
                        komunikacją pomiędzy Tobą a zespołem." />
                {{-- card --}}
                <x-tilt-card headingH3="Terminowa realizacja <br/>zadań" text="Pilnujemy, aby deklarowane przez nas terminy były dotrzymane" />




                


            </div>
        </div>
    </section>


  





</x-layouts.app>