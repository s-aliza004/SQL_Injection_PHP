let cards = document.querySelectorAll('.card');

cards.forEach((card, index) => {
    card.addEventListener('mouseover', () => {
        cards.forEach((card, i) => {
            if (i !== index) {
                card.style.transition = 'box-shadow 1.5s cubic-bezier(0.215, 0.61, 0.355, 1)';
                card.style.boxShadow = '0 0 0px rgba(0, 0, 0, 0.06)';
            }
        });
    }
    );

    card.addEventListener('mouseleave', () => {
        cards.forEach((card, i) => {
            if (i !== index) {
                card.style.transition = 'box-shadow 0.9s ease-in-out';
                card.style.boxShadow = '0 0 20px rgba(0, 0, 0, 0.06)';
            }
        });
    });
});
