<?php
class Controller_CheckUser extends Controller { 
    function __construct() {
        $this->model = new Model_CheckUser();
        $this->view = new View();        
    }

    function action_checkUser() {
        $this->model->checkUser();
    }
}
?>