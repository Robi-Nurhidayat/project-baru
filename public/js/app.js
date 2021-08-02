// validasi form register
var passCheck = document.querySelector('#password');
var passCheck2 = document.querySelector('#confirmpassword');
const signUpBtn = document.querySelector('#signUp-btn');
let errorMessage = document.querySelector('.pesan-kesalahan');

signUpBtn.addEventListener("click", function () {
    if (passCheck.value !== passCheck2.value) {
        errorMessage.style.display = "contents";
    } else {
        errorMessage.style.display = "none";
    }
})
