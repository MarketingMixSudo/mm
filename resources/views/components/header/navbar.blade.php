{{-- completed --}}


<div
    class=" w-full  flex flex-col  gap-2 fixed left-0 right-0 top-0 shadow-xl  bg-background-light-400 dark:bg-background-dark-800  duration-500 navbar--js">

    {{-- topbar --}}
    <x-header.topbar />

    <nav class=" w-full h-full flex justify-between items-center max-w-screen-3xl mx-auto  px-2 sm:px-6  relative pb-4">

        {{-- home --}}
        <a href="{{ route('home') }}" aria-label="Strona główna" class="dark:hidden"><img
                src=" {{ asset('/logo.webp') }}" alt="MarketingMix - Agencja Reklamowa "
                class="w-[200px] sm:w-auto "></a>

        <a href="{{ route('home') }}" aria-label="Strona główna" class="hidden dark:inline-block"><img
                src=" {{ asset('/logo.webp') }}" alt="MarketingMix - Agencja Reklamowa "
                class="w-[200px] sm:w-auto "></a>


        {{-- links --}}
        <x-header.nav-links-desktop/>

    </nav>



</div>x