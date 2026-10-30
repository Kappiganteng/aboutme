import './bootstrap';

/* ===== SCROLL REVEAL ===== */

document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll(
        "main section, main article, .card, .info-card, .dream-card, .skill-card, .goal-card"
    );

    elements.forEach((element) => {
        element.classList.add("reveal");
    });

    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.12,
            rootMargin: "0px 0px -35px 0px"
        }
    );

    elements.forEach((element) => {
        observer.observe(element);
    });
});
