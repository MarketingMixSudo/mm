<div class="bg-bgDark-800 w-full  flex flex-col  ">


    <x-header.topbar />

    <div
        class=" w-full h-full flex justify-between items-center max-w-screen-3xl mx-auto  px-2 sm:px-6 2xl:px-0 relative ">

        <a href="{{ route('home') }}" aria-label="Strona główna" "><img src=" {{ asset('assets/logo.png') }}"
            alt="Agencja Reklamowa MarketingMix" class="w-[200px] sm:w-auto "></a>

            
        <nav
            class=" absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[80%] flex justify-center items-center ">




            <ul class="hidden xl:flex justify-center items-center gap-6 ">
                <x-header.nav-item href="{{route('about.index')}}" activeRoute="about.index" label="O nas" />

                <x-header.nav-dropdown title="Projektowanie" route="{{route('projects.index')}}" activeRoute="projects.index">


                    <x-header.nav-dropdown-item href="{{route('projects.logotypes')}}">Projektowanie i tworzenie logotypów
                    </x-header.nav-dropdown-item>
                    <x-header.nav-dropdown-item href="{{route('projects.businessCards')}}">Projektowanie i tworzenie wizytówek firmowych
                    </x-header.nav-dropdown-item>
                    <x-header.nav-dropdown-item href="{{route('projects.letterhead')}}">Projektowanie papieru firmowego
                    </x-header.nav-dropdown-item>
                    <x-header.nav-dropdown-item href="{{route('projects.posters')}}">Projektowanie plakatów i ulotek
                    </x-header.nav-dropdown-item>


                </x-header.nav-dropdown>


                <x-header.nav-dropdown title="WWW" route="{{route('www.index')}}">


                    <x-header.nav-dropdown-item href="{{route('www.websites')}}">Profesjonalne tworzenie stron internetowych
                    </x-header.nav-dropdown-item>
                    <x-header.nav-dropdown-item href="{{route('www.ecommerce')}}">Projektowanie i tworzenie sklepów internetowych
                    </x-header.nav-dropdown-item>
                    <x-header.nav-dropdown-item href="{{route('www.realisations')}}">Realizacje
                    </x-header.nav-dropdown-item>

                </x-header.nav-dropdown>


                <x-header.nav-item href="{{route('campaigns.index')}}" label="Kampanie" />
                <x-header.nav-item href="{{route('content.index')}}" label="Treści" />
                <x-header.nav-item href="{{route('photoVideo.index')}}" label="Foto / Video" />
                <x-header.nav-item href="#" label="Druki firmowe" />
                <x-header.nav-item href="{{route('contact')}}" activeRoute="contact" label="Kontakt" />
                <x-header.nav-item href="{{route('blog.index')}}" activeRoute="blog.index" label="Blog" />
            </ul>


            <x-header.hamburger class="xl:hidden" />
        </nav>

        <a href=""
            class="bg-primary-400 hover:bg-primary-600 duration-300 rounded-xl px-4 py-2 text-sm uppercase text-font-light">
            wypełnij brief
        </a>


    </div>

    {{-- <div
        class=" w-full  flex justify-between items-center max-w-screen-3xl mx-auto  pb-6 px-2 sm:px-6 2xl:px-0 relative">


        <a href="{{ route('home') }}" aria-label="Strona główna"><img src="{{asset('assets/logo.png')}}"
                alt="Agencja Reklamowa MarketingMix" class="w-[200px] sm:w-auto"></a>

        <nav
            class=" absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full flex justify-center items-center bg-yellow-400">




            <ul class="hidden xl:flex justify-center items-center gap-6 ">
                <x-header.nav-item href="{{route('about.index')}}" activeRoute="about.index" label="O nas" />

                <x-header.nav-dropdown title="Projektowanie" route="#">


                    <x-header.nav-dropdown-item href="#">Projektowanie i tworzenie logotypów
                    </x-header.nav-dropdown-item>
                    <x-header.nav-dropdown-item href="#">Projektowanie i tworzenie wizytówek firmowych
                    </x-header.nav-dropdown-item>
                    <x-header.nav-dropdown-item href="#">Projektowanie papieru firmowego
                    </x-header.nav-dropdown-item>
                    <x-header.nav-dropdown-item href="#">Projektowanie plakatów i ulotek
                    </x-header.nav-dropdown-item>


                </x-header.nav-dropdown>


                <x-header.nav-dropdown title="WWW" route="#">


                    <x-header.nav-dropdown-item href="#">Profesjonalne tworzenie stron internetowych
                    </x-header.nav-dropdown-item>
                    <x-header.nav-dropdown-item href="#">Projektowanie i tworzenie sklepów internetowych
                    </x-header.nav-dropdown-item>
                    <x-header.nav-dropdown-item href="#">Realizacje
                    </x-header.nav-dropdown-item>

                </x-header.nav-dropdown>


                <x-header.nav-item href="#" label="Kampanie" />
                <x-header.nav-item href="#" label="Treści" />
                <x-header.nav-item href="#" label="Foto / Video" />
                <x-header.nav-item href="#" label="Druki firmowe" />
                <x-header.nav-item href="#" label="Kontakt" />
            </ul>


            <x-header.hamburger class="xl:hidden" />
        </nav>

        <a href=""
            class="bg-primary-400 hover:bg-primary-600 duration-300 rounded-xl px-4 py-2 text-sm uppercase text-font-light">
            wypełnij brief
        </a>


    </div> --}}

</div>