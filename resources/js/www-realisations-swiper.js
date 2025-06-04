import Swiper from "swiper";
import { Autoplay, } from "swiper/modules";
import "swiper/swiper-bundle.css";

new Swiper(".wwwwRealisationsCarousel--js", {
    loop: true,
    grabCursor: true,
       effect: "fade",
    slidesPerView: 1,
    spaceBetween: 30,

    breakpoints: {
        750: {
            slidesPerView: 2,
        },
        1200:{
            slidesPerView: 3,
        }
       
    },

    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },

    

    modules: [Autoplay, ],
});