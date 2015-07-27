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

    /**
     * @route /price
     */
    function priceAction()
    {
        $color = $this->getRequest()->getRequestParameter('color');
        $type = $this->getRequest()->getRequestParameter('type');

        $price = Price::find(['typeId' => $type, 'colorId' => $color]);

        return $price->price->get();
    }

}