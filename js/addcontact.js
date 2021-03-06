// !validation de sign up
console.log("js est liee");
console.log("js est liee");
const addcontact = document.getElementById("addcontact");
const name = document.getElementById("name");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const adress = document.getElementById("adress");
let regexName = /[A-Za-z]{4,20}$/;
let regexEmail = /^(^[a-z0-9-_.][a-z0-9]+@(gmail|outlook).(com|fr|ma))$/;
let regexPhone = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/;
let regexAdress = /^[#.0-9a-zA-Z\s,-]+$/;
let valid = true;

console.log(addcontact);

addcontact.addEventListener("submit", (e) => {
    
    // console.log(username.value);
  validateInputs();
  if (valid === false) {
    e.preventDefault();
  }
});

const setError = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".alert");
  element.classList.add("is-invalid") ;
  errorDisplay.innerText = message;
  errorDisplay.classList.remove("d-none");
  errorDisplay.classList.add("alert-danger");
  valid = false;
};
const setSuccess = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".alert");
  element.classList.add("is-valid") 
  errorDisplay.innerText = message;
  errorDisplay.classList.remove("d-none");
  errorDisplay.classList.add("alert-success");
  errorDisplay.classList.remove("alert-danger");
  valid = true;
};

const validateInputs = () => {
  const nameValue = name.value.trim();
  const emailValue = email.value.trim();
  const phoneValue = phone.value.trim();
   const adressValue = adress.value.trim();

  if (nameValue == "") {
      // console.log("username est unvalid");
    setError(name, "Username est vide");
  }
  else if (regexName.test(nameValue) == false) {
    // console.log("format invalid");
  setError(name, "format invalid");
} else {
    // console.log(`username est valid`);
    setSuccess(name, "Username est valid");
  }

  
  if (emailValue === "") {
    // console.log(`password est insufusante : ${emailValue}`);
    setError(email, "email est vide");
  } else if (regexEmail.test(emailValue) == false) {
    // console.log(`password est insufusante : ${emailValue}`);
    setError(email, "format email is not valid");
  } else {
    setSuccess(email, "email est valid");
  }

  if (phoneValue === "") {
    // console.log(`password est insufusante : ${phoneValue}`);
    setError(phone, "Phone est vide");
  } else if (regexPhone.test(phoneValue) == false) {
    // console.log(`password est insufusante : ${phoneValue}`);
    setError(phone, "format phone value is not valid");
  } else {
    // console.log('fdsjnfd') ;
    setSuccess(phone, "phone format est valid");
  }

  if (adressValue === "") {
    // console.log(`password est insufusante : ${adressValue}`);
    setError(adress, "adress est vide");
  } else if (regexAdress.test(adressValue) == false) {
    // console.log(`adress est insufusante : ${adressValue}`);
    setError(adress, "format adress is not valid.");
  } else {
    // console.log('fdsjnfd') ;
    setSuccess(adress, "adress est valid");
  }
 
};