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
        <header class="header">

            <!-- navigation -->
            
            <nav class="navbar navbar-expand-md fixed-top" aria-label="navigation-expand">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">SF-AdTech</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-menu-collapse" aria-controls="nav-menu-collapse" aria-expanded="false" aria-label="Toggle navigation" wfd-invisible="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem" fill="#a67300" class="bi bi-card-list" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                            <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                        </svg>
                    </button>
                    <div class="collapse navbar-collapse" id="nav-menu-collapse">
                        <ul class="navbar-nav mr-4">
                            <li class="nav-item"><a class="nav-link" href="#about">О проекте</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact-form">Контакт</a></li>
                            <!-- проверим наличие авторизованного пользователя -->
                            <?php
                                //если есть авторизованный пользователь, то подгружаем меню для него,
                                //иначе форму авторизации и регистрации
                                if (isset($authUserMenu_view)) {
                                    include $authUserMenu_view;
                                } else {
                                    include '../engine/views/authorization_form_dropdown_view.php';
                                    include '../engine/views/registration_form_dropdown_view.php';
                                };
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- digital content area -->

        <?php
            //подгружаем контент для пользователя
            include $content_view;
        ?>
        <footer>

        </footer>
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <!-- Bootstrap Bundle Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- JS -->
        <script type="text/javascript" src='js/script.js'></script>
    </body>
</html>