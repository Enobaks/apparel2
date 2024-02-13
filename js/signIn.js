var signIn = document.querySelector('.signIn');


const regEx = /^[a-zA-Z]+$/;



function validateUser(e) {
    e.preventDefault();
    const formData = new FormData(signIn);
    const firstName = formData.get('firstname');
    const lastName = formData.get('lastname');
    const email = formData.get('email');
    const password = formData.get('password');
    const confirmPassword = formData.get('confirm-password');
    
    if (firstName == "") {
        var firstNameErr = document.querySelector('.firstname');
        firstNameErr.style.display = "block";
        firstNameErr.innerHTML = "Please enter your first name";
    }  else if (regEx.test(firstName) === false) {
        var firstNameErr = document.querySelector('.firstname');
        firstNameErr.style.display = "block";
        firstNameErr.innerHTML = "Please enter a valid name";
    }  else {
        console.log("correct!")
    }
    
    
    if (lastName == "") {
        var lastNameErr = document.querySelector('.lastname');
        lastNameErr.style.display = "block";
        lastNameErr.innerHTML = "Please enter your last name";
    }  else if (regEx.test(lastName) === false) {
        var lastNameErr = document.querySelector('.lastname');
        lastNameErr.style.display = "block";
        lastNameErr.innerHTML = "Please enter a valid name";
    }  else {
        console.log("Last name is scorrect!")
    }
    
    
    if (email == "") {
        var emailErr = document.querySelector('.email');
        emailErr.style.display = "block";
        emailErr.innerHTML = "Please enter your email address";
    }  else {
        var regex = /^\S+@\S+\.\S+$/;
        if (regex.test(email) === false) {
            var emailErr = document.querySelector('.email');
            emailErr.style.display = "block";
            emailErr.innerHTML = "Please enter a valid email address"; 
        } else {
            console.log("Email is correct!")
        }
    }
    
    
    if (password == "" || confirmPassword == "") {
        var passwordErr = document.querySelector('.password');
        passwordErr.style.display = "block";
        passwordErr.innerHTML = "Please enter your password";
    }  else if (password.length <= 7) {
        var passwordErr = document.querySelector('.password');
        passwordErr.style.display = "block";
        passwordErr.innerHTML = "Password length must be greater than 7";
    } else {
        console.log("Password is correct!")
    }
    

    if (confirmPassword != password) {
        var confirmPasswordErr = document.querySelector('.confirm_password');
        confirmPasswordErr.style.display = "block";
        confirmPasswordErr.innerHTML = "Password should match!";
    } 
    else {
        console.log("Password match!");
    } 
}



register.addEventListener('submit', registerUser);