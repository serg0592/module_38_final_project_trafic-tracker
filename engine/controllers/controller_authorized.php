<?php
    class Controller_Authorized extends Controller {
        function __construct() {
            $this->model = new Model_Authorized();
            $this->view = new View();
        }

        function action_authorized() {
            $this->view->generateAuth('authorized_content_view.php', 'template_view.php', 'authorized_user_menu_dropdown_view.php');
        }
    }
?>