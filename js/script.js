document.addEventListener('DOMContentLoaded', function() {
    // Get form elements
    const form = document.getElementById('registrationForm');
    const successMessage = document.getElementById('success-message');
    const formStatus = document.getElementById('form-status');
    const submitButton = document.getElementById('submitButton');
    const btnText = submitButton.querySelector('.btn-text');
    const btnLoading = submitButton.querySelector('.btn-loading');
    
    // Toggle medical details visibility based on radio button selection
    const medicalConditionsRadios = document.querySelectorAll('input[name="hasMedicalConditions"]');
    const medicalDetailsContainer = document.getElementById('medical-details-container');
    
    medicalConditionsRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            medicalDetailsContainer.style.display = this.value === 'ja' ? 'block' : 'none';
        });
    });
    
    // Toggle medication details visibility based on radio button selection
    const medicationRadios = document.querySelectorAll('input[name="usesMedication"]');
    const medicationDetailsContainer = document.getElementById('medication-details-container');
    
    medicationRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            medicationDetailsContainer.style.display = this.value === 'ja' ? 'block' : 'none';
        });
    });
    
    // New form button functionality
    const newFormBtn = document.getElementById('newFormBtn');
    if(newFormBtn) {
        newFormBtn.addEventListener('click', function() {
            form.reset();
            successMessage.style.display = 'none';
            form.style.display = 'block';
            window.scrollTo(0, document.getElementById('inschrijfformulier').offsetTop - 100);
        });
    }
    
    // Form submission
    if(form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Clear previous error messages
            const errorMessages = document.querySelectorAll('.error-message');
            errorMessages.forEach(element => {
                element.textContent = '';
            });
            
            // Validate form
            let isValid = true;
            
            // Required fields validation
            const requiredFields = [
                { id: 'fullName', message: 'Vul je naam in' },
                { id: 'birthDate', message: 'Vul je geboortedatum in' },
                { id: 'address', message: 'Vul je adres in' },
                { id: 'postalCode', message: 'Vul je postcode in' },
                { id: 'city', message: 'Vul je woonplaats in' },
                { id: 'phone', message: 'Vul je telefoonnummer in' },
                { id: 'email', message: 'Vul je e-mailadres in' }
            ];
            
            requiredFields.forEach(field => {
                const element = document.getElementById(field.id);
                if(!element.value.trim()) {
                    document.getElementById(`${field.id}-error`).textContent = field.message;
                    isValid = false;
                }
            });
            
            // Email validation
            const emailField = document.getElementById('email');
            if(emailField.value.trim() && !isValidEmail(emailField.value.trim())) {
                document.getElementById('email-error').textContent = 'Vul een geldig e-mailadres in';
                isValid = false;
            }
            
            // Check if at least one activity is selected
            const activityCheckboxes = document.querySelectorAll('input[name="activities[]"]:checked');
            if(activityCheckboxes.length === 0) {
                document.getElementById('activities-error').textContent = 'Selecteer ten minste één activiteit';
                isValid = false;
            }
            
            // Check terms agreement
            const termsCheckbox = document.getElementById('termsAgreed');
            if(!termsCheckbox.checked) {
                document.getElementById('termsAgreed-error').textContent = 'Je moet akkoord gaan met de algemene voorwaarden';
                isValid = false;
            }
            
            if(!isValid) {
                // Scroll to first error
                const firstError = document.querySelector('.error-message:not(:empty)');
                if(firstError) {
                    window.scrollTo(0, firstError.offsetTop - 100);
                }
                return;
            }
            
            // Show loading state
            btnText.style.display = 'none';
            btnLoading.style.display = 'inline-block';
            submitButton.disabled = true;
            
            // Collect form data
            const formData = new FormData(form);            // PHP Form Submission
            fetch('process_form.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Reset loading state
                btnText.style.display = 'inline-block';
                btnLoading.style.display = 'none';
                submitButton.disabled = false;
                
                if(data.status === 'success') {
                    // Show success message
                    form.style.display = 'none';
                    successMessage.style.display = 'block';
                    
                    // Reset form for next use
                    form.reset();
                    
                    // Scroll to success message
                    window.scrollTo(0, successMessage.offsetTop - 100);
                } else {
                    // Show error message
                    formStatus.className = 'alert alert-danger';
                    formStatus.style.display = 'block';
                    formStatus.innerHTML = data.message;
                    
                    // Display individual field errors if they exist
                    if(data.errors) {
                        data.errors.forEach(error => {
                            formStatus.innerHTML += '<br>• ' + error;
                        });
                    }
                    
                    // Scroll to error message
                    window.scrollTo(0, formStatus.offsetTop - 100);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                btnText.style.display = 'inline-block';
                btnLoading.style.display = 'none';
                submitButton.disabled = false;
                
                formStatus.className = 'alert alert-danger';
                formStatus.style.display = 'block';
                formStatus.textContent = 'Er is een technische fout opgetreden. Probeer het later opnieuw.';
                
                window.scrollTo(0, formStatus.offsetTop - 100);
            });
        });
    }
    
    // Email validation helper
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});
