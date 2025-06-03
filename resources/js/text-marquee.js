import marquee from "vanilla-marquee";

const marqueeEl = document.getElementById('text-marquee--js');

if (marqueeEl) {
    new marquee(marqueeEl, {
        duplicated: true,
        speed: 80,
        pauseOnHover: true
    });
}