document.addEventListener("DOMContentLoaded", () => {
    //hero slide to sa taas
    const slides = [...document.querySelectorAll(".hero-slide")];
    const dots = [...document.querySelectorAll("[data-go-to]")];
    const previous = document.querySelector(".slider-prev");
    const next = document.querySelector(".slider-next");

    if (slides.length > 0) {
        let current = 0;
        let timer;

        function showSlide(index) {
            current = (index + slides.length) % slides.length;
            slides.forEach((slide, i) => slide.classList.toggle("is-active", i === current));
            dots.forEach((dot, i) => {
                dot.classList.toggle("active", i === current);
                dot.setAttribute("aria-pressed", i === current ? "true" : "false");
            });
        }

        function restartAutoplay() {
            clearInterval(timer);
            timer = setInterval(() => showSlide(current + 1), 5500);
        }

        previous?.addEventListener("click", () => { showSlide(current - 1); restartAutoplay(); });
        next?.addEventListener("click", () => { showSlide(current + 1); restartAutoplay(); });
        
        dots.forEach(dot => dot.addEventListener("click", () => {
            showSlide(Number(dot.dataset.goTo));
            restartAutoplay();
        }));

        showSlide(0);
        restartAutoplay();
    }

    // eto sa gallery category to 
    const filters = document.querySelectorAll(".filter");
    const cards = document.querySelectorAll(".gallery-card");

    filters.forEach(button => {
        button.addEventListener("click", () => {
            // eto yung filter button para mag ibang kulay mag stay sa white default
            filters.forEach(item => item.classList.remove("active"));

            // eto yung mag iiba kulay violet 
            button.classList.add("active");

            const selected = button.dataset.filter.trim().toLowerCase();

            // eto naman filter sya sa category nya
            cards.forEach(card => {
                const category = (card.dataset.category || "").trim().toLowerCase();
                
                if (selected === "all" || category === selected) {
                    card.style.display = ""; // eto yung nag sshow ng bawat pic sa category
                } else {
                    card.style.display = "none"; // hinahide nyo yung ibang pic sa category na hindi pinili
                }
            });
        });
    });

    // --- Mobile Menu Toggle Logic ---
    const menuButton = document.querySelector(".menu-toggle");
    const nav = document.querySelector(".nav-links");

    menuButton?.addEventListener("click", () => {
        const opened = nav.classList.toggle("open");
        menuButton.setAttribute("aria-expanded", opened ? "true" : "false");
        menuButton.setAttribute("aria-label", opened ? "Close navigation" : "Open navigation");
    });

    nav?.querySelectorAll("a").forEach(link => link.addEventListener("click", () => {
        nav.classList.remove("open");
        menuButton?.setAttribute("aria-expanded", "false");
    }));
});
