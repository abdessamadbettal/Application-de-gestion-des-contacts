<?php
// **************** js validation  ****************
echo '<script >';
echo 'const inscription = document.getElementById("inscription");
const username = document.getElementById("username");
// const email = document.getElementById("email1");
const password = document.getElementById("password1");
const password2 = document.getElementById("password2");
let valid = true;

console.log(inscription);

inscription.addEventListener("submit", (e) => {
    // console.log(username.value);
  validateInputs();
  if (valid == false) {
    e.preventDefault();
  }
});' ;

echo '
const setError = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".alert");

  errorDisplay.innerText = message;
  errorDisplay.classList.remove("d-none");
  errorDisplay.classList.add("alert-danger");
  valid = false;
};
const setSuccess = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".alert");

  errorDisplay.innerText = message;
  errorDisplay.classList.remove("d-none");
  errorDisplay.classList.add("alert-success");
  errorDisplay.classList.remove("alert-danger");
  valid = true;
};


const validateInputs = () => {
  const usernameValue = username.value.trim();
  const emailValue = email.value.trim();
  const passwordValue = password.value.trim();
  const password2Value = password2.value.trim();


  if (usernameValue === "") {
      console.log("username est unvalid");
    setError(username, "Username est vide");
  }
//   else if (usernameExist === true){
//     setError(username, "Username est deja existé");
//   }
   else {
    console.log(`username est valid`);
    setSuccess(username, "Username est valid");
  }


  if (passwordValue === "") {
    setError(password, "Password est vide");
  } else if (passwordValue.length < 8) {
    console.log(`password est insufusante : ${passwordValue}`);
    setError(password, "Password must be at least 8 character.");
  } else {
    setSuccess(password, "password est valid");
  }

  if (password2Value === "") {
    setError(password2, "Please confirm your password");
  } else if (password2Value !== passwordValue) {
    setError(password2, "Passwords est defferent de 1er code");
  } else {
    setSuccess(password2, "password est valid");
  }
 
};' ;
echo '</script>';
