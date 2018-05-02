<?php
/**
 * Created by PhpStorm.
 * User: olegfomicev
 * Date: 12.03.2018
 * Time: 21:49
 */

class Controller_Kategorii extends Controller
{
    function action_index()
    {
        $this->view->generate('kategorii_view.php', 'template_view.php');
    }
}
