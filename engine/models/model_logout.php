<?php
    class Model_LogOut extends Model {
        // скрипт разавторизации
        function logoutUser() {
            session_start();
            // Соединяемся с БД
            include '../config/db_connect.php';

            //проверяем наличие куки (хэш, id)
            if (isset($_COOKIE['auth_hash']) && isset($_COOKIE['id'])) {
                //удаляем хэш авторизации из БД

                mysqli_query(
                    $link, "UPDATE users 
                    SET auth_hash='".null."' WHERE id='".intval($_COOKIE['id'])."'"
                );

                // Удаляем куки
                setcookie("id", "", time() - 1, '/');
                setcookie("auth_hash", "", time() - 1, '/'); // httponly !!!

            //если нет куки, проверяем хэш в сессии (пользователь "не запоминал" себя)
            } elseif (isset($_SESSION['authHash'])) {
                //удаляем хэш авторизации из БД
                mysqli_query(
                    $link, "UPDATE users 
                    SET auth_hash='".null."' WHERE id='".intval($_SESSION['id'])."'"
                );
                //очищаем $_SESSION
                $_SESSION['id'] = null;
                $_SESSION['login'] = null;
                $_SESSION['password'] = null;
                $_SESSION['authHash'] = null;
                //удаляем куки сессии
                setcookie("PHPSESSID", '', time() - 3600, '/');

                session_destroy();
            };
            
            //Переходим на главную страницу
            header("Location: ?url=checkUser");
            exit();
        }
    }
?>