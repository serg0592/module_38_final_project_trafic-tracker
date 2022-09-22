//задать размеры overlay
document.querySelector('.header').setAttribute(`style`, `width:${window.innerWidth}px`);
document.querySelector('.header').setAttribute(`style`, `height:${window.innerHeight}px`);

debugger;

//сравнение полей с паролем при регистрации
const password = document.forms['reg-form'].elements['password'];
const passwordDouble = document.forms['reg-form'].elements['passwordDouble'];

passwordDouble.oninput = function() {
    if (password.value !== passwordDouble.value) {
        password.style.border = '2px solid rgb(255, 0, 0)';
        passwordDouble.style.border = '2px solid rgb(255, 0, 0)';
    } else {
        password.style.border = '2px solid rgb(0, 255, 0)';
        passwordDouble.style.border = '2px solid rgb(0, 255, 0)';
    };
}