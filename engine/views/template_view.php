<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <title>SF_AdTech</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top ">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-4">            
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <header class="header">
            <div class="overlay fixed">
                <div class="container">
                    <div class="description text-center">
                        <h3>
                            <font color="#f97300">
                                Hello ,Welcome To My officail Website
                                <p>
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <button class="btn btn-outline-secondary">See more</button>
                            </font>
                        </h3>
                    </div>
                </div>
            </div>
            <!--<div class="auth_shell">
                <?php
                    /*//если есть авторизованный пользователь, то подгружаем страницу для него,
                    //иначе главную страницу
                    if (isset($authUserData_view)) {
                        include $authUserData_view;
                    } elseif ($content_view == 'main_view.php') {
                        include $content_view;
                    }*/
                ?>
            </div>-->
        </header>
        <!--<main class="main">
            <?php
                /*//подгружаем содержимое страницы
                if ($content_view !== 'main_view.php') {
                    include $content_view;
                }*/
            ?>
            <div class="msgarea">
                <form method="post" action="">
                    <textarea name="msgText" rows="10" cols="50"></textarea>
                    <input type="submit" name="sendMsg" value="Отправить сообщение">
                </form>
            </div>
        </main>-->
        <footer>
        </footer>
        <!-- JS -->
        <script type="text/javascript" src='js/script.js'></script>
    </body>
</html>