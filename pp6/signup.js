let formWidget = document.getElementById("form");
formWidget.addEventListener("submit", checkForm);

// Check if the username and password is valid
function checkForm(event) {
    // event.preventDefault();
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let repeat = document.getElementById("repeat").value;
    let isValid = true;

    if (username.length < 3) {
        window.alert("Invalid username.");
        isValid = false;
    } else if (alphaNumeric(username)) {
        window.alert("Invalid username.");
        isValid = false;
    } else if (username[0] >= '0' && username[0] <= '9') {
        window.alert("Invalid username.");
        isValid = false;
    } else if (password.length < 3) {
        window.alert("Invalid password.");
        isValid = false;
    } else if (!passwordValid(password)) {
        window.alert("Invalid password.");
        isValid = false;
    } else if (!(password === repeat)) {
        window.alert("Passwords do not match.");
        isValid = false;
    }
    if (!isValid) {
        event.preventDefault();
    }

    // Check if username/password contains anything besides numbers and letters
    function alphaNumeric(input) {
        let notValid = false;
        for (i = 0; i < input.length; i++) {
            if (input[i] < '0') {
                notValid = true;
            } else if (input[i] > '9' && input[i] < 'A') {
                notValid = true;
            } else if (input[i] > 'Z' && input[i] < 'a') {
                notValid = true;
            } else if (input[i] > 'z') {
                notValid = true;
            }
        }
        return notValid;
    }

    // Check if conditions for password are met
    function passwordValid(input) {
        let oneUpper = false;
        let oneLower = false;
        let oneNumber = false;
        for (i = 0; i < input.length; i++) {
            if (input[i] >= '0' && input[i] <= '9') {
                oneNumber = true;
            } else if (input[i] >= 'A' && input[i] <= 'Z') {
                oneUpper = true;
            } else if (input[i] >= 'a' && input[i] <= 'z') {
                oneLower = true;
            }
        }
        return (oneUpper && oneLower && oneNumber);
    }

    return true;
}