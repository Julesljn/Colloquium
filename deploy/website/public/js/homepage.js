const iconAlert = document.querySelector('.brand_alert');
const textAlert = document.querySelector('.brand_alert_text');
const ctnParallaxe = document.querySelector('.parallaxe');

// Alert Fake Brands
iconAlert.addEventListener('mouseenter', () => {
    textAlert.classList.add('activeAlert');
});
iconAlert.addEventListener('mouseleave', () => {
    textAlert.classList.remove('activeAlert');
});

// Navigation NavBar
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
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
let isHidden = false;
window.addEventListener('scroll', function() {
    const scrollPosition = window.scrollY;
    const threshold = 100 * window.innerHeight / 100; // Convertit 12vh en pixels

    if (scrollPosition > threshold && !isHidden) {
        ctnParallaxe.style.display = 'none';
        isHidden = true;
    } else if (scrollPosition <= threshold && isHidden) {
        ctnParallaxe.style.display = 'block';
        isHidden = false;
    }
});
// supp le position fixed
// Taille ecran em
// vh