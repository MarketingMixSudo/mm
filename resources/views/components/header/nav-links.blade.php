<nav>
    <ul class="flex flex-col justify-start items-start gap-8 pl-6">

        <x-header.nav-item route='home' href="{{route('home')}}" label="Strona główna" />
        <x-header.nav-item route='about.index' href="{{route('about.index')}}" label="O nas" />


        <x-header.nav-dropdown-mobile title="Projektowanie" route='projects.index'>
            <x-header.nav-dropdown-mobile-item route='projects.logotypes' title="Projektowanie i tworzenie logotypów" />
            <x-header.nav-dropdown-mobile-item route='projects.businessCards'
                title="Projektowanie i tworzenie wizytówek firmowych" />
            <x-header.nav-dropdown-mobile-item route='projects.letterhead' title="Projektowanie papieru firmowego" />
            <x-header.nav-dropdown-mobile-item route='projects.posters' title="Projektowanie plakatów i ulotek" />
        </x-header.nav-dropdown-mobile>

        <x-header.nav-dropdown-mobile title="www" route='www.index'>
            <x-header.nav-dropdown-mobile-item route='www.websites' title="Profesjonalne tworzenie stron internetowych" />
            <x-header.nav-dropdown-mobile-item route='www.ecommerce'
                title="Projektowanie i tworzenie sklepów internetowych" />
            <x-header.nav-dropdown-mobile-item route='www.realisations' title="Realizacje" />
        </x-header.nav-dropdown-mobile>

         <x-header.nav-item route='campaigns.index' href="{{route('campaigns.index')}}" label="Kampanie" />
         <x-header.nav-item route='content.index' href="{{route('content.index')}}" label="Treści" />
         <x-header.nav-item route='photoVideo.index' href="{{route('photoVideo.index')}}" label="Foto / Video" />
         <x-header.nav-item route='companyForms.index' href="{{route('companyForms.index')}}" label="Druki firmowe" />
         <x-header.nav-item route='contact' href="{{route('contact')}}" label="Kontakt" />
         <x-header.nav-item route='blog-index' href="{{route('blog.index')}}" label="Blog" />

    </ul>
</nav>