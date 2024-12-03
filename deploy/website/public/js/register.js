document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.formCtn');
    const fields = [
        setupValidation('first_name', value => value.trim() !== ''),
        setupValidation('last_name', value => value.trim() !== ''),
        setupValidation('gender', value => value !== ''),
        setupValidation('birthday', isValidBirthday),
        setupValidation('email', isValidEmail),
        setupValidation('password', isValidPassword),
        setupValidation('phone', isValidPhoneNumber)
    ];
    
    function setupValidation(fieldId, validator) {
        return {
            element: document.getElementById(fieldId),
            errorElement: document.querySelector(`#${fieldId} ~ .errorCtn span`),
            validator
        };
    }
    form.addEventListener('submit', e => {
        e.preventDefault();
        let valid = true;

        fields.forEach(({ element, errorElement, validator }) => {
            if (!validator(element.value)) {
                errorElement.classList.remove('vanish');
                valid = false;
            } else {
                errorElement.classList.add('vanish');
            }
        });

        if (valid) form.submit();
    });

    function isValidBirthday(birthday) {
        const date = new Date(birthday);
        const today = new Date();
        const minDate = new Date('1900-01-01');
        return !isNaN(date) && date >= minDate && date <= today;
    }

    function isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/i;
        return re.test(email);
    }

    function isValidPassword(password) {
        const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/;
        return re.test(password);
    }

    function isValidPhoneNumber(phone) {
        const re = /^[+]?[0-9]{10,14}$/;
        return re.test(phone);
    }
});