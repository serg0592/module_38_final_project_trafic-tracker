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