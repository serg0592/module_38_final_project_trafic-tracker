<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>SF_AdTech</title>
    </head>
    <body class="body">
        <!-- navigation -->
        <nav class="navbar navbar-expand-lg fixed-top ">
            <a class="navbar-brand" href="#">На главную</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-menu-collapse" aria-expanded="false" aria-controls="nav-menu-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav-menu-collapse">
                <ul class="navbar-nav mr-4">            
                    <li class="nav-item"><a class="nav-link" href="#about">О проекте</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact-form">Контакт</a></li>
                    <li class="nav-item"><a class="nav-link auth" href="#authorization">Войти</a></li>
                    <li class="nav-item"><a class="nav-link reg" href="#registration">Регистрация</a></li>
                </ul>
            </div>
        </nav>
        <header class="header">
            <div class="overlay fixed">

                <!-- greating -->

                <div class="container">
                    <div class="greating text-left">
                        <h3>
                            <font color="#f97300">
                                Привет, добро пожаловать на мой финальный проект!
                                <p><br>
                                    надеюсь, вы оцените данное приложение, ведь я приложил не мало усилий,
                                    чтобы всё выглядело хорошо и функционировало правильно :-)
                                </p>
                                <a href="#about"><button class="btn btn-outline-secondary">Далее</button></a>
                            </font>
                        </h3>
                    </div>
                </div>
            </div>
        </header>
        <main class="main">

            <!-- about -->

            <a name="about"></a>
            <div class="container">
                <div class="about text-left">
                    <h3><font color="#f97300">Итак, было сделано:</font></h3>
                    <br>
                    <p>
                        "здесь описание выполненых требований"
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
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" placeholder="YourEmail@email.com" name="email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control form-control-lg"></textarea>
                                </div>
                                <input type="submit" class="btn btn-secondary btn-block" value="Send" name="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- authorization -->

            <div class="auth_shell">
            <?php
                    //если есть авторизованный пользователь, то подгружаем страницу для него,
                    //иначе главную страницу
                    if (isset($authUserData_view)) {
                        include $authUserData_view;
                    } elseif ($content_view == 'main_view.php') {
                        include $content_view;
                    }
                ?>
            </div>

            <!-- digital content area -->
            <?php
                //подгружаем содержимое страницы
                if ($content_view !== 'main_view.php') {
                    include $content_view;
                }
            ?>

            <!-- message area -->
            
            <!--<div class="msgarea">
                <form method="post" action="">
                    <textarea name="msgText" rows="10" cols="50"></textarea>
                    <input type="submit" name="sendMsg" value="Отправить сообщение">
                </form>
            </div>-->
        </main>
        <footer>
        </footer>
        <!-- JQuery -->
        <!-- Bootstrap Bundle Popper -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- JS -->
        <script type="text/javascript" src='js/script.js'></script>
    </body>
</html>