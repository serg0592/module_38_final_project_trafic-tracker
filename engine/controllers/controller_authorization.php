<?php
    class Controller_Authorization extends controller {
        function __construct() {
            $this->view = new View();
            $this->model = new Model_Authorization();
        }

        function action_authorization() {
            $this->model->userAuthorization();
        }
    }
?>