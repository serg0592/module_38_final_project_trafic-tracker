document.querySelector('.header').setAttribute(`style`, `width:${window.innerWidth}px`);
document.querySelector('.header').setAttribute(`style`, `height:${window.innerHeight}px`);

const regBtn = document.forms.reg-form.elements.registration;
const regSuccessModal = document.querySelector('.modal-body');
const submitReg = document.querySelector('.submit-success-reg');
regBtn.addEventListener('click', function showModal() {
    regSuccessModal.classList.toggle('open');
});
submitReg.addEventListener('click', function hideModal() {
    regSuccessModal.classList.toggle('open');
});