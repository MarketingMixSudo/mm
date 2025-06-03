<div id="menu"
    class="fixed top-0 bottom-0 right-0 left-0 sm:left-[50%] lg:left-[60%] 2xl:left-[75%]  flex flex-col justify-between px-7 py-5  bg-primary-400  opacity-0 duration-300 ease-out z-50 translate-x-[100%] overflow-y-auto"
    style="z-index: 10000000000">

    <div class="flex flex-col gap-16 pb-16">

        {{-- CLOSE BTN --}}
        <div class="flex justify-end">
            <button id="closeMenu" class=" p-2  cursor-pointer group"
                aria-label="Zamknij menu">
                <img src="{{asset('assets/icons/close.svg')}}" alt=""
                    class="size-10 group-hover:rotate-90 duration-300">
            </button>
        </div>

        {{-- NAV ITEMS --}}
        <x-header.nav-links />

    </div>
    {{-- LANGUAGE SWITCHER --}}
    <div class="flex flex-col justify-end ">
     
        <hr class="my-5">
        
        <div class="flex justify-end  gap-2 pr-2">

            <div class="flex justify-center sm:justify-start items-center gap-3">

             


                <x-socials/>

            </div>
            <div class="border-l pl-2 flex justify-center items-center gap-2 pt-0.5">
                <a href="tel:" class="group" aria-label="telefon">
                    <x-lucide-phone class="w-5 stroke-1 text-white group-hover:scale-105 duration-300" />
                </a>
                <a href="mailto:" class="group" aria-label="mail">
                    <x-lucide-mail class="w-5 stroke-1 text-white group-hover:scale-105 duration-300" />
                </a>
            </div>
        </div>
    </div>

</div>