<?php
    //присвоение прав пользователей
    session_start();
    switch ($_SESSION['role']) {
        case 'administrator':
            $canView = true;
            $canEdit = true;
            $canDelete = true;
            $canPush = true;
            $canSeeText = true;
            $canSeePic = true;
            break;
        case 'user':
            $canView = true;
            $canEdit = true;
            $canDelete = false;
            $canPush = true;
            $canSeeText = true;
            $canSeePic = false;
            break;
        case 'guest':
            $canView = true;
            $canEdit = false;
            $canDelete = false;
            $canPush = false;
            $canSeeText = true;
            $canSeePic = false;
            break;
    };

    //реализация прав пользователей
    if ($canView) {
        $btnStatus = 'disabled';
        $btnAddText = 'неактивной';
    };
    if ($canEdit) {
        $btnStatus = 'disabled';
        $btnAddText = 'неактивной';
    };
    if ($canDelete) {
        $btnStatus = '';
        $btnAddText = '';
    };
    if ($canPush) {
        $btnStatus = '';
        $btnAddText = '';
    };
    if ($canSeeText) {
        $viewPic = 'hidden';
    };
    if ($canSeePic) {
        $viewPic = 'visible';
    };
?>