{{-- completed --}}


<div class="fixed left-0 right-0 top-0 bg-background-light-400 dark:bg-background-dark-800 shadow-xl duration-500   -translate-y-[100%] navbarScroll--js">


<nav
        class=" py-6  flex justify-between items-center max-w-screen-3xl mx-auto  px-2 sm:px-6   pb-4 ">

          {{-- home --}}
        <a href="{{ route('home') }}" aria-label="Strona główna" class="dark:hidden"><img
                src=" {{ asset('/logo.webp') }}" alt="MarketingMix - Agencja Reklamowa "
                class="w-[200px] sm:w-auto "></a>

        <a href="{{ route('home') }}" aria-label="Strona główna" class="hidden dark:inline-block"><img
                src=" {{ asset('/logo.webp') }}" alt="MarketingMix - Agencja Reklamowa "
                class="w-[200px] sm:w-auto "></a>

            
       


 <x-header.nav-links-desktop/>

    </nav>    
</div>