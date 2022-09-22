<li class="nav-item"><a class="nav-link" href="#about">О проекте</a></li>
<li class="nav-item"><a class="nav-link" href="#contact-form">Контакт</a></li>

<!-- authorization form dropdown -->

<li class="nav-item dropdown">
    <a class="nav-link auth" href="" data-bs-toggle="dropdown" aria-expanded="false">Войти</a>
    <ul class="dropdown-menu authorization" wfd-invisible="true">
        <li>
            <form class="auth_form" method="POST" action="">
                <div class="auth_form_text">
                    <div class="log_text">Логин</div>
                    <div class="pas_text">Пароль</div>
                    <div class="checkbox_shell">
                        <input name="rememberUser" type="checkbox" value="remember">
                    </div>
                </div>
                <div class="auth_form_fields">
                    <input name="login" type="text" required> <br>
                    <input name="password" type="password" required> <br>
                    <div class="checkbox_text">Запомнить меня</div>
                </div> <br>
                <?php include '../config/token.php'; ?>
                <input type="hidden" name="token" value="<?php echo $token; ?>">
                <input name="authorization" type="submit" value="Авторизоваться">
            </form>
        </li>
    </ul>
</li>

<!-- registration form dropdown -->

<li class="nav-item dropdown">
    <a class="nav-link reg" href="" data-bs-toggle="dropdown" aria-expanded="false">Регистрация</a>
    <ul class="dropdown-menu registration" wfd-invisible="true">
        <li>
            <form name="reg-form" method="POST" action="">
                <div class="reg-form-text">
                    <div class="log_text">Логин</div>
                    <div class="pas_text">Пароль</div>
                    <div class="pas_text">Ещё раз</div>
                </div>
                <div class="reg-form-fields">
                    <input name="login" type="text" placeholder="Придумайте логин" required> <br>
                    <input class="" name="password" type="password" placeholder="Придумайте пароль" required> <br>
                    <input class="" name="passwordDouble" type="password" placeholder="Введите пароль ещё раз" required> <br>
                </div> <br>
                <?php include '../config/token.php'; ?>
                <input type="hidden" name="token" value="<?php echo $token; ?>">
                <input name="registration" type="submit" value="Зарегистрироваться">
            </form>
        </li>
    </ul>
</li>