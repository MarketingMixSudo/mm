document.addEventListener("DOMContentLoaded", () => {
    const scrollBtn = document.querySelector("#scrollToTop");
    if (!scrollBtn) return;

    const handleScroll = () => {
        scrollBtn.classList.toggle("opacity-0", window.scrollY < 100);
    };

    const scrollToTop = () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    };

    window.addEventListener("scroll", () => requestAnimationFrame(handleScroll));
    scrollBtn.addEventListener("click", scrollToTop);

    // Wywołujemy handleScroll od razu, aby przycisk był ukryty na starcie
    handleScroll();
});