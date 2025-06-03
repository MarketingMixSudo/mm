<nav>
    <ul class="flex flex-col justify-start items-start gap-8 pl-6">

          <x-header.nav-item route='home' href="{{route('home')}}" label="Strona główna"/>


           <x-header.nav-dropdown-mobile title="test" route='home'>
            <x-header.nav-dropdown-mobile-item route='home' title="test" />
            <x-header.nav-dropdown-mobile-item route='home' title="test" />
            <x-header.nav-dropdown-mobile-item route='home' title="test" />
            <x-header.nav-dropdown-mobile-item route='home' title="test" />
            <x-header.nav-dropdown-mobile-item route='home' title="test" />
           
        </x-header.nav-dropdown-mobile>

    </ul>
</nav>