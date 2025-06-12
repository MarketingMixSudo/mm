 <div class="flex gap-6">

            <ul class="hidden xl:flex justify-center items-center gap-6 ">
                {{-- about --}}
                <x-header.nav-item href="{{route('about.index')}}" activeRoute="about.index" label="O nas" />

                {{-- projects dropdown --}}
                <x-header.nav-dropdown title="Projektowanie" route="{{route('projects.index')}}"
                    :activeRoute="['projects.index', 'projects.logotypes','projects.businessCards','projects.letterhead','projects.posters']">

                    {{-- item 1 --}}
                    <x-header.nav-dropdown-item href="{{route('projects.logotypes')}}" activeRoute="projects.logotypes"
                        label="Projektowanie i tworzenie logotypów" />
                    {{-- item 2 --}}
                    <x-header.nav-dropdown-item href="{{route('projects.businessCards')}}"
                        activeRoute="projects.businessCards" label="Projektowanie i tworzenie
                        wizytówek firmowych" />
                    {{-- item 3 --}}
                    <x-header.nav-dropdown-item href="{{route('projects.letterhead')}}"
                        activeRoute="projects.letterhead" label="Projektowanie papieru firmowego" />
                    {{-- item 4 --}}
                    <x-header.nav-dropdown-item href="{{route('projects.posters')}}" activeRoute="projects.posters"
                        label="Projektowanie plakatów i ulotek" />


                </x-header.nav-dropdown>

                {{-- www dropdown --}}
                <x-header.nav-dropdown title="WWW" route="{{route('www.index')}}"
                    :activeRoute="['www.index', 'www.websites','www.ecommerce','www.realisations']">

                    {{-- item 1 --}}
                    <x-header.nav-dropdown-item href="{{route('www.websites')}}" activeRoute="www.websites" label="Profesjonalne tworzenie stron
                        internetowych" />

                    {{-- item 2 --}}
                    <x-header.nav-dropdown-item href="{{route('www.ecommerce')}}" activeRoute="www.ecommerce" label="Projektowanie i tworzenie sklepów
                        internetowych" />
                    {{-- item 3 --}}
                    <x-header.nav-dropdown-item href="{{route('www.realisations')}}" activeRoute="www.realisations"
                        label="Realizacje" />


                </x-header.nav-dropdown>

                {{-- campaigns --}}
                <x-header.nav-item href="{{route('campaigns.index')}}" activeRoute="campaigns.index" label="Kampanie" />
                {{-- content --}}
                <x-header.nav-item href="{{route('content.index')}}" activeRoute="content.index" label="Treści" />
                {{-- photo / video --}}
                <x-header.nav-item href="{{route('photoVideo.index')}}" activeRoute="photoVideo.index"
                    label="Foto / Video" />
                {{-- company forms --}}
                <x-header.nav-item href="{{route('companyForms.index')}}" activeRoute="companyForms.index"
                    label="Druki firmowe" />
                {{-- contact --}}
                <x-header.nav-item href="{{route('contact')}}" activeRoute="contact" activeRoute="contact"
                    label="Kontakt" />
                {{-- blog --}}
                <x-header.nav-item href="{{route('blog.index')}}" activeRoute="blog.index" activeRoute="blog.index"
                    label="Blog" />
            </ul>

            {{-- hamburger --}}
            <x-header.hamburger class="xl:hidden" />

            {{-- brief --}}
            <a href="{{route('contact')}}" aria-label="wypełnij brief"
                class="bg-primary-400 hover:bg-primary-600 duration-300 rounded-xl px-4 py-2 text-sm uppercase text-font-light hidden 2xl:block">
                wypełnij brief
            </a>



        </div>