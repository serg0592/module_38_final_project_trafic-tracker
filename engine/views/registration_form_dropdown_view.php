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