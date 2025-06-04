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
    "name": "Projektowanie stron i sklepów internetowych",
    "item": "https://marketingmix.pl/www/"  
  }]
}
    </script>
    @endslot


    <x-hero title="Projektowanie stron i sklepów internetowych">
        <x-breadcrumbs.nav>
            <x-breadcrumbs.item href="{{route('www.index')}}" title="Projektowanie stron i sklepów internetowych"
                class="font-medium" />
        </x-breadcrumbs.nav>

    </x-hero>


    <section class="section">

        <div class="wrapper !max-w-screen-lg prose__content">


            <span class=" prose__preheading">Oswajamy internet</span>
            <h2 class="prose__heading">Świat nowych technologii to nie Twoja bajka?</h2>


            <p>
                W pełni to rozumiemy, choć naszą jest jak najbardziej. W ramach naszych usług informatycznych, nie tylko
                przygotujemy dla Ciebie stronę internetową, ale również przeprowadzimy Cię krok po kroku przez proces
                wprowadzenia w Twojej firmie wszystkich zmian związanych z nowymi technologiami.

            </p>

            <h3>
                Jak to działa? Zapraszamy!
            </h3>

            <p>Dla nas technologia nie istnieje sama w sobie. Za każdym rozwiązaniem, którego dostarczają nam
                informatycy stoją zmiany organizacyjne, społeczne, biznesowe. My analizujemy wpływ technologii na
                przedsiębiorstwa i dobieramy rozwiązania tak, aby zmiany, które przynoszą były jak najbardziej
                pozytywne.</p>

            <p>Posłużmy się przykładem: Firma o ugruntowanej pozycji na rynku miała stronę internetową wykonaną kilka
                (czasem kilkanaście) lat temu. Zamówienia przyjmowała telefonicznie lub mailem. Po zmianie strony na
                opracowaną przez naszych specjalistów łatwo zauważyć, że telefony z pytaniami o szczegóły produktów,
                których brakowało do tej pory na stronie, przestały dzwonić. W takiej firmie nowoczesna strona
                internetowa, która sprzedaje, wywoła zmianę formy obsługi klienta, postawi przed działem sprzedaży i
                zarządem nowe wyzwania. Nieuchronnym efektem będzie oczywiście zwiększenie sprzedaży – usprawnienie
                procesu wywoła więcej zamówień, szybszą realizację etc.

            </p>
        </div>
    </section>


    <section class="section !pt-0">

        <div class="wrapper !max-w-[700px]  lg:!max-w-screen-3xl ">


            <x-heading-classic preheading="Oswoimy informatykę" heading="Nowe technologie dla Twojej firmy" />

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 2xl:gap-12 pt-12">



                <x-flip-card img="{{asset('dummy/blog.jpg')}}" title="Strony www">Realizujemy funkcjonalne strony
                    internetowe w oparciu o profesjonalne
                    szablony, jak i indywidualne projekty.</x-flip-card>

                <x-flip-card img="{{asset('dummy/blog.jpg')}}" title="Sklepy internetowe">Zaczynasz dopiero przygodę z
                    handlem w sieci? A może pierwsze kroki już za Tobą? Stworzymy Twoje miejsce na e-commerce.
                </x-flip-card>

                <x-flip-card img="{{asset('dummy/blog.jpg')}}" title="Bezpieczne rozwiązania">Stawiamy na
                    najnowocześniejsze rozwiązania informatyczne. Wszystkie nasze działania opierają się na solidnej
                    wiedzy i praktyce w IT.</x-flip-card>

            </div>


        </div>

    </section>

    <section class="section !pt-0">

        <div class="wrapper !max-w-screen-lg prose__content">

            <h2>Technologie są ważne</h2>

            <p>O tym, że spora część naszego życia przeniosła się już do internetu nie trzeba dziś już nikogo
                przekonywać. Obecność firm w wirtualnej przestrzeni jest właściwie normą i podstawowym wymogiem.
                Pomożemy Ci postawić pierwsze, ale i kolejne kroki na tej drodze. Zgodnie z naszym kluczowym
                przesłaniem, dobierzemy dla Ciebie technologie, których potrzebujesz. Mamy w tej kwestii doświadczenie,
                odpowiednią wiedzę i specjalistów z doskonałą znajomością branży IT. Wybór tego czy innego rozwiązania
                nie powinien być jednak podyktowany wyłącznie modą czy bieżącymi trendami – dostarczamy najnowsze
                technologie wkomponowane w Twoją firmę i plan marketingowy. Nie musisz znać się na tym wszystkim,
                wystarczy, że my się znamy. Twoja wiedza na temat siły szyfrowania Twojego certyfikatu SSL jest
                absolutnie zbyteczna i prawdopodobnie niewiele wnosi do Twojego biznesu. Wystarczy, że otrzymasz od nas
                zapewnienie, że strona jest bezpieczna i zgodna z wymogami, pokażemy Ci również jak to sprawdzić. To
                samo dotyczy RODO, cookies, a także wersji serwera baz danych. Razem z Tobą skupimy się na tym, aby
                Twoja nowa strona była dopasowana do potrzeb, aby miała to wszystko czego oczekują od niej Twoi klienci.
                A może coś więcej? Porozmawiajmy o tym.</p>



        </div>
    </section>

    <section class="section">


        <div class="wrapper !max-w-screen-2xl">

         

<x-heading-special heading="Realizacje" subheading="Portfolio tworzonych przez nas stron i sklepów internetowych"/>

            <div class=" w-full swiper  wwwwRealisationsCarousel--js ">
                <div class="swiper-wrapper">


                    <div class=" !rounded-xl  overflow-hidden  swiper-slide">
                        <img src="{{asset('dummy/blog.jpg')}}" alt="" class=" w-full h-full object-cover -z-10"
                            loading="lazy">

                        <div
                            class=" flex flex-col gap-4 justify-center items-center bg-primary-400 text-font-light p-4">
                            <h4 class="z-10 text-xl font-medium">Jakaś strona</h4>

                        </div>

                    </div>
                    <div class=" !rounded-xl  overflow-hidden  swiper-slide">
                        <img src="{{asset('dummy/blog.jpg')}}" alt="" class=" w-full h-full object-cover -z-10"
                            loading="lazy">

                        <div
                            class=" flex flex-col gap-4 justify-center items-center bg-primary-400 text-font-light p-4">
                            <h4 class="z-10 text-xl font-medium">Jakaś strona</h4>

                        </div>

                    </div>
                    <div class=" !rounded-xl  overflow-hidden  swiper-slide">
                        <img src="{{asset('dummy/blog.jpg')}}" alt="" class=" w-full h-full object-cover -z-10"
                            loading="lazy">

                        <div
                            class=" flex flex-col gap-4 justify-center items-center bg-primary-400 text-font-light p-4">
                            <h4 class="z-10 text-xl font-medium">Jakaś strona</h4>

                        </div>

                    </div>
                    <div class=" !rounded-xl  overflow-hidden  swiper-slide">
                        <img src="{{asset('dummy/blog.jpg')}}" alt="" class=" w-full h-full object-cover -z-10"
                            loading="lazy">

                        <div
                            class=" flex flex-col gap-4 justify-center items-center bg-primary-400 text-font-light p-4">
                            <h4 class="z-10 text-xl font-medium">Jakaś strona</h4>

                        </div>

                    </div>
                </div>

            </div>

            <div class="flex justify-center items-center mt-16">

                <x-link-btn href="#" label="Zobacz wszystkie" />
            </div>

    </section>


</x-layouts.app>