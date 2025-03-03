document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const signupForm = document.getElementById('signupForm');
    const signupContainer = document.getElementById('signupContainer');
    const loginContainer = document.getElementById('loginContainer');
    const showSignupForm = document.getElementById('showSignupForm');
    const showLoginForm = document.getElementById('showLoginForm');
    const message = document.getElementById('message');

    // Toggle visibility between login and signup forms
    if (showSignupForm) {
        showSignupForm.addEventListener('click', function(event) {
            event.preventDefault();
            signupContainer.classList.remove('hide');
            loginContainer.classList.add('hide');
        });
    }

    if (showLoginForm) {
        showLoginForm.addEventListener('click', function(event) {
            event.preventDefault();
            signupContainer.classList.add('hide');
            loginContainer.classList.remove('hide');
        });
    }

    // Handle login form submission
    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Add your login logic here, e.g., AJAX request to login.php
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Example: simple validation
            if (username && password) {
                loginForm.submit();
            } else {
                alert('Please fill in both fields.');
            }
        });
    }

    // Handle signup form submission
    if (signupForm) {
        signupForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Add your signup logic here, e.g., AJAX request to signup.php
            const newUsername = document.getElementById('newUsername').value;
            const newPassword = document.getElementById('newPassword').value;

            // Example: simple validation
            if (newUsername && newPassword) {
                signupForm.submit();
            } else {
                alert('Please fill in both fields.');
            }
        });
    }
});
