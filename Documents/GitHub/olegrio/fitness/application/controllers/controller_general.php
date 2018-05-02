<?php
/**
 * Created by PhpStorm.
 * User: olegfomicev
 * Date: 12.03.2018
 * Time: 12:52
 */

class Controller_General extends Controller
{
    function action_index()
    {
        $this->view->generate('general_view.php', 'template_view.php');

    }

}

