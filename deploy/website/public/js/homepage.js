// Alert Fake Brands
const iconAlert = document.querySelector('.brand_alert');
const textAlert = document.querySelector('.brand_alert_text');

if (iconAlert && textAlert) {
    iconAlert.addEventListener('mouseenter', () => {
        textAlert.classList.add('activeAlert');
    });
    iconAlert.addEventListener('mouseleave', () => {
        textAlert.classList.remove('activeAlert');
    });
}

// Navigation NavBar
document.querySelectorAll('a[href^="#"]:not(#logout-button)').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);

        if (targetElement) {
            const navbarHeight = document.querySelector('nav').offsetHeight;

            const targetPosition = targetElement.offsetTop - navbarHeight;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth',
            });
        }
    });
});

// Navigation Logo Top
document.querySelectorAll('.logoTitleLink').forEach((logo) => {
    logo.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});

// Delete Parallaxe
const ctnParallaxe = document.querySelector('.parallaxe');
let isHidden = false;

if (ctnParallaxe) {
    window.addEventListener('scroll', function () {
        const scrollPosition = window.scrollY;
        const threshold = 100 * window.innerHeight / 100; // Convert 12vh to pixels

        if (scrollPosition > threshold && !isHidden) {
            ctnParallaxe.style.display = 'none';
            isHidden = true;
        } else if (scrollPosition <= threshold && isHidden) {
            ctnParallaxe.style.display = 'block';
            isHidden = false;
        }
    });
}
