import marquee from "vanilla-marquee";

const logoMarqueeEl = document.getElementById('logo-marquee--js');

if (logoMarqueeEl) {
    new marquee(logoMarqueeEl, {
        duplicated: true,
        speed: 80,
        pauseOnHover: true
    });
}