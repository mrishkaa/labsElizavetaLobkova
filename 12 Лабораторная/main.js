const form = document.getElementById('form');
const inputs = form.querySelectorAll('.input-form');

inputs.forEach((input, index) => {
    const errorMessage = input.nextElementSibling;
    input.addEventListener('focus', () => {
        errorMessage.style.display = 'none';
    });
    input.addEventListener('blur', () => {
        if (!input.value.trim()) {
            errorMessage.style.display = 'block';
        }
    });
});

form.addEventListener('submit', (event) => {
    let isValid = true;

    inputs.forEach((input, index) => {
        const errorMessage = input.nextElementSibling;
        if (!input.value.trim()) {
            errorMessage.style.display = 'block';
            isValid = false;
        }
    });
    if (!isValid) {
        event.preventDefault();
    }
});