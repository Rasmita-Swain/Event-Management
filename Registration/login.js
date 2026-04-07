const loginContainer = document.querySelector('.login-container');
const registerBtn = document.querySelector('.register-btn');
const loginBtn =  document.querySelector('.login-btn');

registerBtn.addEventListener('click', () => {
    loginContainer.classList.add('active');
});
loginBtn.addEventListener('click', () => {
    loginContainer.classList.remove('active');
});