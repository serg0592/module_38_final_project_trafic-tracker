<main class="main">
    
    <!-- registration success modal -->

    <div class="modal-body">
        <h2 class="fw-bold mb-0">Успешная регистрация!</h2>
        <a href="?url=check_user">
            <button type="button" class="btn btn-lg btn-primary mt-5 w-100 custom-btn submit-success-reg" data-bs-dismiss="modal">ОК</button>
        </a>
        <?php
            /*
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
            */
        ?>
    </div>

    <div class="overlay fixed">

        <!-- greating -->

        <div class="container">
            <div class="greating text-left">
                <h3>
                    <font color="#f97300">
                        Привет, добро пожаловать на мой финальный проект!
                        <p><br>
                            надеюсь, вы оцените данное приложение, ведь я делал так,
                            чтобы всё выглядело хорошо и функционировало правильно :-)
                        </p>
                        <a href="#about"><button class="btn btn-outline-secondary">Далее</button></a>
                    </font>
                </h3>
            </div>
        </div>
    </div>

    <!-- about -->

    <a name="about"></a>
    <div class="container">
        <div class="about text-left">
            <h3><font color="#f97300">Итак:</font></h3>
            <br>
            <p>
                "здесь описание работы приложения"
            </p>
        </div>
    </div>

    <!-- Contact form -->

    <div class="contact-form">
        <a name="contact-form"></a>
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <h1><font color="#f97300">Напишите мне!</font></h1> 
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 right">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Your Name" name="">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg" placeholder="YourEmail@email.com" name="email">
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea class="form-control form-control-lg"></textarea>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-secondary btn-block custom-btn" value="Send" name="">
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>