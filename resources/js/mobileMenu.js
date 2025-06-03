const mobileMenu = document.querySelector("#menu");
const closeBtn = document.querySelector("#closeMenu");
const openBtns = document.querySelectorAll(".hamburger-js");

const menuHandler = () => {
    mobileMenu.classList.toggle("translate-x-[100%]");
    mobileMenu.classList.toggle("opacity-0");
    mobileMenu.classList.toggle("opacity-100");
};

// Obsługa otwierania i zamykania menu
openBtns.forEach(openBtn => {
    openBtn.addEventListener("click", menuHandler);
});
closeBtn && closeBtn.addEventListener("click", menuHandler);

// Zamknięcie menu po kliknięciu poza nim
document.addEventListener("click", (event) => {
    const isClickInsideMenu = mobileMenu.contains(event.target);
    const isMenuButton = [...openBtns].some(btn => btn.contains(event.target));

    if (!isClickInsideMenu && !isMenuButton) {
        mobileMenu.classList.add("translate-x-[100%]");
        mobileMenu.classList.add("opacity-0");
        mobileMenu.classList.remove("opacity-100");
    }
});


// ---- MOBILE DROPDOWN ----
document.querySelectorAll(".dropdown").forEach((dropdown) => {
    const button = dropdown.querySelector(".dropdownBtn--js");
    const dropdownUl = dropdown.querySelector(".dropdownUl--js");

    if (button && dropdownUl) {
        button.addEventListener("click", () => {
            dropdownUl.classList.toggle("max-h-0");
            dropdownUl.classList.toggle("opacity-0");
            dropdownUl.classList.toggle("max-h-[500px]");
            dropdownUl.classList.toggle("opacity-100");
        });
    }
});

// // Obsługa dropdownów w menu mobilnym
// const dropdowns = [
//     {
//         button: document.querySelector("#mobileDropdown"),
//         ul: document.querySelector("#mobileDropdownUl"),
//     },
//     {
//         button: document.querySelector("#mobileDropdown2"),
//         ul: document.querySelector("#mobileDropdownUl2"),
//     },
//     {
//         button: document.querySelector("#mobileDropdown3"),
//         ul: document.querySelector("#mobileDropdownUl3"),
//     },
//     {
//         button: document.querySelector("#mobileDropdown4"),
//         ul: document.querySelector("#mobileDropdownUl4"),
//     },
//     {
//         button: document.querySelector("#mobileDropdown5"),
//         ul: document.querySelector("#mobileDropdownUl5"),
//     },
// ];

// const toggleDropdown = (dropdownUl) => {
//     if (dropdownUl.classList.contains("max-h-0")) {
//         dropdownUl.classList.remove("max-h-0", "opacity-0");
//         dropdownUl.classList.add("max-h-[500px]", "opacity-100");
//     } else {
//         dropdownUl.classList.remove("max-h-[500px]", "opacity-100");
//         dropdownUl.classList.add("max-h-0", "opacity-0");
//     }
// };

// dropdowns.forEach(({ button, ul }) => {
//     if (button && ul) {
//         button.addEventListener("click", () => toggleDropdown(ul));
//     }
// });