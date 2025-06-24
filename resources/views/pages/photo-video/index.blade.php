<x-layouts.app title="Wideo i zdjęcia apartamentów, hoteli i restauracji | MarketingMix"
    description="Zorganizujemy dla Ciebie sesję zdjęciową i nagramy również wideo. Specjalizujemy się i wykonujemy m.in. firmy i zdjęcia apartamentów, hoteli i restauracji.">

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


    <x-hero title="Zdjęcia hoteli, apartamentów, restauracji">
        <x-breadcrumbs.nav>
            <x-breadcrumbs.item href="{{route('photoVideo.index')}}" title="Zdjęcia hoteli, apartamentów, restauracji
" class="font-medium" />
        </x-breadcrumbs.nav>

    </x-hero>





    <section class="section">

        <div class="wrapper !max-w-screen-lg prose__content">


            <span class=" prose__preheading">W naszym obiektywie</span>
            <h2 class="prose__heading">Profesjonalna sesja zdjęciowa dla Twojego biznesu</h2>


            <p>
                W dzisiejszych czasach, w dobie Internetu i mediów społecznościowych, dobrze wykonane zdjęcia i filmy
                stanowią kluczową część wizerunku Twojego biznesu. Zdjęcia i filmy są niezbędne nie tylko dla witryny
                internetowej, ale także dla e-sklepu i mediów społecznościowych. Profesjonalne sesje zdjęciowe i filmowe
                realizowane przez MarketingMix pomogą Ci stworzyć niepowtarzalne i profesjonalne materiały wideo i
                fotograficzne.
            </p>



            <ul class="list-none ">

                <x-prose.list-item text="fotografia hoteli, pensjonatów, apartamentów" />
                <x-prose.list-item text="tworzenie materiałów z wykorzystaniem drona" />
                <x-prose.list-item text="sesje modowe i projektowe" />
                <x-prose.list-item text="kreatywne zdjęcia produktowe" />

            </ul>


        </div>
    </section>



    <section class="section !pt-0">
        {{-- wrapper --}}
        <div class="wrapper !max-w-screen-2xl">

            <div class="max-w-screen-lg mx-auto">

                <x-heading-classic preheading="Co zyskasz współpracując z nami" heading="Znakomitej jakości materiały dla Twoich projektów
