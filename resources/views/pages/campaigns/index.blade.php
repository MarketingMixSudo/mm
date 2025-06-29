<x-layouts.app title="Skuteczne kampanie marketingowe - Agencja Reklamowa MarketingMix"
    description="Kampanie Google, Facebook, TV, radio - mamy wszystko, czego potrzebujesz do skutecznej promocji. Zbuduj swoją markę z naszym wsparciem.">

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
    "name": "Kampanie marketingowe",
    "item": "https://marketingmix.pl/kampanie/"  
  }]
}
    </script>
    @endslot


    <x-hero title="Kampanie marketingowe">
        <x-breadcrumbs.nav>
            <x-breadcrumbs.item href="{{route('campaigns.index')}}" title="Kampanie marketingowe" class="font-medium" />
        </x-breadcrumbs.nav>

    </x-hero>


    <section class="section">

        <div class="wrapper !max-w-screen-lg prose__content">


            <span class=" prose__preheading">reklama w internecie</span>
            <h2 class="prose__heading">Skutecznie pozyskuj Klientów</h2>


            <p>
                Nawet najlepsza strona internetowa nie przyniesie Twojemu biznesowi pożytku, jeśli nie będą jej
                odwiedzali Twoi obecni i potencjalni Klienci.

            </p>

            <p> Prowadzimy skuteczne kampanie w internecie.</p>

            <ul class="list-none ">

                <x-prose.list-item text="reklamy w sieci Google" />
                <x-prose.list-item text="angażujące działania na Facebooku" />
                <x-prose.list-item text="kampanie produktowe" />
                <x-prose.list-item text="reklama w telewizji, w radiu" />


            </ul>


        </div>
    </section>


    <section class="section ">
        {{-- wrapper --}}
        <div class="wrapper ">

            <x-heading-classic preheading="Twoja obecność w internecie" heading="Rozwijamy Twoją firmę w sieci" />

            {{-- container --}}
            <div class="flex flex-wrap justify-center items-strech  gap-6 2xl:gap-12 pt-12">

                {{-- card --}}
                <x-tilt-card number="20+" headingH3="partnerów" text="Stawiamy na długofalową, kompleksową współpracę. Zależy nam na tym, aby rozwijać się
                        razem z naszymi Klientami." />
                {{-- card --}}
                <x-tilt-card number="150+" headingH3="kampanii"
                    text="Prowadzimy kampanie nastawione na podnoszenie sprzedaży i wzmacnianie marki." />
                {{-- card --}}
                <x-tilt-card number="30+" headingH3="klientów"
                    text="Ciągle analizujemy wyniki i optymalizujemy nasze działania, aby dowozić coraz lepsze rezultaty." />


            </div>
        </div>



        <section class="section">

            <div class="wrapper !max-w-screen-lg prose__content">





                <p>
                    Klienci szukają Twoich produktów i usług w internecie. Szukają tam wszystkiego. Pytanie brzmi jak w
                    adekwatny i atrakcyjny sposób przedstawić im Twoją ofertę. W MarketingMix budujemy tę obecność
                    całościowo. Uruchomimy nie tylko skuteczne kampanie internetowe, zadbamy również o to, aby Twoja
                    oferta była wiarygodna, obudowana odpowiednimi treściami, osadzona w ciekawej historii. Znamy się na
                    tym.



                </p>




            </div>
        </section>



</x-layouts.app>