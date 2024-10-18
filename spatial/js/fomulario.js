document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('container');
    const registerBtn = document.getElementById('register');
    const loginBtn = document.getElementById('login');
    const termsLink = document.getElementById('terms-conditions-link');
    const termsModal = document.getElementById('termsModal');
    const closeModal = document.getElementById('closeModal');
    const acceptTerms = document.getElementById('acceptTerms');
    const checkbox = document.querySelector('.checkbox-container input');
    const createAccountBtn = document.querySelector('.sign-up button');

    function resetTermsAndConditions() {
        checkbox.checked = false; 
    }

    registerBtn.addEventListener('click', () => {
        container.classList.add("active");
        resetTermsAndConditions(); 
    });

    loginBtn.addEventListener('click', () => {
        container.classList.remove("active");
        resetTermsAndConditions(); 
    });

    termsLink.addEventListener('click', (event) => {
        event.preventDefault();
        termsModal.style.display = 'block';
    });

    closeModal.addEventListener('click', () => {
        termsModal.style.display = 'none';
    });

    acceptTerms.addEventListener('click', () => {
        checkbox.checked = true;
        termsModal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target === termsModal) {
            termsModal.style.display = 'none';
        }
    });

    createAccountBtn.addEventListener('click', (event) => {
        if (!checkbox.checked) {
            event.preventDefault();
            alert('Debes aceptar los términos y condiciones para crear una cuenta.');
        }
    });
});
