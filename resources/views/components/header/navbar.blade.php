<div class="bg-bgDark-800 w-full text-white flex flex-col  ">


    <div class="flex  justify-between items-center max-w-screen-max px-12 mx-auto py-4 w-full ">

        <div class="flex justify-between items-center w-full  ">

            <div class="justify-center items-center gap-8 hidden sm:flex  ">

                <a href="tel:" class="flex justify-center items-center gap-2 text-xs group"
                    aria-label="{{__('global.aria.phone')}}">
                    <x-lucide-phone class="size-5 stroke-1 text-white" /> <span
                        class="link-hover--group after:!bg-white !hidden 2xl:!block">123 456 789</span>
                </a>

                <a href="mailto:" class="flex justify-center items-center gap-2 text-xs group"
                    aria-label="{{__('global.aria.email')}}">
                    <x-lucide-mail class="size-5 stroke-1 text-white" /> <span
                        class="link-hover--group after:!bg-white !hidden 2xl:!block">test@test.pl</span>
                </a>

                <a href="" class="flex justify-center items-center gap-2 text-xs group"
                    aria-label="{{__('global.aria.address')}}">
                    <x-lucide-map-pin class="size-5 stroke-1 text-white" /> <span
                        class="link-hover--group after:!bg-white !hidden 2xl:!block langu">12 Test, 34-400 Test</span>
                </a>

            </div>
            <p>sociale</p>
        </div>
    </div>


    <nav class=" w-full  flex justify-between items-center max-w-screen-2xl mx-auto  pb-6">

        <a href="{{ route('home') }}"><img src="{{asset('assets/logo.png')}}" alt="marketingmix"></a>


        <ul class="flex gap-6">
            <x-header.nav-item href="#" label="O nas" />

            <x-header.nav-dropdown title="Projektowanie" route="#">


                <x-header.nav-dropdown-item href="#">Element 1
                </x-header.nav-dropdown-item>
                <x-header.nav-dropdown-item href="#">Element 2
                </x-header.nav-dropdown-item>
                <x-header.nav-dropdown-item href="#">Element 3
                </x-header.nav-dropdown-item>


            </x-header.nav-dropdown>


            <x-header.nav-item href="#" label="WWW" />
            <x-header.nav-item href="#" label="Kampanie" />
            <x-header.nav-item href="#" label="Treści" />
            <x-header.nav-item href="#" label="Foto / Video" />
            <x-header.nav-item href="#" label="Druki firmowe" />
            <x-header.nav-item href="#" label="Kontakt" />
        </ul>
    </nav>

</div>