<?php
/**
 * Created by PhpStorm.
 * User: olegfomicev
 * Date: 12.03.2018
 * Time: 21:48
 */

class Controller_Oproekte extends Controller
{
    function action_index()
    {
        $this->view->generate('oproekte_view.php', 'template_view.php');
    }
}
