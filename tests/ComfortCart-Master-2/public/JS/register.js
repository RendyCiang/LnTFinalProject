const ShowPassword = document.querySelector("#show-pass");
const PasswordField = document.querySelector("#Password");

ShowPassword.addEventListener("click", function(){
    this.classList.toggle("show");
    this.classList.toggle("hide-pass", !this.classList.contains("show"));
    const type = PasswordField.getAttribute("type") === "password" ? "text" : "password";
    PasswordField.setAttribute("type", type);
})

function validateName() {
    let inputName = document.querySelector("#Name");
    let valueName = inputName.value;
    let errorName = document.querySelector("#error-name");
  
    if (valueName == "") {
        errorName.innerHTML = "Name must be filled";
        return false;
    } else {
        errorName.innerHTML = "";
        return true;
    }
}

function validateEmail() {
    let inputEmail = document.querySelector("#Email");
    let valueEmail = inputEmail.value;
    let errorEmail = document.querySelector("#error-email");
  
    if (valueEmail == "") {
        errorEmail.innerHTML = "Email must be filled";
        return false;
    } else if (!valueEmail.includes("@") || !valueEmail.includes(".")) {
        errorEmail.innerHTML = "The Email must consist ‘@’ and ‘.’";
        return false;
    } else {
        errorEmail.innerHTML = "";
        return true;
    }
}

function validateAdd() {
    let inputAdd = document.querySelector("#Address");
    let valueAdd = inputAdd.value;
    let errorAdd = document.querySelector("#error-address");
  
    if (valueAdd == "") {
        errorAdd.innerHTML = "Address must be filled";
        return false;
    } else if (valueAdd.length < 15 ){
        errorAdd.innerHTML = "The Address must consist at least 15 characters";
        return false;
    } else {
        errorAdd.innerHTML = "";
      return true;
    }
}

function onlyDigits(s) {
    for (let i = s.length - 1; i >= 0; i--) {
        const d = s.charCodeAt(i);
        if (d < 48 || d > 57) return false;
    }
    return true;
}

function validateNum() {
    let inputNum = document.querySelector("#Phone_Number");
    let valueNum = inputNum.value;
    let errorNum = document.querySelector("#error-num");
  
    if (valueNum == "") {
        errorNum.innerHTML = "Phone Number must be filled";
        return false;
    } else if (!onlyDigits(valueNum)) {
        errorNum.innerHTML = "The number must only consist an integer";
        return false;
    } else if (!valueNum.length >= 9 || !valueNum.length >= 12) {
        errorNum.innerHTML = "The number must consist 9 - 12 integer";
        return false;
    }
    else {
        errorNum.innerHTML = "";
        return true;
    }
}

function validateDOB() {
    let inputDOB = document.querySelector("#Day_of_Birth");
    let valueDOB = inputDOB.value;
    let errorDOB = document.querySelector("#error-birth");

    if(valueDOB == ""){
        errorDOB.innerHTML = "Date of Birth must be filled";
        return false;
    } else if (valueDOB.length < 8) {
        errorDOB.innerHTML = "The date of birth must consist at leastt 8 character";
        return false;
    } else {
        errorDOB.innerHTML = "";
        return true;
    }
}
  
function validatePass() {
    let inputPass = document.querySelector("#Password");
    let valuePass = inputPass.value;
    let errorPass = document.querySelector("#error-pass");

    const passPattern = 
        /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\d)(?=.*[#?!@$%^&*-.])[A-Za-z0-9\d#?!@$%^&*-.]{8,100}$/;
  
    if (valuePass == "") {
        errorPass.innerHTML = "Please enter your password";
        return false;
    } else if (!valuePass.match(passPattern)) {
        errorPass.innerHTML = "Password must consist at least 8 characters with capital letter, small letter, number, and symbol";
        return false;
    } else {
        errorPass.innerHTML = "";
        return true;
    }
}
  
let stepBtn = document.querySelector("#button");
  stepBtn.addEventListener("click", function (e) {
    e.preventDefault();
  
    let isNameValid = validateName();
    let isEmailValid = validateEmail();
    let isPassValid = validatePass();
    let isAddValid = validateAdd();
    let isNumValid = validateNum();
    let isDOBValid = validateDOB();
  
    if (
      isNameValid &&
      isPassValid &&
      isEmailValid &&
      isAddValid &&
      isNumValid &&
      isDOBValid

    ) {

      return true;
      
    } else {
        return false;
    }
});