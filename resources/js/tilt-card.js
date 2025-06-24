document.querySelectorAll(".tiltCard--js").forEach((card) => {
    const glow = card.querySelector(".tiltCardGlow--js");
    const content = card.querySelector(".tiltCardContent--js");

    card.addEventListener("mousemove", (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        const percentX = (x - centerX) / centerX;
        const percentY = -((y - centerY) / centerY);

        card.style.transform = `perspective(1000px) rotateY(${
            percentX * 10
        }deg) rotateX(${percentY * 10}deg)`;
        content.style.transform = `translateZ(30px)`;
        glow.style.opacity = "1";
        glow.style.backgroundImage = `
                radial-gradient(
                    circle at 
                    ${x}px ${y}px, 
                    #ffffff33,
                    transparent
                )
            `;
    });

    card.addEventListener("mouseleave", () => {
        card.style.transform =
            "perspective(1000px) rotateY(0deg) rotateX(0deg)";
        content.style.transform = "translateZ(0px)";
        glow.style.opacity = "0";
    });
});
