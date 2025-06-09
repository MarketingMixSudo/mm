import Swiper from "swiper";
import { Autoplay, Navigation } from "swiper/modules";
import "swiper/swiper-bundle.css";

let swiperInstance;

function initSwiper() {
    if (swiperInstance) swiperInstance.destroy(true, true);

    swiperInstance = new Swiper(".projectsCarousel--js", {
        loop: false,
        grabCursor: true,
        slidesPerView: 1,
        spaceBetween: 30,

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

        modules: [Autoplay, Navigation],
    });
}

document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".realisationFilterBtn-js");
    const swiperWrapper = document.querySelector(".projectsCarousel--js .swiper-wrapper");

    // Zrób kopie slajdów jako tekst HTML
    const allSlides = Array.from(document.querySelectorAll(".realisationItem-js")).map(slide => slide.outerHTML);

    function renderSlides(filteredHtmlSlides) {
        // Wstaw nowe HTML-e
        swiperWrapper.innerHTML = filteredHtmlSlides.join("");

        // Od nowa inicjuj Swipera
        initSwiper();
    }

    function filterSlides(category) {
        const filtered = category === ""
            ? allSlides
            : allSlides.filter(html => {
                // Parsujemy z HTML-a `data-title`
                const tempDiv = document.createElement("div");
                tempDiv.innerHTML = html;
                const dataTitle = tempDiv.firstElementChild?.getAttribute("data-title") || "";
                const cats = dataTitle.split(",").map(c => c.trim());
                return cats.includes(category);
            });

        renderSlides(filtered);
    }

    // Inicjalizacja domyślna
    renderSlides(allSlides);

    filterButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const selectedCategory = this.getAttribute("data-title");

            filterButtons.forEach(btn => btn.classList.remove("btn-active"));
            this.classList.add("btn-active");

            filterSlides(selectedCategory);
        });
    });
});
