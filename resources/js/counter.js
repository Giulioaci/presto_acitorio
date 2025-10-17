document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");
    const speed = 70; // più alto = più lento

    const formatNumber = (num) => {
        return new Intl.NumberFormat().format(num);
    };

    const animateCount = (counter) => {
        const target = +counter.getAttribute("data-target");
        const suffix = counter.getAttribute("data-suffix") || '';
        let count = 0;
        const increment = Math.ceil(target / speed);

        counter.innerText = '0'; // reset

        const update = () => {
            if (count < target) {
                count += increment;
                counter.innerText = formatNumber(count) + suffix;
                setTimeout(update, 20);
            } else {
                counter.innerText = formatNumber(target) + suffix;
            }
        };

        update();
    };

    // Usa IntersectionObserver per attivare il conteggio ogni volta che il contatore è visibile
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            const counter = entry.target;

            if (entry.isIntersecting) {
                animateCount(counter);
            }
        });
    }, {
        threshold: 0.6 // parte quando almeno il 60% è visibile
    });

    counters.forEach(counter => {
        observer.observe(counter);
    });
});
