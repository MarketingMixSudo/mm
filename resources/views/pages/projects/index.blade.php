<x-layouts.app title="Usługi marketingowe od A do Z - tworzenie wizerunki marki - Agencja Reklamowa MarketingMix"
    description="Projekt logo, nowa strona lub sklep internetowy? Jesteśmy specjalistami w dziedzinie marketingu i pomożemy stworzyć wizerunek Twojej marki.">

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


    <x-hero title="Projektowanie">
        <x-breadcrumbs.nav>
            <x-breadcrumbs.item href="{{route('projects.index')}}" title="Projektowanie" class="font-medium" />
        </x-breadcrumbs.nav>

    </x-hero>


    <section class="section">

        <div class="wrapper !max-w-screen-lg prose__content">


            <span class=" prose__preheading">Eleganckie i kreatywne grafiki</span>
            <h2 class="prose__heading">Od czego zacząć współpracę z Marketing MIX?</h2>


            <p>
                Najlepiej od początku. Jako agencja oferująca pełny zakres usług marketingowych jesteśmy w stanie
                zbudować całą komunikację marketingową Twojej firmy.

            </p>

            <p> Zaczniemy od projektowania logo. Pomożemy Ci również wymyślić nazwę dla Twojej firmy czy produktu.
                Projekt znaku graficznego, jaki od nas otrzymasz będzie kompletny, tj. zawierający również kompletną
                koncepcję graficzną opartą o nowe logo, w skład której wchodzą miedzy innymi</p>

            <ul class="list-none ">

                <x-prose.list-item text="logo firmy" href="#" />
                <x-prose.list-item text="wizytówki firmowej" />
                <x-prose.list-item text="papier firmowy" />
                <x-prose.list-item text="plakatów i ulotek" />
                <x-prose.list-item text="drobne druki potrzebne w firmie" />

            </ul>

            <p>
                Zaprojektujemy dla Ciebie każdą grafikę, jakiej potrzebujesz. Dostarczymy wysokiej jakości projekty
                plakatów, ulotek, billboardów, kalendarzy, a także stron internetowych czy mailingów.

                To oczywiście dopiero pierwszy krok – dzięki współpracy z nami otrzymasz gotowy produkt, wydruk czy
                stronę internetową na bazie naszych projektów.
            </p>

            <h2>Usługa marketingowa A-Z</h2>

            <p>Od wielu lat współpracujemy z lokalnymi i ogólnopolskimi drukarniami i dostawcami produktów
                marketingowych. Mamy sprawdzonych partnerów do każdego rodzaju wydruku – od baneru, poprzez ulotkę aż po
                książkę. Korzystając z naszych usług masz pewność, że Twoje zamówienie będą realizować specjaliści,
                którzy najlepiej sobie z nim poradzą.</p>

            <p>Dodatkowo oferujemy te usługi i produkty w najlepszych możliwych cenach.</p>

            <h3>Jak projektujemy?</h3>
            <p>Opierając się na wieloletnim doświadczeniu i analizując bieżące trendy w designie stosujemy w naszym
                studio graficznym tę samą zasadę, która przyświeca całej naszej agencji. Dobieramy narzędzia i środki do
                tego, aby idealnie skomponować ostateczny produkt pasujący do Twojego biznesu. Korzystamy z nowoczesnych
                narzędzi jednocześnie zwracając pilną uwagę na kontakt z Klientem i pogłębioną analizę jego potrzeb.</p>

            <h3>Abonamenty graficzne</h3>

            <p>Potrzebujesz wielu projektów regularnie? Nie chcesz płacić za każdy z osobna i chcesz zaoszczędzić
                pieniądze? Rozważ nasz abonament graficzny – zamiast zatrudniać grafika w swojej organizacji i ponosić
                koszty dostaniesz naszego, oddelegowanego do obsługi Twojej firmy. Będzie to zawsze ta sama osoba,
                dodatkowo wspierana przez Twojego opiekuna w naszej agencji. Dzięki temu zachowasz ciągłość komunikacji,
                z łatwością wrócisz do starych projektów czy pomysłów. Abonament się opłaca.
            </p>


            <div class="pt-6 max-w-screen-md mx-auto">
                <x-accordion-item id="1" title="Content Marketing">
                    <p>Stworzymy wszystko, czego potrzebuje Twoja firma do skutecznej komunikacji marketingowej:</p>
                    <ul class="list-dis">
                        <li>zdjęcia produktów</li>
                        <li>projekty graficzne</li>
                        <li>teksty reklamowe</li>
                        <li>hasła i slogany</li>
                    </ul>
                </x-accordion-item>
                <x-accordion-item id="2" title="Logotypy">
                    <p>Zaprojektujemy logotyp dla Twojej firmy. Może to być Twój pierwszy znak albo odświeżenie wizerunku przedsiębiorstwa. Razem z logo otrzymasz:</p>
                    <ul class="list-dis ">
                        <li>projekty wizytówek</li>
                        <li>druki firmowe</li>
                        <li>podstawowe zastosowania</li>
                        <li>księgę znaku</li>
                    </ul>
                </x-accordion-item>
                <x-accordion-item id="3" title="Strony internetowe">
                    <p>Zaprojektujemy kompleksowo obecność Twojej firmy w internecie. W ramach współpracy otrzymasz</p>
                    <ul class="list-dis">
                        <li>projekty stron www</li>
                        <li>projekt sklepu internetowego</li>
                        <li>grafiki do mediów społecznościowych</li>
                        <li>grafiki do kampanii online</li>
                    </ul>
                </x-accordion-item>
                <x-accordion-item id="4" title="Druki firmowe">
                    <p>Współpracujemy z wieloma drukarniami i wiemy, które robią najlepsze wizytówki, a które najlepiej sprawdzą się przy produkcji kalendarzy.</p>
                   
                </x-accordion-item>
            </div>

        </div>
    </section>




   



</x-layouts.app>