import Swiper from "swiper";
import { Autoplay, } from "swiper/modules";
import "swiper/swiper-bundle.css";

new Swiper(".testimonialsCarousel--js", {
    loop: true,
    grabCursor: true,
       effect: "fade",
    slidesPerView: 2.5,
    spaceBetween: 30,

    breakpoints: {
        750: {
            slidesPerView: 2,
        },
        1200:{
            slidesPerView: 3,
        },
        1480: {
            slidesPerView: 2,
        },
    },

    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },

    

    modules: [Autoplay, ],
});