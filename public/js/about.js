document.addEventListener('DOMContentLoaded', function () {

    /* ===== Animated number counters ===== */
    function animateCounter(el) {
        const target = parseInt(el.dataset.target, 10);
        const duration = 1600;          // ms
        const start = performance.now();

        function tick(now) {
            const progress = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);   // ease-out cubic
            el.textContent = Math.floor(eased * target).toLocaleString('en-US');
            if (progress < 1) requestAnimationFrame(tick);
        }

        requestAnimationFrame(tick);
    }

    const counterObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                counterObserver.unobserve(entry.target);   // run only once
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('.counter').forEach(function (c) {
        counterObserver.observe(c);
    });

    /* ===== Read More / Read Less toggle ===== */
    const readBtn = document.getElementById('readMoreBtn');
    const moreText = document.getElementById('moreText');

    readBtn.addEventListener('click', function () {
        moreText.classList.toggle('show');
        const expanded = moreText.classList.contains('show');
        readBtn.textContent = expanded ? 'Read Less' : 'Read More';
    });
});
