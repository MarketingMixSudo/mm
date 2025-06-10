<x-layouts.app title="Identyfikacja wizualna i tworzenie wizerunku firmy i marki | MarketingMix"
  description="Zajmujemy się tworzenie wizerunku marki i identyfikacją wizualną firmy. Kompleksowo prowadzimy kampanie oraz zajmiemy się obecnością firmy w Internecie.">

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
  }]
}
  </script>

  @endslot



  @include('pages.home.partials.hero')

  <x-text-marquee />

  @include('pages.home.partials.features-grid')


  <x-section-double-image image="/dummy/service.jpg" alt="Stworzymy pozytywny wizerunek Twojej firmy">
    <span class="text-primary-400 font-medium text-xl">Zajmiemy się Twoją obecnością w internecie</span>
    <h2 class="text-5xl font-bold font-heading">Stworzymy pozytywny wizerunek Twojej firmy</h2>
    <p class="mt-4">Serdecznie zachęcamy do zapoznania się ze szczegółami naszej oferty usługowej, która swoim zakresem
      obejmuje niezwykle ważne zagadnienie, jakim niewątpliwie jest <strong>tworzenie wizerunku marki</strong>. Do
      każdego powierzonego nam zlecenia podchodzimy indywidualnie, co przekłada się na najwyższy standard obsługi i
      bardzo sprawną realizację poszczególnych zadań. Doskonale zdajemy sobie sprawę z tego, że identyfikacja wizualna
      firmy nierzadko stanowi klucz do rozwoju oraz sukcesu przedsiębiorstwa.</p>

    <p class="mt-4">
      Podczas pracy korzystamy z najskuteczniejszych dostępnych rozwiązań, ponieważ wiemy o tym, że <strong>kreacja
        wizerunku</strong> to skomplikowany i wieloetapowy proces. Każda – zarówno mała, jak i duża firma – może
      wspólnie z nami wpłynąć na to, jak będzie odbierana promowana przez nią marka. Zachęcamy do kontaktu już dziś!
    </p>

  </x-section-double-image>

  <x-section-double-image reverse image="/dummy/service.jpg" alt="Stworzymy pozytywny wizerunek Twojej firmy">
    <h2 class="text-5xl font-bold font-heading">Identyfikacja wizualna firmy</h2>
    <p class="mt-4">



      Zadbaliśmy o to, aby nasza oferta miała charakter kompleksowy. Klienci mogą liczyć m.in. na <strong>projektowanie
        i tworzenie wizytówek firmowych</strong>. W zakresie świadczonych usług znajduje się również
      <strong>projektowanie logo firmy</strong> oraz <strong>tworzenie sklepów internetowych</strong> – i to od samych
      podstaw. Doświadczeni specjaliści dbają o to, aby nowa koncepcja została opracowana z troską o każdy detal.
      Wszystko po to, aby identyfikacja wizualna marki w jak najkrótszym czasie przyniosła pożądane efekty, do których w
      pierwszej kolejności należy zaliczyć zwiększenie liczby kontrahentów i wzrost sprzedaży. Co równie istotne – nasze
      usługi obejmują także <strong>projektowanie papieru firmowego</strong> oraz <strong>plakatów i ulotek</strong>,
      czyli akcesoriów niezbędnych do właściwej <strong>identyfikacji wizualnej marki</strong>.

    </p>


  </x-section-double-image>


  @include('pages.home.partials.services')

  @include('pages.home.partials.projects')


  <x-section-double-image image="/dummy/service.jpg" alt="Stworzymy pozytywny wizerunek Twojej firmy">
    <h2 class="text-5xl font-bold font-heading">Tworzenie wizerunku marki</h2>
    <p class="mt-4">

      Zapewniamy, że dobrze przemyślana i sprawnie przeprowadzona kampania marketingowa polegająca na <strong>kreacji
        wizerunku</strong> wcale nie musi wiązać się z wysokimi kosztami. Wdrażane rozwiązania i sposoby naszego
      działania zawsze konsultujemy ze zleceniodawcami. Dzięki temu finalna oferta dotycząca <strong>identyfikacji
        wizualnej firmy</strong> zawsze jest dostosowana do indywidualnych potrzeb odbiorcy. Jeżeli zatem szukacie
      specjalistów, którzy wykonają dla Was <strong>projektowanie i tworzenie stron internetowych</strong>, to
      serdecznie zachęcamy do kontaktu. Z przyjemnością odpowiemy na wszystkie pytania techniczne, pomożemy znaleźć
      optymalną opcję i zadbamy o odpowiedni wizerunek.

    </p>


  </x-section-double-image>

  <x-section-double-image reverse image="/dummy/service.jpg" alt="Stworzymy pozytywny wizerunek Twojej firmy">
    <h2 class="text-5xl font-bold font-heading">Zajmiemy się Twoją obecnością w internecie</h2>
    <p class="mt-4">

      Nasze podejście do współpracy w zakresie projektów internetowych zakłada, że obejmujemy pełen zakres działań.
      Przygotujemy Twoją stronę lub sklep internetowy, stworzymy atrakcyjne treści, przeprowadzimy kampanie reklamowe, a
      także poprowadzimy profile w mediach społecznościowych.

    </p>

    <div class="mt-12">

      <x-link-btn href="{{route('about.index')}}" label="Dowiedz się więcej" />
    </div>


  </x-section-double-image>


  

  @include('pages.home.partials.testimonials')

  @include('pages.home.partials.blog')



  {{-- <x-logo-marquee :logos="$logos" /> --}}

</x-layouts.app>