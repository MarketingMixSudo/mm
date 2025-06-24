<x-layouts.app title="Druki firmowe - Agencja Reklamowa MarketingMix"
    description="Czasem trzeba coś wydrukować Wspieramy firmy w projektach związanych z tradycyjnymi produktami marketingowymi Znamy i rozumiemy potrzeby przedsiębiorstw w zakresie …">

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
    "name": "Druki firmowe",
    "item": "https://marketingmix.pl/druki-firmowe/"  
  }]
}
    </script>
    @endslot


    <x-hero title="Druki firmowe">
        <x-breadcrumbs.nav>
            <x-breadcrumbs.item href="{{route('companyForms.index')}}" title="Druki firmowe" class="font-medium" />
        </x-breadcrumbs.nav>

    </x-hero>


    <section class="section">

        <div class="wrapper !max-w-screen-lg prose__content">


            <span class=" prose__preheading">Czasem trzeba coś wydrukować</span>
            <h2 class="prose__heading">Wspieramy firmy w projektach związanych z tradycyjnymi produktami marketingowymi
            </h2>


            <p>
                Znamy i rozumiemy potrzeby przedsiębiorstw w zakresie tradycyjnych produktów marketingowych.
                Projektujemy i realizujemy produkcję wszelkich niezbędnych w firmie druków reklamowych i biurowych.
                Współpracujemy z rozmaitymi drukarniami i zamówienia naszych Klientów zawsze dopasowujemy do specyfiki
                producenta. Każda firma ma bowiem swoje mocne strony, robimy z tego użytek z korzyścią dla naszych
                Klientów. Zamówiliśmy w ich imieniu idące w tysięczne nakłady:

            </p>

            <ul class="list-none ">

                <x-prose.list-item text="wizytówek firmowych" />
                <x-prose.list-item text="plakatów i ulotek" />
                <x-prose.list-item text="billboardów" />
                <x-prose.list-item text="książek, broszur, katalogów" />


            </ul>


        </div>
    </section>


    <section class="section !pt-0">
    {{-- wrapper --}}
    <div class="wrapper !max-w-screen-2xl">

        {{-- container --}}
        <div class="flex flex-wrap justify-center items-strech  gap-6 2xl:gap-12 pt-12">

            {{-- card --}}
            <x-tilt-card headingH2="Najlepsze <br>ceny" text="Dzięki wieloletniej współpracy korzystamy z wysokich rabatów."/>

            {{-- card --}}
            <x-tilt-card headingH2="Bezkompromisowa <br> jakość" text="Kręcimy reportaże, spoty reklamowe, filmy edukacyjne. Obsługujemy transmisje online."/>

            {{-- card --}}
            <x-tilt-card headingH2="Kompleksowa <br>usługa" text="Twoje druki będą integralną częścią całej strategii marketingowej."/>
              


           


        </div>
    </div>
</section>



 

<section class="section">

        <div class="wrapper !max-w-screen-lg prose__content">


            


            <p>
              Specjalizujemy się w marketingu branży HoReCa i Mice. Sami „wyrośliśmy” z hotelarstwa, tam zaczynała się nasza przygoda z marketingiem. Tam również poznaliśmy wszystkie możliwe wyzwania i bolączki tej gałęzi biznesu. Wiemy czego potrzebuje Twój hotel lub pensjonat, pomożemy Ci zaprojektować i zamówić:

            </p>

            <ul class="list-none ">

                <x-prose.list-item text="wszystko do Twojej restauracji (menu, podkładki, prezentery, bloczki kelnerskie)" />
                <x-prose.list-item text="wyposażenie recepcji i pokoi (karty z etui, zawieszki na drzwi, regulaminy pobytu)" />
                <x-prose.list-item text="druki konferencyjne, gadżety reklamowe" />
                


            </ul>

            <p>
                Czasami papierowa forma przekazu treści reklamowej jest najlepsza. Warto przy tym, żeby była to forma dobrze dobrana, starannie zrealizowana i profesjonalnie zaprojektowana. Tym właśnie zajmujemy się w projektach związanych z drukiem czy produkcją gadżetów reklamowych. 


            </p>

<p>
    Drukarnie specjalizują się często w produkcji konkretnego zestawu produktów, co jest uzależnione od parku maszynowego, jakim dysponują. Kilkanaście lat działalności w branży marketingowej pozwoliło nam poznać zakres tych specjalizacji i wiemy do jakiego producenta się zgłosić z konkretnym działaniem. Dzięki temu optymalizujemy budżety naszych Klientów przeznaczone na druk i produkty reklamowe. Innymi słowy jesteśmy w stanie zrobić więcej w tej samej cenie.


</p>

<p>
    To doświadczenie pozwoliło nam również poznać drukarzy, ich przyzwyczajenia, rynek, cechy osobowości. Nauczyliśmy się kontrolować jakość realizowanych za naszym pośrednictwem projektów i unikać efektu zdziwienia przy rozpakowaniu paczki z drukarni. Pracujemy na precyzyjnie przygotowanych projektach i nie wahamy się korzystać z próbnych wydruków. Sami dokonujemy korekty naszych materiałów i mamy pełną wiedzę o tym, co i gdzie powinno się wydrukować.


</p>

        </div>
    </section>

</x-layouts.app>