//debugger;

//задать размеры header
document.querySelector('.header').style.width = `${window.innerWidth}px`;
document.querySelector('.header').style.height = `${window.innerHeight}px`;

if (document.querySelector('#admin')) {
    document.querySelector('.header').style.backgroundImage = "URL('../img/adminback.jpg')";
} else if (document.querySelector('#offerMaker')) {
    document.querySelector('.header').setAttribute(`style`, `height: 0px`);
} else if (document.querySelector('#webMaster')) {
    document.querySelector('.header').setAttribute(`style`, `height: 0px`);
};

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