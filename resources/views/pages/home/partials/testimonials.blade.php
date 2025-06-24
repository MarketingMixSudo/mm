<section class="section">


    <div class="wrapper !max-w-screen-2xl">

        <h2 class="section__heading">Opinie naszych klientów</h2>
        <hr class="border-primary-400 pb-12 mt-2">



        <!-- Swiper -->
        <div class=" w-full swiper  testimonialsCarousel--js ">
            <div class="swiper-wrapper">

                @foreach ($testimonials as $testimonial)
              <x-testimonial-card :testimonial="$testimonial"/>
                @endforeach






            </div>
        </div>
    </div>

</section>