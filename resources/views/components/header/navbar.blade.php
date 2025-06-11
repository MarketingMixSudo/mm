<div class=" w-full  flex flex-col  gap-2 fixed left-0 right-0 top-0 shadow-xl  bg-background-light-400 dark:bg-background-dark-800  duration-500 navbar--js" >


    <x-header.topbar />

    <nav
        class=" w-full h-full flex justify-between items-center max-w-screen-3xl mx-auto  px-2 sm:px-6  relative pb-4">

        <a href="{{ route('home') }}" aria-label="Strona główna" ><img src=" {{ asset('assets/logo.png') }}"
            alt="Agencja Reklamowa MarketingMix" class="w-[200px] sm:w-auto "></a>

            
       


<div class="flex gap-6">

    
    <ul class="hidden 2xl:flex justify-center items-center gap-6 ">
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
                
                
                <x-header.nav-item href="{{route('campaigns.index')}}" activeRoute="campaigns.index" label="Kampanie" />
                <x-header.nav-item href="{{route('content.index')}}" activeRoute="content.index" label="Treści" />
                <x-header.nav-item href="{{route('photoVideo.index')}}" activeRoute="photoVideo.index" label="Foto / Video" />
                <x-header.nav-item href="{{route('companyForms.index')}}" activeRoute="companyForms.index" label="Druki firmowe" />
                <x-header.nav-item href="{{route('contact')}}" activeRoute="contact" activeRoute="contact" label="Kontakt" />
                <x-header.nav-item href="{{route('blog.index')}}" activeRoute="blog.index" activeRoute="blog.index" label="Blog" />
            </ul>
            
            
            <x-header.hamburger class="2xl:hidden" />
            
            <a href=""
            class="bg-primary-400 hover:bg-primary-600 duration-300 rounded-xl px-4 py-2 text-sm uppercase text-font-light hidden 2xl:block">
            wypełnij brief
        </a>
       
        
        
    </div>

    </nav>

    

</div>