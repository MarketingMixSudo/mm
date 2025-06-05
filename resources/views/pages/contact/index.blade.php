<x-layouts.app title="Kontakt - Agencja Reklamowa MarketingMix"
    description="Skontaktuj się z nami poprzez formularz kontaktowy - jesteśmy gotowi pomóc w rozwoju Twojej strategii marketingowej. Zadzwoń lub napisz do nas już teraz!">

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
    "name": "Kontakt",
    "item": "https://marketingmix.pl/kontakt/"  
  }]
}
    </script>
    @endslot


    <x-hero title="Kontakt">
        <x-breadcrumbs.nav>
            <x-breadcrumbs.item href="{{route('contact')}}" title="Kontakt" class="font-medium" />
        </x-breadcrumbs.nav>

    </x-hero>


    <section class="section">

        <div class="wrapper ">

            <x-heading-classic preheading="Jesteśmy tu dla Ciebie!" heading="Bądźmy w kontakcie" />

            <div class="grid grid-cols-1 md:grid-cols-2 mt-20 gap-y-12">



                <div class="lg:ml-20 flex flex-col justify-center md:justify-start items-center md:items-start">

                    <span class=" font-medium text-3xl text-center">Dane kontaktowe</span>

                    <div class="flex flex-col justify-center md:justify-start mt-6">
                        <div class="flex flex-col md:flex-row justify-center md:justify-start items-center gap-2 md:gap-5 text-center md:text-left">

                            <div class="bg-primary-400 p-2 rounded-full ">
                                <x-lucide-phone class="size-6 text-font-light" />

                            </div>
                            <a href="tel:+48453400244" class="flex flex-col ">

                                <span class="text-2xl font-medium font-heading">Telefon</span>
                                <span class="link-hover">+48 453 400 244</span>
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col justify-center md:justify-start mt-6">
                        <div class="flex flex-col md:flex-row justify-center md:justify-start items-center gap-2 md:gap-5 text-center md:text-left">

                            <div class="bg-primary-400 p-2 rounded-full ">
                                <x-lucide-mail class="size-6 text-font-light" />

                            </div>
                            <a href="mailto:hello@marketingmix.pl" class="flex flex-col ">

                                <span class="text-2xl font-medium font-heading">Email</span>
                                <span class="link-hover">hello@marketingmix.pl</span>
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col justify-center md:justify-start mt-6">
                        <div class="flex flex-col md:flex-row justify-center md:justify-start items-center gap-2 md:gap-5 text-center md:text-left">

                            <div class="bg-primary-400 p-2 rounded-full ">
                                <x-lucide-map-pin class="size-6 text-font-light" />

                            </div>
                            <a href="mailto:hello@marketingmix.pl" class="flex flex-col ">

                                <span class="text-2xl font-medium font-heading">Adres</span>
                                <span class="link-hover">Ludźmierska 26A,<br /> 34-400 Nowy Targ</span>
                            </a>
                        </div>
                    </div>

                    <span class=" font-medium text-2xl my-6 block">Social Media</span>

                    <x-socials large />

                </div>


                <div class="w-full">

                    <span class=" font-medium text-3xl mb-10 block">Napisz do nas</span>
                         <livewire:contact-form />

                </div>
            </div>

        </div>

    </section>


    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1289158.379121936!2d19.179701590503836!3d50.87028318742058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4715e5905e21c0ed%3A0x159c133ae9b83572!2sMarketingMix!5e0!3m2!1spl!2spl!4v1748952310433!5m2!1spl!2spl"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade" class="w-full grayscale"></iframe>


</x-layouts.app>