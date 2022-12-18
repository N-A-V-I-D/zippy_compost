
let obj = document.getElementById('submitButton');



obj.addEventListener('click',function(){

  let name = document.forms[0].elements[0].value;

  let text='<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Contact Reply</title><link rel="stylesheet" href="contactAboutus.css"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=JetBrains Mono" ><style>body, button {font-family: "JetBrains Mono";}</style></head><body>';
  text += "<h1 class='response'>Thank you for contacting us, "+ name + " !</h1> <br> <br> <h3 class='response'>We will review your request and get back to you in 0-2 business days. </h3><a href='indexAfterLogin.html'><button id='responseButton' type='button' name='button'> Home Page</button></a></body></html>";
  document.write(text);
})
