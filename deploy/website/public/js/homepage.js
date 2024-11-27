const iconAlert = document.querySelector('.brand_alert');
const textAlert = document.querySelector('.brand_alert_text');

iconAlert.addEventListener('mouseenter', () => {
    textAlert.classList.add('activeAlert');
});
iconAlert.addEventListener('mouseleave', () => {
    textAlert.classList.remove('activeAlert');
});