import Swiper from "swiper";
import { Autoplay } from "swiper/modules";
import "swiper/swiper-bundle.css";

new Swiper(".postsCarousel--js", {
    loop: true,
    grabCursor: true,
    speed: 800, // płynność przejścia
    slidesPerView: 1,
    spaceBetween: 20,


    breakpoints: {
        750: {
            slidesPerView: 2,
        },
        1280: {
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
