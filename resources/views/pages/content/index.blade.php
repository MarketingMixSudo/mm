<x-layouts.app title="Tworzenie treści marketingowych - Agencja Reklamowa MarketingMix"
    description="Oferujemy najlepsze jakościowo treści marketingowe i porady od profesjonalistów. Z nami opanujesz sztukę promocji i zwiększysz widoczność swojej marki">

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
    "name": "Tworzenie treści marketingowych",
    "item": "https://marketingmix.pl/tresci/"  
  }]
}
    </script>
    @endslot


    <x-hero title="Tworzenie treści marketingowych">
        <x-breadcrumbs.nav>
            <x-breadcrumbs.item href="{{route('content.index')}}" title="Tworzenie treści marketingowych"
                class="font-medium" />
        </x-breadcrumbs.nav>

    </x-hero>


    <section class="section">

        <div class="wrapper !max-w-screen-lg prose__content">


            <span class=" prose__preheading">Coś dla Ciebie napiszemy</span>
            <h2 class="prose__heading">W jaki sposób zaangażować Klientów?</h2>


            <p>
                Niezależnie od tego, jaką strategię marketingową obierzemy wspólnie dla Twojej firmy, będziesz
                potrzebować treści, które przedstawią Twój produkt lub usługę klientom. Współczesny konsument oczekuje
                od Ciebie wysokiej jakości zdjęć i filmów, ale i wciągających, nieszablonowych opisów i innych tekstów.
                Skomponujemy dla Ciebie odpowiedni zestaw treści.
            </p>

            <p>Tworzymy dla naszych Klientów:</p>

            <ul class="list-none ">

                <x-prose.list-item text="posty na blogi, teksty na strony" />
                <x-prose.list-item text="wpisy do mediów społecznościowych" />
                <x-prose.list-item text="artykuły do prasy, na portale" />
                <x-prose.list-item text="slogany reklamowe, nazwy" />


            </ul>


            <p>Dlaczego trudno jest napisać dobry tekst marketingowy o własnej firmie lub swoich produktach? Często
                problemem jest tzw. paradoks eksperta w wydaniu, które nie pozwala nam przyjąć perspektywy naszego
                Klienta. Czasem nazbyt skupiamy się na szczegółach, innym razem pomijamy istotne dla odbiorcy cechy.

            </p>

            <p>
                Kolejnym wyzwaniem jest zmieniający się charakter odbiorców naszych tekstów, a także ciągle ewoluujące
                platformy, na których się z nimi spotkają. Mam tu na myśli na przykład media społecznościowe, które
                zawładnęły tym, w jaki sposób korzystamy z internetu. Według statystyk publikowanych przez Napoleon Cat
                (to takie narzędzie do zarządzania mediami społecznościowymi) w styczniu 2022 roku mieliśmy w Polsce
                niemal 25 milionów użytkowników Facebooka. Czy warto się z nimi komunikować? Oczywiście, że tak.
                Pomożemy Ci dotrzeć do tych, którzy są potencjalnymi Klientami Twojej firmy a następnie zaangażować ich
                w życie Twojej społeczności. Będziemy ich wspólnie zaskakiwać, rozwijać i wiązać z marką


            </p>

            <h2>Nie tylko ludzie czytają teksty
            </h2>

            <p>Kto jeszcze? Na przykład robot Google. Bezustannie „zwiedza” internet w poszukiwaniu atrakcyjnych treści,
                które należałoby wypromować. Tak to przynajmniej wygląda w założeniu. My korzystamy z jego usług
                wówczas, kiedy chcemy pozycjonować naszą stronę w internecie czyli zajmować najwyższe pozycje na liście
                wyników w wyszukiwarce. Jeśli „nakarmimy” go dobrze na naszej stronie, to on namówi algorytm do tego,
                aby nasza strona była wyżej. Jest przy tym dość wybredny i trzeba dużo uważności, aby przygotować dla
                niego właściwe menu.

            </p>

        </div>
    </section>


    <section>
        <div class="wrapper !max-w-screen-2xl">

            <div class="max-w-screen-lg mx-auto">

                <x-heading-classic preheading="Co możemy dla Ciebie zrobić?"
                heading="Kompleksowo zajmiemy się treściami na potrzeby Twojego marketingu" />
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 2xl:gap-12 pt-12">


                <div
                    class="bg-primary-400  rounded-xl p-6 flex flex-col justify-center items-center gap-6 py-12 min-h-[350px] text-center  text-font-light">




                    <div class="flex flex-col justify-center items-center">

                        <x-lucide-calendar class="w-20 text-font-light stroke-1 mb-3" />
                        <span class="text-2xl font-heading font-bold uppercase">Planowanie publikacji

                        </span>
                    </div>
                    <p>Działamy według planu - Ty zyskujesz kontrolę.



                    </p>



                </div>
              
               

                <div
                    class="bg-primary-400  rounded-xl p-6 flex flex-col justify-center items-center gap-6 py-12  text-center  text-font-light min-h-[350px]">




                    <div class="flex flex-col justify-center items-center">

                        <x-lucide-settings class="w-20 text-font-light stroke-1 mb-3" />
                        <span class="text-2xl font-heading font-bold uppercase">Spójna <br>komunikacja

                        </span>
                    </div>
                    <p>Wszystkie materiały są konsekwentne i powiązane.





                    </p>



                </div>
                <div
                    class="bg-primary-400  rounded-xl p-6 flex flex-col justify-center items-center gap-6 py-12 min-h-[350px] text-center  text-font-light">




                    <div class="flex flex-col justify-center items-center">

                        <x-heroicon-o-light-bulb class="w-20 text-font-light stroke-1 mb-3" />
                        <span class="text-2xl font-heading font-bold uppercase">Kreatywne 

 <br>podejście

                        </span>
                    </div>
                    <p>Klienci pokochają Twoje nowe treści reklamowe.







                    </p>



                </div>

 <div
                    class="bg-primary-400  rounded-xl p-6 flex flex-col justify-center items-center gap-6 py-12 min-h-[350px] text-center  text-font-light">




                    <div class="flex flex-col justify-center items-center">

                        <x-lucide-thumbs-up class="w-20 text-font-light stroke-1 mb-3" />
                        <span class="text-2xl font-heading font-bold uppercase">Social 

 

 <br>media

                        </span>
                    </div>
                    <p>Specjalizujemy się w angażowaniu społeczności.









                    </p>



                </div>

            </div>
        </div>
    </section>

  



</x-layouts.app>