" />
            </div>

            {{-- container --}}
            <div class="flex flex-wrap justify-center items-strech  gap-6 2xl:gap-12 pt-12">

                {{-- card --}}
                <x-tilt-card headingH3="Znakomite <br>zdjęcia"
                    text="Przeprowadzimy profesjonalną sesję zdjęciową. Realizujemy projekty od A do Z – zadbamy o wszystko.">
                    <x-lucide-camera class="w-20 text-font-light stroke-1 mb-3" />
                </x-tilt-card>

                {{-- card --}}
                <x-tilt-card headingH3="Kreatywne <br> filmy"
                    text="Kręcimy reportaże, spoty reklamowe, filmy edukacyjne. Obsługujemy transmisje online.">
                    <x-lucide-video class="w-20 text-font-light stroke-1 mb-3" />
                </x-tilt-card>

                {{-- card --}}
                <x-tilt-card headingH3="Treści, <br>które angażują" text="Szczegółowo planujemy każdy projekt, tak, żeby efekty naszej pracy wzbudzały zachwyt Twoich
                        Klientów.">
                    <x-lucide-pencil class="w-20 text-font-light stroke-1 mb-3" />
                </x-tilt-card>





            </div>
        </div>
    </section>





    <section class="pt-12">

        <div class="wrapper !max-w-screen-lg prose__content">
            <h2>Zdjęcia apartamentów, hoteli i restauracji</h2>





            <p>W dzisiejszych czasach, w dobie Internetu i mediów społecznościowych, dobrze wykonane zdjęcia i filmy
                stanowią kluczową część wizerunku Twojego biznesu. Zdjęcia i filmy są niezbędne nie tylko dla witryny
                internetowej, ale także dla e-sklepu i mediów społecznościowych. Profesjonalne sesje zdjęciowe i filmowe
                realizowane przez MarketingMix pomogą Ci stworzyć niepowtarzalne i profesjonalne materiały wideo i
                fotograficzne.</p>



            <h3>Sesje zdjęciowe z dronem</h3>

            <p>Oferujemy również tworzenie materiałów foto i wideo z wykorzystaniem drona. Dzięki temu możemy wykonać
                niezwykle atrakcyjne ujęcia i fotografie z powietrza. Takie ujęcia doskonale nadają się np. do pokazania
                pięknych krajobrazów lub prezentowania hoteli czy restauracji z niezwykłej perspektywy.

            </p>

            <h3>Sesje modowe i projektowe</h3>

            <p>Jesteśmy w stanie przeprowadzić również fotograficzne sesje modowe i projektowe. Zajmujemy się
                kompleksową obsługą takich projektów, dzięki czemu możemy przygotować dla Ciebie nie tylko profesjonalne
                zdjęcia i filmy, ale także kompletny scenariusz i stylizację. Dzięki temu uzyskasz spójny i przemyślany
                wizerunek podczas pokazu mody czy projektu.
            </p>

            <h3>Promocyjne materiały filmowe dla hoteli, restauracji i apartamentów</h3>

            <p>
                Posiadamy szeroką gamę umiejętności, dzięki czemu jesteśmy w stanie zrealizować dla Ciebie różnorodne
                filmy, takie jak spoty reklamowe, reportaże, czy filmy edukacyjne. Możemy również zorganizować
                transmisję online Twojego wydarzenia, aby widzowie z całego świata mogli uczestniczyć w nim na żywo.
            </p>
        </div>

    </section>


    <section class="">

        <div class="wrapper !max-w-screen-2xl">

            <div class=" w-full swiper  projectsCarousel--js mt-12">

                <div class="swiper-wrapper ">



                    <div class="swiper-slide rounded-xl  ">

                        <a href="{{asset('dummy/blog.jpg')}}" class="glightbox">
                            <img src="{{asset('dummy/blog.jpg')}}" alt="" class="rounded-xl w-full h-full object-cover">
                        </a>

                    </div>

                    <div class="swiper-slide rounded-xl  ">

                        <a href="{{asset('dummy/blog.jpg')}}" class="glightbox">
                            <img src="{{asset('dummy/blog.jpg')}}" alt="" class="rounded-xl w-full h-full object-cover">
                        </a>

                    </div>

                    <div class="swiper-slide rounded-xl  ">

                        <a href="{{asset('dummy/blog.jpg')}}" class="glightbox">
                            <img src="{{asset('dummy/blog.jpg')}}" alt="" class="rounded-xl w-full h-full object-cover">
                        </a>

                    </div>

                    <div class="swiper-slide rounded-xl  ">

                        <a href="{{asset('dummy/blog.jpg')}}" class="glightbox">
                            <img src="{{asset('dummy/blog.jpg')}}" alt="" class="rounded-xl w-full h-full object-cover">
                        </a>

                    </div>

                    <div class="swiper-slide rounded-xl  ">

                        <a href="{{asset('dummy/blog.jpg')}}" class="glightbox">
                            <img src="{{asset('dummy/blog.jpg')}}" alt="" class="rounded-xl w-full h-full object-cover">
                        </a>

                    </div>






                </div>

            </div>

        </div>
    </section>


    <section class="section">

        <div class="wrapper !max-w-screen-lg prose__content">

            <h2>Kreatywne zdjęcia produktowe dla Twojego biznesu online</h2>

            <p>Zdjęcia produktowe to nieodłączny element dla każdej firmy z branży e-commerce. Wciągające i kreatywne
                zdjęcia pomagają Twoim produktom wyróżnić się na tle konkurencji i przyciągnąć uwagę klientów. W
                MarketingMix wiemy, jak sprawić, aby proponowane przez Ciebie produkty przykuwały uwagę potencjalnego
                odbiorcy. Wykonane przez naszych fotografów zdjęcia produktowe świetnie wyglądają i są odpowiednio
                zoptymalizowane pod kątem wyszukiwania obrazów w Google. Dzięki temu nie tylko poprawisz ruch na swojej
                stronie, ale i zwiększysz jego konwersję, a co za tym idzie – sprzedaż oferowanych artykułów.
            </p>

            <h3>Dbamy o najwyższą jakość realizowanych projektów
            </h3>

            <p>
                Niezależnie, czy będą to zdjęcia sprzedawanych przez Ciebie wyrobów, fotografie obiektu, w którym
                świadczysz usługi czy też filmy prezentujące najważniejsze cechy Twojego biznesu – do powierzonego nam
                zadania podchodzimy z najwyższym zaangażowaniem. Dbamy o w pełni indywidualne podejście – każda firma ma
                inny profil, wartości i ogólną filozofię, jaką często da się przekazać zarówno ruchomym obrazem, jak i
                jedną chwilą zatrzymaną w kadrze. Dlatego ważnym elementem Twojej współpracy z MarketingMix jest
                przedstawienie swoich potrzeb oraz rozpoznanie oczekiwań odbiorców, do których się zwracasz.


            </p>

            <p>
                Gdy już zdobędziemy wiedzę na te tematy – przystępujemy do pracy. Wykorzystujemy cały swój potencjał,
                angażując do tego zadania wykwalifikowanych i kreatywnych fotografów oraz specjalistów od tworzenia
                filmów. Dzięki temu masz gwarancję, że współpracujesz z doświadczonymi profesjonalistami, którzy stworzą
                dla Ciebie angażujące treści, jakie zwrócą i przykują uwagę potencjalnych klientów, a także zachęcą ich
                do określonego działania.

            </p>

            <h3>Stwórz kompleksową strategię marketingową z MarketingMix
            </h3>

            <p>
                Oprócz tworzenia profesjonalnych zdjęć i filmów, w MarketingMix oferujemy wiele innych usług, które
                pomogą Ci w osiągnięciu sukcesu w internecie, m.in.:
            </p>

            <ul class="list-none ">

                <x-prose.list-item text="Projektujemy i tworzymy strony internetowe oraz sklepy e-commerce." />
                <x-prose.list-item text="Projektujemy grafiki dla firm m.in. logotypy i wizytówki firmowe." />
                <x-prose.list-item text="Oferujemy kampanie reklamowe w sieci." />


            </ul>

            <p>
                Każda z tych usług jest ważna dla Twojego biznesu, ale połączenie ich z profesjonalnymi zdjęciami i
                filmami stworzy jeszcze silniejszą i skuteczniejszą strategię marketingową.


            </p>
        </div>
    </section>







</x-layouts.app>