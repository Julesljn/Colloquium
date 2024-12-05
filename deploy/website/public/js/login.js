document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.formCtn');
    const errorSpan = document.querySelector('.formCtn span');
    const fields = ['email', 'password'];

    form.addEventListener('submit', e => {
        e.preventDefault();
        const valid = fields.every(fieldId => {
            const element = document.getElementById(fieldId);
            return element && element.value.trim() !== '';
        });

        if (valid) {
            errorSpan.classList.add('vanish');
            form.submit();
        } else {
            errorSpan.classList.remove('vanish');
        }
    });
});
