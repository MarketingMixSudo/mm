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

  @include('pages.home.partials.hero-marquee')

  @include('pages.home.partials.features-grid')

  @include('pages.home.partials.about')


  


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