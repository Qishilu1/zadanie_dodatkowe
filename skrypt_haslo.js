const passwordInput = document.getElementById("passwd");
const showPasswordCheckbox = document.getElementById("pokaz_haslo");

showPasswordCheckbox.addEventListener("change", () => {
    if (showPasswordCheckbox.checked) {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
});
