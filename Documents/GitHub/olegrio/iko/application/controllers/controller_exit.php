<?php
/**
 * Created by PhpStorm.
 * User: olegfomicev
 * Date: 20.03.2018
 * Time: 20:21
 */

class Controller_Exit extends Controller
{
    function action_index()
    {
        $this->view->generate('exit_view.php', 'template_view.php');

    }

}



unset($_COOKIE['user_id']);
unset($_COOKIE['username']);
setcookie('user_id', '', -1, '/');
setcookie('username', '', -1, '/');
$home_url = 'http://' . $_SERVER['HTTP_HOST'];
header('Location: ' . $home_url);