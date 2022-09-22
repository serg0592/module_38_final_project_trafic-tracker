<?php
    class Controller_Authorized extends Controller {
        function __construct() {
            $this->model = new Model_Authorized();
            $this->view = new View();
        }

        function action_authorized() {
            session_start();
            switch($_SESSION['role']) {
                case 'administrator':
                    $navigation = 'adminNav_view.php';
                    $content = 'adminContent_view.php';
                break;
                case 'offerMaker':
                    $navigation = 'offerMakerNav_view.php';
                    $content = 'offerMakerContent_view.php';
                break;
                case 'webMaster':
                    $navigation = 'webMasterNav_view.php';
                    $content = 'webMasterContent_view.php';
                break;
                case 'guest':
                    $navigation = 'mainNav_view.php';
                    $content = 'main_view.php';
                break;
            };
            $this->view->generateAuth($content, 'template_view.php', 
                                        'authorizedUserMenuDD_view.php', $navigation);
        }
    }
?>