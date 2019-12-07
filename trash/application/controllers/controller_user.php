<?php

class Controller_User extends Controller
{
    function action_register()
    {
        /** @var Model_Register $model */
        $model = new Model_Register();
        $model->username = isset($_POST['username']) ? $_POST['username'] : null;
        $model->email = isset($_POST['email']) ? $_POST['email'] : null;
        $model->password = isset($_POST['password']) ? $_POST['password'] : null;
        $model->register();
        $this->view->generate('register_view.php', 'template_view.php');
    }
}