<?php
/**
 * Created by PhpStorm.
 * User: olegfomicev
 * Date: 05.03.2018
 * Time: 11:00
 */

<?php

class Controller_404 extends Controller
{

    function action_index()
    {
        $this->view->generate('404_view.php', 'template_view.php');
    }

}
