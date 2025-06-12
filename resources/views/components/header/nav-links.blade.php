{{-- completed --}}


<nav>
    <ul class="flex flex-col justify-start items-start gap-8 pl-6">

        <x-header.nav-item-mobile route='home' href="{{route('home')}}" activeRoute="home" label="Strona główna" />
        <x-header.nav-item-mobile route='about.index' href="{{route('about.index')}}" activeRoute="about.index"
            label="O nas" />


        <x-header.nav-dropdown-mobile title="Projektowanie" route='projects.index'
            :activeRoute="['projects.index', 'projects.logotypes','projects.businessCards','projects.letterhead','projects.posters']">
            <x-header.nav-dropdown-mobile-item route='projects.logotypes' title="Projektowanie i tworzenie logotypów" />
            <x-header.nav-dropdown-mobile-item route='projects.businessCards'
                title="Projektowanie i tworzenie wizytówek firmowych" />
            <x-header.nav-dropdown-mobile-item route='projects.letterhead' title="Projektowanie papieru firmowego" />

            <x-header.nav-dropdown-mobile-item route='projects.posters' title="Projektowanie plakatów i ulotek" />
        </x-header.nav-dropdown-mobile>

        <x-header.nav-dropdown-mobile title="www" route='www.index'>
            <x-header.nav-dropdown-mobile-item route='www.websites'
                title="Profesjonalne tworzenie stron internetowych" />
            <x-header.nav-dropdown-mobile-item route='www.ecommerce'
                title="Projektowanie i tworzenie sklepów internetowych" />
            <x-header.nav-dropdown-mobile-item route='www.realisations' title="Realizacje" />
        </x-header.nav-dropdown-mobile>

        <x-header.nav-item-mobile route='campaigns.index' href="{{route('campaigns.index')}}" activeRoute="campaigns.index" label="Kampanie" />
        <x-header.nav-item-mobile route='content.index' href="{{route('content.index')}}" activeRoute="content.index" label="Treści" />
        <x-header.nav-item-mobile route='photoVideo.index' href="{{route('photoVideo.index')}}" activeRoute="photoVideo.index" label="Foto / Video" />
        <x-header.nav-item-mobile route='companyForms.index' href="{{route('companyForms.index')}}" activeRoute="companyForms.index" label="Druki firmowe" />
        <x-header.nav-item-mobile route='contact' href="{{route('contact')}}" activeRoute="contact" label="Kontakt" />
        <x-header.nav-item-mobile route='blog-index' href="{{route('blog.index')}}" activeRoute="blog.index" label="Blog" />

    </ul>
</nav>