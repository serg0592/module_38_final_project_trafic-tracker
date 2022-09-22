<?php
class Controller_Registration extends Controller { 
    function __construct() {
        $this->model = new Model_Registration();
        $this->view = new View();
        
    }

    //метод регистрации нового пользователя
    function action_registration() { 
        $this->model->userReg();
    }

    //страница с сообщением об успешной регистрации
    function action_regSuccess() {
        $this->view->generate('regSuccess_view.php', 'template_view.php');
    }
}
?>