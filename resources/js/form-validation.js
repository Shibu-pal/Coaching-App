export function initBootstrapValidation() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        const contactInput = form.querySelector('#contact');
        const aadharInput = form.querySelector('#aadhar');
        const pinInput = form.querySelector('#pin');
        const mobileInput = form.querySelector('#mobile'); // For Teacher Form
        if (mobileInput) {
            mobileInput.addEventListener('input', () => {
                mobileInput.setCustomValidity(mobileInput.value.length !== 10 ? 'Invalid' : '');
            });
        }

        const password = form.querySelector('#password');
        const confirm = form.querySelector('#confirm');

        if (password && confirm) {
            confirm.addEventListener('input', () => {
                // Check if passwords match
                if (confirm.value === password.value) {
                    confirm.setCustomValidity(''); // Valid
                } else {
                    confirm.setCustomValidity('Invalid'); // Invalid
                }
            });

            // Validation starts immediately as the user types (oninput)
        }

        // Contact Validation (10 Digits)
        if (contactInput) {
            contactInput.addEventListener('input', () => {
                if (contactInput.value.length !== 10) {
                    contactInput.setCustomValidity('Invalid'); // Prevents form submission
                } else {
                    contactInput.setCustomValidity(''); // Allows submission
                }
            });
        }

        // Aadhaar Validation (12 Digits)
        if (aadharInput) {
            aadharInput.addEventListener('input', () => {
                if (aadharInput.value.length !== 12) {
                    aadharInput.setCustomValidity('Invalid');
                } else {
                    aadharInput.setCustomValidity('');
                }
            });
        }

        // PIN Validation (6 Digits)
        if (pinInput) {
            pinInput.addEventListener('input', () => {
                if (pinInput.value.length !== 6) {
                    pinInput.setCustomValidity('Invalid');
                } else {
                    pinInput.setCustomValidity('');
                }
            });
        }

        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
}