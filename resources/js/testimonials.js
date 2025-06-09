document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.testimonial-card-js');
    let maxHeight = 0;

    cards.forEach(card => {
        const cardHeight = card.offsetHeight;
        if (cardHeight > maxHeight) {
            maxHeight = cardHeight;
        }
    });

    cards.forEach(card => {
        card.style.height = `${maxHeight}px`;
    });
});