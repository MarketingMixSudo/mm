import Swiper from "swiper";
import { Autoplay, Navigation } from "swiper/modules";
import "swiper/swiper-bundle.css";

new Swiper(".projectsCarousel--js", {
    loop: true,
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 30,
       centeredSlides: true,

    breakpoints: {
        750: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        },
        1480: {
            slidesPerView: 3,
        },
    },

    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
        
    },

    modules: [Autoplay],
});
