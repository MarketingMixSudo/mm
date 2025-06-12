<section class="mt-[110px] sm:mt-[130px] lg:mt-[100px]">
  <div class="wrapper space-y-6 lg:space-y-10 2xl:space-y-20 pt-6">


    <h1 class="flex flex-col justify-start gap-1 xs:leading-16 sm:leading-24 md:leading-32 2xl:leading-40 text-4xl xs:text-5xl sm:text-7xl md:text-8xl xl:text-[120px] 2xl:text-[140px]  font-bold font-heading w-[100%]">
      <span class="">Agencja</span>
      <span class="outlined-text self-end normal-case ">MarketingMix</span>
      <span class="">Reklamowa</span>

    </h1>

    <div class="flex flex-col md:flex-row justify-center  gap-6 md:gap-0">


      <div class="w-full md:w-1/2 flex justify-center items-center  ">


        <a href="{{route('about.index')}}" class="relative size-36 group" aria-label="Dowiedz się więcej">
          <!-- Fioletowe tło -->
          <div class="absolute inset-0 bg-primary-400 rounded-full flex items-center justify-center">
            <!-- Białe koło w środku -->
            <div class="size-16 bg-white rounded-full z-10 flex justify-center items-center">
              <x-lucide-arrow-up-right class="text-primary-400 size-8" />
            </div>
          </div>

          <!-- Tekst po okręgu (SVG z obrotem) -->
          <svg
            class="absolute inset-0 w-full h-full transition-transform duration-500 ease-in-out group-hover:rotate-[90deg]"
            viewBox="0 0 200 200" style="transform-origin: center center;">
            <defs>
              <path id="circlePath" d="M100,100 m-68,0 a68,68 0 1,1 136,0 a68,68 0 1,1 -136,0" />
            </defs>
            <text fill="white" font-size="20" font-family="sans-serif" letter-spacing="1.5">
              <textPath xlink:href="#circlePath" startOffset="0%">
                dowiedz się więcej • dowiedz się więcej •
              </textPath>
            </text>
          </svg>
        </a>

      </div>

      <p class="w-full md:w-1/2 lg:pr-32 text-xl text-center md:text-left inline-block">Kompleksowy marketing dla Twojej marki – od strategii po realizację. <strong
          class="font-bold">Projektujemy, tworzymy i promujemy</strong>, byś mógł skupić się na rozwoju swojego biznesu.
      </p>
    </div>

  </div>
</section>