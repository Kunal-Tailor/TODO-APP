// script.js

document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    
    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent form submission for validation

        const email = form.email.value.trim();
        const password = form.password.value;

        // Simple validation
        if (email === "" || password === "") {
            alert("Please fill out all fields.");
            return;
        }

        // Email validation regex
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Please enter a valid email address.");
            return;
        }

        // If all validations pass
        alert("Login successful!");
        form.submit(); // Submit the form
    });
});