// document.addEventListener("DOMContentLoaded", function() {
//     const form = document.querySelector("form");

//     form.addEventListener("submit", function(event) {

//         // Prevent the default form submission
//         event.preventDefault();

//         function validateEmail(email) {
//             const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
//             return emailRegex.test(email);
//         }

//         // Validate the form fields
//         const name = document.getElementById("name").value;
//         const email = document.getElementById("email").value;
//         const password = document.getElementById("password").value;

//         const errors = [];

//         // Validate name
//         const nameErrorMessage = document.querySelector("#name + small");
//         if (name.trim() === "" || name.length < 6 || !name.match(/^[A-Za-z]{3,}\s[A-Za-z]{3,}$/)) {
//             errors.push("Name is required");
//             nameErrorMessage.textContent =
//                 "Name is required and  should consist of two parts, each with a minimum of 3 letters ";
//             nameErrorMessage.classList.add("error-message");
//         } else {
//             nameErrorMessage.textContent = "";
//             nameErrorMessage.classList.remove("error-message");
//         }

//         // Validate email
//         const emailErrorMessage = document.querySelector("#email + small");
//         if (email.trim() === "" || !validateEmail(email)) {
//             errors.push("Email address is required");
//             emailErrorMessage.textContent = "Email address is required";
//             emailErrorMessage.classList.add("error-message");
//         } else {
//             emailErrorMessage.textContent = "";
//             emailErrorMessage.classList.remove("error-message");
//         }

//         // Validate password
//         const passwordErrorMessage = document.querySelector("#password + small");
//         if (password.trim() === "" || password.length < 6) {
//             errors.push("Password is required and must be at least 6 characters");
//             passwordErrorMessage.textContent =
//                 "Password is required and must be at least 6 characters";
//             passwordErrorMessage.classList.add("error-message");
//         } else {
//             passwordErrorMessage.textContent = "";
//             passwordErrorMessage.classList.remove("error-message");
//         }

//         // If there are validation errors, prevent form submission
//         if (errors.length > 0) {
//             return false;
//         }

//         // If validation passes, submit the form
//         form.submit();
//     });
// });


document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {

        // Prevent the default form submission
        event.preventDefault();

        function validateEmail(email) {
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return emailRegex.test(email);
        }

        // Validate the form fields
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const role = document.querySelector('input[name="role_id"]:checked');

        const errors = [];

        // Validate name
        const nameErrorMessage = document.querySelector("#name + small");
        if (name.trim() === "" || name.length < 6 || !name.match(/^[A-Za-z]{3,}\s[A-Za-z]{3,}$/)) {
            errors.push("Name is required");
            nameErrorMessage.textContent =
                "Name is required and  should consist of two parts, each with a minimum of 3 letters ";
            nameErrorMessage.classList.add("error-message");
        } else {
            nameErrorMessage.textContent = "";
            nameErrorMessage.classList.remove("error-message");
        }

        // Validate email
        const emailErrorMessage = document.querySelector("#email + small");
        if (email.trim() === "" || !validateEmail(email)) {
            errors.push("Email address is required");
            emailErrorMessage.textContent = "Email address is required";
            emailErrorMessage.classList.add("error-message");
        } else {
            emailErrorMessage.textContent = "";
            emailErrorMessage.classList.remove("error-message");
        }

        // Validate password
        const passwordErrorMessage = document.querySelector("#password + small");
        if (password.trim() === "" || password.length < 6) {
            errors.push("Password is required and must be at least 6 characters");
            passwordErrorMessage.textContent =
                "Password is required and must be at least 6 characters";
            passwordErrorMessage.classList.add("error-message");
        } else {
            passwordErrorMessage.textContent = "";
            passwordErrorMessage.classList.remove("error-message");
        }

           // Validate radio button
    const roleErrorMessage = document.getElementById("role_id_error");
    if (!role) {
        errors.push("Role is required");
        roleErrorMessage.textContent = "Please select a role";
        roleErrorMessage.classList.add("error-message");
    } else {
        roleErrorMessage.textContent = "";
        roleErrorMessage.classList.remove("error-message");
    }

        // If there are validation errors, prevent form submission
        if (errors.length > 0) {
            return false;
        }

        // If validation passes, submit the form
        form.submit();
    });
});