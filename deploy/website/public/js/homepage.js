const iconAlert = document.querySelector('.brand_alert');
const textAlert = document.querySelector('.brand_alert_text');
const logoColloquium = document.querySelector('.logoTitleLink');
iconAlert.addEventListener('mouseenter', () => {
    textAlert.classList.add('activeAlert');
});
iconAlert.addEventListener('mouseleave', () => {
    textAlert.classList.remove('activeAlert');
});

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
logoColloquium.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
