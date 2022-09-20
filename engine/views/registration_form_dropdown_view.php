<!-- registration form dropdown -->

<li class="nav-item dropdown">
    <a class="nav-link reg" href="" data-bs-toggle="dropdown" aria-expanded="false">Регистрация</a>
    <ul class="dropdown-menu registration" wfd-invisible="true">
        <li>
            <form name="reg-form" method="POST" action="">
                <div class="reg_form_text">
                    <div class="log_text">Логин</div>
                    <div class="pas_text">Пароль</div>
                </div>
                <div class="reg_form_fields">
                    <input name="login" type="text" required> <br>
                    <input name="password" type="password" required> <br>
                </div> <br>
                <?php include '../config/token.php'; ?>
                <input type="hidden" name="token" value="<?php echo $token; ?>">
                <input name="registration" type="submit" value="Зарегистрироваться">
            </form>
        </li>
    </ul>
</li>

<!-- registration success modal -->

<div class="modal-body">
    <h2 class="fw-bold mb-0">Успешная регистрация!</h2>
    <a href="?url=check_user">
        <button type="button" class="btn btn-lg btn-primary mt-5 w-100 custom-btn submit-success-reg" data-bs-dismiss="modal">ОК</button>
    </a>
    <?php
        echo '<script language="javascript">';
        echo <<<END
            const regBtn = document.forms.reg-form.elements.registration;
            const regSuccessModal = document.querySelector('.modal-body');
            const submitReg = document.querySelector('.submit-success-reg');
            regBtn.addEventListener('click', function showModal() {
                regSuccessModal.classList.toggle('open');
            });
            submitReg.addEventListener('click', hideModal() {
                regSuccessModal.classList.toggle('open');
            });
        END;
        echo '</script>';
    ?>
</div>