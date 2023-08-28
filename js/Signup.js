// function valido() {
//     const text = document.getElementById("text")
//     const password = document.getElementById('password')
//     const email = document.getElementById("email")
//     const text1 = document.getElementById("text1")
//     const email1 = document.getElementById("email1")

//     if ((text == null) && (password == null) && (email == null)) {
//         alert("Mbush te dhenat per tu regjistruar")
//     }
//     if ((text == null) && (password == null)) {
//         alert("Mbush te dhenat per tu kyçur")
//     }
//     if ((text1 == null) && (email1 == null)) {
//         alert("Mbush te dhenat per te jap mendimin tuaj")
//     }
// }
function isValid(input, name) {
    if (input.value.length == 0) {
        Swal.fire(
            'Error!',
            name + ' field is blank',
            'error'
        );
        return false;
    }

    if (input.value.length < 6) {
        Swal.fire(
            'Error!',
            name + ' is too short, should be more than 6 characters and less than 21!',
            'error'
        );
        return false;
    }

    if (input.value.length > 21) {
        Swal.fire(
            'Error!',
            name + ' is too large, should be less than 21 and more than 6 characters!',
            'error'
        );
        return false;
    }

    return true;
}

function handleRegister() {
    const username = document.querySelector(".usernameInput");
    const email = document.querySelector(".emailInput");
    const password = document.querySelector(".passwordInput");

    if (username.value.length == 0) {
       
        Swal.fire({
            title: 'Failed!',
            text: 'Username field is blank!',
            imageUrl: '/projekti_ueb/images/fail.jpg',
            imageWidth: 300,
            imageAlt: 'Custom image',
        });
        return false;
    }
    if (username.value.length < 6) {
       
        Swal.fire({
            title: 'Failed!',
            text: 'Username is too short, should be more than 6 characters and less than 21!',
            imageUrl: '/projekti_ueb/images/fail.jpg',
            imageWidth: 300,
            imageAlt: 'Custom image',
        });
        return false;
    }

    if (username.value.length > 21) {
        Swal.fire({
            title: 'Failed!',
            text: 'Username is too large, should be less than 21 and more than 6 characters!',
            imageUrl: '/projekti_ueb/images/fail.jpg',
            imageWidth: 300,
            imageAlt: 'Custom image',
        });
        return false;
    }

    if (email.value.length == 0) {
       
        Swal.fire({
            title: 'Failed!',
            text: 'Email field is blank!',
            imageUrl: '/projekti_ueb/images/fail.jpg',
            imageWidth: 300,
            imageAlt: 'Custom image',
        });
        return false;
    }
    if (email.value.length < 6) {
        Swal.fire({
            title: 'Failed!',
            text: 'Email is too short, should be more than 6 characters and less than 21!',
            imageUrl: '/projekti_ueb/images/fail.jpg',
            imageWidth: 300,
            imageAlt: 'Custom image',
        });
        return false;
    }

    if (email.value.length > 21) {
        Swal.fire({
            title: 'Failed!',
            text: 'Email is too large, should be less than 21 and more than 6 characters!',
            imageUrl: '/projekti_ueb/images/fail.jpg',
            imageWidth: 300,
            imageAlt: 'Custom image',
        });
        return false;
    }

    if (password.value.length == 0) {
        Swal.fire({
            title: 'Failed!',
            text: 'Password field is blank!',
            imageUrl: '/projekti_ueb/images/fail.jpg',
            imageWidth: 300,
            imageAlt: 'Custom image',
        });
        return false;
    }
    if (password.value.length < 6) {
        Swal.fire({
            title: 'Failed!',
            text: 'Password is too short, should be more than 6 characters and less than 21!',
            imageUrl: '/projekti_ueb/images/fail.jpg',
            imageWidth: 300,
            imageAlt: 'Custom image',
        });
        return false;
    }

    if (password.value.length > 21) {
        Swal.fire({
            title: 'Failed!',
            text: 'Password is too large, should be less than 21 and more than 6 characters!',
            imageUrl: '/projekti_ueb/images/fail.jpg',
            imageWidth: 300,
            imageAlt: 'Custom image',
        });
        return false;
    }
    
   

    if (isValid(username, "Username") && isValid(email, "Email") && isValid(password, "Password")) {
        Swal.fire({
            title: 'Success!',
            text: 'Your account was created successfully!',
            imageUrl: '/projekti_ueb/images/sukses.jpg',
            imageWidth: 300,
            imageAlt: 'Custom image',
        });
        return true;
    } else {
        Swal.fire({
            title: 'Failed!',
            text: 'Your account was not created. Please try again!',
            imageUrl: '/projekti_ueb/images/fail.jpg',
            imageWidth: 300,
            imageAlt: 'Custom image',
        });
        return false;
    }
}

const handleLogin = ()=>{
    const email = document.querySelector(".emailInput");
    const password = document.querySelector(".passwordInput");

    if (email.value.length == 0) {
       
        Swal.fire({
            title: 'Failed!',
            text: 'Email field is blank!',
            imageUrl: '/projekti_ueb/images/fail.jpg',
            imageWidth: 300,
            imageAlt: 'Custom image',
        });
        return false;
    }
    if (!email.value.includes("@")) {
       
        Swal.fire({
            title: 'Failed!',
            text: 'Email should contain \"@\"',
            imageUrl: '/projekti_ueb/images/fail.jpg',
            imageWidth: 300,
            imageAlt: 'Custom image',
        });
        return false;
    }

    if (password.value.length == 0) {
        Swal.fire({
            title: 'Failed!',
            text: 'Password field is blank!',
            imageUrl: '/projekti_ueb/images/fail.jpg',
            imageWidth: 300,
            imageAlt: 'Custom image',
        });
        return false;
    }
    
   

    if (!email.value.length == 0 && !email.value.includes("@") && !password.value.length == 0) {
        Swal.fire({
            title: 'Success!',
            text: 'Your account was created successfully!',
            imageUrl: '/projekti_ueb/images/sukses.jpg',
            imageWidth: 300,
            imageAlt: 'Custom image',
        });
        return true;
    } else {
        Swal.fire({
            title: 'Failed!',
            text: 'Your account was not created. Please try again!',
            imageUrl: '/projekti_ueb/images/fail.jpg',
            imageWidth: 300,
            imageAlt: 'Custom image',
        });
        return false;
    }
}