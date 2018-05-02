<?php
/**
 * Created by PhpStorm.
 * User: olegfomicev
 * Date: 05.03.2018
 * Time: 10:39
 */


class Controller {

    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {
    }
}