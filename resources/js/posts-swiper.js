import Swiper from "swiper";
import { Autoplay,} from "swiper/modules";
import "swiper/swiper-bundle.css";

new Swiper(".postsCarousel--js", {
    loop: true,
    grabCursor: true,
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
            slidesPerView: 2.5,
        },
    },

    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },

    

    modules: [Autoplay,],
});