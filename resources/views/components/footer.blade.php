<x-footer-cta />

<footer>

    <div class="wrapper  space-y-8">


        <div
            class=" grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-5 gap-x-4 md:gap-x-12 gap-y-12 lg:gap-y-0 lg:gap-x-8  lg:pl-6">



            <div
                class=" sm:col-span-3 lg:col-span-2 w-full lg:w-[70%] flex flex-col justify-center  items-center lg:items-start">
                <a href="{{route('home')}}" aria-label="Strona główna">
                    <img src="{{asset('/logo.webp')}}" alt="Agencja reklamowa MarketingMix" loading="lazy">
                </a>


                <ul class="space-y-4 mt-6">
                    <li class="flex justify-center lg:justify-start items-center gap-2">
                        <x-lucide-map-pin class="size-6 text-primary-400" /><a
                            href="https://maps.app.goo.gl/SQQRGsdukATydzwDA" target="_blank" rel="noreferrer nofollow"
                            class="text-sm hover:text-primary-400 duration-300">Ludźmierska 26A,<br/> 34-400 Nowy Targ</a>
                    </li>
                    <li class="flex justify-center lg:justify-start items-center gap-2">
                        <x-lucide-mail class="size-6 text-primary-400" /><a href="mailto:hello@marketingmix.pl"
                            class="text-sm hover:text-primary-400 duration-300">hello@marketingmix.pl</a>
                    </li>
                    <li class="flex justify-center lg:justify-start items-center gap-2">
                        <x-lucide-phone class="size-6 text-primary-400" /><a href="tel:+48453400244"
                            class="text-sm hover:text-primary-400 duration-300">+48 453 400 244</a>
                    </li>


                </ul>


                <div class="pt-6 flex flex-col justify-center items-center lg:items-start">
                    <span class="font-heading text-xl font-semibold pb-4 block text-primary-400">Social Media</span>
                    <x-socials />
                </div>

            </div>

            <div class="space-y-6 text-center lg:text-left">
                <span class="font-heading text-lg font-semibold uppercase text-primary-400 ">Projektowanie</span>
                <ul class="space-y-4 mt-4 w-full flex flex-col justify-center items-center lg:items-start">
                    <li><a href="{{route('projects.logotypes')}}"
                            class="hover:text-primary-400 duration-300 w-full">Projektowanie i tworzenie
                            logotypów</a></li>
                    <li><a href="{{route('projects.businessCards')}}"
                            class="hover:text-primary-400 duration-300 w-full">Projektowanie i tworzenie
                            wizytówek firmowych</a></li>
                    <li><a href="{{route('projects.letterhead')}}"
                            class="hover:text-primary-400 duration-300 w-full">Projektowanie papieru
                            firmowego</a></li>
                    <li><a href="{{route('projects.posters')}}"
                            class="hover:text-primary-400 duration-300 w-full">Projektowanie plakatów i ulotek</a>
                    </li>
                </ul>
            </div>
            <div class="space-y-6 text-center lg:text-left">
                <span class="font-heading text-lg font-semibold uppercase text-primary-400 ">www</span>
                <ul class="space-y-4 mt-4 w-full flex flex-col justify-center items-center lg:items-start">
                    <li><a href="{{route('projects.logotypes')}}"
                            class="hover:text-primary-400 duration-300 w-full">Profesjonalne tworzenie stron
                            internetowych</a></li>
                    <li><a href="{{route('projects.businessCards')}}"
                            class="hover:text-primary-400 duration-300 w-full">Projektowanie i tworzenie
                            sklepów internetowych</a></li>

                </ul>
            </div>
            <div class="space-y-6 text-center lg:text-left w-full">
                <span class="font-heading text-lg font-semibold uppercase text-primary-400">Pozostałe usługi</span>
                <ul class="space-y-4 mt-4 w-full flex flex-col justify-center items-center lg:items-start">
                    <li><a href="{{route('campaigns.index')}}"
                            class="hover:text-primary-400 duration-300 w-full">Kampanie</a></li>
                    <li><a href="{{route('content.index')}}"
                            class="hover:text-primary-400 duration-300 w-full">Treści</a></li>
                    <li><a href="{{route('photoVideo.index')}}" class="hover:text-primary-400 duration-300 !w-full">Foto
                            / Video</a></li>
                    <li><a href="{{route('companyForms.index')}}" class="hover:text-primary-400 duration-300 ">Druki
                            firmowe</a></li>

                </ul>
            </div>


        </div>

        <hr class="border border-white/50">

        <div class="flex flex-col xs:flex-row justify-center items-center xs:justify-between pb-4 w-full gap-4">
            <span class="tex-sm order-1 xs:order-none">© <span class="footerYear--js"></span> MarketingMix</span>

            <a href="{{route('privacyPolicy')}}" class="hover:text-primary-400 duration-300 text-sm">Polityka
                prywatności</a>
        </div>

    </div>
</footer>