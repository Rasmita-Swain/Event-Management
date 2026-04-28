const loginContainer = document.querySelector('.login-container');
const registerBtn = document.querySelector('.register-btn');
const loginBtn =  document.querySelector('.login-btn');

registerBtn.addEventListener('click', () => {
    loginContainer.classList.add('active');
});
loginBtn.addEventListener('click', () => {
    loginContainer.classList.remove('active');
});

/*function goBack() {
  window.location.href = "../index.html"; // adjust path if needed
}*/

const params = new URLSearchParams(window.location.search);

if (params.get("success") === "1") {
    alert("Registered successfully! Please login.");
}