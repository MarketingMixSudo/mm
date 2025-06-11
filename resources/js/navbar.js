window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar--js");
    const navbarScroll = document.querySelector(".navbarScroll--js");
  


    if (window.scrollY >= 100) {
        navbar.classList.add("-translate-y-[100%]");
        navbarScroll.classList.remove("-translate-y-[100%]");
        console.log('ok')
      
        
    } else {
        navbar.classList.remove("-translate-y-[100%]");
        navbarScroll.classList.add("-translate-y-[100%]");

        
    }
});