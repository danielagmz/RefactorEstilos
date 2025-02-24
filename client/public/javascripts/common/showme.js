document.querySelectorAll('.showme').forEach((element) => {
    element.addEventListener('click', () => {
        element.classList.toggle('fi-rr-eye', !element.classList.contains('fi-rr-eye'));
        element.classList.toggle('fi-rr-eye-crossed', !element.classList.contains('fi-rr-eye-crossed'));
        element.previousElementSibling.setAttribute('type', element.classList.contains('fi-rr-eye') ? 'password' : 'text');
    });
    element.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') {
            element.click();
        }
    });
});

document.querySelectorAll('.checkbox-wrapper label').forEach((label) => {
    label.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault(); 
            label.click();
        }
    });
});
