// script.js

document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    
    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent form submission for validation

        const name = form.name.value.trim();
        const email = form.email.value.trim();
        const password = form.password.value;

        // Simple validation
        if (name === "" || email === "" || password === "") {
            alert("Please fill out all fields.");
            return;
        }

        if (password.length < 6) {
            alert("Password must be at least 6 characters long.");
            return;
        }

        // If all validations pass
        alert("Registration successful!");
        form.submit(); // Submit the form
    });
});