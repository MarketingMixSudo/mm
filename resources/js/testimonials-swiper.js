import Swiper from "swiper";
import { Autoplay } from "swiper/modules";
import "swiper/swiper-bundle.css";

new Swiper(".testimonialsCarousel--js", {
    loop: true,
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 30,

    breakpoints: {
       

        800: {
            slidesPerView: 2,
        },
    },

    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },

    modules: [Autoplay],
});
