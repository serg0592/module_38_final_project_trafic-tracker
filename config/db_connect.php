<?php
    $db_host = 'localhost';
    $db_log = 'homestead';
    $db_pas = 'secret';
    $db_name = 'SF_AdTech';

    $link = mysqli_connect($db_host, $db_log, $db_pas);

    mysqli_select_db($link, $db_name);
    if (!$link || !mysqli_select_db($link, $db_name)) {
        exit(mysqli_error(0));
    };
?>