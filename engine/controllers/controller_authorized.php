<?php
    class Controller_Authorized extends Controller {
        function __construct() {
            $this->model = new Model_Authorized();
            $this->view = new View();
        }

        function action_authorized() {
            $this->view->generateAuth('authorizedContent_view.php', 'template_view.php', 'authorizedUserMenuDD_view.php');
        }
    }
?>