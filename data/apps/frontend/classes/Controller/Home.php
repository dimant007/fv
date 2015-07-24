<?php

class Controller_Home extends fvController
{

    /**
     * @route /
     */
    function indexAction()
    {
        $this->view()->models = Model::findAll();
        $this->view()->types = Type::findAll();
        $this->view()->colors = Color::findAll();
    }

}