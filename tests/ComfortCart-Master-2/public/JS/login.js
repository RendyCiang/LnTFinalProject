const ShowPassword = document.querySelector("#show-pass");
const PasswordField = document.querySelector("#Password");

ShowPassword.addEventListener("click", function(){
    this.classList.toggle("show");
    this.classList.toggle("hide-pass", !this.classList.contains("show"));
    const type = PasswordField.getAttribute("type") === "password" ? "text" : "password";
    PasswordField.setAttribute("type", type);
})

function validateEmail() {
    let inputEmail = document.querySelector("#Email");
    let valueEmail = inputEmail.value;
    let errorEmail = document.querySelector("#error-email");

    if(valueEmail == ""){
        errorEmail.innerHTML = "Email must be filled";
        return false;
    } else {
        errorEmail.innerHTML = "";
        return true;
    }
}

function validatePass() {
    let inputPass = document.querySelector("#Password");
    let valuePass = inputPass.value;
    let errorPass = document.querySelector("#error-pass");

    if(valuePass == "") {
        errorPass.innerHTML = "Password must be filled";
        return false;
    } else {
        errorPass.innerHTML = "";
        return true;
    }
}

let stepBtn = document.querySelector("#button");
  stepBtn.addEventListener("click", function (e) {
    e.preventDefault();
  
    let isEmailValid = validateEmail();
    let isPassValid = validatePass();
  
    if (
      isPassValid &&
      isEmailValid

    ) {

      return true;
      
    } else {
        return false;
    }
});