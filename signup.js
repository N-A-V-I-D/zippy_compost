let username = document.getElementById('username');
let password = document.getElementById('password');
let passwordVerify = document.getElementById('verifypassword');
let form = document.getElementById('form1')
let shouldReload = false
function check(event){
    // event.preventDefault()
    console.log(username.value);
    console.log(password.value)
    console.log(passwordVerify.value)
    if(password.value !== passwordVerify.value){
        alert("Passwords do not match. Please try again.")
        password.value=""
        passwordVerify.value=""
        password.focus()
    }
    else{

        form.action = "signup.php"
    }  
}

form.addEventListener('submit', check);
