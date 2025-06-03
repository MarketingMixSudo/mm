<div class="bg-bgDark-800 w-full  flex flex-col  ">


    <x-header.topbar />


    <nav class=" w-full  flex justify-between items-center max-w-screen-2xl mx-auto  pb-6 px-2 sm:px-6 2xl:px-0">

        <a href="{{ route('home') }}" aria-label="Strona główna"><img src="{{asset('assets/logo.png')}}"
                alt="Agencja Reklamowa MarketingMix" class="w-[200px] sm:w-auto"></a>


        <ul class="hidden xl:flex gap-6">
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


        <x-header.hamburger class="xl:hidden"/>
    </nav>




</div>