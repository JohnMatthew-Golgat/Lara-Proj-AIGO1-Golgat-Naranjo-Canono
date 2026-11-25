        
        document.addEventListener('DOMContentLoaded', () => {

            const form = document.getElementById('contactForm');

            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const message = document.getElementById('message');

            const nameError = document.getElementById('nameError');
            const emailError = document.getElementById('emailError');
            const messageError = document.getElementById('messageError');

            const successMessage = document.getElementById('successMessage');

            form.addEventListener('submit', function(event) {

                // Prevent automatic form submission
                event.preventDefault();

                // Clear previous error messages
                nameError.textContent = "";
                emailError.textContent = "";
                messageError.textContent = "";
                successMessage.textContent = "";

                let isValid = true;

                // Validate Full Name
                if (name.value.trim() === "") {
                    nameError.textContent = "Please enter your full name.";
                    isValid = false;
                }

                // Validate Email
                if (email.value.trim() === "") {
                    emailError.textContent = "Please enter your email address.";
                    isValid = false;
                } 
                else {
                    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    if (!emailPattern.test(email.value.trim())) {
                        emailError.textContent = "Please enter a valid email address.";
                        isValid = false;
                    }
                }

                // Validate Message
                if (message.value.trim() === "") {
                    messageError.textContent = "Please enter your message.";
                    isValid = false;
                }

                // Display success message
                if (isValid) {
                    successMessage.textContent =
                        "Your message has been submitted successfully!";

                    successMessage.style.color = "green";

                    form.reset();
                }

            });

        });