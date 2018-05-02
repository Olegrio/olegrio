<?php
/**
 * Created by PhpStorm.
 * User: olegfomicev
 * Date: 16.03.2018
 * Time: 11:37
 */



class Controller_Tovar extends Controller
{
    function action_index()
    {
        $this->view->generate('tovar_view.php', 'template_view.php');
    }
}
