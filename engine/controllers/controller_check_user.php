<?php
class Controller_Check_user extends Controller { 
    function __construct() {
        $this->model = new Model_Check_user();
        $this->view = new View();        
    }

    function action_check_user() {
        $this->model->checkUser();
    }
}
?>