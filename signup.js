let username = document.getElementById('username');
let password = document.getElementById('password');
let form = document.getElementById('form1')

function check(event){
    console.log(username.value);
    console.log(password.value)
    event.preventDefault()
}
form.addEventListener('submit', check);
//action="signup.php"